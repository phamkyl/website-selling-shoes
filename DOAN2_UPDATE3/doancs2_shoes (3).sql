-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2022 lúc 10:28 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancs2_shoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(15, 'NIKE', 'NIKE', 'Nike, Inc. (/ˈnaɪki/ or /ˈnaɪk/)[note 1] là tập đoàn đa quốc gia của Mỹ hoạt động trong lĩnh vực thiết kế, phát triển, sản xuất, quảng bá cũng như kinh doanh các mặt hàng giày dép, quần áo, p', 1, 0, '1670161143.png', 'Just Do It', 'Ý nghĩa thương hiệu Nike đơn thuần đây là tên một vị thần Hy Lạp. Chính vì vậy, logo Nike cũng chính là cái tên của đối cánh, đồng thời đây là vũ khí của vị thần Hy Lạp – “Swoosh”. Ý nghĩa thương hiệu Nike cho đến logo cũng là điều mà Phil Knight hướng đến chính là tinh thần chiến đấu và sự chiến thắng.\r\n\r\nLogo Nike Swoosh được thiết kế với hình dáng đơn giản, cùng với biểu tượng như đôi cánh, nhưng nét vẽ biểu tượng nét phẩy phết lên, nằm ngang đại diện cho tốc độ và chuyển động. Mặc dù khá đơn giản nhưng cho đến thời điểm hiện tại nó đã hoàn thành xuất sắc nhiệm vụ giúp khách hàng nhận diện được thương hiệu Nike dễ dàng không lẫn với bất kỳ ai.', '#NIKE', '2022-12-02 12:03:03'),
(16, 'Adidas ', 'adidas', 'Adidas là một trong những thương hiệu nổi tiếng thế giới, được người dùng biết tới với các sản phẩm chất lượng cao, đa dạng mẫu mã, đối tượng người dùng', 1, 0, '1670161393.png', 'Impossible is Nothing/\r\nAdidas is All In', 'Adidas là tập đoàn đa quốc gia đến từ nước Đức, chuyên sản xuất các mặt hàng giầy dép, quần áo, phụ kiện. Tiền thân của hãng là công ty Gebruder Dassler Schuhfabrik được ra đời vào năm 1924 bởi hai anh em nhà Dassler là Adi Dassler và Rudolf.', '#adidas', '2022-12-02 12:04:03'),
(17, 'PUMA', 'PUMA', 'Puma SE (tên thương hiệu chính thức PUMA) là một công ty đa quốc gia lớn của Đức chuyên sản xuất giày dép và các dụng cụ thể thao khác, có trụ sở chính tại Herzogenaurach, Bavaria, Đức. Công ', 1, 0, '1670161709.png', 'PUMA', 'Puma có nghĩa là báo sư tử. Ruda đã lựa chọn tên cái tên nàynhằm truyền tải ý nghĩa củatốc độ nhanh nhẹnvà sức khỏe vô biên của loài động vật này. Với khả năng săn mồi tích cực hoạt động cả ban ngày lẫn ban đêm với khả năng bật nhảy ấn tượng đến hơn 5 mét, loài báo sư tử này được mệnh danh lànhữngquái thú săn mồi. Từ ý nghĩa đó, logo thương hiệu đầu tiên của Puma ra đời với hình vẽmột chú báo sư tử đang nhảy qua chữ D (chữ cái đầu tiên của họ Dassler) nằm trong hai hình lục giác, xung quanh là những dòngchữ“Rodoft Dassler” và “schufabrik” (có nghĩa là xưởng giày).\r\n\r\n', '#PUMA', '2022-12-03 19:38:31'),
(18, 'Reebok', 'reebok', '“Những người theo đuổi một cuộc sống đầy đủ, vui vẻ và hạnh phúc thông qua tập thể dục. Chúng tôi tin rằng những lợi ích của một cuộc sống năng động sẽ đi xa hơn những lợi ích vật chất và tác', 1, 0, '1670161886png', '', '', '# Reebok', '2022-12-04 13:51:26'),
(19, 'BITIS', 'BITIS', '', 1, 0, '1670162187png', '', '', '', '2022-12-04 13:56:27'),
(20, 'ANTA', 'ANTA', '', 1, 0, '1670162232png', '', '', '', '2022-12-04 13:57:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categort_id` int(11) NOT NULL,
  `id_typeshoes` int(11) NOT NULL,
  `name_sp` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `trending` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `categort_id`, `id_typeshoes`, `name_sp`, `slug`, `small_description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `description`) VALUES
(22, 15, 19, 'Nike Air Force 1 07 LV8', ' Force 1 07 LV8', 'Màu hiển thị: Cánh buồm/Xanh tráng men/Cam Alpha/Cánh buồm\r\nPhong cách: DO9785-100                                  ', 1500000, 2000000, '1670162904.JPG', 165, 1, 1, '                                                                                    ', '#NIKE_AIR1_07_LV8', 'Lợi ích\r\n\r\nTừ đường khâu chắc chắn đến chất liệu da cao cấp đến thiết kế đế lót ly, nó mang đến phong cách bền bỉ, mượt mà hơn cả mặt kính phía sau.\r\nBan đầu được thiết kế cho các vòng biểu diễn, Đệm khí mang lại sự thoải mái lâu dài.\r\nCổ áo có đệm, cắt thấp trông bóng bẩy và tạo cảm giác tuyệt vời.\r\n2 bộ dây buộc giúp bạn kết hợp phong cách của mình.\r\nMàu hiển thị: Cánh buồm/Xanh tráng men/Cam Alpha/Cánh buồm\r\nPhong cách: DO9785-100\r\nQuốc gia/Khu vực xuất xứ: Indonesia                                                                                    ', '2022-12-02 12:06:34', 'Tinh tế và lấy cảm hứng từ retro. Đổ chuông trong kỷ nguyên mới của AF-1 cổ điển với cấu trúc mang âm hưởng của thời đại thập niên 80 và sự thoải mái mềm mại tối ưu. Nhãn lưỡi dệt và Swoosh nạm đá quý mang lại vẻ ngoài sống động cho những chiếc vòng ban đầu, trong khi đế ngoài Sữa dừa tăng thêm sức hấp dẫn truyền thống và lực kéo bền bỉ.                                                                                    '),
(23, 15, 21, 'NikeCourt Zoom Vapor Cage 4 Rafa', 'NikeCourt Zoom Vapor Cage 4 Rafa', 'Thông tin chi tiết sản phẩm\r\nđế rời\r\nMàu hiển thị: Off-Noir/Volt/Trắng\r\nPhong cách: DD1579-002\r\nQuốc gia/Khu vực xuất xứ: Trung Quốc                                                                                                                  ', 3576000, 4409000, '1670163510.JPG', 254, 1, 1, 'NikeCourt Zoom Vapor Cage 4 Rafa                                                                                                                                                               ', '#NikeCourt Zoom Vapor Cage 4 Rafa', ' nhiều lợi ích hơn\r\nKhung cứng ở mặt bên tạo cảm giác ổn định khi di chuyển từ bên này sang bên kia.\r\nTay áo dài 1/2 mang đến cho bạn cảm giác vừa vặn như một chiếc tất.\r\nĐược thiết kế để sử dụng trên bề mặt sân cứng.                                                                                                                                                                                                                                                                          ', '2022-12-03 17:50:01', ' Được cải tiến để chịu được những trận đấu khó khăn nhất của bạn, thiết kế cập nhật này đặt các vật liệu bền, dẻo vào đúng nơi cần thiết nhất. Các chi tiết về chữ ký của Rafael Nadal cho phép bạn đại diện cho cầu thủ yêu thích của mình trong khi điều hành sân đấu.                                                                                                                                                                                                                                                                                                '),
(24, 15, 23, 'Nike Renew Retaliation 4', 'Nike Renew Retaliation 4', 'Màu sắc hiển thị: Đen/Xám khói đậm/Xám khói/Trắng\r\nKiểu dáng: DH0606-001', 1908903, 2189000, '1670163709JPG', 159, 1, 1, 'Nike Renew Retaliation 4', '#Nike Renew Retaliation 4', 'Làm mới đệm\r\n\r\nĐệm Nike Renew mang đến cho bạn sự thoải mái với lò xo giúp bạn di chuyển êm ái trên máy chạy bộ—và chuyển tiếp liền mạch từ hiệp này sang hiệp khác.\r\n\r\n\r\nSẵn sàng cho buổi tập luyện của bạn\r\n\r\nDây đeo giữa bàn chân co giãn tạo cảm giác vừa vặn, nâng đỡ.', '2022-12-04 14:21:49', 'Nike Renew Retaliation 4 được xây dựng dựa trên người tiền nhiệm của nó với dây đeo ở giữa bàn chân co giãn được thiết kế để giúp giữ an toàn cho bàn chân của bạn trong quá trình tập luyện tim mạch, vận động bằng trọng lượng cơ thể và mọi hoạt động khác. Bọt mềm, đàn hồi giúp mọi thứ thoải mái khi bạn di chuyển qua các bài tập theo lớp.'),
(25, 15, 22, 'Nike SB Force 58 Premium', 'Nike SB Force 58 Premium', 'Màu sắc hiển thị: Obsidian/Midnight Turquoise/Phantom/Viotech\r\nKiểu dáng: DH7505-401', 2000000, 2349000, '1670164100JPG', 146, 1, 1, 'Nike SB Force 58 Premium', 'Nike SB Force 58 Premium', 'Cải tiến mới nhất và tuyệt vời nhất được tung ra thị trường, Nike SB Force 58 Premium mang đến cho bạn độ bền của đế đế bằng với tính linh hoạt của giày lưu hóa. Được làm từ da mềm, dẻo dai và được hoàn thiện bằng các lỗ đục lỗ, toàn bộ vẻ ngoài được kết hợp với bóng rổ truyền thống ADN.\r\n\r\n\r\nDNA bóng rổ\r\n\r\nChất liệu da cao cấp mềm mại và dẻo dai. Các lỗ đục lỗ và dấu Swoosh trên ngón chân thể hiện phong cách bóng rổ truyền thống.\r\n\r\n\r\nĐế cúp mới\r\nThiết kế mới mang lại độ bền của đế lót ly cùng với sự linh hoạt mà bạn cần để giảm thời gian nghỉ ngơi và tối đa hóa số ngày trượt băng. Hình dạng ba ngôi sao trên đế mở rộng và co lại để có độ bám tốt hơn và cảm giác như mới vừa lấy ra khỏi hộp', '2022-12-04 14:28:20', 'Cải tiến mới nhất và tuyệt vời nhất được tung ra thị trường, Nike SB Force 58 Premium mang đến cho bạn độ bền của đế đế bằng với tính linh hoạt của giày lưu hóa. Được làm từ da mềm, dẻo dai và được hoàn thiện bằng các lỗ đục lỗ, toàn bộ vẻ ngoài được kết hợp với bóng rổ truyền thống ADN.'),
(26, 15, 20, 'Nike Zoom Mercurial Vapor 15 Academy MG', 'Nike Zoom Mercurial Vapor 15 Academy MG', '                                            \"Thông tin chi tiết sản phẩm\r\n\r\nĐể sử dụng trên bề mặt tự nhiên và tổng hợp\r\nđệm lót\r\nMàu hiển thị: Đen/Trắng đỉnh/Volt/Xám khói đậm\r\nPhong cách: DJ5631-001\r\nQuốc gia/Khu vực xuất xứ: Indonesia                                        ', 1980000, 2479000, '1670164380.JPG', 643, 1, 0, '                                            Nike Zoom Mercurial Vapor 15 Academy MG                                        ', '#Nike Zoom Mercurial Vapor 15 Academy MG', '                                            \r\nMột thiết kế được làm lại giúp cải thiện độ vừa vặn để mô phỏng bàn chân tốt hơn. Chúng tôi đã làm điều này bằng cách tiến hành nhiều cuộc kiểm tra độ mài mòn trên hàng trăm vận động viên. Kết quả là một hộp ngón chân có đường viền hơn và khóa tốt hơn ở gót chân.\r\nPhần trên có NikeSkin, một chất liệu dạng lưới mềm và linh hoạt được liên kết với nhau bằng một lớp phủ mỏng. Nó giúp cung cấp khả năng kiểm soát bóng và thực sự mang đến cho bạn cảm giác bóng đá chân trần.                                        ', '2022-12-04 14:32:27', '                                            Sân là của bạn khi bạn tham gia Vapor 15 Academy MG. Nó được trang bị bộ phận Zoom Air và NikeSkin linh hoạt ở trên cho cảm giác chạm đặc biệt, vì vậy bạn có thể chiếm ưu thế trong những phút cuối trận đấu—khi nó quan trọng nhất. Nhanh là trong không khí.                                        '),
(27, 15, 19, 'Nike Air Zoom Pegasus FlyEase', 'Nike Air Zoom Pegasus FlyEase', 'Màu hiển thị: Xám khói đậm/Xám ô liu/Đen/Đồng ánh kim\r\nPhong cách: DJ7383-002\r\nQuốc gia/Khu vực xuất xứ: Trung Quốc', 3100000, 3519000, '1670178279JPG', 70, 1, 0, 'Nike Air Zoom Pegasus FlyEase', '#Nike Air Zoom Pegasus FlyEase', '\r\nLưỡi được tách ra khỏi phần trên để nhường chỗ cho các hình dạng bàn chân khác nhau.\r\nChúng tôi điều chỉnh giày cho phù hợp với bàn chân của bạn, mang lại cho bạn cảm giác mềm mại hơn, sang trọng hơn.\r\n', '2022-12-04 18:24:39', 'Chạy là nghi thức hàng ngày của bạn, với mỗi bước sẽ đưa bạn đến gần hơn với mục tiêu cá nhân của mình. Hãy để Nike Air Zoom Pegasus FlyEase giúp bạn nâng lên một tầm cao mới với thiết kế trực quan, thoải mái. Một cảm giác hỗ trợ giúp giữ cho bàn chân của bạn được cố định, trong khi Air dưới chân tạo ra tiếng bật cho bước đi của bạn khi bạn chuyển từ gót chân sang ngón chân. Công nghệ Nike FlyEase hoạt động như một dây đeo, giúp cố định vừa vặn. Con ngựa đáng tin cậy của bạn với đôi cánh đã trở lại. Đã đến giờ cất cánh.'),
(29, 15, 19, 'Nike Free Run 5.0', 'Nike Free Run 5.0', '', 2000000, 2929000, '1670178478JPG', 100, 1, 0, 'Nike Free Run 5.0', '#Nike Free Run 5.0', 'Thông tin chi tiết sản phẩm\r\ntab kéo gót chân\r\nKhông dành cho mục đích sử dụng làm Thiết bị bảo vệ cá nhân (PPE)\r\nMàu hiển thị: Valerian Blue/Obsidian/Cerulean/Barely Green\r\nPhong cách: CZ1884-402\r\nQuốc gia/Khu vực xuất xứ: Việt Nam', '2022-12-04 18:27:58', 'Được làm từ ít nhất 20% vật liệu tái chế tính theo trọng lượng, chiếc ủng giống như tất của Nike Free này được thiết kế để chuyển từ chạy bộ sang tập luyện sang thói quen hàng ngày của bạn. Với phần trên bằng vải dệt kim thoáng khí, nó kết hợp sự linh hoạt mà bạn yêu thích với thiết kế chắc chắn sẽ giúp bạn bám sát mặt đất để có cảm giác đi chân trần. Lớp đệm mới nhẹ hơn, mềm hơn và nhạy hơn so với các phiên bản trước để bạn có thể tiếp tục di chuyển thoải mái cho dù bạn đang đi trên đường băng hay đường đua.'),
(30, 15, 22, 'Nike SB Ishod Wair Premium', 'Nike SB Ishod Wair Premium', '', 300000, 3239000, '1670179047JPG', 156, 1, 0, 'Nike SB Ishod Wair Premium', '#Nike SB Ishod Wair Premium', 'nhiều lợi ích hơn\r\n\r\nDây đeo giữa bàn chân ôm và hỗ trợ bàn chân của bạn khi bạn trượt băng.\r\nDa nubuck cao cấp ở phía trên tăng thêm độ bền.\r\nMàu hiển thị: Đen/Hyper Royal/Wolf Grey/Đỏ đại học\r\nPhong cách: DM0752-002\r\nQuốc gia/Khu vực xuất xứ: Indonesia', '2022-12-04 18:37:27', 'Khi đến lúc chế tạo chiếc giày đặc trưng của mình, Ishod Wair đã tham gia ngay từ đầu. Được kết hợp với các yếu tố lấy từ đôi giày hoops mang tính biểu tượng của thập niên 90, (bạn có biết rằng bóng rổ là tình yêu đầu tiên của Ishod không?) và được chế tạo với tất cả độ bền mà bạn cần để trượt băng chăm chỉ, Nike SB Ishod Wair Premium vượt qua ranh giới giữa phong cách nguyên bản và đổi mới skate hiện đại. Phiên bản cao cấp này có tất cả các tính năng hiệu suất của bản gốc, giờ được khoác lên mình lớp da nubuck mượt mà.'),
(31, 16, 19, 'ULTRABOOST 22 SHOES', 'ULTRABOOST 22 SHOES', 'Trọng lượng: 335 g (cỡ UK 8.5),\r\nĐộ sụt đế giữa: 10 mm (gót chân: 25 mm / bàn chân trước: 15 mm),\r\nĐế ngoài Stretchweb với Cao su Continental™,\r\nSợi ở trên chứa ít nhất 50% nhựa Parley Ocean và 50% polyester tái chế,\r\nMàu sắc: Đen lõi / Đen lõi / Xanh dương điện,\r\nMã sản phẩm: HQ0965', 4800000, 5200000, '1670179397JPG', 465, 1, 0, 'ULTRABOOST 22 SHOES', '#ULTRABOOST 22 SHOES', 'Phù hợp thường xuyên,\r\nren đóng cửa,\r\ndệt trên,\r\nDệt lót,\r\nHệ thống đẩy năng lượng tuyến tính,\r\nđế giữa BOOST', '2022-12-04 18:43:17', 'Những đôi giày chạy bộ Ultraboost này mang đến sự thoải mái và phản hồi nhanh. Bạn sẽ đi trên đế giữa BOOST để có nguồn năng lượng vô tận, với hệ thống Đẩy năng lượng tuyến tính và đế ngoài Cao su Continental™.'),
(32, 16, 23, 'GIÀY TRAINER DROPSET', 'GIÀY TRAINER DROPSET', '\r\nThân giày chứa ít nhất 50% thành phần tái chế\r\nMàu sản phẩm: Cloud White / Sky Rush / Supplier Colour\r\nMã sản phẩm: GW3419\r\n', 3000000, 3500000, '1670182676JPG', 150, 1, 0, 'GIÀY TRAINER DROPSET', 'GIÀY TRAINER DROPSET', 'Có dây giày\r\nThân giày bằng vải dệt\r\nĐế giữa mật độ kép\r\nĐế ngoài bằng cao su', '2022-12-04 19:37:56', 'Tự tin dấn bước. Với thiết kế dựa trên dữ liệu từ các vận động viên trên toàn thế giới, đôi giày trainer adidas Dropset này sẽ giúp bạn chinh phục những bài tập khó nhằn. Gót giày cứng cáp tạo độ ổn định khi bạn nâng tạ, và mũi giày mềm mại mang đến sự mềm dẻo trong những bài tập yêu cầu độ nhanh nhẹn và linh hoạt. Đế giữa mật độ kép giúp bàn chân luôn ổn định và thoải mái để bạn duy trì tập trung.'),
(33, 16, 24, 'D.O.N. ISSUE #4', 'D.O.N. ISSUE #4', 'Đế giày cao su\r\n25% thành phần được sử dụng để làm mũ giày được sản xuất với tối thiểu 50% thành phần tái chế\r\nnhập khẩu\r\nMàu sắc sản phẩm: Core Black / Carbon / Grey Four\r\nMã sản phẩm: GY6511', 2500000, 3000000, '1670182883JPG', 123, 1, 0, 'D.O.N. ISSUE #4', '#D.O.N. ISSUE #4', 'Phù hợp thường xuyên\r\nren đóng cửa\r\nLIGHTLOCK phía trên\r\nNhẹ, cảm giác đệm\r\nDệt lót\r\nđệm ánh sáng', '2022-12-04 19:41:23', 'Tương lai của bóng rổ là tốc độ, và Donovan Mitchell cũng nhanh như vậy. Những đôi giày đặc trưng mới nhất của Mitchell và adidas Basketball được chế tạo đặc biệt để nâng cao khả năng di chuyển trên sân của một trong những cầu thủ ghi bàn nhanh nhất, năng động nhất của trò chơi. Ultralight Lighttrike kết hợp với mặt trên LIGHTLOCK để vừa khít và hệ thống đẩy không làm bạn nặng nề. Đế ngoài bằng cao su hoàn toàn độc đáo được thiết kế để tạo lực kéo ở nơi bạn cần nhất, vì vậy mọi vết cắt và đầu giả khó sạc đều có hỗ trợ toàn diện. Biểu tượng Spida của Mitchell và đồ họa chữ ký mang đến sự hoàn thiện. Được sản xuất một phần bằng nội dung tái chế được tạo ra từ chất thải sản xuất, chẳng hạn như cắt phế liệu và rác thải gia đình sau tiêu dùng để tránh tác động môi trường lớn hơn của việc sản xuất nội dung nguyên chất.'),
(34, 16, 24, 'HARDEN VOL. 6', 'HARDEN VOL. 6', 'Rubber outsole\r\n25% of the components used to make the upper are made with a minimum of 50% recycled content\r\nImported\r\nProduct color: Core Black / Core Black / Cloud White\r\nProduct code: GV8704', 3576000, 4000000, '1670183061JPG', 128, 1, 0, 'HARDEN VOL. 6', 'HARDEN VOL. 6', 'Regular fit\r\nLace closure\r\nTextile upper\r\nSupportive, locked-down feel\r\nBoost midsole', '2022-12-04 19:44:21', 'Strike when your opponent least expects it. Drive to the rim, pull up from deep and leave defenders in your wake — just like James Harden. A Boost midsole provides the energy return you need, from the opening whistle to those grueling last seconds of overtime. Bands on the forefoot and heel give you a locked-down feel all game long.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(11) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(34, 2, '7790', 0, '2022-12-04 16:58:37', 'tienmat', 9),
(37, 7, '6681', 1, '2022-12-04 17:04:32', 'tienmat', 10),
(38, 2, '8501', 1, '2022-12-05 03:22:57', 'tienmat', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(31, '7790', 22, 4),
(32, '6681', 23, 3),
(33, '6681', 22, 2),
(34, '8501', 23, 1),
(35, '8501', 32, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `status`, `create_at`) VALUES
(19, 'Running Shoes', 1, '2022-12-02 12:05:18'),
(20, 'Football Shoes', 1, '2022-12-04 13:32:25'),
(21, 'Tennis Shoes', 1, '2022-12-04 13:32:36'),
(22, 'Skate Shoe', 1, '2022-12-04 13:32:48'),
(23, 'Training Shoes', 1, '2022-12-04 13:32:59'),
(24, 'Basketball Shoes', 1, '2022-12-04 13:33:10'),
(25, 'Sneakers', 1, '2022-12-04 13:34:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `tenlienhe` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `sodt` text NOT NULL,
  `message` mediumtext NOT NULL,
  `create_as` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(9, 'Trần Ngọc Trâm', '0968745632', 'Nghệ An', 'giao giờ hành chính', 2),
(10, 'phạm thị phúc', '0968269807', 'đức phú', 'ko có gì', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `role_as` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `status`, `role_as`, `create_at`) VALUES
(1, 'Phạm', 'Thị Phúc', 'phamkyl2003@gmail.com', 'haha', 0, 1, '2022-11-21 05:36:14'),
(2, 'Trần', 'Ngọc Trâm', 'phamthiphuc42012@gmail.com', 'kaka', 1, 0, '2022-11-21 05:36:59'),
(3, 'Phạm', 'Thị Phúc', 'phamthiphuc111@gmail.com', 'nana', 1, 0, '2022-11-21 07:33:57'),
(6, 'user', '@user', 'trtram2003@gmail.com', '12345', 0, 0, '2022-11-23 07:01:09'),
(7, 'phạm', 'kiều ly', 'ly763@gmail.com', 'lyly', 0, 0, '2022-11-27 15:56:24'),
(8, 'maris', 'pham', 'maris24@gmail.com', 'mama', 0, 0, '2022-11-29 17:04:33'),
(9, 'NGUYỄN', 'ĐOÀN ÂN', 'andoannguyen465@gmail.com', 'andoan', 0, 0, '2022-11-29 18:20:02'),
(11, 'Trần ', 'Ngọc trâm', 'tramtn.21ad@vku.udn.vn', '12345', 1, 1, '2022-12-04 20:18:01'),
(12, 'hary', 'pham', 'hary234@gmail.com', '12345', 1, 0, '2022-12-04 20:19:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categort_id` (`categort_id`),
  ADD KEY `qty` (`qty`),
  ADD KEY `id_typeshoes` (`id_typeshoes`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `code_cart` (`code_cart`),
  ADD KEY `cart_shipping` (`cart_shipping`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `cart_date` (`cart_date`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `code_cart` (`code_cart`),
  ADD KEY `code_cart_2` (`code_cart`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`),
  ADD KEY `code_cart` (`code_cart`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`),
  ADD KEY `id_dangky` (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ngaydat` (`ngaydat`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categort_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_typeshoes`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`cart_shipping`) REFERENCES `tbl_shipping` (`id_shipping`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`id_khachhang`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tbl_cart_ibfk_3` FOREIGN KEY (`code_cart`) REFERENCES `tbl_cart_details` (`code_cart`);

--
-- Các ràng buộc cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD CONSTRAINT `tbl_shipping_ibfk_1` FOREIGN KEY (`id_dangky`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD CONSTRAINT `tbl_thongke_ibfk_1` FOREIGN KEY (`ngaydat`) REFERENCES `tbl_cart` (`cart_date`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
