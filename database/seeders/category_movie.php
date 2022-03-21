<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_category_movie')->insert([
            ['category_name' 	      => 'Lật Mặt: 48h', #1
            'category_time'         => '00:01:50',
            'category_old'		=> 18,
            'category_date'         => '2021-04-16',
            'category_country'	=> 'Việt Nam',
            'category_directors'    => 'Lý Hải',
            'category_cast'		=> 'Võ Thành Tâm, Mạc Văn Khoa, Huỳnh Đông, Ốc Thanh Vân...',
            'category_img'		=> '/public/frontend/images/latmat.jpg',
            'category_desc'		=> 'Lý Hải trở lại với dòng phim hành động sở trường của mình. Bối cảnh hoành tráng với sự đầu tư nghiêm túc, siêu phẩm hành động Việt Lật Mặt 48h sẽ kể về một hành trình trốn chạy đầy kịch tính, nghẹt thở đến phút cuối cùng.',
            'movie_genre'		=> '2',
            'movie_format'		=> '1',
            'category_price'        => 70000,
            'category_status'       => 1,
            'created_at'		=> now(),
            'updated_at'		=> now()],

            ['category_name'    => 'Bàn Tay Diệt Quỷ', #2
            'category_time'     => '00:02:08',
            'category_old'      => 18,
            'category_date'     => '2021-04-09',
            'category_country'  => 'Hàn Quốc',
            'category_directors'=> 'Kim Joo-hwan',
            'category_cast'     => 'Park Seo-joon, Ahn Sung-ki, Woo Do-hwan, Choi Woo-sik...',
            'category_img'      => '/public/frontend/images/bantaydietquy.jpg',
            'category_desc'     => 'Sau khi bản thân bỗng nhiên sở hữu "Bàn tay diệt quỷ", võ sĩ MMA Yoong-hoo (Park Seo-joon thủ vai) đã dấn thân vào hành trình trừ tà, trục quỷ đối đầu với Giám Mục Bóng Tối (Woo Do-hwan) - tên quỷ Satan đột lốt người. Từ đó sự thật về cái chết của cha Yong-hoo cũng dần được hé lộ cũng như nguyên nhân anh trở thành "người được chọn".',
            'movie_genre'       => '2',
            'movie_format'      => '6',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Cục Nợ Hóa Cục Cưng', #3
            'category_time'     => '00:01:53',
            'category_old'      => 0,
            'category_date'     => '2020-10-09',
            'category_country'  => 'Hàn Quốc',
            'category_directors'=> 'Kang Dae-kyu',
            'category_cast'     => 'Sung Doong-il, Ha Ji-won, Kim Hie-won, Park Soi...',
            'category_img'      => '/public/frontend/images/cucnohoacuccung.jpg',
            'category_desc'     => 'Du-seok (Sung Dong-il) và Jong-bae (Kim Hie-won) là hai gã chuyên đòi nợ thuê có máu mặt. Để uy hiếp một con nợ, cả hai đã bắt Seung-yi (Park Soi) - một bé gái 9 tuổi làm vật thế chấp cho số nợ của mẹ cô bé. Tuy nhiên, mẹ của Seung-yi lại bị trục xuất về nước, và hai ông chú đành nhận trách nhiệm trông chừng Seung-yi đến khi cô bé được một gia đình giàu có nhận nuôi. Khi phát hiện ra Seung-yi nhỏ bé bị bán đi làm công cho một bà chủ vô trách nhiệm, Du-seok đã tìm đến để chuộc lại cô bé. Mặc dù Seung-yi vốn là "cục nợ" Du-seok và Jong-bae không hề mong muốn, cô bé dần trở thành cục cưng yêu quý và cả 3 sống bên nhau như một gia đình. (CHIẾU LẠI từ 5/5/21)',
            'movie_genre'       => '9',
            'movie_format'      => '6',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Điệp Viên Siêu Lầy', #4
            'category_time'     => '00:01:41',
            'category_old'      => 16,
            'category_date'     => '2020-08-14',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Peter Segal',
            'category_cast'     => 'Dave Bautista, Chloe Coleman, Kristen Schaal, Ken Jeongs...',
            'category_img'      => '/public/frontend/images/diepviensieulay.jpg',
            'category_desc'     => 'Jason Jones, hay còn gọi là JJ (Dave Bautista) – một điệp viên CIA dày dạn kinh nghiệm. Trong một lần thực địa, JJ bị cô bé 9 tuổi Sophie (Chloe Coleman) phát hiện và uy hiếp anh phải “gia sư” môn điệp viên cho mình nếu không muốn cả thế giới biết thân phận thực sự của anh. Mắc kẹt bên cô học trò lắm mưu nhiều mẹo, JJ dần phát hiện ra Sophie thực sự có tố chất và năng khiếu bẩm sinh cho việc trở thành điệp viên. (CHIẾU LẠI từ 5/5/21)',
            'movie_genre'       => '5',
            'movie_format'      => '1',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Chiến Binh Cuối Cùng', #5
            'category_time'     => '00:02:02',
            'category_old'      => 13,
            'category_date'     => '2021-04-30',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Dmitriy Dyachenko',
            'category_cast'     => 'Viktor Khorinyak, Mila Sivatskaya, Ekaterina Vilkova...',
            'category_img'      => '/public/frontend/images/chienbinhcuoicung.jpg',
            'category_desc'     => 'Hòa bình đã được thiết lập tại Belogorie sau khi cái ác bị đánh bại và Ivan đang tận hưởng sự nổi tiếng mà anh xứng đáng. Không chỉ có được sự tín nhiệm từ gia đình, bạn bè và những điều mới lạ từ thế giới hiện đại đã mang tới cho anh một cuộc sống thoải mái, Ivan còn may mắn sở hữu thanh gươm phép thuật giúp việc di chuyển giữa hai thế giới trở nên thuận tiện hơn. Song, sự trỗi dậy của một ác quỷ cổ đại đã đe dọa thế giới ma thuật, Ivan quyết định hợp tác với những người bạn cũ và đối thủ của mình để bắt đầu cuộc hành trình dài tới vùng không gian mới, nhằm tìm cách đánh bạn kẻ thù cũng như trả lại hòa bình cho Belogorie.',
            'movie_genre'       => '2',
            'movie_format'      => '28',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Trùm Cuối Siêu Đẳng', #6
            'category_time'     => '00:01:41',
            'category_old'      => 18,
            'category_date'     => '2021-04-23',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Joe Carnahan',
            'category_cast'     => 'Frank Grillo, Mel Gibson, Naomi Watts, Dương Tử Quỳnh, Annabelle Wallis, Ken Jeong, Will Sasso...',
            'category_img'      => '/public/frontend/images/trumcuoisieudang.jpg',
            'category_desc'     => 'Mắc kẹt trong một vòng lặp thời gian ngay đúng ngày anh ta bị giết chết, một cựu đặc vụ Roy Pulver (Frank Gillo) đã phát hiện ra manh mới về một dự án bí mật của chính phủ có thể giải đáp bí ẩn đằng sau cái chết vô thời hạn của anh ta. Roy buộc lòng phải chạy đua với thời gian và truy bắt tên Colonel Ventor (Mel Gibson), đầu sỏ của dự án chính phủ này. Trong lúc đó, anh phải thoát khỏi cuộc vây bắt của những tên sát thủ tàn ác quyết tâm ngăn cản Roy tìm ra được sự thật. Liệu Roy Pulver có thể thoát khỏi vòng lặp này và cứu lấy gia đình đồng thời sống lại một lần nữa vào ngày mai?',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Ong Nhí Phiêu Lưu Ký', #7
            'category_time'     => '00:01:28',
            'category_old'      => 0,
            'category_date'     => '2021-04-23',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Noel Cleary',
            'category_cast'     => 'Coco Jack Gillies, Evie Gillies, Benson Jack Anthony, Justine Clarke, Shane Dundas; David Collins...',
            'category_img'      => '/public/frontend/images/ongnhiphieuluuky.jpg',
            'category_desc'     => 'Quá háo hức chào đón mùa xuân, Maya và Willy đã thức dậy khỏi giấc ngủ đông sớm hơn thời gian dự định. Từ đây, đôi bạn vô tình phải nhận một nhiệm vụ đặc biệt – bảo vệ và đưa quả trứng vàng đến ngôi nhà mới. Tuy nhiên, mọi rắc rối bắt đầu ập đến khi quả trứng nứt và cô công chúa kiến bé nhỏ ra đời. Maya, Willy và những người bạn đồng hành phải phối hợp cùng nhau để chăm sóc và bảo vệ công chúa kiến khỏi vô vàn nguy hiểm xung quanh. Trong hành trình đầy bất ngờ và gian nan này, Willy dần dần khám phá được một khía cạnh khác của bản thân – dịu dàng và kiên nhẫn với cô công chúa nhỏ. Bộ đôi Maya và Willy cũng đã trưởng thành hơn và tình bạn giữa họ càng trở nên thêm khăng khít và gắn bó.',
            'movie_genre'       => '6',
            'movie_format'      => '7',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Thám Tử Lừng Danh Conan: Viên Đạn Đỏ', #8
            'category_time'     => '00:01:51',
            'category_old'      => 13,
            'category_date'     => '2021-04-23',
            'category_country'  => 'Nhật Bản',
            'category_directors'=> 'Tomoka Nagaoka',
            'category_cast'     => 'Minami Hamabe, Megumi Hayashibara, Ogata Kenichi, Rikiya Koyama, Minami Takayama...',
            'category_img'      => '/public/frontend/images/thamtulungdanhconan.jpg',
            'category_desc'     => 'Thế vận hội thể thao lớn nhất thế giới được tổ chức tại Tokyo, Nhật Bản thu hút rất nhiều sự chú ý. Khi sự kiện ra mắt con tàu siêu tốc với tốc độ 1000km/h diễn ra cũng là lúc hàng loạt các vụ bắt cóc xảy ra! Gia tộc hiểm ác tụ tập tại đây sẽ gây ra một loạt sự kiện chấn động thế giới!',
            'movie_genre'       => '6',
            'movie_format'      => '8',
            'category_price'    => 70000,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'The Conjuring: Ma Xui Quỷ Khiến', #19
            'category_time'     => Null,
            'category_old'      => Null,
            'category_date'     => '2021-06-04',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Michael Chaves',
            'category_cast'     => 'Vera Farmiga, Patrick Wilson, Sterling Jerins, Julian Hilliard',
            'category_img'      => '/public/frontend/images/theconjuring.jpg',
            'category_desc'     => 'Phần phim đen tối và đáng sợ nhất của vũ trụ kinh dị The Conjuring, dựa trên "Vụ án kẻ sát nhân quỷ nhập" gây rúng động nước Mỹ. Câu chuyện rùng rợn về vụ giết người và tội ác chưa từng được biết đến, gây sợ hãi cho hai nhà ngoại cảm Ed và Lorraine Warren. Đây là một trong những vụ án giật gân nhất từ hơn 3,000 hồ sơ của họ, bắt đầu bằng cuộc chiến giành linh hồn từ tay quỷ dữ cho một cậu bé, sau đó đưa họ vào trải nghiệm khủng khiếp nhất từ trước đến nay, để đánh dấu lần đầu tiên trong lịch sử nước Mỹ, một nghi phạm giết người tuyên bố mình bị quỷ nhập hồn, sai khiến cơ thể làm điều sai trái.',
            'movie_genre'       => '1',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'In The Heights: Giấc Mơ New York', #20
            'category_time'     => Null,
            'category_old'      => 16,
            'category_date'     => '2021-06-11',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Jon M. Chu',
            'category_cast'     => 'Anthony Ramos, Corey Hawkins, Leslie Grace, Melissa Barrera, Daphne Rubin-Vega, Gregory Diaz IV, Stephanie Beatriz, Dascha Polanco, Jimmy Smits',
            'category_img'      => '/public/frontend/images/intheheights.jpg',
            'category_desc'     => 'Lấy bối cảnh khu phố Washington Heights của New York, nội dung phim xoay quanh hành trình thực hiện giấc mơ trở thành ca sĩ nổi tiếng của anh chủ quán bar Usnavi. Vốn là nơi có không khí luôn dâng đầy nguồn cảm hứng bất tận cho âm nhạc, từ hương cà phê thoang thoảng khắp không gian, cho đến trạm dừng tàu điện ngầm trên con đường 181, nên rất nhiều người tại đây luôn biết cách ngân nga những bài hát mình yêu thích. Còn với Usnavi, anh luôn nỗ lực tiết kiệm từng đồng mỗi ngày, ôm giấc mơ về một cuộc sống tràn ngập âm nhạc cùng với những người bạn của mình.',
            'movie_genre'       => '7',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Rừng Thế Mạng', #21
            'category_time'     => Null,
            'category_old'      => 18,
            'category_date'     => '2021-06-11',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Trần Hữu Tấn',
            'category_cast'     => 'Huỳnh Thanh Trực, Trần Phong, Thùy Anh, Thùy Dương, Lê Quang Vinh, Nguyễn Phước Lộc, NSƯT. Hữu Châu, Kiều Trinh, Bích Hằng, Hưng Võ',
            'category_img'      => '/public/frontend/images/rungthemang.jpg',
            'category_desc'     => 'Tà Năng - Phan Dũng, cung đường trekking đẹp nhất Việt Nam với những câu chuyện tâm linh kỳ bí chưa có lời giải đáp. Dù được cảnh báo sự nguy hiểm và "mỗi năm sẽ có người thế mạng", nhưng một phượt thủ trẻ vẫn quyết định tách đoàn để tìm người bạn thân đi lạc. Hơn 10 ngày đêm kiệt quệ, anh không chỉ rơi vào cuộc chiến sinh tồn chốn rừng thiêng nước độc, mà còn đối mặt với những ám ảnh rùng rợn như ai đó từng nói "ma đưa lối, quỷ dẫn đường"…',
            'movie_genre'       => '10',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Vệ Sĩ Sát Thủ 2: Nhà Có Nóc', #22
            'category_time'     => Null,
            'category_old'      => 18,
            'category_date'     => '2021-06-18',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Patrick Hughes',
            'category_cast'     => 'Ryan Reynolds, Samuel L. Jackson, Frank Grillo, Salma Hayek, Morgan Freeman',
            'category_img'      => '/public/frontend/images/vesisatthu2.jpg',
            'category_desc'     => 'Bộ đôi chết chóc nhất quả đất: vệ sĩ Michael Bryce và sát thủ Darius Kincaid đã bung nóc trở lại cùng "Vệ Sĩ Sát Thủ 2" Chuyên viên an ninh cao cấp Michael Bryce quyết định nghỉ xả hơi buông lơi 2 từ VỆ SĨ. Ăn chơi chưa được bao lâu, Michael Bryce một lần nữa buộc phải làm bạn thân cùng sát thủ khét tiếng Darius Kincaid trong phi vụ tréo ngoe: cứu lấy nóc nhà của tay sát thủ.',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Đêm Tối Rực Rỡ', #24
            'category_time'     => Null,
            'category_old'      => Null,
            'category_date'     => '2021-06-18',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Aaron Toronto',
            'category_cast'     => 'Kiến An, Phương Dung, Nhã Uyên, Xuân Thanh, Diễm Phương, Kim B',
            'category_img'      => '/public/frontend/images/demtoirucro.jpg',
            'category_desc'     => 'Khi người ông qua đời, cả gia đình của Xuân Thanh (Nhã Uyên) tề tựu để đưa tiễn. Đám tang diễn ra hoành tráng, xôm tụ và đầy màu sắc. Bỗng dưng một đám người kéo đến đòi nợ trong sự ngỡ ngàng của tất cả. Những bí mật bị phanh phui, bi kịch chồng bi kịch, như một hệ luỵ tổn thương của nạn bạo hành gia đình đầy ám ảnh.',
            'movie_genre'       => '10',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Vô Diện Sát Nhân', #25
            'category_time'     => Null,
            'category_old'      => Null,
            'category_date'     => '2021-06-25',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Đinh Công Hiếu',
            'category_cast'     => 'Phương Anh Đào, Quách Ngọc Tuyên, Hiếu Nguyễn, Oanh Kiều',
            'category_img'      => '/public/frontend/images/vodiensatnhan.jpg',
            'category_desc'     => 'Phuong Anh is a young and talented doctor whose life seems to be perfect. However, she is struggling in a series of nightmares about a faceless killer which is keep hunting for her to the real life. Phuong Anh decides to rescue herself. Who is the“Faceless killer”? What terrify truth is behind the these secrets?.',
            'movie_genre'       => '1',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Góa Phụ Đen', #26
            'category_time'     => Null,
            'category_old'      => Null,
            'category_date'     => '2021-07-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Đinh Công Hiếu',
            'category_cast'     => 'Scarlett Johansson, Florence Pugh, Robert Downey Jr...',
            'category_img'      => '/public/frontend/images/goaphuden.jpg',
            'category_desc'     => 'Phần phim riêng của Natasha Romanoff bất ngờ tung teaser chính thức với những cảnh hành động mãn nhãn, mang đậm chất điệp viên. Bên cạnh đó, phần phim này cũng sẽ hé lộ quá khứ đen tối và quá trình biến cô trở thành một Black Widow.',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Chìa Khóa Trăm Tỷ', #27
            'category_time'     => Null,
            'category_old'      => Null,
            'category_date'     => '2021-07-30',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Võ Thanh Hoà',
            'category_cast'     => 'Kiều Minh Tuấn, Thu Trang, Jun Vũ, Anh Tú, Puka, NSUT Kim Xuân, La Thành',
            'category_img'      => '/public/frontend/images/chiakhoatramty.jpg',
            'category_desc'     => 'Chìa Khoá Trăm Tỷ bắt đầu khi một sát thủ khét tiếng vô tình bị mất trí vì một tai nạn bất ngờ, rồi bắt đầu một cuộc sống mới bằng nghề diễn viên quần chúng. Chuyện gì sẽ xảy ra nếu chàng diễn viên quần chúng này quên hẳn cuộc đời sát thủ để trở thành một ngôi sao hành động? Liệu sự nghiệp diễn viên và cô quản lý bất đắc dĩ có giúp hắn thay đổi quá khứ mãi mãi và sống trọn vẹn một cuộc đời mới? Một bộ phim hài-hành động nhưng cũng đầy sự ấm áp về hành trình "đổi đời" của một kẻ giết thuê để mưu sinh.',
            'movie_genre'       => '2',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Nhóc Trùm: Nối Nghiệp Gia Đình', #28
            'category_time'     => Null,
            'category_old'      => 16,
            'category_date'     => '2021-06-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Tom McGrath',
            'category_cast'     => 'Amy Sedaris, Jeff Goldblum, James Marsden',
            'category_img'      => '/public/frontend/images/nhoctrum.jpg',
            'category_desc'     => 'Nhóc trùm Ted giờ đây đã trở thành một triệu phú nổi tiếng trong khi Tim lại có một cuộc sống đơn giản bên vợ anh Carol và hai cô con gái nhỏ yêu dấu. Mỗi mùa Giáng sinh tới, cả Tina và Tabitha đều mong được gặp chú Ted nhưng dường như hai anh em nhà Templeton nay đã không còn gần gũi như xưa. Nhưng bất ngờ thay khi Ted lại có màn tái xuất không thể hoành tráng hơn khi đáp thẳng máy bay trực thăng tới nhà Tim trước sự ngỡ ngàng của cả gia đình.',
            'movie_genre'       => '6',
            'movie_format'      => '7',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Shang-Chi Và Huyền Thoại Thập Nhẫn', #29
            'category_time'     => Null,
            'category_old'      => 16,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Destin Daniel Cretton',
            'category_cast'     => 'Simu Liu, Awkwafina, Tony Chiu-Wai Leung',
            'category_img'      => '/public/frontend/images/shangchivahuyenthoaithapnhan.jpg',
            'category_desc'     => 'Shang-Chi và Huyền Thoại Thập Nhẫn là bộ phim thuộc giai đoạn 4 của Vũ trụ điện ảnh Marvel. Nhân vật này được biết đến như một bậc thầy Kung Fu, tinh thông võ thuật. Sức mạnh của Shang-Chi đến từ hàng ngàn giờ luyện tập miệt mài và sự kỷ luật cao độ với bản thân. Siêu anh hùng võ thuật này được chính bố dạy dỗ để trở thành một sát thủ chuyên nghiệp và kế thừa tập đoàn tội ác của ông.',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Kẻ Vô Danh', #30
            'category_time'     => '00:01:32',
            'category_old'      => Null,
            'category_date'     => '2021-07-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Ilya Naishuller',
            'category_cast'     => 'Bob Odenkirk, Connie Nielsen, RZA, Aleksey Serebryakov',
            'category_img'      => '/public/frontend/images/kevodanh.jpg',
            'category_desc'     => 'Đôi khi người đàn ông mà bạn không để ý lại là người nguy hiểm nhất. Hutch Mansell, một người cha và người chồng bị đánh giá thấp và bị coi thường, luôn coi thường sự phẫn nộ của cuộc đời và không bao giờ lùi bước. Một kẻ vô danh.',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 0,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Kẻ Nguyền Ta Chết', #31
            'category_time'     => '00:01:40',
            'category_old'      => 18,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Taylor Sheridan',
            'category_cast'     => 'Angelina Jolie, Jon Bernthal, Nicholas Hoult',
            'category_img'      => '/public/frontend/images/kenguyentachet.jpg',
            'category_desc'     => 'Angelina Jolie tái xuất với siêu phẩm hành động nghẹt thở cùng biên kịch được đề cử Oscar - Taylor Sheridan Kẻ Nguyền Ta Chết xoay quanh cuộc truy sát kinh hoàng giữa băng đảng giết thuê và cậu bé Connor - nhân chứng cuối cùng của một vụ trọng án. Với mục tiêu truy cùng giết tận, những kẻ giết người máu lạnh đã phóng hỏa khu rừng để đánh lạc hướng cảnh sát và săn lùng cậu bé. Vô tình bị cuốn vào cuộc chiến, lính cứu hỏa Hannah (Angelina Jolie) phải tìm mọi cách để giúp Connor thoát khỏi tình thế nghìn cân treo sợi tóc trước lưỡi hái tử thần của những kẻ giết người và sự chết chóc của biển lửa kinh hoàng.',
            'movie_genre'       => '8',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Người Lắng Nghe', #32
            'category_time'     => Null,
            'category_old'      => 18,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Khoa Nguyễn',
            'category_cast'     => 'Quang Sự, Oanh Kiều, Phạm Quỳnh Anh, Quốc Cường, Lý Hồng Ân...',
            'category_img'      => '/public/frontend/images/nguoilangnghe.jpg',
            'category_desc'     => 'Một nữ nhà văn, một chuyên gia tâm lý, một bác sĩ tâm thần và một doanh nhân cùng nhau bị cuốn vào những ám ảnh không hồi kết cảu một người phụ nữ với gương mặt mờ ảo. Trong cuộc truy tìm tung tích của người phụ nữ ma quái kia, cũng là lúc những bí mật sâu thẳm trong mỗi người được bóc trần trước ánh sáng. Họ là ai? Những câu chuyện của họ là gì? Ai sẽ là người ngồi xuống và lắng nghe những lời thì thầm chứa đầy bí ẩn của họ.',
            'movie_genre'       => '8',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => '1990', #33
            'category_time'     => '00:02:00',
            'category_old'      => 16,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Nhất Trung',
            'category_cast'     => 'Diễm My, Ninh Dương Lan Ngọc, Nhã Phương...',
            'category_img'      => '/public/frontend/images/1990.jpg',
            'category_desc'     => 'Bộ phim ‘1990’ là cú bắt tay giữa ba ngọc nữ tuổi Ngọ của điện ảnh Việt: Diễm My - Ninh Dương Lan Ngọc và Nhã Phương. ‘1990’ thuộc thể loại Hài - Tình cảm, có nội dung xoay quanh một hội bạn thân gồm ba cô gái với ba cá tính khác nhau. Khi ngưỡng tuổi “30 chênh vênh” ập đến với cả ba vào cùng một thời điểm, hàng loạt những vấn đề về hôn nhân, tình yêu, sự nghiệp,... lần lượt xuất hiện, buộc họ phải giúp đỡ nhau vượt qua cột mốc đầy sóng gió này. ‘1990’ do đạo diễn Nhất Trung cầm trịch, dự kiến ra mắt vào ngày 21.04.2021.',
            'movie_genre'       => '9',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Thiên Thần Hộ Mệnh', #34
            'category_time'     => '00:02:04',
            'category_old'      => 18,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Victor Vũ',
            'category_cast'     => 'Trúc Anh, Amee, Salim, Samuel An',
            'category_img'      => '/public/frontend/images/thienthanhomenh.jpg',
            'category_desc'     => 'Cái chết của một cô ca sĩ nổi tiếng dẫn đến sự thành công của một cô ca sĩ trẻ khác. Câu chuyện này có liên quan như thế nào đến sự giúp đỡ của một "thiên thần hộ mệnh"?',
            'movie_genre'       => '10',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Cầu Hồn', #35
            'category_time'     => null,
            'category_old'      => 18,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Simon Barrett',
            'category_cast'     => 'Suki Waterhouse, Madisen Beaty, Inanna Sarkis, Ella-Rae Smith',
            'category_img'      => '/public/frontend/images/cauhon.jpg',
            'category_desc'     => 'Tại một trường nội trú danh tiếng dành cho nữ sinh, một nhóm bạn quyết định chơi trò chơi gọi hồn một cựu học sinh đã mất. Tuy nhiên, sau buổi cầu hồn, một nữ sinh trong nhóm là Kerrie đã chết một cách bí ẩn. Nữ sinh mới Camille Meadows (Suki Waterhouse) nhập học ngôi trường này và được phân vào phòng ký túc xá ngày trước của nữ sinh xấu số. Sau đó, Camille cảm thấy những sự việc kì quái xảy ra bên trong ngôi trường, và dần phát hiện được bí mật về cái chết của Kerrie. Tuy nhiên, sau khi Camille quyết định tìm kiếm sự thật, nhóm nữ sinh từng tham gia buổi cầu hồn năm xưa lần lượt mất tích một cách bí ẩn. Liệu có thế lực ma quái nào gây nên những sự việc khủng khiếp này?',
            'movie_genre'       => '1',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Án Mạng Trên Sông Nile', #39
            'category_time'     => null,
            'category_old'      => 18,
            'category_date'     => '2021-07-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Kenneth Branagh',
            'category_cast'     => 'Gal Gadot, Armie Hammer, Rose Leslie',
            'category_img'      => '/public/frontend/images/anmangtrensongnile.jpg',
            'category_desc'     => 'Án Mạng Trên Sông Nile xoay quanh chuyến đi tham quan Ai Cập của thám tử Poirot. Trên chiếc du thuyền nhỏ, ông bắt gặp một cặp nam thanh nữ tú: nàng triệu phú trẻ Linnet Doyle và người chồng mới cưới Simon Doyle đang hưởng tuần trăng mật. Chuyến đi hạnh phúc của hai người bị phá hỏng bởi người tình cũ của Simon - Jacqueline de Bellefort không ngừng bám theo phá đám.',
            'movie_genre'       => '8',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Không Phải Lúc Chết', #40
            'category_time'     => null,
            'category_old'      => 18,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Phim Nước Ngoài',
            'category_directors'=> 'Cary Joji Fukunaga',
            'category_cast'     => 'Daniel Craig, Rami Malek, Léa Seydoux',
            'category_img'      => '/public/frontend/images/khongphailucchet.jpg',
            'category_desc'     => 'Phần 25 của bộ phim điệp viên huyền thoại 007 sẽ tiếp nối câu chuyện về James Bond cùng những pha hành động táo bạo và hoành tráng hơn bao giờ hết. Sau sự kiện đầy ám ảnh trong Spectre, Bond lui về ở ẩn tại đất nước Jamaica, sống một cuộc đời cô độc nhưng bình lặng. Bỗng một người bạn cũ từ CIA xuất hiện, cầu xin anh giúp đỡ. Bond bất đắc dĩ phải tái xuất, nhưng không hề biết mình sẽ đối đầu với thế lực nào. Chi tiết đáng chú ý nhất là chiếc mặt nạ trắng vỡ nửa, đánh dấu sự xuất hiện của tên ác nhân kì quái bậc nhất trong cả series 007. Màn chạm trán giữa Bond và kẻ thù nguy hiểm này sẽ vén màn những bí ẩn còn để ngỏ và tiếp theo đó, có thể là một cuộc đối đầu “sinh tử”.',
            'movie_genre'       => '2',
            'movie_format'      => '1',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Quỳnh Hoa Nhất Dạ', #41
            'category_time'     => null,
            'category_old'      => 0,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Lý Minh Thắng',
            'category_cast'     => 'Thanh Hằng...',
            'category_img'      => '/public/frontend/images/quynhhoanhatda.jpg',
            'category_desc'     => 'Phim dã sử về cuộc đời Thái hậu Dương Vân Nga.',
            'movie_genre'       => '11',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],

            ['category_name'    => 'Trạng Tí', #42
            'category_time'     => '00:01:50',
            'category_old'      => 0,
            'category_date'     => '2021-05-09',
            'category_country'  => 'Việt Nam',
            'category_directors'=> 'Phan Gia Nhật Linh',
            'category_cast'     => 'Huỳnh Hữu Khang, Phan Bảo Tiên, Vương Hoàng Long, Trần Đức Anh, NSƯT Trung Anh, NS Phi Phụng, NSƯT Quang Thắng, Hiếu Hiền, Oanh Kiều, Xuân Nghị và Hoàng Phi.',
            'category_img'      => '/public/frontend/images/trangti.jpg',
            'category_desc'     => 'Trạng Tí Phiêu Lưu Kí là chuyến phiêu lưu vượt ngoài trí tưởng tượng của bộ tứ Tí - Sửu - Dần - Mẹo khi phải cùng nhau vượt qua rất nhiều thử thách để khám phá bí ẩn về cha Tí. Truyền thuyết Hai Hậu sinh ra Tí vì tựa vào cục đá nghe thật khó tin, nên Tí trở thành tâm điểm chọc phá và coi thường bởi những người xấu tính trong làng. Trên hành trình, bốn đứa trẻ nhiều lần gặp rắc rối, hiểu lầm, tai nạn. Và bất ngờ, bốn đứa trẻ lại bị sơn tặc bắt cóc và bị ép đối đầu trước một âm mưu không thể lường trước được. Nhưng, nhờ những trải nghiệm và có bạn bè bên cạnh những lúc khó khăn đó, Tí dần hoàn thiện tính cách bản thân, bớt háo thắng và biết quan tâm đến người khác, hiểu rằng, cái lý đôi khi không quan trọng bằng cái tình mà con người ta dành cho nhau.',
            'movie_genre'       => '12',
            'movie_format'      => '2',
            'category_price'    => Null,
            'category_status'   => 1,
            'created_at'        => now(),
            'updated_at'        => now()],
        ]);
    }
}