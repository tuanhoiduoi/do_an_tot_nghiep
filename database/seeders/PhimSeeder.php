<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('phim')->insert([
            [
                'tenphim' => 'FAST AND FURIOUS X',
                'hinh' => '1',
                'noidung' => 'Dom Toretto và gia đình của anh ấy bị trở thành mục tiêu của người con trai đầy thù hận của ông trùm ma túy Hernan Reyes',
                'thoiluong' => 141,
                'daodien' => 'Louis Leterrier',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'NÀNG TIÊN CÁ',
                'hinh' => '2',
                'noidung' => '“Nàng Tiên Cá” là câu chuyện được yêu thích về Ariel - một nàng tiên cá trẻ xinh đẹp và mạnh mẽ với khát khao phiêu lưu. Ariel là con gái út của Vua Triton và cũng là người ngang ngạnh nhất, nàng khao khát khám phá về thế giới bên kia đại dương. Trong một lần ghé thăm đất liền, nàng đã phải lòng Hoàng tử Eric bảnh bao. Trong khi tiên cá bị cấm tiếp xúc với con người, Ariel đã làm theo trái tim mình. Nàng đã thỏa thuận với phù thủy biển Ursula hung ác để cơ hội sống cuộc sống trên đất liền. Nhưng cuối cùng việc này lại đe dọa tới mạng sống của Ariel và vương miện của cha nàng.',
                'thoiluong' => 150,
                'daodien' => 'Rob Marshall',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'LẬT MẶT 6: TẤM VÉ ĐỊNH MỆNH',
                'hinh' => '3',
                'noidung' => 'Lật mặt 6 sẽ thuộc thể loại giật gân, tâm lý pha hành động, hài hước.',
                'thoiluong' => 132,
                'daodien' => 'Lý Hải',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'VỆ BINH DẢI NGÂN HÀ 3',
                'hinh' => '4',
                'noidung' => 'Cho dù vũ trụ này có bao la đến đâu, các Vệ Binh của chúng ta cũng không thể trốn chạy mãi mãi. Vệ Binh Dải Ngân Hà 3 dự kiến khởi chiếu tại rạp từ 03.05.2023.',
                'thoiluong' => 149,
                'daodien' => 'James Gunn',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'NHỮNG KẺ THAO TÚNG',
                'hinh' => '5',
                'noidung' => 'Phim theo chân thám tử Daniel Rourke (Ben Affleck) trong hành trình tìm kiếm cô con gái bị mất tích. Anh sớm nhận ra tất cả những chuyện bí ẩn này đều liên quan đến một người đàn ông có sức mạnh thôi miên, bẻ cong thực tại. Với sự hỗ trợ từ nhà ngoại cảm Diana Cruz (Alice Braga), Daniel bắt đầu truy đuổi hắn và phải tìm mọi cách để đưa con gái mình trở về nhà an toàn.',
                'thoiluong' => 93,
                'daodien' => 'Robert Rodriguez',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'SISU - GIÀ GÂN BÁO THÙ',
                'hinh' => '6',
                'noidung' => 'Lấy bối cảnh năm 1944, SISU kể câu chuyện về một cựu binh phát hiện ra mỏ vàng trong vùng hoang dã của Phần Lan. Trên đường vào thành phố bán vàng, những tên lính Phát Xít tàn bạo đang thực hiện nhiệm vụ tàn phá khắp nơi đã phát hiện ra kho báu và cướp lấy nó từ tay anh ta. Cựu binh quyết tâm đòi lại tất cả, từ nợ cho đến thù, thậm chí nếu điều đó có nghĩa là giết hết tất cả lính Phát Xít.',
                'thoiluong' => 90,
                'daodien' => 'Jalmari Helander',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'QUÁI VẬT ĐEN',
                'hinh' => '7',
                'noidung' => 'Quái Vật Đen xoay quanh câu chuyện khi kỳ nghỉ bình dị của gia đình Oilman Paul Sturges biến thành cơn ác mộng. Bởi họ đã gặp phải một con cá mập Megalodon hung dữ, không từ bất kỳ khoảnh khắc nào để bảo vệ lãnh thổ của mình. Bị mắc kẹt và tấn công liên tục, Paul và gia đình của mình phải tìm cách để an toàn sống sót trở về bờ trước khi con cá mập khát máu này tấn công lần nữa',
                'thoiluong' => 100,
                'daodien' => 'Adrian Grunberg',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'CƠN THỊNH NỘ TỪ CÕI ÂM',
                'hinh' => '8',
                'noidung' => 'Câu chuyện bắt đầu khi Elly được gia đình của một người bạn nhờ chăm sóc một người phụ nữ lớn tuổi sống trong một căn nhà gỗ hẻo lánh trong vài ngày. Nhận lời đồng ý, nhưng sau đó Elly phát hiện ra sự xuất hiện của một con quỷ đang ẩn náu trong người phụ nữ chỉ chực chờ để thoát ra. Cùng lúc đó, những bí ẩn về cái chết của mẹ cô dần dần được gợi mở bởi những cơn ác mộng mà Elly phải trải qua.',
                'thoiluong' => 95,
                'daodien' => 'Kevin Lewis',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'REBOUND BẬT BẢNG',
                'hinh' => '9',
                'noidung' => 'Hành trình kỳ diệu gây chấn động nền bóng rổ trung học vào năm 2012, một người thầy nghiệp dư dẫn dắt 6 cậu học trò tạo nên kỳ tích trong 8 ngày thi đấu liên tục.',
                'thoiluong' => 122,
                'daodien' => 'Hang-jun Jang',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'CHEBI: GẤU TAI TO ĐÁNG YÊU',
                'hinh' => '10',
                'noidung' => 'Chú gấu Chebi - một sinh vật nhỏ, màu nâu, có đôi tai khổng lồ và đôi mắt to với sở thích ăn cam. Trên chuyến phiêu lưu đi khắp đó đây của mình, Chebi đáng yêu đã gặp được ông già Gena, người đang sống một mình và có mối quan hệ không tốt với cô con gái. Sau khi được ông Gena nhận nuôi, Chebi đã đồng hành cùng ông như một người bạn thân và giúp ông hàn gắn mối quan hệ với con gái.',
                'thoiluong' => 113,
                'daodien' => 'Dmitriy Dyachenko',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'CON NHÓT MÓT CHỒNG',
                'hinh' => '11',
                'noidung' => 'Lấy cảm hứng từ web drama Chuyện Xóm Tui, phiên bản điện ảnh sẽ mang một màu sắc hoàn toàn khác: hài hước hơn, gần gũi và nhiều cảm xúc hơn Bộ phim là câu chuyện của Nhót - người phụ nữ “chưa kịp già” đã sắp bị mãn kinh, vội vàng đi tìm chồng. Nhưng sâu thẳm trong cô, là khao khát muốn có một đứa con và luôn muốn hàn gắn với người cha suốt ngày say xỉn của mình.',
                'thoiluong' => 112,
                'daodien' => 'Vũ Ngọc Đãng',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'CHÀNG TRAI XINH ĐẸP CỦA TÔI: ĐỜI ĐỜI KIẾP KIẾP',
                'hinh' => '12',
                'noidung' => 'Chuyển thể từ nguyên tác cùng tên trong seri BL light novel của tác giả Nagira Yuu, Chàng Trai Xinh Đẹp Của Tôi nhận được nhiều sự mong đợi của người hâm mộ khi tái xuất với bản điện ảnh My Beautiful Man: Eternal (tên tiếng việt: Chàng Trai Xinh Đẹp Của Tôi: Đời Đời Kiếp Kiếp). Phim kể về mối tình tuyệt đẹp thời học sinh của hai chàng trai Hira và Kiyoi So. Hira vốn là một chàng trai hướng nội lại có tật nói lắp nên đã bị bạn bè bắt nạt. Ngay lúc ấy chàng trai Kiyoi So điển trai đã giúp Hira thoát khỏi cảnh bị bắt nạt. Dần dần cả hai nảy sinh tình cảm và đồng hành cùng nhau suốt những năm tháng thanh xuân. Với bản điện ảnh, người hâm mộ sẽ được theo dõi câu chuyện tiếp nối của bản truyền hình, hứa hẹn sẽ nhẹ nhàng, tươi sáng và đáng yêu. Phim sẽ khởi chiếu tại rạp vào 05.05.2023.',
                'thoiluong' => 103,
                'daodien' => 'Sakai Mai',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'NGƯỜI NHỆN: DU HÀNH VŨ TRỤ NHỆN',
                'hinh' => '13',
                'noidung' => 'Vô số Spider-Man từ khắp các vũ trụ đang đối đầu nhau?! Xem ngay Official Trailer của SPIDER-MAN: ACROSS THE SPIDER-VERSE. Khởi chiếu tại rạp 02.06.2023',
                'thoiluong' => 123,
                'daodien' => 'Joaquim Dos Santos, Justin K. Thompson, Kemp Powers',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'MÈO SIÊU QUẬY Ở VIỆN BẢO TÀNG',
                'hinh' => '14',
                'noidung' => 'Câu chuyện xoay quanh tình bạn của chú mèo Vincent và chú chuột Maurice. Vincent vừa nhận được công việc bảo vệ kiệt tác tranh Mona Lisa trong một viện bảo tàng, còn Maurice lại có niềm đam mê gặm nhấm bức tranh này. Mọi chuyện phức tạp hơn khi có người cũng đang nung nấu ý định cướp lấy tuyệt tác Mona Lisa. Liệu Vincent và đồng đội của mình có thể cứu lấy những kiệt tác của Davinci và bảo vệ danh cho bảo tàng không?',
                'thoiluong' => 80,
                'daodien' => 'Vasiliy Rovenskiy',
                'trangthai' => 1,
            ],
            [
                'tenphim' => 'TRẠM TÀU MA',
                'hinh' => '15',
                'noidung' => 'Lời đồn ma ám về nhà ga Oksu ngày càng nhiều khi những vụ án kinh hoàng liên tục xảy ra. Một đường ray cũ kỹ, một chiếc giếng bỏ hoang, những con số gây ám ảnh hay những vết thương kỳ dị trên thi thể người xấu số... Tất cả dẫn đến một bí mật đau lòng bị chôn vùi nhiều năm trước.',
                'thoiluong' => 80,
                'daodien' => 'Jeong Yong Ki',
                'trangthai' => 1,
            ],
        ]);
    }
}
