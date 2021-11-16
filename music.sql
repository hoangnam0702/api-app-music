
CREATE TABLE `album` (
  `IdAlbum` int(11) NOT NULL,
  `TenAlbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenCaSiAlbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAlbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`IdAlbum`, `TenAlbum`, `TenCaSiAlbum`, `HinhAlbum`) VALUES
(9, 'ANDIEZ', 'andiez', 'andiez.jpg'),
(10, 'Ballad', 'ALL', 'ballad.jpg'),
(11, 'BIG BANG', 'G-DRAGON', 'BIGBANG.jpg'),
(12, 'Lou', 'Lou Hoàng', 'Lou hoàng.jpg'),
(13, 'Sơn Tùng', 'Sơn Tùng MTP', 'Sơn tùng.jpg'),
(14, 'Thái Đinh', 'Thái Đinh', 'Thái đinh.jpg'),
(15, 'ALAN WALKER', 'Random', 'alan.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `IdBaiHat` int(11) NOT NULL,
  `IdAlbum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdTheLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdPlayList` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenBaiHat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhBaiHat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CaSi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LinkBaiHat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LuotThich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`IdBaiHat`, `IdAlbum`, `IdTheLoai`, `IdPlayList`, `TenBaiHat`, `HinhBaiHat`, `CaSi`, `LinkBaiHat`, `LuotThich`) VALUES
(10, '9', '14', '7', '1 Phút', '1 phút.jpg', 'andiez', '1-Phut-Andiez.mp3', 0),
(11, '10', '12', '9', '24H', '14h.jpg', 'Ly Ly', '24H-LyLy-Magazine.mp3', 0),
(12, '10', '14', '7', 'Ánh nắng của anh', 'ánh nắng của anh.jpg', 'Đức Phúc', 'ánh nắng của anh.mp3', 1),
(13, '12', '13', '9', 'Cảm giác lúc ấy sẽ ra sao', 'cảm giác lúc ấy sẽ ra sao.jpg', 'Lou Hoàng', 'cảm giác lúc ấy sẽ ra sao.mp3', 0),
(14, '10', '8', '7', 'Chân ái', 'Chân ái.jpg', 'Orange', 'chân ái.mp3', 0),
(15, '13', '12', '7', 'Có chắc đây là yêu', 'có chắc đây là yêu.jpg', 'Sơn Tùng', 'Co Chac Yeu La Day - M-TP.mp3', 0),
(16, '14', '8', '5', 'Đông và anh', 'đông và anh.jpg', 'Thái Đinh', 'Đông và anh.mp3', 1),
(17, '10', '10', '8', 'Đường một chiều', 'Đường 1 chiều.jpg', 'Huỳnh Tú', 'Đường 1 chiều.mp3', 0),
(18, '15', '10', '6', 'Faded', 'faded.jpg', 'Alan Waler', 'faded.mp3', 0),
(19, '12', '8', '9', 'Là bạn không thể yêu', 'là bạn không thể yêu.jpg', 'Lou Hoàng', 'La-Ban-Khong-The-Yeu-Lou-Hoang.mp3', 0),
(20, '10', '7', '5', 'Lạ Lùng', 'Lạ lùng.png', 'Vũ', 'lạ lùng.mp3', 0),
(21, '13', '9', '8', 'Lạc Trôi', 'Lạc trôi.jpg', 'Sơn Tùng', 'lạc trôi.mp3', 0),
(22, '10', '13', '7', 'Mascara', 'mascara.jpg', 'chillies', 'Mascara - Chillies [128kbps_MP3].mp3', 2),
(23, '10', '8', '9', 'Màu nước mắt', 'màu nước mắt.jpg', 'Nguyễn Trần Trung Quân', 'màu nước mắt.mp3', 0),
(24, '10', '10', '7', 'Một đêm say', 'Một đêm say.jpg', 'Thịnh suy', 'một đêm say.mp3', 1),
(25, '10', '8', '9', 'Ngày chưa giông bão', 'ngày chưa giông bão.jpg', 'Bùi Lan Hương', 'Ngày chưa giông bão.mp3', 0),
(26, '13', '14', '9', 'Nơi này có anh', 'Nơi_này_có_anh.jpg', 'Sơn Tùng', 'Nơi này có anh.mp3', 104),
(27, '14', '8', '5', 'Phố không em', 'Phố không em.jpg', 'Thái Đinh', 'Phố không em.mp3', 6),
(28, '10', '12', '7', 'Ok', 'OK binz.jpg', 'Binz', 'OK-Binz.mp3', 36),
(29, '10', '13', '9', 'Phí sau một cô gái', 'phí sau một cô gái.jpg', 'Soobin Hoàng Sơn', 'Phía sau một cô gái.mp3', 61),
(30, '11', '9', '8', 'Phía sau em', 'Phía sau em.jpg', 'Kay Trân', 'Phía sau em.mp3', 22),
(31, '9', '10', '7', 'Suýt Nữa Thì', 'suýt nữa thì.jpg', 'Andiez', 'Suýt nữa thì.mp3', 56),
(32, '15', '9', '6', 'The Spectre', 'the spectre.jpg', 'Alan Waler', 'TheSpectre-AlanWalker-5168081.mp3', 46),
(33, '14', '12', '7', 'Vùng Kí Ức', 'Vừng kí ức.jpg', 'chillies', 'Vung Ky Uc - Chilles [128kbps_MP3].mp3', 89),
(34, '11', '9', '8', 'Haru Haru', 'Haru haru.jpg', 'BigBang', 'Haru Haru - Big Bang.mp3', 0),
(35, '11', '9', '8', 'Loser', 'Loser.jpg', 'BigBang', 'Loser - BIGBANG.mp3', 96);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `IdChuDe` int(11) NOT NULL,
  `TenChuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhChuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`IdChuDe`, `TenChuDe`, `HinhChuDe`) VALUES
