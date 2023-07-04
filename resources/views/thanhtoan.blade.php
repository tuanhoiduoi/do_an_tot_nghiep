<form action="{{url('/vnpay_payment')}}" method="POST">
    @csrf
    <button type="submit" name="redirect" class="btn btn-default check_out" value="">Thanh toán</button>
</form>
