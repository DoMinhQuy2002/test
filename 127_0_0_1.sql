-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2021 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdulich`
--
CREATE DATABASE IF NOT EXISTS `webdulich` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webdulich`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dulich`
--

CREATE TABLE `dulich` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dulich`
--

INSERT INTO `dulich` (`id`, `product_code`, `title`, `price`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Miền Bắc', 'Tour Sapa', 8199000, 'img/sapa1.jpg', '<div class=\"boxTour\" id=\"flag2\" style=\"margin: 0px 0px 40px; padding: 0px; color: rgb(51, 51, 51); font-family: Muli, sans-serif;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; font-size: 20px; line-height: 30px; font-weight: 700; color: rgb(102, 102, 102); border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><span class=\"fa-map-o\" style=\"padding-left: 30px; position: relative;\">Lịch trình</span></div><div class=\"content\" style=\"margin: 0px; padding: 0px;\"><div class=\"listDay\" style=\"margin: 0px; padding: 0px 0px 0px 30px; position: relative;\"><div class=\"day active\" style=\"margin: 0px 0px 15px; padding: 0px;\"><div class=\"titDay\" style=\"margin: 0px; padding: 0px; font-weight: 700; position: relative; cursor: pointer;\"><span style=\"color: rgb(237, 0, 128);\">NGÀY 1 |</span>&nbsp;Công Viên Kỳ Quan Thế Giới - Làng Nổi Tân Lập - Con Đường Xuyên Rừng Tràm Đẹp Nhất Việt Nam</div><div class=\"contDay\" style=\"margin: 0px; padding: 0px;\"><div class=\"the-content desc\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"></p><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial; text-align: justify;\">Khởi hành đi Long An, trên đường Quý khách sẽ nghe thuyết minh về những địa danh nổi tiếng của vùng đất Long An như rượu đế Gò Đen, gạo nàng thơm Chợ Đào, Bến Lức, …&nbsp;</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px; text-align: justify;\">Quý khách dừng chân dùng bữa sáng (chi phí tự túc)</li><li style=\"margin: 0px; padding: 0px; text-align: justify;\">Đến Làng Nổi Tân Lập – được xem là một trong những điểm du lịch sinh thái mới nhất tại Long An, với hệ thống rừng tràm nguyên sinh với những đầm hoa súng tạo nên phong cảnh tuyệt đẹp. Quý khách sẽ khám phá con đường bê tông xuyên rừng tràm, giữa những con đường là những đầm hoa súng, đầm sen khoe sắc, những bãi bèo tai chuột xanh mướt điểm xuyết đóa rong vàng li ti, thỉnh thoảng nghe âm thanh vui tai của tiếng chim hót đặc trưng của vùng này như cò, bìm bịp, cồng cộc,… Đặc biệt Quý khách còn có thể trải nghiệm ngắm nhìn toàn cảnh rừng tràm từ trên những đài quan sát trên cao phòng tầm mắt ra xa với bạt ngàn là màu xanh bao la hung vĩ.&nbsp;<br>&nbsp;</li></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"></p><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"></p><div style=\"margin: 0px; padding: 0px; text-align: justify;\">Trưa Quý khách dùng bữa trưa với các đặc sản độc đáo của vùng nước nổi.&nbsp;</div><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px; text-align: justify;\">Đoàn ngồi xuồng ba lá len lỏi vào rừng tràm, tận hưởng cảm giác lênh đênh trên sông nước, thưởng ngoạn không khí yên bình nơi đây.&nbsp;</li><li style=\"margin: 0px; padding: 0px; text-align: justify;\">Đoàn khởi hành về TP.HCM. Kết thúc chuyến đi, chia tay đoàn và hẹn gặp lại Quý khách.</li></ul><div style=\"margin: 0px; padding: 0px; text-align: justify;\"><br><span style=\"font-weight: 700;\">Lưu ý khi tham gia tour:&nbsp;</span><br>✓ Quý khách vui lòng giữ khoảng cách và đảm bảo nguyên tắc 5K, khử khuẩn trong suốt hành trình.<br>✓ Vận chuyển không quá 50% số ghế, không quá 20 khách/1 xe (bao gồm cả tài xế), tuân thủ ngồi giãn cách trên xe, các điểm tham quan, ăn uống… và đeo khẩu trang suốt quá trình di chuyển.<br>✓ Thẻ xanh covid (khách đã tiêm vaccine ngừa covid đủ liều, thời gian hoàn tất mũi 2 trước 14 ngày và không quá 12 tháng), khách là FO đã khỏi bệnh (có giấy chứng nhận của Sở Y Tế và không quá 06 tháng).<br>✓ Xét nghiệm covid theo yêu cầu của từng tỉnh vào thời điểm đặt dịch vụ. Vui lòng liên hệ với nhân viên tư vấn để biết thêm chi tiết.</div><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"></p></div></div></div></div></div></div><div class=\"boxTour\" id=\"flag3\" style=\"margin: 0px 0px 40px; padding: 0px; color: rgb(51, 51, 51); font-family: Muli, sans-serif;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; font-size: 20px; line-height: 30px; font-weight: 700; color: rgb(102, 102, 102); border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><span class=\"fa-paperclip\" style=\"padding-left: 30px; position: relative;\">Dịch vụ bao gồm và không bao gồm</span></div><div class=\"content\" style=\"margin: 0px; padding: 0px;\"><div class=\"the-content desc\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><span style=\"font-weight: 700;\">Giá tour bao gồm:</span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Xe tham quan (xe 29 chỗ, 35 chỗ, 45 chỗ) tùy theo số lượng khách thực tế trên chuyến đi.</li><li style=\"margin: 0px; padding: 0px;\">Ăn uống theo chương trình: 1 bữa trưa, 150,000/bữa.</li><li style=\"margin: 0px; padding: 0px;\">Vé tham quan theo chương trình (bao gồm tham quan bằng xuồng ba lá).</li><li style=\"margin: 0px; padding: 0px;\">Hướng dẫn viên tiếng Việt vui vẻ nhiệt tình suốt chuyến đi.</li><li style=\"margin: 0px; padding: 0px;\">Bảo hiểm với mức bồi thường tối đa 100.00.000 đồng/trường hợp.</li><li style=\"margin: 0px; padding: 0px;\">Quà tặng: nón du lịch Việt, nước, khăn lạnh.</li></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><span style=\"font-weight: 700;\">Không bao gồ</span><span style=\"font-weight: 700;\">m:</span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Bữa ăn sáng.</li><li style=\"margin: 0px; padding: 0px;\">Bia hay nước ngọt trong các bữa ăn.</li><li style=\"margin: 0px; padding: 0px;\">Tham quan ngoài chương trình.</li><li style=\"margin: 0px; padding: 0px;\">Chi phí cá nhân, phụ phí người nước ngoài.</li><li style=\"margin: 0px; padding: 0px;\">Thuế VAT.</li></ul></div></div></div><div class=\"boxTour\" id=\"flag4\" style=\"margin: 0px 0px 40px; padding: 0px; color: rgb(51, 51, 51); font-family: Muli, sans-serif;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; font-size: 20px; line-height: 30px; font-weight: 700; color: rgb(102, 102, 102); border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><span class=\"fa-calendar-check-o\" style=\"padding-left: 30px; position: relative;\">Ngày khởi hành khác</span></div><div class=\"content\" style=\"margin: 0px; padding: 0px;\"><div id=\"mda-table-price\" style=\"margin: 0px; padding: 0px;\"><div class=\"mda-list-price mda-tap ative table-responsive mCustomScrollbar _mCS_1 mCS_no_scrollbar\" style=\"margin: 0px; padding: 0px; touch-action: auto;\"><div id=\"mCSB_1\" class=\"mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside\" tabindex=\"0\" style=\"margin: 0px; padding: 0px; position: relative; overflow: hidden; height: 58px; max-width: 100%; outline: 0px; direction: ltr; max-height: none;\"><div id=\"mCSB_1_container\" class=\"mCSB_container mCS_x_hidden mCS_no_scrollbar_x\" dir=\"ltr\" style=\"margin: 0px; padding: 0px; overflow: hidden; width: 773.328px; height: auto; position: relative; top: 0px; left: 0px;\"><table class=\"table\" style=\"width: 773.328px;\"><thead class=\"responsive\"><tr class=\"responsive\"><th class=\"responsive\" style=\"line-height: 1.42857;\">STT</th><th width=\"85\" class=\"responsive\" style=\"line-height: 1.42857; white-space: nowrap;\">Ngày khởi hành</th><th class=\"responsive\" style=\"line-height: 1.42857;\">Đặc điểm</th><th width=\"100px\" class=\"responsive\" style=\"line-height: 1.42857;\">Giá từ</th><th width=\"90px\" class=\"responsive\" style=\"line-height: 1.42857;\">Số Chỗ</th><th width=\"125px\" class=\"responsive\" style=\"line-height: 1.42857;\">Book tour</th></tr></thead><tbody class=\"responsive\"></tbody></table></div></div></div></div></div></div><div class=\"boxTour\" id=\"flag5\" style=\"margin: 0px 0px 40px; padding: 0px; color: rgb(51, 51, 51); font-family: Muli, sans-serif;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; font-size: 20px; line-height: 30px; font-weight: 700; color: rgb(102, 102, 102); border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><span class=\"fa-sticky-note-o\" style=\"padding-left: 30px; position: relative;\">Ghi chú</span></div><div class=\"content\" style=\"margin: 0px; padding: 0px;\"><div class=\"the-content desc\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><em>(Đoàn tối thiểu 20 khách khởi hành)</em><span style=\"font-weight: 700;\"><u></u></span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><span style=\"font-weight: 700;\">Giá vé dành cho trẻ em:</span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Trẻ em dưới 05 tuổi: miễn giá tour. Cha, Mẹ hoặc người thân đi kèm tự lo các chi phí ăn, ngủ, tham quan (nếu có) cho bé. Hai người lớn chỉ kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 trở lên phải mua ½ vé tour.</li><li style=\"margin: 0px; padding: 0px;\">Trẻ em từ 05 – dưới 10 tuổi: 75% giá tour. Bao gồm các dịch vụ ăn uống, ghế ngồi trên xe và ngủ chung với gia đình. Hai người lớn chỉ được kèm 1 trẻ em từ 5 đến dưới 10 tuổi, trẻ em thứ 2 trở lên Cha Mẹ nên mua thêm 1 suất giường đơn hoặc vé người lớn.</li><li style=\"margin: 0px; padding: 0px;\">Từ 10 tuổi trở lên: 100% giá tour và tiêu chuẩn như người lớn.</li></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><span style=\"font-weight: 700;\">Điều kiện khi đăng ký và hủy vé tour:</span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Sau khi xác nhận và thanh toán (ít nhất 50% tiền cọc giữ chỗ và thanh toán đủ 100% tổng giá trị tiền tour trước 10 ngày khởi hành).</li><li style=\"margin: 0px; padding: 0px;\">Khi đến ngày thanh toán đủ 100% tổng giá trị tiền tour, nếu Quý khách không thanh toán đúng hạn và đúng số tiền được xem như Quý khách tự ý huỷ tour và mất hết số tiền đã đặt cọc giữ chỗ.</li><li style=\"margin: 0px; padding: 0px;\">Vé Máy Bay / vé xe lửa / vé tàu cao tốc được xuất ngay sau khi quý khách đăng ký, thanh toán, xác nhận thông tin cá nhân (họ tên, ngày tháng năm sinh…) và có những điều kiện vé như sau: Không được đổi tên, hoàn vé, hủy vé, thay đổi ngày, thay đổi hành trình.</li><li style=\"margin: 0px; padding: 0px;\">Ngay sau khi Quý khách đăng ký tour nếu hủy sẽ bị phạt tiền tour:</li><li style=\"margin: 0px; padding: 0px;\">Ngay sau khi đặt cọc hoặc thanh toán hoặc trước 15 ngày: phí hủy 10% tiền tour</li><li style=\"margin: 0px; padding: 0px;\">Hủy 10 ngày trước ngày khởi hành: phí hủy 50% tiền tour</li><li style=\"margin: 0px; padding: 0px;\">Hủy 07 ngày trước ngày khởi hành: phí hủy 70% tiền tour&nbsp;</li><li style=\"margin: 0px; padding: 0px;\">Hủy&nbsp; 05 ngày trước ngày khởi hành: phí hủy 100% tiền tour&nbsp;</li><li style=\"margin: 0px; padding: 0px;\">Việc huỷ bỏ chuyến đi phải được thông báo trực tiếp với Công ty hoặc qua fax, email, tin nhắn và phải được Công ty xác nhận. Việc huỷ bỏ bằng điện thoại không được chấp nhận.</li><li style=\"margin: 0px; padding: 0px;\">Do tính chất là đoàn ghép khách lẻ, Du Lịch Việt sẽ có trách nhiệm nhận khách đăng ký cho đủ đoàn (10 khách người lớn trở lên) thì đoàn sẽ khởi hành đúng lịch trình. Nếu số lượng đoàn dưới 10 khách, công ty có trách nhiệm thông báo cho khách trước ngày khởi hành 3 ngày và sẽ thỏa thuận lại ngày khởi hành mới hoặc hoàn trả toàn bộ số tiền đã đặt cọc tour.</li><li style=\"margin: 0px; padding: 0px;\">Các ngày đặt cọc, thanh toán, huỷ và dời tour: không tính thứ 7, Chủ Nhật.</li><li style=\"margin: 0px; padding: 0px;\">Trong những trường hợp bất khả kháng như: khủng bố, bạo động, thiên tai, lũ lụt… Tuỳ theo tình hình thực tế và sự thuận tiện, an toàn của khách hàng, công ty Du Lịch sẽ chủ động thông báo cho khách hàng sự thay đổi như sau: huỷ hoặc thay thế bằng một chương trình mới với chi phí tương đương chương trình tham quan trước đó. Trong trường hợp chương trình mới có phát sinh thì Khách hàng sẽ thanh toán khoản phát sinh này. Tuy nhiên, mỗi bên có trách nhiệm cố gắng tối đa, giúp đỡ bên bị thiệt hại nhằm giảm thiểu các tổn thất gây ra vì lý do bất khả kháng.…</li><li style=\"margin: 0px; padding: 0px;\">Đối với sự thay đổi lịch trình, giờ bay do lỗi của hãng hàng không, tàu hoả, tàu thuỷ, Du Lịch Việt sẽ không chịu trách nhiệm bất kỳ phát sinh nào do lỗi trên như: phát sinh bữa ăn, nhà hàng, khách sạn, phương tiện di chuyển, hướng dẫn viên, ….</li></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\"><span style=\"font-weight: 700;\">Những thông tin cần thiết khi đi tour:</span></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 10px; padding: 0px 0px 0px 10px; list-style-position: initial; list-style-image: initial;\"><li style=\"margin: 0px; padding: 0px;\">Ngày khởi hành, Quý khách vui lòng tập trung lúc ..........&nbsp; tại ......... Công ty du lịch không chịu trách nhiệm khi Quý khách đến trễ.</li><li style=\"margin: 0px; padding: 0px;\">Một số thứ tự, chi tiết trong chương trình: giờ bay; giờ xe lửa; giờ tàu cao tốc, … có thể thay đổi để phù hợp với tình hình thực tế của chuyến đi (thời tiết, giao thông…).</li><li style=\"margin: 0px; padding: 0px;\">Qui định nhận &amp; trả phòng tại các khách sạn/resort: nhận phòng sau 14h và trả phòng trước 12h /.</li><li style=\"margin: 0px; padding: 0px;\">HDV Công ty thông báo cụ thể thời gian và địa điểm cho khách vào buổi chiều trước ngày khởi hành 01 ngày.</li><li style=\"margin: 0px; padding: 0px;\">Quý khách vui lòng ngồi đúng số ghế - cung cấp khi đăng ký tour.</li><li style=\"margin: 0px; padding: 0px;\">Quý khách vui lòng mang theo hành lý gọn nhẹ.</li><li style=\"margin: 0px; padding: 0px;\">Giấy tờ tùy thân tiền bạc, hành lý tư trang quý giá. Quý khách tự giữ lấy. Công ty du lịch sẽ hỗ trợ tìm kiếm và không chịu trách nhiệm đền bù.</li><li style=\"margin: 0px; padding: 0px;\">Quý khách nên mang theo 1 cây dù xếp che nắng, mưa. Giày thể thao hoặc dép có quai hậu để tiện đi lại.</li><li style=\"margin: 0px; padding: 0px;\">Quý khách cần tuân theo quy định thời gian tập trung của HDV, tránh việc trễ giờ hẹn gây ảnh hưởng chung cho cả đoàn.</li><li style=\"margin: 0px; padding: 0px;\">&nbsp;Vì lý do sức khỏe và an toàn vệ sinh thực phẩm, Quý Khách vui lòng không mang thực phẩm từ bên ngoài vào nhà hàng, khách sạn. Đối với thức uống khi mang vào phải có sự đồng ý của nhà hàng, khách sạn và bị tính phí nếu có.</li><li style=\"margin: 0px; padding: 0px;\">Trước khi rời khỏi chỗ ngồi: trên xe, nhà hàng, điểm tham quan, mua sắm, trả phòng khách sạn… Quý khách thường xuyên kiểm tra lại hành lý, tư trang cá nhân: bóp, ví, túi xách, máy ảnh, máy quay phim, điện thoại… đề phòng việc bỏ quên, thất lạc gây thiệt hại và ảnh hưởng chuyến tham quan của Quý khách.</li></ul><p style=\"margin-bottom: 0px; padding: 5px 0px; font-family: Arial;\">Quý khách cẩn thận khi đi lại trong các điểm tham quan, không được đứng, leo trèo ở những nơi không an toàn. Cẩn thận khi đi lại trên tàu, đò. Qua đường phải đi đúng luật qui định. Những gia đình có trẻ em vui lòng quan sát và trông giữ các bé cẩn thận.</p></div></div></div>', '2021-12-26 13:18:43', '2021-12-26 13:18:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `phone` int(30) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `songuoi` varchar(5000) NOT NULL,
  `ngaykhoihanh` varchar(30) NOT NULL,
  `yeucau` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `email`, `age`, `phone`, `diachi`, `songuoi`, `ngaykhoihanh`, `yeucau`) VALUES
