-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2022 lúc 01:49 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `advancedphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `module`
--

CREATE TABLE `module` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level` int(100) NOT NULL,
  `created_date` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_date` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `module`
--

INSERT INTO `module` (`id`, `name`, `email`, `pass`, `level`, `created_date`, `updated_date`) VALUES
(1, 'admin', 'admin@gmail.com', '1', 1, '16/02/2022', '17/02/2022'),
(2, 'user', 'user@gmail.com', '2', 0, '30/07/2022', '10/07/2022'),
(3, 't', 't@gmail.com', 't', 1, '27/21/2022', '27/3/2000'),
(4, 'annhien', 'an@gmail.com', 'an', 0, '2022-02-17T18:13', '2022-02-17T18:13'),
(5, 'TAMHU', 'th@gmail.com', 'th', 0, '2022-02-17T08:55', '2022-02-17T08:55'),
(30, 'chuot', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prod`
--

CREATE TABLE `prod` (
  `id` int(100) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `prod`
--

INSERT INTO `prod` (`id`, `name`, `description`, `img`, `content`, `author`, `created_date`) VALUES
(56, 'COVID DƯỚI GÓC NHÌN CỦA NHÀ VĂN SƯƠNG MINH NGUYỆT', 'Bài viết của Clb sách và hành động ICTU', 'sachcovid.jpg', 'Cuốn \"Khi đại dịch thế kỷ COVID-19 qua đi\" gồm gần 30 bài viết được nhà văn Sương Nguyệt Minh viết từ khi đại dịch COVID-19 mới bùng phát cho đến những ngày gần đây, khi TP. Hồ Chí Minh phải đối mặt với những ngày tháng đau thương khi số ca nhiễm bệnh và tử vong tăng lên mỗi ngày.  Theo sát diễn biến nóng hổi đầy tính thời sự của các đợt dịch và phản ánh lại trong các bài viết của mình qua lăng kính của đương thời của nhà văn như: Qua cuốn \"Khi đại dịch thế kỷ COVID-19 qua đi\", có thể thấy cái nhìn sắc bén, thấu đáo và nhân văn trong nhiều câu chuyện theo dòng thời cuộc . Nhà văn Sương Nguyệt Minh tâm sự: \"Lúc đầu, tôi chỉ viết về những vấn đề mình thích, về những câu chuyện đang có tác động mạnh mẽ đối với xã hội, viết như một nhu cầu để giải tỏa bản thân... Không ngờ là dịch bệnh lại kéo dài quá lâu, phát sinh nhiều vấn đề khiến tôi suy nghĩ, trăn trở. Tôi đã nghĩ rằng, đã đến lúc mình phải viết với trách nhiệm của một nhà văn, một người cầm bút đối với cuộc sống xã hội: viết để góp phần thay đổi nhận thức, trách nhiệm của quần chúng nhân dân trong công tác chống dịch có thể còn kéo dài; viết để động viên, cổ vũ các lực lượng tham gia chống dịch đặc biệt là đội ngũ y, bác sĩ đang đêm ngày vất vả hi sinh để cứu chữa cho bệnh nhân và viết để tiếp thêm niềm hi vọng về cuộc sống sẽ sớm trở lại bình thường...\".', 'Nguyễn Tuấn Thành', '2021-11-24T15:20'),
(57, 'Khép cửa đọc sách', 'Nâng cao tinh thần tăng cường tri thức', '223462580_369986121147407_7591875981653797620_n.png', 'Nằm trong đợt cao điểm “Mở rộng vùng xanh trên bản đồ Covid-19” cùng với thực hiện chỉ thị 16 của chính phủ.Quận Nhú nhuận phối hợp với nhà xuất bản tổng hợp Thành phố Hồ Chí Minh tổ chức chương trình đưa sách vào khu cách ly phong toả với chủ đề “Khép cửa đọc sách”.Trong đợt một triển khai ngần một nghìn quyển sách giấy đa dạng thể loại đã được các bạn trẻ đưa đến tận nhà người dân tại ba mươi khu phong toả và bốn khu cách ly tập chung trên địa bàn quận. Không chỉ có sách giấy nhiều hình thức đọc khác cũng được triển khai để đảm bảo phòng dịch như thiết kế các mã QR code giúp cho người dân quét mã sách nói, các gói cước sách điện tử Ebooks, kho sách nghe trên Vioz FM, cùng các voucher khuyến mãi xem phim cũng được gửi tặng …tổng kinh phí thực hiện gần 200 triệu đồng.Có những cuốn sách làm bạn giúp cho người dân có thêm năng lượng tích cực trong những ngày ở nhà chống dịch.', 'Nguyễn Tuấn Thành', '2021-08-02T15:29'),
(59, 'BÀN “CHUYỆN TRÀ\"', 'Bài Viết của CLB Sách và Hành Động IBA', 'Thư nhàn hỏi lửa pha trà mới, Thích thú tựa thông nhìn ráng sa Chợt nghĩ về hưu vui thú ẩn, Một cần câu trúc chuyện đời qua..png', 'Tác giả Trần Quang Đức cho biết, quãng 15 năm trước, anh hay lê la quán xá, sáng tối nã trà bồm như một thói quen, nhưng như vậy chưa thể nói là mê trà.\r\nGiao du với dân trà, được đãi toàn trà tuyệt phẩm, dù ra núi hay ra sông thưởng ngoạn đều mang theo trà cụ. Trà bầu bạn, gắn liền với cuộc sống kể từ đó. Được nghe câu chuyện về trà nhiều hơn. Đã gọi là câu chuyện thì có tính chất sáng tác, đôi khi là sáng tác ngẫu hứng, tức thời.\r\n“Chuyện Trà” ra đời từ đó.\r\n“Chuyện Trà” là cuốn cẩm nang về trà được viết dựa trên sự khảo chứng, đối chiếu với sử liệu Việt Nam, phương Tây… Trong khoảng thinh không lắng đọng, câu chuyện trà hiện lên qua giọng kể của anh, từ nơi rừng núi bạt ngàn đến chốn phòng văn thanh nhã, từ thuở sơ khai dân dã cho đến hình thái tinh xảo dụng công.\r\n???? Vượt qua tất cả các giới hạn về không gian và thời gian, trà ngày nay vẫn kết nối con người trong một thế giới tinh thần dung dị, khiến những dao động trong lòng ta dần chậm lại, nhịp nhàng hơn, tiến tới một sự cân bằng thật đẹp. \r\n???? Phụ lục “Thưởng trà giai phẩm” tuyển và dịch những áng văn thơ hay viết về trà của người Việt là một tư liệu quý, thỏa mãn độc giả yêu trà và mong muốn tôn vinh trà Việt.\r\nKết hợp tinh thần khách quan, cái nhìn phóng khoáng và giọng kể thâm trầm, cuốn sách sẽ đưa người đọc vào thế giới trà một cách tự nhiên và khiến ta quyến luyến mãi trong thế giới dung dị đó.', 'Nguyễn Tuấn Thành', '2022-02-11T14:41'),
(60, 'KHAI MẠC HỘI SÁCH TRỰC TUYẾN QUỐC GIA 2021 :', 'KHAI MẠC HỘI SÁCH TRỰC TUYẾN QUỐC GIA 2021 :', '175089694_305978500881503_3597551121393660372_n.jpg', 'Hội sách quốc gia do Bộ Thông tin và Truyền thông chủ trì phối hợp với Ban Tuyên giáo Trung ương, Bộ Văn hóa, Thể thao và Du lịch, Hội Xuất bản Việt Nam tổ chức. Với mục đích tạo sân chơi kết nối các nhà làm sách, cung cấp sách đến bạn đọc góp phần phát triển văn hóa đọc sâu rộng đến cộng đồng. Qua việc kết nối sách và bạn đọc, hỗ trợ giảm thiểu chênh lệch trong văn hoá đọc giữa các vùng, đặc biệt ở những khu vực vùng sâu vùng xa nơi thiếu thốn về sách. Đồng thời tạo điều kiện giúp các đơn vị xuất bản ứng dụng công nghệ hiện đại thực hiện chuyển đổi số, mở rộng thị trường, nâng cao hiệu quả hoạt động, kết nối kinh doanh và quảng bá thương hiệu; kết hợp tổ chức ngày hội bản quyền giao lưu bản quyền sách giữa các đơn vị Việt Nam và thế giới.????????????????\r\nHội sách trực tuyến quốc gia lần thứ hai năm 2021 bắt đầu từ ngày 17/4 đến ngày 15/5 tại sàn book365.vn thu hút trên 70 nhà xuất bản và đơn vị phát hành trong nước tham gia sàn giao dịch sách, có trên 20 nghìn tên sách với hàng trăm nghìn bản sách phục vụ bạn đọc.\r\nBan tổ chức cũng đưa vào hoạt động chương trình Khuyến đọc của sàn book365.vn, tài trợ rất nhiều tựa sách hay với mức trợ giá đến 80% giá bìa được dành tặng cho các độc giả ở các tỉnh, thành xa những khu vực trung tâm nhất của đất nước.\r\nBên cạnh đó, Hội sách trực tuyến lần thứ 2 sẽ tổ chức gần 20 sự kiện giao lưu trực tuyến với những người nổi tiếng cùng nhiều chương trình trò chơi trực tuyến trả lời câu hỏi nhận quà, chương trình bình sách và chia sẻ sách hay dành cho bạn đọc với những phần quà vô cùng hấp dẫn và thú vị.\r\nNăm nay cũng là lần đầu tiên tại Hội sách đưa vào giới thiệu Sàn giao dịch bản quyển sách với sự tham gia của gần 50 đơn vị xuất bản trong và ngoài nước, giúp các đơn vị tham gia giới thiệu bản quyền sách tiêu biểu của đơn vị mình.\r\nĐể đồng hành cùng bạn đọc, góp phần giảm giá, trợ giá sách, phí vận chuyển, hội sách đã nhận được sự ủng hộ của nhiều cơ quan, tổ chức, cá nhân, đặc biệt là sự ủng hộ của Tổng công ty Bưu điện Việt Nam, công ty Phát hành báo chí Trung ương với 30.000 đơn hàng miễn phí, Tổng công ty đầu tư và phát triển giải pháp công nghệ V&V và một số doanh nghiệp khác với Chương trình trợ giá 50-80% giá sách về vùng sâu, vùng xa, vùng kinh tế khó khăn, góp phần thu hẹp khoảng cách văn hóa đọc giữa các vùng, miền.', 'Nguyễn Tuấn Thành', '2021-04-17T14:47'),
(61, 'Hoạt động “ĐỔI GIẤY LẤY CÂY”.', 'Bài Viết của clb sách và hành động', '171740867_301812164631470_7515968765332673567_n.jpg', ' Với ý nghĩa thiết thực nhằm lan tỏa lối sống xanh, bảo vệ môi trường và sức khỏe con người, CLB SVHĐ IBA - Trường ĐH CNTT và Truyền thông Thái Nguyên sẽ tiến hành hoạt động mang tên “ĐỔI GIẤY LẤY CÂY” nhằm phổ biến tới cộng đồng. \r\n Đi đôi với hoạt động \"ĐỔI GIẤY LẤY CÂY\" CLB còn tổ chức hoạt động \"CHO MƯỢN SÁCH VÀ GIÁO TRÌNH MIỄN PHÍ\" nhằm lan tỏa thói quen đọc sách cũng như giúp mọi người tìm đọc được những cuốn sách hay, bổ ích.\r\nCÁCH QUY ĐỔI:\r\n- Sách kĩ năng, văn học, truyện...: 3 quyển = 1 cây\r\n- Giấy photo, vở học sinh, giáo trình: 3kg = 1 cây\r\n- Sách giáo khoa, sách, truyện, báo, tạp chí, bìa carton: 5kg = 1 cây \r\n- Nhựa: 3kg = 1 cây\r\n- Vỏ lon, chai lọ: 30 chai = 1 cây \r\n- Ngoài ra, bạn cũng có thể mua với giá từ 10k -15k /1 cây\r\nThời gian tổ chức: Từ ngày 12/04 - 13/04/2021( thứ 2-thứ 3 )\r\nSáng : 7h-11h\r\nChiều: 14h-17h \r\nĐịa điểm thu gom và đổi cây: Trước giảng đường C2, trường đh CNTT và Truyền thông Thái Nguyên\r\nCó QUÉT ĐIỂM NGOẠI KHÓA\r\n - Áp dụng cho toàn thể sinh viên. \r\n - Ngoài ra các bạn cũng có thể quyên góp sách, vở miễn phí cho CLB.\r\nMong nhận được sự quan tâm và tham gia nhiệt tình của quý thầy cô và các bạn trong toàn trường tới CLB.', 'Thân Thị Giang', '2021-04-10T14:53'),
(62, 'Đừng lựa chọn an nhàn khi còn trẻ', 'Bài viết của CLB Sách và Hành động IBA', '163338759_288961365916550_2786023093299668657_n.jpg', 'Trong tuổi thanh xuân đẹp đẽ ngày ấy, bạn không dám mạo hiểm, không dám thử sức, không dám nỗ lực trong học tập, không chịu phấn đấu trong công việc, không nói lên được những ước mơ của bản thân. Thật tiếc là bạn sẽ không thể cố gắng để đạt được nó nếu bạn cứ mãi chìm đắm trong những cuộc vui với bè bạn, những buổi tiệc đông người hay những buổi đi chơi đi sớm về khuya cùng hội nhóm. Bạn ganh ghét với những ai giỏi hơn bạn, ghét những ai giàu có và xinh đẹp hơn bạn, vậy thì tại sao bạn lại chấp nhận một cuộc sống an nhàn như hiện tại? Tại sao bạn không chịu cố gắng để được hưởng những thành quả ngọt ngào như họ? Phải chăng bạn sợ thất bại sao??? \r\n     Bạn luôn luôn ngưỡng mộ những người thành công, giàu có mà thậm chí bạn thầm nghĩ “Giá như mình sinh ra trong một gia đình giàu có thì tốt biết mấy”, “Giá như mình sinh ra đã giỏi”,… hàng vạn từ “Giá như” nối tiếp trong đầu bạn và đáp lại chỉ là cái tặc lưỡi cho qua.\r\n     Sai lầm lớn nhất của chúng ta là tự cho mình nghĩ rằng bản thân có rất rất nhiều thời gian. Thời gian là vô hạn nhưng nó là vô giá, không có một cái giá nào đủ trả để bạn có thêm thời gian. Một ngày có 24 giờ và ai cũng có một khoảng thời gian như nhau, cũng chẳng có chuyện bạn dùng tiền để mua thêm giờ cả. Bạn không thể sở hữu nó nhưng bạn có thể sử dụng nó vào rất nhiều việc có ích và ngược lại nếu như bạn không quý trọng thời gian thì bạn đã để nó trôi qua một cách lãng phí.\r\n     Cuốn sách này phù hợp với tất cả các bạn trẻ. Nhưng sẽ thật quý biết bao khi bạn lựa chọn cuốn sách này khi đã có mục tiêu trong đầu và bắt đầu hành động. Những bạn đang hoang mang khi nhận ra mình càng ngày càng già đi mà chẳng có gì trong tay. hay những bạn suốt ngày ở quẩn quanh trong cái “vỏ ốc” an toàn mà không chịu nỗ lực, cố gắng chỉ biết ngưỡng mộ những người tài giỏi hơn mình. Hy vọng các bạn sẽ lấy quyển sách này làm động lực phấn đấu, cùng cố gắng để sau này không phải hối hận và nói từ “Giá như”...\r\n', 'Thân Thị Giang', '2021-03-20T19:55'),
(63, 'GALA SÁCH VÀ HÀNH ĐỘNG 202', 'Bài viết của CLB Sách và hành Động IBA', '140849277_257786682367352_8115664514708922731_n.jpg', ' 24/01/2021, Gala Sách và Hành động đã diễn ra trong bầu không khí háo hức và sôi nổi với sự có mặt của các thành viên đến từ các CLB trên khắp các tỉnh thành, từ THPT đến ĐH/CĐ. \r\n Đối với Sách và Hành Động, đây cũng là lúc để nhìn lại hành trình đã qua và bắt đầu một cuộc hành trình mới. GALA Sách và Hành Động 2020 với mục đích đó, mang chủ đề \"Challenge to change\" - Thách thức để thay đổi. \r\nChúng em xin gửi lời cảm ơn đến ban tổ chức cũng như các nhà tài trợ, các vị khách mời đã đồng hành và tạo cho chúng em 1 sân chơi chơi đầy thú vị, ý nghĩa, học hỏi thêm nhiều điều mới mẻ.', 'Thân Thị Giang', '2021-01-24T14:13'),
(64, 'GÓC LƯU Ý ', 'Bài Viết của CLB Sách Và Hành Động IBA', '131412527_238765634269457_4086372783276664493_n.jpg', 'Hiện tại Clb của chúng mình đang tiến hành  trưng bày và cho mượn đọc các đầu sách, giáo trình miễn phí tại Trà tranh SVO, thủ tục mượn sách cũng rất đơn giản với chỉ một vài thông tin cơ bản của sinh viên là bạn có thể mang sách về ngâm cứu .\r\nTuy nhiên hiện đang có một số trường hợp sau khi trả sách đã không ghi chép lại đầy đủ thông tin .\r\nVì vậy:\r\n- Hãy dành chút thời gian điền đầy đủ thông tin như  họ tên, ngày mượn, ngày trả, số điện thoại (của người mượn), mã sinh viên để chúng mình tiện theo dõi.\r\n- Hạn trả sách của chúng minh là 2 tuần sau khi mượn, các bạn có trả sách lại tại tủ sách.\r\nMong các bạn thực hiện. Chúc các bạn đọc hết tủ sách của bọn mình ', 'Nguyễn Tuấn Thành', '2020-12-23T15:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `module`
--
ALTER TABLE `module`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021;

--
-- AUTO_INCREMENT cho bảng `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
