<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\Ticket;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Film;
use App\Models\Film;


class thanhtoanController extends Controller
{
    //
        public function returnUrl(Request $req){


            $maLoi =$req->vnp_ResponseCode;

            // bill: chua thanh toan -> da thanh toan
            if($maLoi == "00"){
                $bills = Bill::where('id', $req->id)->update([
                    'trangthai' => "đã thanh toán",
                ]);

                // $film = Film::where('trangthai','1')-> orderBy('films.id',)->get();
                return redirect()->back();

                $film = Film::where('trangthai','1')-> orderBy('films.id',)->get();
                // return redirect()->route('/');

                // return view('user.phimdangchieu')->with('phim',$film);
            }
            else{
                $tick = Ticket::join('bills','bills.id','=','tickets.bill_id')->where('bills.id',$req->id)->update([
                    'bill_id' => null,
                ]);
                $bill = Bill::where('id',$req->id)->delete();
                return redirect()->back();
            }

        }

        public function vnpay_payment(Request $req){


            if($req->ghe == null){
                $message = 'Vui lòng chọn ghế trước khi thanh toán';
                return redirect()->back()->with('message', $message);
            }

            //lay ngay hien tai
            $ngay = Carbon::now('Asia/Ho_Chi_Minh');
            $fomat = Carbon::parse($ngay)->format('Y-m-d');

            // dd($req->ghe[0]); //id chair

            // so luong ghe
            $slGhe = count($req->ghe);
            // dd($slGhe);

            //kiem tra ma~ veri khong trung
            do {
                $randomString = Str::random(8);
            } while (Bill::where('veri', $randomString)->exists());
            // $tt=Auth::user()->id;
            // dd($tt);
            // tao hoa don
            $bill = Bill::create([
                'kh_id'=> Auth::user()->id, // mot' truyen vao id khi dang nhap
                'ngaylap'=>$fomat,
                'veri'=> $randomString,
                'trangthai' => 'chưa thanh toán',
            ]);
            //lay id bill moi nhat
            $latestId = Bill::latest()->first()->id;

            //luu ve
            for($i = 0; $i < $slGhe; $i++){
                $dsGhe[] = $req->ghe[$i];
            }

            $tickets = Ticket::whereIn('chair_id', $dsGhe)->update([
                'bill_id'=> $latestId,
            ]);



        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/thanhtoan/". $latestId ; // thanh toan thanh` cong tra ve trang nay
        $vnp_TmnCode = "Z30NK7GB";//Mã website tại VNPAY
        $vnp_HashSecret = "DCHWIEYDMSGMXGEQHSXBCNHXEIYBRRMY"; //Chuỗi bí mật

        // $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_TxnRef = $randomString;

        // $vnp_OrderInfo = $_POST['order_desc'];
        $vnp_OrderInfo = 'thong tin don hang';

        // $vnp_OrderType = $_POST['order_type'];
        $vnp_OrderType = 'billpayment';

        $vnp_Amount = $_POST['total'] * 100; // total lay ben view
        // $vnp_Amount = 20000 * 100;

        // $vnp_Locale = $_POST['language'];
        $vnp_Locale = 'vn';

        // $vnp_BankCode = $_POST['bank_code'];
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing

        // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
        // $vnp_Bill_Email = $_POST['txt_billing_email'];
        // $fullName = trim($_POST['txt_billing_fullname']);
        // if (isset($fullName) && trim($fullName) != '') {
        //     $name = explode(' ', $fullName);
        //     $vnp_Bill_FirstName = array_shift($name);
        //     $vnp_Bill_LastName = array_pop($name);
        // }
        // $vnp_Bill_Address=$_POST['txt_inv_addr1'];
        // $vnp_Bill_City=$_POST['txt_bill_city'];
        // $vnp_Bill_Country=$_POST['txt_bill_country'];
        // $vnp_Bill_State=$_POST['txt_bill_state'];
        // // Invoice
        // $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
        // $vnp_Inv_Email=$_POST['txt_inv_email'];
        // $vnp_Inv_Customer=$_POST['txt_inv_customer'];
        // $vnp_Inv_Address=$_POST['txt_inv_addr1'];
        // $vnp_Inv_Company=$_POST['txt_inv_company'];
        // $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
        // $vnp_Inv_Type=$_POST['cbo_inv_type'];
        $createDate = Carbon::parse($ngay)->format('YmdHis');
        $expireDate = Carbon::parse($ngay->addMinutes(5))->format('YmdHis');
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => $createDate,
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate"=>$expireDate
            // "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
            // "vnp_Bill_Email"=>$vnp_Bill_Email,
            // "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
            // "vnp_Bill_LastName"=>$vnp_Bill_LastName,
            // "vnp_Bill_Address"=>$vnp_Bill_Address,
            // "vnp_Bill_City"=>$vnp_Bill_City,
            // "vnp_Bill_Country"=>$vnp_Bill_Country,
            // "vnp_Inv_Phone"=>$vnp_Inv_Phone,
            // "vnp_Inv_Email"=>$vnp_Inv_Email,
            // "vnp_Inv_Customer"=>$vnp_Inv_Customer,
            // "vnp_Inv_Address"=>$vnp_Inv_Address,
            // "vnp_Inv_Company"=>$vnp_Inv_Company,
            // "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
            // "vnp_Inv_Type"=>$vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;

        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {

                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }

            }
}