(1, 'Đỗ Minh Quý', 'dodominhquy@gmail.com', '19', 123456789, '1855354/uhybgbgybygvb', '6', '27/12/2021', 'Không có');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`id`, `product_code`, `title`, `price`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(2, '', 'Khách sạn Sapa', 2399000, 'img/hotel-sapa.jpg', '<div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; line-height: 30px; border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><div class=\"boxTour\" id=\"flag2\" style=\"margin: 0px 0px 40px; padding: 0px;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; line-height: 30px; border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><div class=\"boxTour\" id=\"flag2\" style=\"margin: 0px 0px 40px; padding: 0px;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; line-height: 30px; border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><div class=\"boxTour\" id=\"flag2\" style=\"margin: 0px 0px 40px; padding: 0px;\"><div class=\"title\" style=\"margin: 0px 0px 10px; padding: 0px 0px 10px; line-height: 30px; border-bottom: 1px solid rgba(0, 0, 0, 0.15);\"><h2 style=\"margin: 0.83em 0px 0.5em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.35; vertical-align: baseline; text-rendering: optimizelegibility;\"><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>1.Mô tả khách sạn Bamboo Sapa</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Được xây dựng năm 2002, Bamboo Sapa Hotel mang nét độc đáo riêng, tô điểm thêm cho những tòa nhà chọc trời trong thành phố này. Cách sự nhộn nhịp của thành phố 0.5 km, khách sạn 3.5 sao này có vị trí vô cùng thuận lợi và dễ tiếp cận các địa điểm lớn của thành phố này. Một số nơi cho bạn khám phá, Thác Bạc Thác Bạc, Đền Mẫu, Trạm xe bus là một trong những điểm du lịch thích hợp cho khách du lịch.</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Thiết bị và dịch vụ cung cấp bởi Bamboo Sapa Hotel bảo đảm kì nghỉ dễ chịu cho du khách. Sự chọn lọc khắt khe những thiết bị hàng đầu như đưa đón khách sạn/sân bay, bãi đỗ xe, người vận chuyển hành lý, dịch vụ Internet, phục vụ ăn tại phòng để khách có thể tận hưởng thoải mái khi ở khách sạn.</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>65 phòng trong tổng số 05 lầu mang đến cho bạn sự ấm cúng và dễ chịu như đang được ở nhà và những thiết bị hiện đại như truyền hình cáp, tủ đồ ăn uống nhẹ, tivi LCD/Plasma, ban công, máy sấy tóc. Trong suốt một ngày, bạn có thể tận hưởng không khí thư giãn của vườn. Hãy tận hưởng dịch vụ không gì sánh bằng và địa chỉ thật sự đáng tin cậy tại Bamboo Sapa Hotel.</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>2.Loại Phòng ở tại khách sạn Bamboo Sapa&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng Tiêu Chuẩn Giường Đôi</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng thường ban ngày (8 giờ sáng tới 6 giờ tối)</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng tốt ban ngày (8 giờ sáng tới 6 giờ tối)</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng Cao Cấp Có Ban Công</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng Sang Trọng Giá Tốt Nhất</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>&nbsp;</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>3.Các chính sách của khách sạn Bamboo Sapa</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Trẻ em và giường phụ:</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Trẻ em dưới 6 tuổi được ngủ miễn phí nếu dùng giường hiện có trong phòng.</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Trẻ em từ 6 tuổi trở lên phải dùng thêm một giường phụ.</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Giường phụ tùy thuộc vào loại phòng bạn đăng ký, xin vui lòng kiểm tra thông tin phòng để biết thêm chi</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>&nbsp;</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>4. Thông tin hữu ích về khách sạn Bamboo Sapa</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Có đưa đón sân bay : Yes</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phí đưa đón sân bay : 30 USD</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phí ăn sáng : 7 USD</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Trả phòng : 12:00 AM</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Khoảng cách từ trung tâm thành phố : 0.5 km</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Khoảng cách tới sân bay : 25.0 km</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Thời gian nhận phòng sớm nhất : 12:00 AM</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Phòng / tầng không hút thuốc : Yes</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Số lượng quán bar : 01</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Số tầng : 05</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Số lượng nhà hàng : 01</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Số phòng : 65</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Có Chỗ Đậu Xe : Yes</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Dịch vụ phòng (có, không, 24 giờ) : Yes</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Điện áp trong phòng : 220 voltage</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Thời gian đi tới sân bây (phút) : 60</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Khách sạn xây vào : 2002</b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b><br></b></span></font></p><p style=\"margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><font color=\"#333333\" face=\"Arial, sans-serif\"><span style=\"font-size: 16px;\"><b>Năm khách sạn được sửa chữa lại lần cuối : 2013</b></span></font></p><p style=\"color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; font-weight: 700; margin: 0in 0in 8pt; padding: 5px 0px; background-color: rgb(243, 243, 243);\"><br></p></h2></div></div></div></div></div></div></div>', '2021-12-25 17:42:46', '2021-12-25 17:42:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucdulich`
--

CREATE TABLE `tintucdulich` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintucdulich`
--

INSERT INTO `tintucdulich` (`id`, `title`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tour Sapa', 'img/sapa1.jpg', 'Du lịch Sapa - \"Thành phố trong sương\" nổi tiếng với với cảnh quan núi non hùng vĩ, khí hậu trong lành hoang sơ, quanh năm mát mẻ sẽ giúp bạn có được những giờ phút nghỉ dưỡng đúng nghĩa.', '2021-12-25 15:08:36', '2021-12-25 15:08:36'),
(2, 'Tour Đà lạt', 'img/gioi-thieu-da-lat.jpg', 'Một thành phố mộng mơ,với vẻ đẹp lãng mạn không kém phần mơ mộng, Khách Du lịch Đà Lạt thường gọi nơi đây bằng nhiều cái tên :thành phố ngàn hoa, thành phố sương mù, phố núi Đà Lạt , hay tiểu Paris,mỗi cái tên đều chất chứa bao tình yêu.Tour du lịch Đà Lạt chính là điểm đến và cũng là một trong những điểm du lịch thú vị và đặc biệt nhất và là một điểm du lịch đối với những cặp đôi yêu nhau.', '2021-12-25 15:47:10', '2021-12-25 15:47:10'),
(3, 'Tour Phú Quốc', 'img/Phuquoc.jpg', 'Du lịch Phú Quốc - Đảo ngọc Phú Quốc nằm sâu trong Vịnh Thái Lan, là điểm đến cho du khách thích hình thức du lịch nghỉ dưỡng và khám phá sinh thái Tuyệt vời. Đến với Tour Phú Quốc du khách sẽ được tham quan các đảo lớn nhỏ, được thả hồn vào màn nước trong veo, thưởng thức những đặc sản của biển, những món ăn đậm chất nơi đây... ', '2021-12-25 15:16:13', '2021-12-25 15:16:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuckhachsan`
--

CREATE TABLE `tintuckhachsan` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuckhachsan`
--

INSERT INTO `tintuckhachsan` (`id`, `title`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Khách sạn Phú Quốc', 'img/hotel-phu-quoc.jpg', 'Tọa lạc tại Gành Dầu, Vinpearl Resort & Golf Phú Quốc là địa điểm hoàn hảo để khám phá Đảo Phú Quốc và các khu vực lân cận. Chỉ cách khu vui chơi Vinpearl Land Phú Quốc 1,5km, Vinpearl Safari khoảng 5,6km và cách thị trấn Dương Đông khoảng 22,6km,… đây là vị trí rất thuận tiện cho du khách có thể thoải mái tham quan, khám phá các điểm du lịch nổi tiếng ở hòn đảo Phú Quốc xinh đẹp.', '2021-12-25 15:59:23', '2021-12-25 15:59:23'),
(3, 'Khách sạn Hội An', 'img/khach-san-hoi-an.jpg', 'Nằm ở phía Nam của thành phố Hội An, tọa lạc bên bờ biển Bình Minh nguyên sơ dài 1.300m. Vinpearl Resort & Golf Nam Hội An là khu du lịch nghỉ dưỡng phức hợp đẳng cấp đầu tiên hội tụ hoàn hảo những tinh hoa của hệ sinh thái trong “ốc đảo” thiên nhiên nhiệt đới.', '2021-12-25 16:48:13', '2021-12-25 16:48:13'),
(5, 'Khách sạn Sapa', 'img/hotel-sapa.jpg', 'Khách sạn Sapa 5 sao Pao’s Sapa Leisure trở thành chủ đề nghỉ dưỡng hot nhất mạng xã hội nửa đầu 2018 khi sỡ hữu view đẹp lung linh, ngoạn mục mà khó nơi nào sánh bì.Điểm nổi bật nhất của khách sạn chính là khai thác lợi thế vị trí lý tưởng để xây dựng điểm nghỉ dưỡng có view đẹp 1 – 0 – 2 tại Sapa. Từ tầng thượng hoặc ban công phòng nghỉ, du khách có thể phóng tầm nhìn ra toàn cảnh Sapa, đường chân trời đẹp không góc chết.\r\n\r\n', '2021-12-25 16:26:18', '2021-12-25 16:26:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, 'quy2002', '789', 'Đỗ Minh Quý', 'dodominhquy@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dulich`
--
ALTER TABLE `dulich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintucdulich`
--
ALTER TABLE `tintucdulich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuckhachsan`
--
ALTER TABLE `tintuckhachsan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dulich`
--
ALTER TABLE `dulich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintucdulich`
--
ALTER TABLE `tintucdulich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintuckhachsan`
--
ALTER TABLE `tintuckhachsan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