(4, 'cà phê', 'cà phê.jpg'),
(5, 'Cuối tuần', 'cuối tuần.jpg'),
(6, 'Du lịch', 'du lịch.jpg'),
(7, 'Nhạc Việt sáng tác', 'nhạc việt sáng tác.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `IdPlayList` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinhnen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinhicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `playlist`
--

INSERT INTO `playlist` (`IdPlayList`, `Ten`, `Hinhnen`, `Hinhicon`) VALUES
(5, 'PlayListChill', 'playlistchill.jpg', 'CHILL'),
(6, 'Top 100 EDM', 'Top 100 EDM.jpg', 'EDM'),
(7, 'Top 100 nhạc trẻ', 'TOP 100 nhạc Trẻ.jpg', 'Nhạc Trẻ'),
(8, 'Top 100 Rap Việt', 'Top 100 Rap việt.jpg', 'Rap'),
(9, 'Top 100 Vpop', 'top 100 VPOP.jpg', 'V-pop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdBaiHat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`Id`, `HinhAnh`, `NoiDung`, `IdBaiHat`) VALUES
(4, '1phut.png', 'LOVE', 10),
(5, '24h.jpg', 'Vì anh sẽ chẳng quay về', 11),
(6, 'haruharu.jpg', 'Hit BigBang', 34),
(7, 'là bạn không thể yêu.jpg', 'Đôi khi ta chọn điều buồn nhất, vì đó là điều tốt nhất cho tất cả', 19),
(8, 'mascara.jpg', 'chillies', 22),
(9, 'nơi này có anh.jpg', 'MTP', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `IdTheLoai` int(11) NOT NULL,
  `IdChuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenTheLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HinhTheLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`IdTheLoai`, `IdChuDe`, `TenTheLoai`, `HinhTheLoai`) VALUES
(7, '5', 'ACOUSTIC', 'acoutic.jpg'),
(8, '5', 'Giai điệu buồn', 'giai điệu buồn.jpg'),
(9, '4', 'HipHop', 'Hiphop.jpg'),
(10, '6', 'AUDIO', 'audio.jpg'),
(11, '7', 'Mưa', 'Mưa.jpg'),
(12, '5', 'Nhạc Trẻ', 'nhạc trẻ.jpg'),
(13, '7', 'R&B', 'R&B.jpg'),
(14, '7', 'Tình Yêu', 'Tình Yêu.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`IdAlbum`);

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`IdBaiHat`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`IdChuDe`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`IdPlayList`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`IdTheLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `IdAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `IdBaiHat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `IdChuDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `playlist`
--
ALTER TABLE `playlist`
  MODIFY `IdPlayList` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `IdTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
