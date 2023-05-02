SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `level` tinyint(4) DEFAULT 1,
  `avatar` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `create_at`, `update_at`) VALUES
(11, 'Nguyễn văn A', '123 Nguyễn B', 'anguyen@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', '0778960402', 1, 2, NULL, '2021-06-26 07:51:26', '2021-06-26 07:51:26'),
(12, 'Thông Phan', 'thong.phan109@gmail.com', 'thong.phan109@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', '+84778960401', 1, 2, NULL, '2021-10-31 04:26:07', '2021-10-31 04:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_en` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `slug_en` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) NOT NULL,
  `home` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `level` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `name_en`, `slug`, `slug_en`, `images`, `banner`, `home`, `status`, `level`, `created_at`, `updated_at`) VALUES
(40, 'Giới thiệu', NULL, 'gioi-thieu', NULL, NULL, '', 1, 1, 0, '2021-09-12 14:07:41', '2021-10-30 01:26:54'),
(41, 'Tin tức', NULL, 'tin-tuc', NULL, NULL, '', 1, 1, 0, '2021-09-12 14:48:22', '2021-10-30 01:27:03'),
(44, 'Lớp đai đen', NULL, 'lop-dai-den', NULL, NULL, '', 1, 1, 0, '2021-11-01 02:08:20', '2021-11-27 15:04:20'),
(45, 'Lớp đai vàng', NULL, 'lop-dai-vang', NULL, NULL, '', 1, 1, 0, '2021-11-21 04:02:06', '2021-11-27 15:04:22'),
(49, 'Báo mới', NULL, 'bao-moi', NULL, NULL, '', 1, 1, 0, '2022-04-05 14:31:42', '2022-04-05 15:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `thundar` varchar(200) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `thundar`, `category_id`, `content`, `create_at`, `update_at`) VALUES
(220, 'Bắt thêm một em gái tỉ phú Trịnh Văn Quyết', 'bat-them-mot-em-gai-ti-phu-trinh-van-quyet', 'abc.jpg', 41, '<p>Bà <a href=\"https://thanhnien.vn/bat-tam-giam-em-gai-ti-phu-trinh-van-quyet-post1445432.html\" title=\"Bắt tạm giam em gái tỉ phú Trịnh Văn Quyết\">Trịnh Thị Thuý Nga</a>, em gái của nguyên Chủ tịch HĐQT Công ty CP Tập đoàn FLC Trịnh Văn Quyết đã bị Bộ Công an bắt giữ để điều tra hành vi thao túng thị trường chứng khoán.</p>\r\n\r\n<p>Ngày 5.4, Cơ quan Cảnh sát điều tra (C01) Bộ Công an đã tống đạt quyết định khởi tố bị can, thực hiện các lệnh khám xét, lệnh bắt bị can để tạm giam đối với bà Trịnh Thị Thuý Nga, Phó tổng giám đốc <a href=\"https://thanhnien.vn/ti-phu-trinh-van-quyet-thoi-gia-chung-khoan-nhu-the-nao-post1443581.html\" title=\"Tỉ phú Trịnh Văn Quyết \'thổi giá\' chứng khoán như thế nào?\">Công ty CP chứng khoán BOS</a>, để điều tra về hành vi thao túng thị trường chứng khoán”, quy định tại điều 211 bộ luật Hình sự.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Bắt thêm một em gái tỉ phú Trịnh Văn Quyết - ảnh 1\" src=\"https://image.thanhnien.vn/w2048/Uploaded/2022/aohpzvu/2022_04_04/3494ae70a823667d3f32-6260.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lực lượng Bộ Công an khám xét trụ sở Tập đoàn FLC và Công ty CP Chứng khoán BOS</p>\r\n\r\n			<p>ĐẬU TIẾN ĐẠT</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Bà Nga là em gái ruột của cựu Chủ tịch FLC <a href=\"https://thanhnien.vn/bo-cong-an-bat-tam-giam-ti-phu-trinh-van-quyet-chu-tich-flc-post1443478.html\">Trịnh Văn Quyết</a>, người vừa bị khởi tố, bắt tạm giam cũng với tội danh thao túng thị trường chứng khoán. Nhiều thông tin cho biết, bà Trịnh Thị Thuý Nga là cổ đông lớn của Công ty CP chứng khoán BOS, đồng thời sở hữu số lượng lớn cổ phiếu của BOS cũng như các cổ phiếu khác thuộc họ FLC.</p>\r\n\r\n<p>Trước đó, chiều 4.4, C01 đã bắt giữ một em gái của ông Trịnh Văn Quyết là bà <a href=\"https://thanhnien.vn/vi-sao-em-gai-ti-phu-trinh-van-quyet-bi-bat-tam-giam-post1445401.html\" title=\"Vì sao em gái tỉ phú Trịnh Văn Quyết bị bắt tạm giam?\">Trịnh Thị Minh Huế </a>để điều tra về tội danh tương tự.</p>\r\n\r\n<p>Bước đầu C01 xác định, bị can Trịnh Văn Quyết và các cá nhân thuộc Công ty CP Tập đoàn FLC, Công ty CP Chứng khoán BOS và các công ty có liên quan đã có các hanh vi che giấu thông tin về hoạt động chứng khoán, gây thiệt hại nghiêm trọng cho nhà đầu tư, ảnh hưởng đến hoạt động của <a href=\"https://thanhnien.vn/tai-chinh-kinh-doanh/chung-khoan/\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"thị trường chứng khoán Việt Nam\">thị trường chứng khoán Việt Nam</a>.</p>\r\n', '2022-04-05 14:36:40', '2022-04-05 14:36:40'),
(221, 'KỆ CARTON DỌC NGANG', 'ke-carton-doc-ngang', 'gile.jpg', 49, 'abcxyz', '2022-04-05 15:19:39', '2022-04-05 15:19:39'),
(222, 'GHẾ LOUNGE TAY VỊN GỖ SỒI', 'ghe-lounge-tay-vin-go-soi', 'abc.jpg', 41, '<p>123456789</p>\r\n', '2022-04-05 15:34:21', '2022-04-05 15:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `created_at`, `update_at`) VALUES
(48, 'Thông Phan', 'thong.phan109@gmail.com', '+84778960401', 'thong.phan109@gmail.com', 'c8837b23ff8aaa8a2dde915473ce0991', NULL, 1, '2021-11-21 04:58:28', '2021-11-21 04:58:28'),
(49, 'Thông Phan', 'thong.phan19@gmail.com', '0778960401', 'K123 hoàng kiếm', 'b537a06cf3bcb33206237d7149c27bc3', '', 1, '2021-11-22 14:31:56', '2021-11-22 14:31:56'),
(50, 'Thông Phan', 'thongpt@gmail.com', '0778960401', 'K123 hoàng kiếm', 'c8837b23ff8aaa8a2dde915473ce0991', '', 1, '2021-11-22 14:32:19', '2021-11-22 14:32:19'),
(51, 'thong', 'thong@gmail.com', '+84778960401', 'K123 hoàng kiếm', 'c8837b23ff8aaa8a2dde915473ce0991', '', 1, '2022-03-24 10:23:13', '2022-03-24 10:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
