-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 03, 2020 lúc 08:53 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bannoithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(10) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `for_admin` bit(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`Id`, `user_name`, `password`, `name`, `phone_number`, `Email`, `address`, `for_admin`, `created_at`, `updated_at`) VALUES
(1, 'Longadmin', '25d55ad283aa400af464c76d713c07ad', 'Long Nguyen', 947816387, 'longnguyennhnd@gmail.com', 'Nghĩa Thịnh - Nghĩa Hưng - Nam Định', b'1', '2020-06-24 03:46:11', '2020-06-23 20:46:11'),
(2, 'admin', '25d55ad283aa400af464c76d713c07ad', 'Long Dep Zai', 947816387, 'longnguyennhnd@gmail.com', 'NĐ', b'0', '2020-05-18 08:12:59', '2020-05-12 14:26:34'),
(3, 'LongNguyen', '25d55ad283aa400af464c76d713c07ad', 'Long Nguyễn', 947816387, 'longnguyennhnd@gmail.com', 'HY', b'0', '2020-07-02 01:28:02', '2020-07-01 18:28:02'),
(4, 'Longuser', 'd41d8cd98f00b204e9800998ecf8427e', 'Long Nguyen', 947816387, 'longnguyennhnd2@gmail.com', 'Viet Nam', b'0', '2020-05-19 08:48:40', '2020-05-19 08:48:40'),
(18, 'LongUser', 'd41d8cd98f00b204e9800998ecf8427e', 'Nguyễn Long', 947816387, 'longnguyennhnd@gmail.com', 'Nghĩa Thịnh - Nghĩa Hưng - Nam Định', b'0', '2020-05-31 03:14:22', '2020-05-31 03:14:22'),
(20, 'longnguyennhnd@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'a', 947816387, 'tttt@gmail.com', 'tttt', b'0', '2020-05-31 04:09:13', '2020-05-31 04:09:13'),
(21, 'LeThang', '12345678', 'Lê Xuân Thắng', 320320832, '', 'Văn Hậu - Văn Giang - Hưng Yên', b'0', '2020-06-23 14:40:45', '2020-06-23 14:40:45'),
(22, 'NgocAnh', '25d55ad283aa400af464c76d713c07ad', 'Hà Ngọc Anh', 853206709, 'hangocanh23@gmail.com', 'xã Hồng Nam - TP Hưng Yên - Hưng Yên', b'0', '2020-06-27 07:21:47', '2020-06-27 07:21:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `Id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `more_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_1` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_2` text COLLATE utf8_unicode_ci NOT NULL,
  `Show_on_home` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`Id`, `title`, `image`, `more_image`, `paragraph_1`, `paragraph_2`, `Show_on_home`, `created_at`, `updated_at`) VALUES
(1, 'Những lưu ý không nên bỏ qua khi dùng đèn trang trí', '/uploads/files/blog-1.jpg', '[\"/uploads/files/bl1.1.jpg\",\"/uploads/files/bl1.2.jpg\"]', '<b>Phòng khách không thể thiếu những chiếc đèn chùm, đèn âm trần, đèn hắt sáng, rọi tranh...</b>\r\n<P>Việc chọn mẫu mã, kiểu dáng của các loại đèn đồng điệu với nội thất sẽ góp phần thể hiện phong cách và gu thẩm mỹ của gia chủ. Điều đó lý giải vì sao những chủ nhân chuộng phong cách cổ điển sẽ sử dụng đèn chùm pha lê lộng lẫy, thay vì sử dụng các loại đèn trần đơn với chao đèn tròn vẫn thường xuyên có mặt trong những căn hộ hiện đại.</p>\r\n<p>Nếu nhà bạn thấp nhỏ, thấp trần và vẫn muốn sử dụng đèn chùm, bạn có thể lựa chọn đèn chùm ngắn, lưu ý khi sử dụng là đèn cần phù phù hợp với đường tô chỉ của trần. Không nên tạo một không gian rối mắt bằng những hoa văn tô chỉ rườm rà và lắp thêm bộ đèn chùm nhiều màu sắc, nhiều bóng, nhiều tầng.</p>\r\n<p>Đèn có kiểu dáng đơn giản sẽ làm cho căn phòng thoáng hơn so với các kiểu đèn rườm rà, diêm dúa. Đối với đèn tường tối đa chỉ nên dùng hai bộ cho một phòng có diện tích lớn, phòng có diện tích nhỏ chỉ nên lắp một bộ.</p>', '<p>Đèn trang trí là nơi rất dễ bám bụi nhưng lại khó lau chùi. Nếu nhà có nhiều bụi bặm, nên tránh sử dụng nhiều đèn trang trí. Để giữ gìn đèn mới và đẹp, bạn có thể tháo gỡ từng chao đèn để lau sạch bui bặm.</p>\r\n<p>Để làm mới không gian với đèn, bạn nên chọn những loại đèn trang trí có giá phù hợp để dễ dàng thay đổi hay chọn loại đèn có sẵn chao đèn để thay thế màu sắc khác sau một thời gian sử dụng.</p>', 1, '2020-06-19 11:12:45', '2020-06-19 11:12:45'),
(3, 'Những thiết kế phòng ngủ mùa đông nhìn là thấy ấm áp', '/uploads/files/blog-2.jpg', '[\"/uploads/files/bl2.1.jpg\",\"/uploads/files/bl2.2.jpg\"]', '<b>Dùng chăn, ga, gối từ chất liệu dày dặn, ấm cúng hơn</b>\r\n<p>Phòng ngủ là nơi cùng bạn chia sẻ tới 1/3 cuộc đời, do vậy, không gian này xứng đáng nhận được sự chăm chút, quan tâm của bạn để luôn ấm cúng, thoải mái, cho bạn những phút giây nghỉ ngơi chất lượng nhất. Thay đổi, bố trí nội thất phòng ngủ theo mùa cũng là một cách làm mới không gian sống, khơi nguồn hứng khởi. Không cần quá phức tạp hay cầu kì, những gợi ý đơn giản dưới đây sẽ giúp bạn bày trí phòng ngủ “nhìn là thấy ấm” dành cho mùa đông.</p>\r\n<p>Những chiếc chăn mỏng dành cho mùa hè, thu giờ đã không còn phù hợp với mùa đông lạnh lẽo sắp tới. Bạn sẽ cần bộ chăn, ga, gối mới bằng các chất liệu giữ nhiệt tốt hơn như bông, len, dạ,… Hãy xếp thêm nhiều gối lên giường để tạo cho không gian cảm giác ấm áp hơn. Nếu không thích những chiếc chăn quá dày và nặng nề, bạn có thể sử dụng kết hợp chăn điện và một chiếc chăn mỏng hơn phủ phía trên, tạo thành nhiều lớp giữ nhiệt mà vẫn đảm bảo cảm giác thoải mái cho giấc ngủ của bạn.</p>', '<b>Trang trí đầu giường theo chủ đề mùa đông</b>\r\n<p>Không chỉ tập trung vào chiếc giường, bạn cũng có thể trang trí những khu vực xung quanh như tường đầu giường, tủ đầu giường,… để tạo không khí ấm cúng cho tổng thể phòng ngủ. Ví dụ, với những chiếc giường bằng kim loại, phần đầu giường có thể mang đến cảm giác lạnh lẽo. Cách khắc phục đơn giản, ít tốn kém nhất là bạn hãy phủ lên đó một chiếc chăn hoặc treo thảm lên phần tường phía trên đầu giường sao cho thảm phủ xuống che kín phần kim loại. Ngoài ra, bạn có sơn phần tường này màu tối, thậm chí màu đen để tạo cảm giác bí ẩn, an toàn và thân mật cho không gian mùa đông. Treo một bức tranh nghệ thuật có hình ảnh ngọn lửa cũng là một gợi ý đáng cân nhắc.</p>', 1, '2020-06-19 11:15:51', '2020-06-19 11:15:51'),
(5, 'Phong cách tối giản cho tổ ấm của bạn thêm hiện đại và sang chảnh', '/uploads/files/blog-3.jpg', '[\"/uploads/files/bl3.1.jpg\",\"/uploads/files/bl3.2.jpg\"]', '<p>Căn hộ với không gian tinh tế pha trộn giữa phong cách Bắc Âu và phong cách hiện đại chắc chắn bạn sẽ “lòi” ra ý tưởng ngay lập tức!</p>\r\n<p>Các tone màu sử dụng trong ngôi nhà chủ yếu là trắng, xám và nâu đất, xen lẫn vào đó là những gam màu đậm của những mẫu hoa văn tinh tế, chúng không chỉ làm nổi bật các tone màu của hoa văn mà còn làm cho ngôi nhà thêm phần sang trọng.</p>', '<p><i>Phòng khách sáng sủa với những tia sáng tự nhiên từ bên ngoài rọi vào, càng làm cho không gian thêm phần thông thoáng. Chiếc ghế sofa màu xám nổi bật trên nền trắng, bố trí trên thảm lông trải sàn làm tăng thêm vẻ sang trọng cho căn phòng. Từng chi tiết trang trí như tranh, rèm cửa, nến và những vật trang trí trên bàn đều rất “đắt giá”, khiến căn phòng tưởng như nhàm chán trở nên lôi cuốn.</i></p><p><i>Phòng khách còn có lò sưởi, một thiết kế đậm phong cách Bắc Âu.</i><br><i>Bên góc phòng là khu vực dành cho góc làm việc. Bàn làm việc bày trí đơn giản nhưng vần nổi bật nhờ gam màu đen trên nền tường trắng.</i></p><p>&nbsp;</p>', 1, '2020-06-19 11:16:32', '2020-06-19 11:16:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`Id`, `productid`, `name`, `email`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Long Nguyen', 'longnguyennhnd@gmail.com', 4, 'Sản phẩm rất đẹp và chất lượng', '2020-06-06 11:00:02', '2020-06-06 11:00:02'),
(3, 1, 'Lê Xuân Thắng', 'lxthanghy@gmail.com', 5, 'Đẹp quá xóp ơi', '2020-06-06 04:08:11', '2020-06-06 04:08:11'),
(5, 2, 'Hà Ngọc Anh', 'hangocanh23@gmail.com', 5, 'Đẹp quá!', '2020-06-06 06:32:42', '2020-06-06 06:32:42'),
(7, 2, 'Ẩn danh', 'andanh@gmail.com', 2, 'Chưa ưng ý', '2020-06-06 07:15:37', '2020-06-06 07:15:37'),
(8, 2, 'Ký víp pro', 'phamvanky@gmail.com', 3, 'Tạm', '2020-06-06 07:16:45', '2020-06-06 07:16:45'),
(9, 1, 'Nguoi tieu dung', 'nguyenvana@gmail.com', 4, 'San pham rat chat luong', '2020-06-14 07:27:32', '2020-06-14 07:27:32'),
(10, 8, 'Nê Thuân Thắng', 'lxthanghy@gmail.com', 5, 'Dep wa sop oi', '2020-06-21 04:18:03', '2020-06-21 04:18:03'),
(14, 8, 'Long Nguyen', 'longnguyennhnd@gmail.com', 5, 'Tuyệt', '2020-06-27 03:38:49', '2020-06-27 03:38:49'),
(15, 50, 'Nguyen Long', 'longnguyennhnd@gmail.com', 5, 'Rat dep', '2020-06-29 21:43:13', '2020-06-29 21:43:13'),
(16, 3, 'Long Nguyen', 'longnguyennhnd@gmail.com', 5, 'Rat dep', '2020-06-30 09:26:42', '2020-06-30 09:26:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_order`
--

CREATE TABLE `import_order` (
  `Id` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `total_bill` double NOT NULL,
  `create_date` datetime NOT NULL,
  `total_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_order_detail`
--

CREATE TABLE `import_order_detail` (
  `Id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `import_orderID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `Id` int(11) NOT NULL,
  `id_acc` int(11) DEFAULT NULL,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `total_money` double NOT NULL,
  `shipping_address` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`Id`, `id_acc`, `name`, `Email`, `phone_number`, `total_money`, `shipping_address`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Nghĩa Thịnh - Nghĩa Hưng - Nam Định', 'Đã thanh toán', '2020-06-30 16:50:40', '2020-06-30 16:50:40'),
(4, 4, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã thanh toán', '2020-05-22 08:39:52', '2020-05-22 08:39:52'),
(5, 19, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Nghĩa Thịnh - Nghĩa Hưng - Nam Định', 'Đã thanh toán', '2020-06-30 16:50:41', '2020-06-30 16:50:41'),
(6, 18, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Chưa thanh toán', '2020-05-24 08:39:52', '2020-05-24 08:39:52'),
(7, 18, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Chưa thanh toán', '2020-05-27 08:39:54', '2020-05-27 08:39:54'),
(8, 4, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã huỷ', '2020-05-28 09:24:41', '2020-05-28 09:24:41'),
(9, 4, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã thanh toán', '2020-05-28 08:39:54', '2020-05-28 08:39:54'),
(10, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã huỷ', '2020-05-29 09:32:32', '2020-05-29 09:32:32'),
(11, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã huỷ', '2020-05-29 09:34:19', '2020-05-29 09:34:19'),
(12, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã thanh toán', '2020-06-27 09:37:16', '2020-06-27 09:37:16'),
(13, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 54350000, 'Viet Nam', 'Đã huỷ', '2020-07-02 01:27:36', '2020-07-02 01:27:36'),
(14, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Đã thanh toán', '2020-06-27 09:39:34', '2020-06-27 09:39:34'),
(15, 3, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Đã thanh toán', '2020-06-27 09:38:08', '2020-06-27 09:38:08'),
(16, 18, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Đã huỷ', '2020-06-30 16:40:14', '2020-06-30 16:40:14'),
(17, 4, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Đã thanh toán', '2020-07-01 13:15:04', '2020-07-01 13:15:04'),
(18, 18, 'Long Nguyen', 'longnguyennhnd2@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Chưa giao', '2020-06-19 08:41:43', '2020-06-23 14:47:41'),
(19, 18, 'Long Nguyen', 'tttt@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Chưa giao', '2020-06-23 14:48:54', '2020-06-20 14:47:41'),
(25, 19, 'Long Nguyen', 'kkk@gmail.com', '0947816387', 23780000, 'Viet Nam', 'Chưa giao', '2020-06-20 08:41:43', '2020-06-23 14:48:54'),
(26, 4, 'Long Nguyen', 'longnguyennhnd@gmail.com', '0947816387', 16990000, 'Viet Nam', 'Chưa giao', '2020-06-20 08:43:23', '2020-06-23 14:48:54'),
(27, 18, 'Long Nguyen', 'longnguyennhnd@gmail.com', '0947816387', 6919000, 'Nghĩa Thịnh - Nghĩa Hưng - Nam Định', 'Chưa giao hàng', '2020-06-21 08:43:23', '2020-06-23 14:48:55'),
(28, 19, 'Hà Ngọc Anh', 'emailtestda@gmail.com', '0853206709', 17490000, 'xã Hồng Nam - TP Hưng Yên - Hưng Yên', 'Đã thanh toán', '2020-06-27 09:35:33', '2020-06-27 09:35:33'),
(29, 18, 'Lê Xuân Thắng', 'emailtestda@gmail.com', '0348384847', 60080000, 'xã Đại Tần - Văn Giang - Hưng Yên', 'Chưa giao hàng', '2020-06-22 08:43:24', '2020-06-22 08:43:24'),
(30, 3, 'Long', 'longnguyennhnd@gmail.com', '947816387', 16019000, 'NĐ', 'Đã thanh toán', '2020-06-23 09:08:23', '2020-06-23 09:08:23'),
(31, 3, 'Long Nguyễn', 'longnguyennhnd@gmail.com', '947816387', 19880000, 'NĐ', 'Chưa xác thực', '2020-06-29 21:36:23', '2020-06-29 21:36:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `Id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total_money` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`Id`, `productID`, `orderID`, `quantity`, `price`, `total_money`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 16990000, 33980000, '2020-05-20 07:23:35', '2020-05-20 07:23:35'),
(2, 8, 3, 3, 6790000, 20370000, '2020-05-20 07:23:35', '2020-05-20 07:23:35'),
(3, 1, 4, 2, 16990000, 33980000, '2020-05-20 07:27:40', '2020-05-20 07:27:40'),
(4, 8, 4, 3, 6790000, 20370000, '2020-05-20 07:27:40', '2020-05-20 07:27:40'),
(5, 1, 5, 2, 16990000, 33980000, '2020-05-20 07:27:48', '2020-05-20 07:27:48'),
(6, 8, 5, 3, 6790000, 20370000, '2020-05-20 07:27:49', '2020-05-20 07:27:49'),
(7, 1, 6, 2, 16990000, 33980000, '2020-05-20 07:28:35', '2020-05-20 07:28:35'),
(8, 8, 6, 3, 6790000, 20370000, '2020-05-20 07:28:35', '2020-05-20 07:28:35'),
(9, 1, 7, 2, 16990000, 33980000, '2020-05-20 07:28:42', '2020-05-20 07:28:42'),
(10, 8, 7, 3, 6790000, 20370000, '2020-05-20 07:28:42', '2020-05-20 07:28:42'),
(11, 1, 8, 2, 16990000, 33980000, '2020-05-20 07:29:52', '2020-05-20 07:29:52'),
(12, 8, 8, 3, 6790000, 20370000, '2020-05-20 07:29:53', '2020-05-20 07:29:53'),
(26, 8, 15, 1, 6790000, 6790000, '2020-05-20 07:50:05', '2020-05-20 07:50:05'),
(27, 1, 16, 1, 16990000, 16990000, '2020-05-20 07:51:40', '2020-05-20 07:51:40'),
(28, 8, 16, 1, 6790000, 6790000, '2020-05-20 07:51:40', '2020-05-20 07:51:40'),
(29, 1, 17, 1, 16990000, 16990000, '2020-05-20 07:53:48', '2020-05-20 07:53:48'),
(30, 8, 17, 1, 6790000, 6790000, '2020-05-20 07:53:49', '2020-05-20 07:53:49'),
(31, 1, 18, 1, 16990000, 16990000, '2020-05-20 07:55:20', '2020-05-20 07:55:20'),
(32, 8, 18, 1, 6790000, 6790000, '2020-05-20 07:55:20', '2020-05-20 07:55:20'),
(33, 1, 19, 1, 16990000, 16990000, '2020-05-20 07:55:39', '2020-05-20 07:55:39'),
(43, 1, 25, 1, 16990000, 16990000, '2020-05-22 09:33:53', '2020-05-22 09:33:53'),
(44, 8, 25, 1, 6790000, 6790000, '2020-05-22 09:33:54', '2020-05-22 09:33:54'),
(45, 1, 26, 1, 16990000, 16990000, '2020-05-24 01:32:09', '2020-05-24 01:32:09'),
(46, 8, 27, 1, 6790000, 6790000, '2020-05-24 20:56:35', '2020-05-24 20:56:35'),
(47, 11, 27, 1, 129000, 129000, '2020-05-24 20:56:37', '2020-05-24 20:56:37'),
(48, 18, 28, 1, 9900000, 9900000, '2020-06-02 02:39:31', '2020-06-02 02:39:31'),
(49, 20, 28, 1, 7590000, 7590000, '2020-06-02 02:39:31', '2020-06-02 02:39:31'),
(50, 1, 29, 1, 16990000, 16990000, '2020-06-02 02:43:36', '2020-06-02 02:43:36'),
(51, 2, 29, 1, 13290000, 13290000, '2020-06-02 02:43:36', '2020-06-02 02:43:36'),
(52, 15, 29, 2, 14900000, 29800000, '2020-06-02 02:43:37', '2020-06-02 02:43:37'),
(53, 3, 30, 1, 9229000, 9229000, '2020-06-22 01:32:03', '2020-06-22 01:32:03'),
(54, 8, 30, 1, 6790000, 6790000, '2020-06-22 01:32:06', '2020-06-22 01:32:06'),
(55, 50, 31, 2, 5490000, 10980000, '2020-06-29 21:36:24', '2020-06-29 21:36:24'),
(56, 62, 31, 1, 8900000, 8900000, '2020-06-29 21:36:26', '2020-06-29 21:36:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategories`
--

CREATE TABLE `productcategories` (
  `Id` int(11) NOT NULL,
  `themeID` int(11) NOT NULL,
  `category_name` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL,
  `Note` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productcategories`
--

INSERT INTO `productcategories` (`Id`, `themeID`, `category_name`, `Image`, `Note`, `updated_at`, `created_at`) VALUES
(2, 1, 'Giường ngủ', '/uploads/files/giuong.jpg', '<p>v</p>', '2020-06-06 02:12:35', '2020-05-10 12:13:19'),
(3, 2, 'Ghế văn phòng', '/uploads/files/ghevanphong.jpg', '<p>Khoong</p>', '2020-06-06 02:11:54', '2020-05-10 12:13:19'),
(4, 2, 'Bàn làm việc', '/uploads/files/banvanphong.jpg', '<p>ttttt</p>', '2020-06-06 02:09:38', '2020-05-10 12:13:19'),
(5, 2, 'Tủ hồ sơ', '/uploads/files/ghevanphong.jpg', '<p>n</p>', '2020-06-06 02:17:40', '2020-05-10 12:13:19'),
(7, 1, 'Sofa', '/uploads/files/sofa.jpg', '<p>b</p>', '2020-06-06 02:16:08', '2020-05-10 12:13:19'),
(8, 1, 'Kệ sách', '/uploads/files/kesach.png', '<p>b</p>', '2020-06-06 02:14:58', '2020-05-10 12:13:19'),
(9, 1, 'Tủ quần áo', '/uploads/files/tuquanao.png', '<p>b</p>', '2020-06-06 02:18:47', '2020-05-10 12:13:19'),
(10, 1, 'Nệm', '/uploads/files/nem.jpg', '<p>v</p>', '2020-06-06 02:15:46', '2020-05-10 12:13:19'),
(11, 1, 'Đôn mềm', '/uploads/files/donmem.jpg', '<p>b</p>', '2020-06-06 02:19:10', '2020-05-10 12:13:19'),
(12, 1, 'Kệ TV', '/uploads/files/keTV.jpg', '<p>b</p>', '2020-06-06 02:15:21', '2020-05-10 12:13:19'),
(13, 1, 'Giường trẻ em', '/uploads/files/giuongtreem.jpg', '<p>v</p>', '2020-06-06 02:14:23', '2020-05-10 12:13:19'),
(14, 1, 'Tủ kê đầu giường', '/uploads/files/tukedaugiuong.jpg', '<p>b</p>', '2020-06-06 02:18:25', '2020-05-10 12:13:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `ProductName` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Sale_price` float NOT NULL,
  `Date_sale` date NOT NULL,
  `Image` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'product_',
  `more_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `material` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `upholstery_material` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `size` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Discontinue` tinyint(1) NOT NULL,
  `Show_on_home` tinyint(1) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`Id`, `categoryID`, `ProductName`, `Price`, `Sale_price`, `Date_sale`, `Image`, `more_image`, `Quantity`, `material`, `upholstery_material`, `color`, `size`, `Discontinue`, `Show_on_home`, `SupplierID`, `description`, `created_at`, `updated_at`) VALUES
(1, 7, 'Sofa dài Fabric', 16990000, 16099000, '2020-07-07', '/uploads/files/1_1.jpg', '[\"/uploads/files/1_2.jpg\",\"/uploads/files/1_3.jpg\",\"/uploads/files/1_4.jpg\",\"/uploads/files/product_1.jpg\"]', 7, 'Gỗ lim', 'Pha trộn polyester', '[\"Trắng sữa\"]', 'D93xW212xH89', 0, 1, 1, '<p>Thêm chiếc ghế sofa này như một vật trung tâm sang trọng giúp phòng khách của bạn cảm thấy ấm cúng, hoặc đặt trong phòng trò chơi cho các đêm chiếu phim và các giải đấu trò chơi video mà cả gia đình có thể thưởng thức.</p>', '2020-06-27 10:12:05', '2020-06-27 10:12:05'),
(2, 7, 'Sofa đôi Uptown', 13290000, 12699000, '2020-07-07', '/uploads/files/2_1.jpg', '[\"/uploads/files/2_2.jpg\",\"/uploads/files/20_3.jpg\",\"/uploads/files/2_4.jpg\",\"/uploads/files/product_2.jpg\"]', 7, 'Gỗ xoan', 'Pha trộn polyester', '[\"Trắng sữa\"]', 'D93xW212xH89', 0, 0, 2, '<p>Phong cách và vượt thời gian, ghế sofa hiện đại này tăng thêm sự quyến rũ cho bất kỳ không gian sống nào. Được xây dựng từ gỗ cao su rắn châu Á, sợi nhỏ, vải lanh và đệm sang trọng, hỗ trợ, chiếc ghế sofa này sẽ vẫn là một bổ sung đẹp cho ngôi nhà của bạn trong nhiều năm.</p>', '2020-06-30 16:39:02', '2020-06-30 09:39:02'),
(3, 7, 'Sofa Đôi Leather', 9229000, 8490000, '2020-07-03', '/uploads/files/3_1.jpg', '[\"/uploads/files/3_2.jpg\",\"/uploads/files/3_3.jpg\",\"/uploads/files/3_4.jpg\",\"/uploads/files/product_3.jpg\"]', 6, 'Gỗ bạch đàn', 'Pha trộn polyester', '[\"Đen\",\"Trắng sữa\"]', 'D93xW212xH89', 0, 1, 2, 'Sự sắp xếp chỗ ngồi bằng da này từ iNSPIRE Q® Modern sẽ tạo ra một không khí tinh tế và sang trọng trong mọi phòng khách hoặc gia đình.', '2020-06-27 10:12:05', '2020-06-27 10:12:05'),
(4, 7, 'Sofa dài Upholstered', 7990000, 7429000, '2020-07-10', '/uploads/files/4_1.jpg', '[\"/uploads/files/4_2.jpg\",\"/uploads/files/4_3.jpg\",\"/uploads/files/4_4.jpg\",\"/uploads/files/product_4.jpg\"]', 4, 'Gỗ lim', 'Pha trộn polyester', '[\"Trắng sữa\"]', 'D93xW212xH89', 0, 0, 2, 'Ghế sofa bập bênh từ Nội thất Best Master này là một cách đơn giản để thêm chỗ ngồi hiện đại, thoải mái cho phòng khách của bạn. Chiếc ghế dài này có trong sự lựa chọn của bạn về bọc màu xám hoặc màu be với búi nút thanh lịch và trang trí đầu móng tay.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(5, 7, 'Sofa Canisbay', 19679000, 18569000, '2020-07-05', '/uploads/files/5_1.jpg', '[\"/uploads/files/5_2.jpg\",\"/uploads/files/5_3.jpg\",\"/uploads/files/5_4.jpg\",\"/uploads/files/product_5.jpg\"]', 5, 'Gỗ mun', 'Pha trộn polyester', '[\"Trắng sữa\"]', 'D93xW212xH89', 0, 0, 2, 'Làm tròn sự quyến rũ ngoạn mục của phòng khách của bạn và gây ấn tượng với khách của bạn bằng một trung tâm phản ánh hương vị hoàn hảo của bạn trong đồ nội thất.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(6, 2, 'Giường ngủ Wingback', 5569000, 5959000, '2020-06-30', '/uploads/files/product_6.jpg', '[\"/uploads/files/6_1.jpg\",\"/uploads/files/6_2.jpg\",\"/uploads/files/6_3.jpg\",\"/uploads/files/6_4.jpg\"]', 4, 'Gỗ Chò Chỉ', 'Pha trộn polyester', 'Trắng sữa, Đen', 'D90xW220xH40/82', 0, 0, 1, 'Mang một yếu tố của phong cách cổ điển vào phòng ngủ của bạn với Giường Upholstered Brookside Bella. Chiếc giường thanh lịch này có mặt dày và đường ray chân kết thúc với một đầu giường bằng kim cương có cánh.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(7, 2, 'Giường ngủ Brookside', 7889000, 7289000, '2020-07-07', '/uploads/files/product_7.jpg', '[\"/uploads/files/7_1.jpg\",\"/uploads/files/7_2.jpg\",\"/uploads/files/7_3.jpg\",\"/uploads/files/7_4.jpg\"]', 3, 'Gỗ Trắc', 'Pha trộn polyester', '[\"Đen\",\"Trắng sữa\"]', 'D93xW212xH89', 0, 0, 4, 'Mang thiên nhiên vào trong nhà và hoàn thiện phòng ngủ của bạn với một chiếc giường gỗ cổ điển có sẵn với nhiều màu sắc khác nhau. Giường này có nhiều tông màu tự nhiên khác nhau, cộng với Màu trắng để dễ dàng phù hợp với bất kỳ phòng nào trong nhà bạn.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(8, 2, 'Giường Ngủ Upholstered', 6790000, 6190000, '2020-07-20', '/uploads/files/product_8.jpg', '[\"/uploads/files/8_1.jpg\",\"/uploads/files/8_2.jpg\",\"/uploads/files/8_3.jpg\",\"/uploads/files/8_4.jpg\"]', 19, 'Gỗ Sưa', 'Pha trộn polyester', '[\"Đen\",\"Trắng sữa\"]', 'D90xW220xH40/82', 0, 1, 2, 'Giường ngủ Sara Upholstered của Brookside kết hợp độ bền chức năng và phong cách vượt thời gian để mang đến cho bạn một chiếc giường đẹp cho bất kỳ phòng ngủ nào trong nhà bạn.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(9, 2, 'Giường ngủ Tickrelson', 7890000, 6190000, '2020-07-09', '/uploads/files/product_9.jpg', '[\"/uploads/files/9_1.jpg\",\"/uploads/files/9_2.jpg\",\"/uploads/files/9_3.jpg\",\"/uploads/files/9_4.jpg\"]', 7, 'Gỗ Xoan', 'Pha trộn polyester', '[\"Đen\",\"Trắng sữa\"]', 'D90xW220xH40/82', 0, 0, 4, 'Nội thất chất lượng tốt nhất Đồ nội thất nút trên bảng điều khiển Tufted bảng điều khiển làm cho một tuyên bố đáng kể.', '2020-06-27 10:12:06', '2020-06-27 10:12:06'),
(10, 2, 'Giường ngủ Caldwellsy', 7890000, 7189000, '2020-07-10', '/uploads/files/product_10.jpg', '[\"/uploads/files/10_1.jpg\",\"/uploads/files/10_2.jpg\",\"/uploads/files/10_3.jpg\",\"/uploads/files/10_4.jpg\"]', 5, 'Gỗ Mun', 'Pha trộn polyester', '[\"Đen\",\"Trắng sữa\"]', 'D90xW220xH40/82', 1, 0, 4, 'Caldwell Bed by Glory thất là một bổ sung đẹp cho phòng ngủ của bạn. Giường có đầu giường bọc nệm, bọc trong một loại màu sắc.', '2020-06-27 10:13:43', '2020-06-27 10:13:43'),
(11, 8, 'Kệ sách Ogzewalla', 1629000, 1190000, '2020-07-02', '/uploads/files/11_1.jpg', '[\"/uploads/files/product_11.jpg\",\"/uploads/files/11_2.jpg\",\"/uploads/files/11_3.jpg\",\"/uploads/files/11_4.jpg\"]', 2, 'Gỗ Xoan', 'Không', '[\"Đen\",\"Trắng sữa\"]', 'D90xW220xH40/82', 0, 0, 1, 'Hiện đại rõ rệt với một số nét công nghiệp, kệ sách này là một cách sắc nét và phong cách để chứa các tập yêu thích của bạn.', '2020-06-27 10:13:44', '2020-06-27 10:13:44'),
(12, 8, 'Kệ Sách Etagere', 2490000, 1990000, '2020-07-01', '/uploads/files/12_1.jpg', '[\"/uploads/files/product_12.jpg\",\"/uploads/files/12_2.jpg\",\"/uploads/files/12_3.jpg\",\"/uploads/files/12_4.jpg\"]', 2, 'Gỗ Xoan ', 'Không', '[\"Đen\"]', 'D90xW220xH40/82', 0, 1, 3, 'Mạnh mẽ và thiết thực, tủ sách công nghiệp là một bổ sung được chào đón cho bất kỳ nhà hoặc văn phòng. Tủ sách trưng bày này đưa thiết kế nhà hoặc văn phòng của bạn lên một tầm cao mới trong khi giữ cho bạn ngăn nắp.', '2020-06-27 10:13:44', '2020-06-27 10:13:44'),
(13, 8, 'Kệ sách Yulton', 7290000, 6899000, '2020-07-03', '/uploads/files/product_13.jpg', '[\"/uploads/files/13_1.jpg\",\"/uploads/files/13_2.jpg\",\"/uploads/files/13_3.jpg\",\"/uploads/files/13_4.jpg\"]', 4, 'Inox', 'Không', '[\"Nâu\"]', 'D90xW220xH40/82', 0, 0, 4, 'Cho dù cảm giác thiết kế của bạn là nhà nông thôn hay trang trại hiện đại, kệ lưu trữ gỗ Yulton là một lựa chọn sang trọng cho nhà bếp và hơn thế nữa.', '2020-06-27 10:13:44', '2020-06-27 10:13:44'),
(14, 8, 'Kệ sách Asymmetrical', 7490000, 6890000, '2020-07-05', '/uploads/files/product_14.jpg', '[\"/uploads/files/14_1.jpg\",\"/uploads/files/14_2.jpg\",\"/uploads/files/14_3.jpg\",\"/uploads/files/14_4.jpg\"]', 5, '', 'Không', '[\"Nâu\"]', 'D90xW220xH40/82', 1, 0, 2, 'Đặt các mảnh trang trí yêu thích của bạn trên màn hình cho tất cả các mắt để xem. Etagere kim loại màu đen mờ tuyệt đẹp này có khung kim loại bất đối xứng với kính cường lực mạnh mẽ, tạo ra một màn hình hiển thị của các hộp bóng trong kệ.', '2020-06-27 10:13:44', '2020-06-27 10:13:44'),
(15, 8, 'Kệ sách Contemporary', 14900000, 14300000, '2020-07-03', '/uploads/files/product_15.jpg', '[\"/uploads/files/15_1.jpg\",\"/uploads/files/15_2.jpg\",\"/uploads/files/15_3.jpg\",\"/uploads/files/15_4.jpg\"]', 2, 'Gỗ Chò Chỉ', 'Không', '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 0, 4, 'Lưu trữ các mặt hàng hoặc hiển thị các mảnh trang trí trên kệ năm tầng này. Được làm bằng gỗ veneer ấm áp và bù đắp với chân được hoàn thiện bằng vàng, kệ trưng bày này trông thật đáng yêu với trang trí hiện đại của bạn.', '2020-06-27 10:13:44', '2020-06-27 10:13:44'),
(16, 14, 'Tủ kê đầu giường Lingerie', 5690000, 4990000, '2020-07-02', '/uploads/files/16_1.jpg', '[\"/uploads/files/16_2.jpg\",\"/uploads/files/product_16.jpg\",\"/uploads/files/16_3.jpg\",\"/uploads/files/16_4.jpg\"]', 2, 'Gỗ Mun', NULL, '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 0, 1, 'Ngăn kéo cổ điển này là giải pháp lưu trữ hoàn hảo cho mọi căn phòng.', '2020-06-24 03:08:39', '2020-06-24 03:08:39'),
(17, 14, 'Tủ kê đầu giườngh Lingerie', 7290000, 6499000, '2020-07-04', '/uploads/files/product_17.jpg', '[\"/uploads/files/17_1.jpg\",\"/uploads/files/17_2.jpg\",\"/uploads/files/17_3.jpg\",\"/uploads/files/17_4.jpg\"]', 8, 'Gỗ Lim', NULL, '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 0, 4, 'Chiếc tủ kê đầu giường này đã sẵn sàng để hoàn thành theo bất cứ cách nào bạn muốn. Tác phẩm này có năm ngăn kéo với các đường trượt Euro và kết cấu vững chắc.', '2020-06-24 03:08:39', '2020-06-24 03:08:39'),
(18, 14, 'Tủ kê đầu giường Safavieh', 9900000, 9190000, '2020-07-04', '/uploads/files/product_18.jpg', '[\"/uploads/files/18_1.jpg\",\"/uploads/files/18_2.jpg\",\"/uploads/files/18_3.jpg\",\"/uploads/files/18_4.jpg\"]', 4, 'Gỗ Trắc', NULL, '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 0, 2, 'Các đường cong tối giản theo phong cách châu Á của chiếc rương 3 ngăn hiện đại này ngay lập tức cập nhật bất kỳ phòng khách nào. Được chế tác bằng gỗ thông, lớp vỏ màu xanh đậm của nó được bổ sung bởi những chiếc nhẫn bằng vàng tinh xảo.', '2020-06-24 03:08:40', '2020-06-24 03:08:40'),
(19, 14, 'Tủ kê đầu giườngKolcraft', 6790000, 5759000, '2020-07-07', '/uploads/files/product_19.jpg', '[\"/uploads/files/19_1.jpg\",\"/uploads/files/19_2.jpg\",\"/uploads/files/19_3.jpg\",\"/uploads/files/19_4.jpg\"]', 4, 'Gỗ Gụ', NULL, '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 0, 4, 'Tủ quần áo chuyển tiếp 3 ngăn kéo Kolcraft cung cấp nhiều không gian lưu trữ trong khi mang lại sự quyến rũ đơn giản cho bất kỳ phòng nào bạn chọn. Tủ quần áo chuyển tiếp đơn giản này là dễ dàng để lắp ráp.', '2020-06-24 03:08:40', '2020-06-24 03:08:40'),
(20, 14, 'Tủ Kê Đầu Giường Chest Dresser', 7590000, 6990000, '2020-07-03', '/uploads/files/product_20.jpg', '[\"/uploads/files/20_1.jpg\",\"/uploads/files/20_2.jpg\",\"/uploads/files/20_3.jpg\",\"/uploads/files/20_4.jpg\"]', 3, 'Gỗ Trắc', 'Không', '[\"Đen\",\"Trắng sữa\",\"Nâu\"]', 'D58xW60xH45', 0, 1, 2, 'Một rương bốn ngăn kéo thẳng đứng Tiết kiệm không gian với rương thẳng đứng này, mà không từ bỏ lưu trữ trong phòng ngủ. Các ngăn kéo xếp chồng lên nhau cung cấp cho bạn tất cả các phòng bạn cần để sắp xếp quần áo.', '2020-06-27 10:16:08', '2020-06-27 10:16:08'),
(25, 3, 'Ghế văn phòng Leather', 5900000, 5300000, '2020-07-06', '/uploads/files/product_21.jpg', '[\"/uploads/files/21_1.jpg\",\"/uploads/files/21_2.jpg\",\"/uploads/files/21_3.jpg\",\"/uploads/files/21_4.jpg\"]', 9, 'Inox', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 3, 'Đây là một chiếc ghế rất đẹp. Điều chỉnh chiều cao, thoải mái nhưng chắc chắn và không quá khó để kết hợp với nhau. Bạn sẽ cần một người thứ hai để giữ nó trong khi bạn vặn ốc vít', '2020-06-24 03:08:40', '2020-06-24 03:08:40'),
(27, 3, 'Ghế văn phòng Gratic', 3890000, 3590000, '2020-07-12', '/uploads/files/product_22.jpg', '[\"/uploads/files/22_1.jpg\",\"/uploads/files/22_2.jpg\",\"/uploads/files/22_3.jpg\",\"/uploads/files/22_4.jpg\"]', 4, 'Inox', NULL, '[\"Nâu\"]', 'D30xW60xH48', 0, 0, 2, 'Gặp khó khăn trong suy nghĩ của CEO khi làm việc tại nhà? Có lẽ một sự điều chỉnh trong môi trường sống là theo thứ tự; Chức năng đáp ứng hình thức độc đáo tuyệt vời trong ghế văn phòng bọc nệm truyền thống này.', '2020-06-24 03:11:24', '2020-06-24 03:11:24'),
(28, 3, 'Ghế văn phòng Fabric Molded', 2980000, 2490000, '2020-07-10', '/uploads/files/product_23.jpg', '[\"/uploads/files/23_1.jpg\",\"/uploads/files/23_2.jpg\",\"/uploads/files/23_3.jpg\",\"/uploads/files/23_4.jpg\"]', 6, 'Inox', NULL, '[\"Sáng xanh\",\"Đen\"]', 'D30xW60xH48', 0, 0, 2, 'Đặt lên văn phòng của bạn với chiếc ghế văn phòng cổ điển này.', '2020-06-24 03:11:24', '2020-06-24 03:11:24'),
(29, 3, 'Ghế văn phòng Fabric Office 2', 1890000, 1490000, '2020-07-04', '/uploads/files/product_24.jpg', '[\"/uploads/files/24_1.jpg\",\"/uploads/files/24_2.jpg\",\"/uploads/files/24_3.jpg\",\"/uploads/files/24_4.jpg\"]', 7, 'Nhựa', NULL, '[\"Sáng xanh\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 1, 'Chiếc ghế này rất đẹp và tôi thích rằng cả hai cánh tay giơ lên ​​để được ngồi! màu sắc cũng rất đẹp rất thoải mái', '2020-06-24 03:11:25', '2020-06-24 03:11:25'),
(30, 3, 'Ghế văn phòng Mohave', 6590000, 590000, '2020-07-03', '/uploads/files/product_25.jpg', '[\"/uploads/files/25_1.jpg\",\"/uploads/files/25_2.jpg\",\"/uploads/files/25_3.jpg\",\"/uploads/files/25_4.jpg\"]', 3, 'Sợi vải', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 2, 'Đây là một chiếc ghế rất đẹp. Điều chỉnh chiều cao, thoải mái nhưng chắc chắn và không quá khó để kết hợp với nhau. Bạn sẽ cần một người thứ hai để giữ nó trong khi bạn vặn ốc vít.', '2020-06-24 03:11:25', '2020-06-24 03:11:25'),
(31, 10, 'Ghế văn phòng Mattress', 5390000, 4980000, '2020-07-10', '/uploads/files/product_26.jpg', '[\"/uploads/files/26_1.jpg\",\"/uploads/files/26_2.jpg\",\"/uploads/files/26_3.jpg\",\"/uploads/files/26_4.jpg\"]', 6, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 2, 'Nệm được thiết kế để làm cho cột sống của bạn thoải mái hơn khi bạn đang ngủ. Với nhiều lớp bọt, bạn sẽ có được điểm giảm áp, điều chỉnh nhiệt độ và hỗ trợ bạn cần.', '2020-06-24 03:11:25', '2020-06-24 03:11:25'),
(32, 10, 'Ghế văn phòng LUCID', 5900000, 5490000, '2020-07-08', '/uploads/files/product_27.jpg', '[\"/uploads/files/27_1.jpg\",\"/uploads/files/27_2.jpg\",\"/uploads/files/27_3.jpg\",\"/uploads/files/27_4.jpg\"]', 6, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 1, 'Thư giãn trong hỗ trợ làm mát khi bạn ngủ trên chiếc nệm xốp nhớ Lucid Comfort Collection này. Hai inch trên cùng được thấm gel và thông gió để nhanh chóng phân tán nhiệt, và lớp trung bình vững chắc mang đến cho cơ thể bạn sự hỗ trợ tuyệt vời trong đêm.', '2020-06-24 03:11:26', '2020-06-24 03:11:26'),
(33, 10, 'Ghế văn phòng LUCID 2', 8900000, 8590000, '2020-07-04', '/uploads/files/product_28.jpg', '[\"/uploads/files/28_1.jpg\",\"/uploads/files/28_2.jpg\",\"/uploads/files/28_3.jpg\",\"/uploads/files/28_4.jpg\"]', 6, 'Gỗ Lim', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 3, 'Lucid Comfort Collection 12 Inch Gel Infuse Memory Bọt Nệm cung cấp một bồn rửa sâu hơn và cảm giác vừa phải cho người ngủ ngửa.', '2020-06-24 03:11:26', '2020-06-24 03:11:26'),
(34, 10, 'Nệm Memory Foam', 7490000, 6980000, '2020-07-09', '/uploads/files/product_29.jpg', '[\"/uploads/files/29_1.jpg\",\"/uploads/files/29_2.jpg\",\"/uploads/files/29_3.jpg\",\"/uploads/files/29_4.jpg\"]', 5, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 1, 'Ngủ xa nhà trở nên ấm cúng và thoải mái hơn bao giờ hết, với một chút trợ giúp từ chiếc nệm êm ái Chọn Luxury này.', '2020-06-24 03:11:26', '2020-06-24 03:11:26'),
(35, 10, 'Nệm Cloud Memory', 6490000, 5980000, '2020-07-06', '/uploads/files/product_30.jpg', '[\"/uploads/files/30.1.jpg\",\"/uploads/files/30.2.jpg\",\"/uploads/files/30.3.jpg\",\"/uploads/files/30.4.jpg\"]', 8, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 2, 'Chúng tôi đã thiết kế bộ sưu tập nệm Cloud Memory với vỏ bọc sang trọng và có sự kết hợp độc đáo của các lớp bọt mang lại cảm giác sang trọng như đám mây.', '2020-06-24 03:11:27', '2020-06-24 03:11:27'),
(36, 10, 'Nệm Green Tea', 5900000, 5490000, '2020-07-05', '/uploads/files/product_31.jpg', '[\"/uploads/files/31.1.jpg\",\"/uploads/files/31.2.jpg\",\"/uploads/files/31.3.jpg\",\"/uploads/files/31.4.jpg\"]', 7, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 1, 'Mát mẻ và thoải mái, nệm bọt nhớ gel Priage này được truyền với chiết xuất trà xanh tự nhiên để đảm bảo giấc ngủ sảng khoái mỗi đêm.', '2020-06-24 03:14:33', '2020-06-24 03:14:33'),
(37, 10, 'Nệm  Memory Foam 2', 6490000, 6190000, '2020-07-08', '/uploads/files/product_32.jpg', '[\"/uploads/files/32.1.jpg\",\"/uploads/files/32.2.jpg\",\"/uploads/files/32.3.jpg\",\"/uploads/files/32.4.jpg\"]', 3, 'Sợi vải', NULL, '[\"Trắng sữa\"]', 'D30xW60xH20', 0, 0, 2, 'Nâng cao trải nghiệm hàng đêm của bạn với nệm xốp 6 inch này. Bọt nhớ của Crown Comfort cung cấp một bề mặt ngủ tuyệt vời.', '2020-06-24 03:14:33', '2020-06-24 03:14:33'),
(38, 5, 'Tủ hồ sơ Lateral', 5490000, 5190000, '2020-07-12', '/uploads/files/product_33.jpg', '[\"/uploads/files/33.1.jpg\",\"/uploads/files/33.2.jpg\",\"/uploads/files/33.3.jpg\",\"/uploads/files/33.4.jpg\"]', 7, 'Gỗ Sưa', NULL, '[\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 2, 'Sắc nét, cổ điển và quyến rũ, tủ hồ sơ này là một phần đặc biệt của không gian làm việc nhà của bạn.', '2020-06-24 03:14:33', '2020-06-24 03:14:33'),
(39, 5, 'Tủ hồ sơ Rustic ', 5490000, 5190000, '2020-07-04', '/uploads/files/product_34.jpg', '[\"/uploads/files/34.1.jpg\",\"/uploads/files/34.2.jpg\",\"/uploads/files/34.3.jpg\",\"/uploads/files/34.4.jpg\"]', 5, 'Gỗ Lim', NULL, '[\"Nâu\",\"Đen\"]', 'D30xW60xH48', 0, 0, 1, 'Sắp xếp và bảo vệ các tệp và tài liệu của bạn trong khi thêm một số ký tự mộc mạc vào văn phòng tại nhà của bạn với tủ hồ sơ 2 ngăn kéo gỗ óc chó cổ điển này của FOA.', '2020-06-24 03:14:33', '2020-06-24 03:14:33'),
(40, 5, 'Tủ hồ sơ Bradley', 7890000, 7590000, '2020-07-05', '/uploads/files/product_35.jpg', '[\"/uploads/files/35.1.jpg\",\"/uploads/files/35.2.jpg\",\"/uploads/files/35.3.jpg\",\"/uploads/files/35.4.jpg\"]', 4, 'Gỗ Mun', NULL, '[\"Nâu\",\"Đen\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 1, 'Tủ hồ sơ hai ngăn kéo nhỏ này là một bổ sung thuận tiện và phong cách cho bất kỳ phòng hoặc văn phòng. Nó có tay cầm tủ nửa mặt trăng để bạn có thể mở dễ dàng, nó có kích thước hoàn hảo cho các tệp có kích thước chữ và có một trong ba màu.', '2020-06-24 03:14:34', '2020-06-24 03:14:34'),
(41, 5, 'Tủ hồ sơ Lowbridge', 8900000, 8590000, '2020-07-06', '/uploads/files/product_36.jpg', '[\"/uploads/files/36.1.jpg\",\"/uploads/files/36.2.jpg\",\"/uploads/files/36.3.jpg\",\"/uploads/files/36.4.jpg\"]', 8, 'Gỗ Mun', NULL, '[\"Nâu\",\"Đen\"]', 'D30xW60xH48', 0, 0, 4, 'Thêm vẻ đẹp và phong cách cho ngôi nhà của bạn với tủ hồ sơ màu đen cổ điển này', '2020-06-24 03:14:34', '2020-06-24 03:14:34'),
(42, 5, 'Tủ hồ sơ Lateral 2', 6490000, 6190000, '2020-07-08', '/uploads/files/product_37.jpg', '[\"/uploads/files/37.1.jpg\",\"/uploads/files/37.2.jpg\",\"/uploads/files/37.3.jpg\",\"/uploads/files/37.4.jpg\"]', 8, 'Gỗ Trắc', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 3, 'Nắm bắt phong cách độc đáo của thiết kế hiện đại giữa thế kỷ và tận hưởng lưu trữ rộng rãi.', '2020-06-24 03:14:34', '2020-06-24 03:14:34'),
(43, 5, 'Tủ hồ sơ Logan', 5900000, 5700000, '2020-07-12', '/uploads/files/product_38.jpg', '[\"/uploads/files/38.1.jpg\",\"/uploads/files/38.2.jpg\",\"/uploads/files/38.3.jpg\",\"/uploads/files/38.4.jpg\"]', 6, 'Gỗ Xoan Đào', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 2, 'Đặt các chi tiết hoàn thiện vào thiết kế lại văn phòng tại nhà với tính chất linh hoạt, chức năng, phong cách của tủ hồ sơ bên Logan. Nó được thiết kế lý tưởng để giữ giấy tờ và các phụ kiện có trong đó.', '2020-06-24 03:14:34', '2020-06-24 03:14:34'),
(44, 5, 'Tủ hồ sơ Copper', 5900000, 5700000, '2020-07-09', '/uploads/files/product_39.jpg', '[\"/uploads/files/39.1.jpg\",\"/uploads/files/39.2.jpg\",\"/uploads/files/39.3.jpg\",\"/uploads/files/39.4.jpg\"]', 4, 'Gỗ Mun', NULL, '[\"Nâu\",\"Đen\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 0, 2, 'Đối với bất kỳ nhà hoặc văn phòng, lưu trữ mở rộng và truy cập tập tin ngón tay luôn luôn có ích. Trải ra một cách thông minh bằng cách mở rộng diện tích bề mặt bàn của bạn với Tủ tệp ngăn kéo 2 chiều cao làm việc này.', '2020-06-24 03:14:34', '2020-06-24 03:14:34'),
(45, 5, 'Tủ hồ sơ Chesty', 5900000, 5700000, '2020-07-07', '/uploads/files/product_40.jpg', '[\"/uploads/files/40.1.jpg\",\"/uploads/files/40.2.jpg\",\"/uploads/files/40.3.jpg\",\"/uploads/files/40.4.jpg\"]', 8, 'Gỗ Lim', 'Không', '[\"Nâu\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 1, 2, 'Thêm bộ lưu trữ dưới bàn làm việc vào không gian làm việc của bạn với Tủ hồ sơ Bush Business Office 500 3 Ngăn kéo.', '2020-06-27 10:17:11', '2020-06-27 10:17:11'),
(46, 9, 'Tủ quần áo Greenport', 5900000, 5700000, '2020-07-06', '/uploads/files/product_41.jpg', '[\"/uploads/files/41.1.jpg\",\"/uploads/files/41.2.jpg\",\"/uploads/files/41.3.jpg\",\"/uploads/files/41.4.jpg\"]', 6, 'Gỗ Thông', NULL, '[\"Trắng sữa\"]', 'D31xW21xH61', 0, 0, 1, 'Gỗ thông rắn từ rừng tái tạo làm cho khung armoire này có độ bền cao và thân thiện với môi trường.', '2020-06-24 03:14:35', '2020-06-24 03:14:35'),
(47, 9, 'Tủ quần áo Armoire', 5900000, 5700000, '2020-07-06', '/uploads/files/product_42.jpg', '[\"/uploads/files/42.1.jpg\",\"/uploads/files/42.2.jpg\",\"/uploads/files/41.3.jpg\",\"/uploads/files/42.4.jpg\"]', 5, 'Gỗ Thông', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D31xW21xH61', 0, 0, 1, 'Các núm kim loại hấp dẫn, lớp hoàn thiện phong phú và phong cách Shaker thanh lịch: chiếc Armoire trông có giá này có những gì nó cần để mang đến cho phòng ngủ của bạn sự tinh tế.', '2020-06-24 03:17:51', '2020-06-24 03:17:51'),
(48, 9, 'Tủ quần áo Wardrobe', 5900000, 5700000, '2020-07-03', '/uploads/files/product_43.jpg', '[\"/uploads/files/43.1.jpg\",\"/uploads/files/43.2.jpg\",\"/uploads/files/43.3.jpg\",\"/uploads/files/43.4.jpg\"]', 6, 'Gỗ Thông', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D31xW21xH61', 0, 0, 2, 'Giữ toàn bộ tủ quần áo của bạn được sắp xếp trong tủ quần áo Acapella này từ Nội thất South Shore.', '2020-06-24 03:17:53', '2020-06-24 03:17:53'),
(49, 9, 'Tủ quần áo Hiund', 6790000, 6190000, '2020-07-01', '/uploads/files/product_44.jpg', '[\"/uploads/files/44.1.jpg\",\"/uploads/files/44.2.jpg\",\"/uploads/files/44.3.jpg\",\"/uploads/files/44.4.jpg\"]', 6, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'D31xW21xH61', 0, 0, 4, 'Mange và bảo tồn không gian lưu trữ với chiếc ghế bành hai cửa Greenport này của Grain Wood Furniture. Gỗ thông rắn từ rừng tái tạo làm cho khung armoire này có độ bền cao và thân thiện với môi trường.', '2020-06-24 03:17:54', '2020-06-24 03:17:54'),
(50, 9, 'Tủ Quần Áo Armoire 2', 5490000, 5190000, '2020-07-08', '/uploads/files/product_45.jpg', '[\"/uploads/files/45.1.jpg\",\"/uploads/files/45.2.jpg\",\"/uploads/files/45.3.jpg\",\"/uploads/files/45.4.jpg\"]', 2, 'Gỗ Lim', 'Không', '[\"Nâu\"]', 'D60xH72xW22', 0, 1, 3, 'Sắp xếp quần áo của bạn trong chiếc áo giáp thời trang này từ Nội thất gỗ.', '2020-06-30 04:36:25', '2020-06-29 21:36:25'),
(51, 9, 'Tủ quần áo Espresso', 7290000, 6980000, '2020-07-05', '/uploads/files/product_46.jpg', '[\"/uploads/files/46.1.jpg\",\"/uploads/files/46.2.jpg\",\"/uploads/files/46.3.jpg\",\"/uploads/files/46.4.jpg\"]', 8, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'D41xH72xW22', 0, 0, 4, 'Tủ quần áo này có phong cách truyền thống hiện đại để tạo ra một trang trí vượt thời gian, trong khi thêm nhiều kho lưu trữ với hai cửa lớn và hai ngăn kéo rộng rãi. Được làm bằng gỗ thông, tủ quần áo tùy chỉnh này có cấu trúc chắc chắn.', '2020-06-24 03:17:55', '2020-06-24 03:17:55'),
(52, 9, 'Tủ quần áo Contemporary', 9229000, 8980000, '2020-07-04', '/uploads/files/product_47.jpg', '[\"/uploads/files/47.1.jpg\",\"/uploads/files/47.2.jpg\",\"/uploads/files/47.3.jpg\",\"/uploads/files/47.4.jpg\"]', 7, 'Gỗ Thông', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D41xH72xW22', 0, 0, 1, 'Quản lý lưu trữ quần áo hiệu quả với tủ Rikke. Ba kệ có thể điều chỉnh, bốn kệ cố định và một thanh treo cho phép tổ chức quần áo, giày dép và phụ kiện hiệu quả.', '2020-06-24 03:17:55', '2020-06-24 03:17:55'),
(53, 9, 'Tủ quần áo Carson', 7490000, 7189000, '2020-07-07', '/uploads/files/product_48.jpg', '[\"/uploads/files/48.1.jpg\",\"/uploads/files/48.2.jpg\",\"/uploads/files/48.3.jpg\",\"/uploads/files/48.4.jpg\"]', 5, 'Gỗ Thông', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D41xH72xW22', 0, 0, 4, 'Gjovik nổi bật với màu xám đau khổ tuyệt đẹp và chân gỗ hoàn thiện tự nhiên theo phong cách hiện đại giữa thế kỷ sẽ thêm phần hông, nét quyến rũ cổ điển cho không gian của bạn.', '2020-06-24 03:17:55', '2020-06-24 03:17:55'),
(54, 4, 'Bàn làm việc Storage', 6490000, 6190000, '2020-07-07', '/uploads/files/product_49.jpg', '[\"/uploads/files/49.1.jpg\",\"/uploads/files/49.2.jpg\",\"/uploads/files/49.3.jpg\",\"/uploads/files/49.4.jpg\"]', 7, 'Gỗ Thông', NULL, '[\"Trắng sữa\"]', 'W54xH32xD23', 0, 0, 4, 'Với vẻ ngoài phong phú với sự tinh tế của ngôi nhà nông thôn, chiếc bàn văn phòng này là một phần quyến rũ trong không gian làm việc tại nhà của bạn.', '2020-06-24 03:17:56', '2020-06-24 03:17:56'),
(55, 4, 'Bàn làm việc Avenue', 9229000, 8980000, '2020-07-06', '/uploads/files/product_50.jpg', '[\"/uploads/files/50.1.jpg\",\"/uploads/files/50.2.jpg\",\"/uploads/files/50.3.jpg\",\"/uploads/files/50.4.jpg\"]', 9, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W54xH32xD23', 0, 0, 4, 'Nhân đôi không gian làm việc của bạn với Bàn làm việc Avenue Greene Brenner Creek L. Bề mặt hình chữ L lớn của Bàn cung cấp cho bạn nhiều chỗ cho máy tính, máy in, đồ dùng văn phòng và vật dụng cá nhân.', '2020-06-24 03:17:57', '2020-06-24 03:17:57'),
(56, 4, 'Bàn làm việc Hatfield', 7290000, 6890000, '2020-07-05', '/uploads/files/product_51.jpg', '[\"/uploads/files/51.1.jpg\",\"/uploads/files/51.2.jpg\",\"/uploads/files/51.3.jpg\",\"/uploads/files/51.4.jpg\"]', 7, 'Gỗ Thông', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'W54xH32xD23', 0, 0, 3, 'Kiểu dáng đẹp, sang trọng và tinh tế, bàn viết này là một phần đặc biệt trong không gian làm việc tại nhà của bạn.', '2020-06-24 03:17:57', '2020-06-24 03:17:57'),
(57, 4, 'Bàn làm việc Gratic', 8900000, 8490000, '2020-07-02', '/uploads/files/product_52.jpg', '[\"/uploads/files/52.1.jpg\",\"/uploads/files/52.2.jpg\",\"/uploads/files/52.3.jpg\",\"/uploads/files/52.4.jpg\"]', 7, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W54xH32xD23', 0, 0, 2, 'Với thiết kế sắc nét, đẹp trai và khả năng lưu trữ phong phú, bộ văn phòng này là một phần quyến rũ trong không gian làm việc tại nhà của bạn.', '2020-06-24 03:17:57', '2020-06-24 03:17:57'),
(58, 4, 'Bàn làm việc Superday', 7290000, 6899000, '2020-07-10', '/uploads/files/product_53.jpg', '[\"/uploads/files/53.1.jpg\",\"/uploads/files/53.2.jpg\",\"/uploads/files/53.3.jpg\",\"/uploads/files/53.4.jpg\"]', 9, 'Gỗ Lim', NULL, '[\"Nâu\",\"Đen\"]', 'W54xH32xD23', 0, 0, 4, 'Bạn thích kiểu dáng đẹp, tối giản của bàn đứng, nhưng một phòng lưu trữ thêm sẽ có ích. May mắn thay, bàn văn phòng hình chữ L này là lựa chọn nhỏ gọn và an toàn cho doanh nghiệp hoặc văn phòng tại nhà.', '2020-06-24 03:25:19', '2020-06-24 03:25:19'),
(59, 4, 'Bàn làm việc Credenza', 7290000, 6990000, '2020-07-06', '/uploads/files/product_54.jpg', '[\"/uploads/files/54.1.jpg\",\"/uploads/files/54.2.jpg\",\"/uploads/files/54.3.jpg\",\"/uploads/files/54.4.jpg\"]', 9, 'Gỗ Thông', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'W54xH32xD23', 0, 0, 2, 'Bàn làm việc của Bush Business Studio C 60W Credenza cung cấp cho bạn một không gian làm việc vừa phải với thiết kế chắc chắn và hoàn thiện mới mẻ mà bạn sẽ yêu thích.', '2020-06-24 03:25:20', '2020-06-24 03:25:20'),
(60, 4, 'Bàn làm việc Copper 2', 14900000, 14590000, '2020-07-07', '/uploads/files/product_55.jpg', '[\"/uploads/files/55.1.jpg\",\"/uploads/files/55.2.jpg\",\"/uploads/files/55.3.jpg\",\"/uploads/files/55.4.jpg\"]', 9, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W54xH32xD23', 0, 0, 2, 'Tạo một văn phòng tại nhà đầy phong cách, thiết thực và có tổ chức với Bàn máy tính có ngăn kéo này. Bề mặt làm việc rộng rãi cho phép bạn trải ra với máy tính xách tay, giấy tờ, máy in và nhiều thứ khác có chỗ trống.', '2020-06-24 03:25:20', '2020-06-24 03:25:20'),
(61, 4, 'Bàn làm việc Bennington', 9229000, 8980000, '2020-07-08', '/uploads/files/product_56.jpg', '[\"/uploads/files/56.1.jpg\",\"/uploads/files/56.2.jpg\",\"/uploads/files/56.3.jpg\",\"/uploads/files/56.4.jpg\"]', 8, 'Gỗ Lim', NULL, '[\"Nâu\"]', 'W54xH32xD23', 0, 0, 3, 'Cập nhật không gian làm việc của bạn với sự quyến rũ và sang trọng của Bàn làm việc của Bennington Collection Manager từ kathy ireland® Home của Bush Nội thất.', '2020-06-24 03:25:21', '2020-06-24 03:25:21'),
(62, 12, 'Kệ TV Carson', 8900000, 8590000, '2020-06-20', '/uploads/files/product_57.jpg', '[\"/uploads/files/57.1.jpg\",\"/uploads/files/57.2.jpg\",\"/uploads/files/57.3.jpg\",\"/uploads/files/57.4.jpg\"]', 8, 'Ván ép', 'Không', '[\"Nâu\",\"Trắng sữa\"]', 'W70xH32xD23', 0, 1, 2, 'Phô trương một kệ kính cường lực ở kệ mở trung tâm, lưu trữ kín ở cả hai bên và mở quản lý dây khoan trước ở phía sau, bảng điều khiển này là hoàn hảo cho các thành phần phương tiện hoặc trang trí của bạn.', '2020-06-30 04:36:26', '2020-06-29 21:36:26'),
(63, 12, 'Kệ TV Bolton', 7290000, 6990000, '2020-07-04', '/uploads/files/product_58.jpg', '[\"/uploads/files/58.1.jpg\",\"/uploads/files/58.2.jpg\",\"/uploads/files/58.3.jpg\",\"/uploads/files/58.4.jpg\"]', 7, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W70xH32xD23', 0, 0, 2, 'Nắm bắt sự tinh tế của kệ tivi này từ Strick & Bolton.', '2020-06-24 03:25:21', '2020-06-24 03:25:21'),
(64, 12, 'Kệ TV Barn', 7290000, 6890000, '2020-07-04', '/uploads/files/product_59.jpg', '[\"/uploads/files/59.1.jpg\",\"/uploads/files/59.2.jpg\",\"/uploads/files/59.3.jpg\",\"/uploads/files/59.4.jpg\"]', 6, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W70xH32xD23', 0, 0, 4, 'Sự nhạy cảm của thiết kế ven biển đáp ứng sự ấm áp của trang trại sang trọng trong bảng điều khiển giải trí quyến rũ này.', '2020-06-24 03:25:21', '2020-06-24 03:25:21'),
(65, 12, 'Kệ TV Helena', 5900000, 5700000, '2020-07-04', '/uploads/files/product_60.jpg', '[\"/uploads/files/60.1.jpg\",\"/uploads/files/60.2.jpg\",\"/uploads/files/60.3.jpg\",\"/uploads/files/60.4.jpg\"]', 9, 'Gỗ Thông', NULL, '[\"Nâu\"]', 'W70xH32xD23', 0, 0, 1, 'Kiểu dáng đẹp và thiết thực, chân đế TV Helena là một bàn điều khiển đa năng sẽ nâng cao trang trí của bạn.', '2020-06-24 03:25:21', '2020-06-24 03:25:21'),
(66, 12, 'Kệ TV Nictify', 7290000, 6990000, '2020-07-03', '/uploads/files/product_61.jpg', '[\"/uploads/files/61.1.jpg\",\"/uploads/files/61.2.jpg\",\"/uploads/files/61.3.jpg\",\"/uploads/files/61.4.jpg\"]', 8, 'Gỗ Thông', NULL, '[\"Đen\",\"Trắng sữa\"]', 'W70xH32xD23', 0, 0, 1, 'Tìm kiếm một giao diện điều khiển TV độc đáo với cảm giác gia truyền? Gặp gỡ TV Console 52 \"lấy cảm hứng từ bào chế thuốc của chúng tôi.', '2020-06-24 03:25:22', '2020-06-24 03:25:22'),
(67, 12, 'Kệ TV Carson 2', 7490000, 7189000, '2020-07-09', '/uploads/files/product_62.jpg', '[\"/uploads/files/62.1.jpg\",\"/uploads/files/62.2.jpg\",\"/uploads/files/62.3.jpg\",\"/uploads/files/62.4.jpg\"]', 8, 'Gỗ Thông', 'Không', '[\"Nâu\",\"Đen\"]', 'W70xH32xD23', 0, 0, 1, 'Cập nhật phòng giải trí của bạn với bảng điều khiển TV 58 \"này. Được xây dựng bằng gỗ cao cấp, gỗ dán và kính cường lực, bảng điều khiển này có hai cửa, ba kệ có thể điều chỉnh và sẽ chứa hầu hết các TV màn hình phẳng lên đến 58 inch.', '2020-06-27 10:18:26', '2020-06-27 10:18:26'),
(68, 12, 'Kệ TV Asymmetrical', 6290000, 5959000, '2020-07-07', '/uploads/files/product_63.jpg', '[\"/uploads/files/63.1.jpg\",\"/uploads/files/63.2.jpg\",\"/uploads/files/63.3.jpg\",\"/uploads/files/63.4.jpg\"]', 4, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W70xH32xD23', 0, 0, 3, 'Không đối xứng, tinh tế, sang trọng - bảng điều khiển TV Carson Carrington 60 \"này sẽ đưa thiết kế phòng khách của bạn lên một tầm cao mới.', '2020-06-24 03:29:00', '2020-06-24 03:29:00'),
(69, 12, 'Kệ TV Beaverhead', 6290000, 5900000, '2020-07-08', '/uploads/files/product_64.jpg', '[\"/uploads/files/64.1.jpg\",\"/uploads/files/64.2.jpg\",\"/uploads/files/64.3.jpg\",\"/uploads/files/64.4.jpg\"]', 8, 'Gỗ Thông', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'W70xH32xD23', 0, 0, 1, 'Kick up your feet, relax on the sofa and binge-watch your favorite films and TV episodes in front of this 70\" TV console.', '2020-06-24 03:29:00', '2020-06-24 03:29:00'),
(70, 12, 'Kệ TV Beaverhead', 7290000, 6890000, '2020-07-10', '/uploads/files/product_65.jpg', '[\"/uploads/files/65.1.jpg\",\"/uploads/files/65.2.jpg\",\"/uploads/files/65.3.jpg\",\"/uploads/files/65.4.jpg\"]', 8, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'W70xH32xD23', 0, 0, 3, 'Nhảy lên, thư giãn trên ghế sofa và xem các bộ phim và tập phim truyền hình yêu thích của bạn trước bảng điều khiển TV 70 \"này.', '2020-06-24 03:29:01', '2020-06-24 03:29:01'),
(71, 12, 'Kệ TV Furniture', 13290000, 12980000, '2020-07-11', '/uploads/files/product_66.jpg', '[\"/uploads/files/66.1.jpg\",\"/uploads/files/66.2.jpg\",\"/uploads/files/66.3.jpg\",\"/uploads/files/66.4.jpg\"]', 5, 'Gỗ Thông', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'W70xH32xD23', 0, 0, 1, 'Với không gian cho tối đa bốn máy chơi game và thiết bị đa phương tiện, kệ tivi hiện đại này chắc chắn sẽ tạo nên một tuyên bố táo bạo cho ngôi nhà của bạn.', '2020-06-24 03:29:01', '2020-06-24 03:29:01'),
(72, 2, 'Giường ngủ Burstrusy', 8900000, 8590000, '2020-07-12', '/uploads/files/product_67.jpg', '[\"/uploads/files/67.1.jpg\",\"/uploads/files/67.2.jpg\",\"/uploads/files/67.3.jpg\",\"/uploads/files/67.4.jpg\"]', 9, 'Gỗ', NULL, '[\"Nâu\",\"Trắng sữa\"]', 'W70xH32xD23', 0, 0, 1, 'Giường lưu trữ bọc đệm Brookside ™ Anna có ngăn kéo mang phong cách cổ điển và chức năng tiện lợi cho mọi căn phòng. Đường ray bên bọc nệm dày chảy liền mạch vào một đầu giường chần kim cương cho một cái nhìn gắn kết, bạn có thể xây dựng căn phòng của bạn xung quanh.', '2020-06-24 03:31:46', '2020-06-24 03:31:46'),
(73, 2, 'Giường ngủ Ingitended', 9229000, 8980000, '2020-07-06', '/uploads/files/product_68.jpg', '[\"/uploads/files/68.1.jpg\",\"/uploads/files/68.2.jpg\",\"/uploads/files/68.3.jpg\",\"/uploads/files/68.4.jpg\"]', 8, 'Gỗ Thông', NULL, '[\"Nâu\",\"Đen\"]', 'D70xH32xW50', 0, 0, 4, 'Nội thất chất lượng tốt nhất Đồ nội thất nút trên bảng điều khiển Tufted làm cho một tuyên bố đáng kể.', '2020-06-24 03:33:24', '2020-06-24 03:33:24'),
(74, 2, 'Giường ngủ Industrial', 5900000, 5700000, '2020-07-10', '/uploads/files/product_69.jpg', '[\"/uploads/files/69.1.jpg\",\"/uploads/files/69.2.jpg\",\"/uploads/files/69.3.jpg\",\"/uploads/files/69.4.jpg\"]', 7, 'Gỗ', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D70xH32xW50', 0, 0, 3, 'Cập nhật phòng ngủ của bạn với giường nền phong cách này.', '2020-06-24 03:29:01', '2020-06-24 03:29:01'),
(75, 2, 'Giường ngủ Bresty', 7290000, 6899000, '2020-07-09', '/uploads/files/product_70.jpg', '[\"/uploads/files/70.1.jpg\",\"/uploads/files/70.2.jpg\",\"/uploads/files/70.3.jpg\",\"/uploads/files/70.4.jpg\"]', 9, 'Gỗ, bọc', NULL, '[\"Đen\",\"Trắng sữa\"]', 'D70xH32xW50', 0, 0, 1, 'Thức dậy cảm thấy thư giãn và sảng khoái với chiếc giường thoải mái này, được làm từ kim loại bền, lâu dài. Tự hào với một thiết kế đuôi sâu hấp dẫn, đầu giường được bọc bằng nhung polyester mềm mại, lãng mạn.', '2020-06-24 03:29:01', '2020-06-24 03:29:01'),
(86, 5, 'Sản phẩm 3', 5900000, 5700000, '2020-07-16', '/uploads/files/1_3.jpg', '[\"/uploads/files/10_2.jpg\",\"/uploads/files/10_3.jpg\"]', 21, 'Gỗ Thông', 'Pha trộn polyester', '[\"Sáng xanh\",\"Nâu\"]', 'D30xW60xH48', 0, 0, 1, '<p>fdhdhfudf</p>', '2020-07-01 13:12:35', '2020-07-01 06:12:35'),
(87, 9, 'testpro11', 5900000, 5700000, '2020-07-09', '/uploads/files/1_1.jpg', '[\"/uploads/files/1_2.jpg\",\"/uploads/files/1_3.jpg\"]', 7, 'Gỗ Thông', 'Pha trộn polyester', '[\"Nâu\",\"Trắng sữa\"]', 'D30xW60xH48', 0, 1, 1, '<p>khoogf</p>', '2020-07-02 01:31:28', '2020-07-01 18:31:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `Id` int(11) NOT NULL,
  `image` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `Id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`Id`, `name`, `phone_number`, `Email`, `address`) VALUES
(1, 'Nhà cung cấp 1', 947816387, 'ncc1@gmail.com', 'Mỹ Hào - Hưng Yên'),
(2, 'Nhà cung cấp 2', 320320832, 'ncc2@gmail.com', 'Yên Mỹ - Hưng Yên'),
(3, 'Nhà cung cấp 3', 948537274, 'ncc3@gmail.com', 'Đống Đa - Hà Nội'),
(4, 'Nhà cung cấp 4', 430848481, 'ncc4@gmail.com', 'Quốc Oai - Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `themes`
--

CREATE TABLE `themes` (
  `Id` int(11) NOT NULL,
  `theme_name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `themes`
--

INSERT INTO `themes` (`Id`, `theme_name`, `description`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'NỘI THẤT GIA ĐÌNH', 'Nội thất gia đình bao gồm các loại nội thất như: Giường, Nệm, Bàn, Ghế, Tủ,... giành cho gia đình', 'banner2.jpg', '2020-06-09 14:21:49', '2020-06-09 14:21:49'),
(2, 'NỘI THẤT VĂN PHÒNG', 'Nội thất văn phòng bao gồm các loại nội thất như: Bàn làm việc đơn. bàn làm việc nhiều người, bàn làm việc cho giám đốc, tủ, kệ... giành cho văn phòng', 'banner1.jpg', '2020-06-09 14:21:59', '2020-06-09 14:21:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `Id` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`Id`, `id_acc`, `id_pro`, `created_at`, `updated_at`) VALUES
(1, 18, 32, '2020-06-27 15:34:28', '2020-06-27 15:34:07'),
(3, 3, 3, '2020-06-27 08:37:35', '2020-06-27 08:37:35'),
(30, 3, 8, '2020-06-28 19:13:44', '2020-06-28 19:13:44'),
(31, 3, 1, '2020-06-29 21:43:55', '2020-06-29 21:43:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idproduct` (`productid`);

--
-- Chỉ mục cho bảng `import_order`
--
ALTER TABLE `import_order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supplierID` (`supplierID`);

--
-- Chỉ mục cho bảng `import_order_detail`
--
ALTER TABLE `import_order_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `productID` (`productID`),
  ADD KEY `import_orderID` (`import_orderID`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_acc` (`id_acc`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Chỉ mục cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `themeID` (`themeID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TypeID` (`categoryID`),
  ADD KEY `SupplierID` (`SupplierID`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_acc` (`id_acc`),
  ADD KEY `id_pro` (`id_pro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `import_order`
--
ALTER TABLE `import_order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `import_order_detail`
--
ALTER TABLE `import_order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `themes`
--
ALTER TABLE `themes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`Id`);

--
-- Các ràng buộc cho bảng `import_order`
--
ALTER TABLE `import_order`
  ADD CONSTRAINT `import_order_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `suppliers` (`Id`);

--
-- Các ràng buộc cho bảng `import_order_detail`
--
ALTER TABLE `import_order_detail`
  ADD CONSTRAINT `import_order_detail_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `import_order_detail_ibfk_2` FOREIGN KEY (`import_orderID`) REFERENCES `import_order` (`Id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_acc`) REFERENCES `accounts` (`Id`);

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `order` (`Id`);

--
-- Các ràng buộc cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  ADD CONSTRAINT `productcategories_ibfk_1` FOREIGN KEY (`themeID`) REFERENCES `themes` (`Id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `productcategories` (`Id`);

--
-- Các ràng buộc cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`id_acc`) REFERENCES `accounts` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
