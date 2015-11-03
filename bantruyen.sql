-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2015 at 10:33 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bantruyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

--
-- Dumping data for table `kind`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `codep` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codek` varchar(30) NOT NULL,
  `sotap` int(100) NOT NULL,
  `nguoidang` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hientrang` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `linkhinh` varchar(100) NOT NULL,
  `theloai` varchar(50) DEFAULT NULL,
  `tentruyen` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--



INSERT INTO `product` (`codep`, `codek`, `sotap`, `nguoidang`, `tacgia`, `hientrang`, `linkhinh`, `theloai`,`tentruyen`) VALUES
('DaiThanhVuong', 'ADVENTURE', '32 Tập', 'Hảo', 'Ngô Thừa Ân, Khưu Phúc Long', 'Đã Đủ Bộ', 'image/DaiThanhVuong.jpg', 'Aventure, Drama, Action ...','Đại Thành Vương'),
('.hack//link', 'FANTASY', '18 Chap', 'Admin', 'Cyberconnect2', 'Đang Tiến Hành', 'image/.hack.link.jpg', 'Fantasy, Action, Adventure, ...','.hack//link'),
('+cSwordAndCornett', 'FANTASY', '1 chap', 'Admin', 'Yugyoji Tama', 'Tạm Ngưng', 'image/+cSwordAndCornett.jpg', 'Fantasy, Action, Adventure, ...','+c Sword And Cornett'),
('1Love9', 'ECCHI', '3 Chap', 'Hảo', 'Tooyama Ema', 'Đang Tiến Hành', 'image/1Love9.jpg', 'Ecchi 18+, Harem, ...','1 Love 9'),
('1/2Prince', 'ACTION', '56 Chap', 'Admin', 'Yu Wo, Choi Hong Chong', 'Đang Tiến Hành', 'image/Prince.jpg', 'Action, Fantasy ...','1/2 Prince'),
('11Eyes', 'ACTION', '3 Chap', 'Hảo', 'lass', 'Đang Tiến Hành', 'image/11Eyes.jpg', 'Action, Ecchi 18+, Harem, Fantasy .....','11 Eyes'),
('12CungHoangĐao', 'FUNNY', '64 Chap', 'Admin', 'Đang Cập Nhập', 'Đang Tiến Hành', 'image/12CungHoangDao.jpg', 'Funny, ....','12 Cung Hoàng Đạo'),
('13-OneShot', 'ONESHOT', '1 Chap', 'Admin', 'SORACHI Hideaki', 'Đã Đủ Bộ', 'image/13-OneShot.jpg', 'One Shot, Action, Comedy, ...','13 - One Shot'),
('13Club', 'ACTION', '1 chap', 'Admin', 'Shihira Tatsuya', 'Đang Tiến Hành', 'image/13Club.jpg', 'Action, Aventure, Horror....','13 Club'),
('13-ninNoShortSuspense&Horror', 'HORROR', '6 Chap', 'Hảo', 'ARITA KeiHIRAI IchirouHIRATA', 'Tạm Ngưng', 'image/13-ninNoShortSuspense&Horror.jpg', 'Horror, ...','13-nin No Short Suspense & Horror'),
('14Juicy', 'ECCHI', '35 Chap', 'Hảo', 'Asada Hikari', 'Đã Đủ Bộ', 'image/14Juicy.jpg', 'Ecchi 18+, Comedy, ....','14 Juicy'),
('21stCenturyBoys', 'ACTION', '16 Chap', 'Admin', 'Urasawa Naoki', 'Đang Tiến Hành', 'image/21stCenturyBoys.jpg', 'Action, Drama, ....','21stCenturyBoys'),
('37ocKiss', 'ONESHOT', '4 Chap', 'Admin', 'FUJIWARA Yoshiko', 'Đã Đủ Bộ', 'image/37ocKiss.jpg', 'One Shot, ...','37oc Kiss'),
('5MinutesBeforeSchoolEnds', 'ONESHOT', '1 Chap', 'Admin', 'Nao Makita', 'Đã Đủ Bộ', 'image/5MinutesBeforeSchoolEnds.png\r\n', 'One Shot, Comedy, ...','5 Minutes Before School Ends'),
('50MillionKm', 'FANTASY', '6 Chap', 'Admin', 'Park Jin WooTHOR', 'Đang Tiến Hành', 'image/50MillionKm.jpg', 'Fantasy, Comedy, Drama, Manhwa, ...','50 Million Km'),
('666Satan', 'ADVENTURE', '34 Chap', 'Hảo', 'Seishi Kishimoto', 'Đã Đủ Bộ', 'image/666Satan.jpg', 'Adventure, Action, Fantasy ....','666 Satan'),
('7Ocean', 'ADVENTURE', '6 Chap', 'Hảo', 'MINAZUKI Suu', 'Đã Đủ Bộ', 'image/7Ocean.jpg', 'Adventure, Comedy, .....','7 Ocean'),
('7Seeds', 'COMEDY', 'Đang Cập Nhập', 'Admin', 'Tamura Yumi', 'Đang Tiến Hành', 'image/7Seeds.jpg', 'Comedy','7 Seeds'),
('AFairytaleForTheDemonLord', 'HORROR', '5 Chap', 'Admin', 'Couleuria Studiomybabyhate', 'Đã Đủ Bộ', 'image/AFairytaleForTheDemonLord.jpg', 'Horror, Action, Fantasy, ...','A Fairytale For The Demon Lord'),
('ALoveThatFeelsTheCold', 'ONESHOT', '1 Chap', 'Admin', 'YUKI Haruko', 'Đã Đủ Bộ', 'image/ALoveThatFeelsTheCold.jpg', 'One Shot, ...','A Love That Feels The Cold'),
('AThousandYearsNinet', 'ADVENTURE', '0 Chap', 'Admin', 'Giryang', 'Sắp Phát Hành', 'image/AThousandYearsNinet.gif', 'Adventure, Fantasy ...','A Thousand Years Ninet'),
('AWhiteSummer', 'ONESHOT', '1 Chap', 'Admin', 'Adachi MitsuruBuronson', 'Đã Đủ Bộ', 'image/AWhiteSummer.jpg', 'One Shot, ....','A White Summer'),
('AbilityShop', 'ONESHOT', '1 Chap', 'Admin', 'Tashiro Tetsuya', 'Đã Đủ Bộ', 'image/AbilityShop.png\r\n', 'One Shot, Drama, ...','Ability Shop'),
('AccelWorld', 'ECCHI', '9 chap', 'Hảo', 'Kawahara Reki', 'Đang Tiến Hành', 'image/AccelWorld.jpg', 'Ecchi 18+, Action, ...','Accel World'),
('AdamInPuberty', 'ECCHI', '2 chap', 'Admin', 'SAKAKI Kasa, AMAGAI Yukino', 'Đang Tiến Hành', 'image/AdamInPuberty.jpg', 'Ecchi 18+, ...','Adam In Puberty'),
('AhMyGoddess', 'FANTASY', '14 Chap', 'Admin', 'Fujishima Kosuke', 'Tạm Ngưng', 'image/AhMyGoddess.jpg', 'Fantasy, Comedy, ...','Ah My Goddess'),
('Akaboshi', 'ADVENTURE', '23 chap', 'Admin', 'Amano Youichi', 'Đang Tiến Hành', 'image/Akaboshi.jpg', 'Adventure, Grama ...','Akaboshi'),
('AkazukinEliza', 'ECCHI', '1 chap', 'Admin', 'Yasuhiro', 'Đang Tiến Hành', 'image/AkazukinEliza.jpg', 'Ecchi 18+, Comedy, ...','Akazukin Eliza'),
('AkumaNoIkenie', 'FANTASY', '3 Chap', 'Admin', 'TACHIBANA Ayun', 'Đang Tiến Hành', 'image/AkumaNoIkenie.jpg', 'Fantasy, Comedy, Ecchi 18+, Harem, ...','Akuma No Ikenie'),
('AloDrRin', 'COMEDY', '8 Tập', 'Admin', 'Arai Kiyoko', 'Đã Đủ Bộ', 'image/AloDrRin.jpg', 'Comedy, ...','Alo Dr Rin'),
('Amagami-LoveGoesOn', 'ECCHI', '6 chap', 'Hảo', 'Kamino Ryuya', 'Đã Đủ Bộ', 'image/Amagami-LoveGoesOn.jpg', 'Ecchi 18+, Comedy, ...','Amagami - Love Goes On'),
('Amakusa1637-AnhThuNuKiet', 'ACTION', '12 Tập', 'Admin', 'Michiyo Akaishi', 'Đã Đủ Bộ', 'image/Amakusa1637-AnhThuNuKiet.jpg', 'Action, Aventure, Drama ....','Amakusa 1637 - Anh Thư Nữ Kiệt'),
('AmaninShoujoAzuki', 'HAREM', '7 Chap', 'Admin', 'Shinonome Mizuo', 'Đang Tiến Hành', 'image/AmaninShoujoAzuki.jpg', 'Harem, Action, Comedy, ...','Amanin Shoujo Azuki'),
('AngelSanctuary-TenshiKinryouku', 'FANTASY', '35 Chap', 'Admin', 'YukiKaori', 'Đang Tiến Hành', 'image/AngelSanctuary-TenshiKinryouku.jpg', 'Fantasy, ....','Angel Sanctuary - Tenshi Kinryouku'),
('AnhHungVoLe', 'MANHUA', '51 Chap', 'Admin', 'Mã Vinh Thành', 'Đã Đủ Bộ', 'image/AnhHungVoLe.jpg', 'Manhua, Action, ...','Anh Hùng Vô Lệ'),
('AnhTrangBiAn', 'HORROR', '24 Tập', 'Admin', 'Chie Shinohara', 'Đã Đủ Bộ', 'image/AnhTrangBiAn.jpg', 'Horror, ...','Ánh Trăng Bí Ẩn'),
('AnneFreaks', 'HORROR', '4 Chap', 'Admin', 'Kotegawa Yua', 'Đang Tiến Hành', 'image/AnneFreaks.jpg', 'Horror, ...','Anne Freaks'),
('Another', 'HORROR', '16 Chap', 'Admin', 'Ayatsuji YukitoKIYOHARA Hiro', 'Đã Đủ Bộ', 'image/Another.jpg', 'Horror, Drama, ...','Another'),
('Anti-venom', 'Adventure', '3 chap', 'Admin', 'D''Auria Marvel', 'Đã Đủ Bộ', 'image/Anti-venom.jpg', 'Adventure, Fantasy ....','Anti-venom'),
('AoNoExorcist-BlueExorcist', 'HORROR', '39 Chap', 'Hảo', 'Katou Kazue', 'Đã Đủ Bộ', 'image/AoNoExorcist-BlueExorcist.jpg', 'Horror, Action, Adventure, Comedy, Drama, ...','Ao No Exorcist - Blue Exorcist'),
('ArForgottenSummer!', 'ECCHI', '3 chap', 'Hảo', 'Konata Hyuura', 'Đã Đủ Bộ', 'image/ArForgottenSummer!.jpg', 'Ecchi 18+, Comedy, Harem, ...','Ar Forgotten Summer!'),
('Arachnid', 'ECCHI', 'Up Chap 13', 'Admin', 'Murata ShinyaIfuji Shinsen', 'Đang Tiến Hành', 'image/Arachnid.jpg', 'Ecchi 18+, Action, Horror, Adventure, ...','Arachnid'),
('ArcanaFamiglia', 'HAREM', '1 Tập', 'Admin', 'HuneX, Ruru', 'Đang Tiến Hành', 'image/ArcanaFamiglia.jpg', 'Harem, Action, Comedy, ...','Arcana Famiglia'),
('ArcanaSoul', 'HORROR', '13 Chap', 'Hảo', 'Kotegawa Yua', 'Đã Đủ Bộ', 'image/ArcanaSoul.jpg', 'Horror, Comedy, ...','Arcana Soul'),
('Aria', 'ADVENTURE', 'Up chap 21', 'Hảo', 'Amano Kozue', 'Đang Tiến Hành', 'image/Aria.jpg', 'Adventure, Comedy, Fantasy, ....','Aria'),
('AsaMadeJugyouChu', 'HAREM', 'Up Chap 24', 'Hảo', 'Ohta Akiyoshi, Munyu', 'Đang Tiến Hành', 'image/AsaMadeJugyouChu.jpg', 'Harem, Comedy, Ecchi 18+, ...','Asa Made Jugyou Chu'),
('AshitaNoKyouko-san', 'FANTASY', 'Up Chap 7.5', 'Admin', 'Iwasaki Masakazu', 'Đang Tiến Hành', 'image/AshitaNoKyouko-san.jpg', 'Fantasy, Comedy, ...','Ashita No Kyouko-san'),
('AvengersVsX-men', 'FANTASY', 'Up Chap 16', 'Admin', 'Marvel Comic', 'Đang Tiến Hành', 'image/AvengersVsX-men.jpg', 'Fantasy, Action, Adventure, ...','Avengers Vs X-men'),
('Avengers-x-sanction', 'FANTASY', '4 Chap', 'Admin', 'Marvel', 'Đã Đủ Bộ', 'image/Avengers-x-sanction.jpg', 'Fantasy, Action, Adventure, ...','Avengers-x-sanction'),
('BaDao', 'MANHUA', '5 Tập', 'Admin', 'Phùng Chí Mạnh', 'Đã Đủ Bộ', 'image/BaDao.jpg', 'Manhua, ...','Bá Đao'),
('BabyPrincess', 'HAREM', 'Up Chap 2', 'Admin', 'Kimino SakurakoMibu', 'Đamg Tiến Hành', 'image/BabyPrincess.jpg', 'Harem, Comedy, Ecchi, ...','Baby Princess'),
('BakaAndBoing', 'ECCHI', 'Up chap 22', 'Admin', 'Kobayashi Hiyoko', 'Đang Tiến Hành', 'image/BakaAndBoing.jpg', 'Ecchi 18+, Comedy, ...','Baka And Boing'),
('Bakekano', 'HAREM', 'Up Chap 7', 'Hảo', 'Inoue Yukihiro', 'Đang Tiến Hành', 'image/BakeKano.jpg', 'Harem, Comedy, Ecchi 18+, ..','Bakekano'),
('BakuretsuTenshi', 'ECCHI', 'Up Chap 7', 'Admin', 'GONZOMURAO Minoru', 'Tạm Ngưng', 'image/BakuretsuTenshi.jpg', 'Ecchi 18+, Action, ...','Bakuretsu Tenshi'),
('BananaNoNana', 'ECCHI', 'Up chap 1', 'Admin', 'Oniyazu Kakashi', 'Đang Tiến Hành', 'image/BananaNoNana.png', 'Ecchi 18+, Action, Adventure, Comedy, ...','Banana No Nana'),
('BaoQuyenHungTinh', 'MANHUA', '4 Chap', 'Admin', 'Trịnh Kiện Hòa', 'Đã Đủ Bộ', 'image/BaoQuyenHungTinh.jpg', 'Manhua, Action, Comedy, ...','Bạo Quyền Hung Tinh'),
('BbProject', 'MANHUA', 'Up Chap 18', 'Hảo', 'Kaze', 'Đang Tiến Hành', 'image/BbProject.jpg', 'Manhua, Action, Comedy, ...','Bb Project'),
('BeeBeBeatIt', 'HAREM', 'Up Chap 4', 'Hảo', 'Jinno Masak', 'Đang Tiến Hành', 'image/BeeBeBeatIt.jpg', 'Harem, Action, Comedy, Ecchi 18+, ...','Bee Be Beat It'),
('BinbougamiGa', 'FANTASY', 'Up Chap 3', 'Admin', 'Sukeno Yoshiaki', 'Đang Tiến Hành', 'image/BinbougamiGa.jpg', 'Fantasy, Action, Comedy, ...','Binbougami Ga'),
('BlackCat-ThamTuBlackCat', 'ACTION', '23 Tập', 'Hảo', 'Yabuki Kentaro', 'Đã Đủ Bộ', 'image/BlackCat-ThamTuBlackCat.jpg', 'Action, Comedy, ......','Black Cat - Thám Tử Black Cat'),
('BlackGod-Kurokami', 'ECCHI', 'Up chap 82', 'Admin', 'Im Dal Young, Park Sung Woo', 'Đang Tiến Hành', 'image/BlackGod-Kurokami.jpg', 'Ecchi 18+, Action, Drama, ...','Black God - Kurokami'),
('BlackRockhooter-InnocentSoul', 'FANTASY', 'Up Chap 9', 'Hảo', 'Suzuki Sanami', 'Đang Tiến Hành', 'image/BlackRockShooter-InnocentSoul.jpg', 'Fantasy, Action, ...','Black Rock Shooter - Innocent Soul'),
('BlackRock-chan', 'FANTASY', 'Up Chap 3', 'Admin', 'huke, Ringo', 'Đang Tiến Hành', 'image/BlackRock-chan.jpg', 'Fantasy, Comedy, ...','Black Rock-chan'),
('BloodPlus-Blood', 'HORROR', '35 Chap', 'Admin', 'Asuka Katsura', 'Đã Đủ Bộ', 'image/BloodPlus-Blood.jpg', 'Horror, Action, Fantasy, ...','Blood Plus - Blood'),
('BloodyMaiden', 'ECCHI', '11 Tập', 'Hảo', 'TAIDA Kikuhiko, HANA Osutarou', 'Đã Đủ Bộ', 'image/BloodyMaiden.jpg', 'Ecchi 18+, Drama, Horror, ...','Bloody Maiden'),
('BokuNoIdol', 'ECCHI', '4 Tập', 'Admin', 'Kawashita Mizuki', 'Đã Đủ Bộ', 'image/BokuNoIdol.jpg', 'Ecchi 18+, Comedy, ...','Boku No Idol'),
('BonChangHaoHoa', 'COMEDY', 'Up chap 8', 'Admin', 'Hwang Mi Ri', 'Đang Cập Nhập', 'image/BonChangHaoHoa.jpg', 'Comedy, Manhwa, ....','Bốn Chàng Hào Hoa'),
('BongBongTrang', 'MANHWA', '10 Tập', 'Admin', 'Han Yu Rang', 'Đã Đủ Bộ', 'image/BongBongTrang.jpg', 'Manhwa, Comedy, ...','BongBongTrang'),
('BuaToiCuaHoangTu', 'COOKING', '8 Tập', 'Admin', 'Han Yu Rang', 'Đang Cập Nhập', 'image/BuaToiCuaHoangTu.jpg', 'Cooking, Manhwa, Comedy, ...','Bữa Tối Của Hoàng Tử'),
('C3-cubeXCursedXCurious', 'ECCHI', 'Up Chap 1', 'Admin', 'MINASE Hazuki', 'Đang Tiến Hành', 'image/C3-cubeXCursedXCurious.jpg', 'Ecchi 18+, Action, Comedy, ....','C3-cube X Cursed X Curious'),
('CaheDetectiveClub', 'ECCHI', 'Up chap 8', 'Admin', 'Fujishiro Takeshi', 'Đang Tiến Hành', 'image/CaheDetectiveClub.jpg', 'Ecchi 18+, Comedy, ...','Cahe Detective Club'),
('CanhCuaMuaHe52827', 'COMEDY', 'Đang Cập Nhập', 'Admin', 'Na Ha Ran', 'Đã Đủ Bộ', 'image/CanhCuaMuaHe.jpg', 'Comedy, ...','Cánh Cửa Mùa Hè 5 2827'),
('CapDoiKiLa', 'COMEDY', 'Up Chap 7', 'Admin', 'Han Yu Rang', 'Đang Cập Nhập', 'image/CapDoiKiLa.jpg', 'Comedy, Manhwa, ...','Cặp Đôi Kỳ Lạ'),
('CaterpillarOperetta', 'ECCHI', '4 chap', 'Admin', 'Yamada Maya', 'Đã Đủ Bộ', 'image/CaterpillarOperetta.jpg', 'Ecchi 18+, Comedy, ...','Caterpillar Operetta'),
('CauBeThanGiao-UshioAndTora', 'ACTION', 'Up Chap 175', 'Admin', 'Kazuhiro Fujita', 'Đang Tiến Hành', 'image/CauBeThanGiao-UshioAndTora.jpg', 'Action, Drama ....','Cậu Bé Thần Giáo - Ushio And Tora'),
('ChangTraiQuyToc', 'COMEDY', '3 tập', 'Admin', 'Yin Chen Yi, San Yue Tu', 'Đang Cập Nhập', 'image/ChangTraiQuyToc.jpg', 'Comedy, ...','Chàng Trai Quý Tộc'),
('ChuThoong', 'FUNNY', '26 Tập', 'Admin', 'Vương Trạch', 'Đang Tiến Hành', 'image/ChuThoong.jpg', 'Funny, ...','Chú Thoòng'),
('CoChuNho', 'COOKING', '11 tập', 'Admin', '----', 'Đang Cập Nhập', 'image/CoChuNho.jpg', 'Cooking, Comedy, ....','Cô Chủ Nhỏ'),
('CoGaiYeuKieu', 'MANHWA', 'Up Tập 10', 'Admin', 'Hwang Mi Ri', 'Đang Tiến Hành', 'image/CoGaiYeuKieu.jpg', 'Manhwa, Comedy, ...','Cô Gái Yêu Kiều'),
('ComeComeVanilla', 'ECCHI', 'Up chap 8', 'Admin', 'HARUMI Chihiro', 'Đang Tiến Hành', 'image/ComeComeVanilla.jpg', 'Ecchi 18+, Comedy, ....','Come Come Vanilla'),
('ComicStudio', 'ECCHI', 'Up Chap 4', 'Admin', 'Konogi Yoshiru', 'Đang Tiến Hành', 'image/ComicStudio.jpg', 'Ecchi 18+, Comedy, Harem, ...','Comic Studio'),
('Conan', 'ADVENTURE', 'Up Chap 836', 'Hảo', 'Gosho Aoyama', 'Đang Tiến Hành', 'image/Conan.jpg', 'Aventure, Comedy .....','Conan'),
('Conductor', 'HORROR', 'Up Chap 1', 'Hảo', 'KAMINAGA Manabu, Dokia', 'Đang Tiến Hành', 'image/Conductor.jpg', 'Horror, Drama, ...','Conductor'),
('CongChuaAmThuc', 'Cooking', '11 tập', 'Admin', '-----', 'Đang Cập Nhập', 'image/CongChuaAmThuc.jpg', 'Cooking, ...','Công Chúa Ẩm Thực '),
('CrimsonGrave', 'ECCHI', 'Up chap 9', 'Admin', 'Miyake Taishi', 'Đang Tiến Hành', 'image/CrimsonGrave.jpg', 'Ecchi 18+, Action, Adventure, Comedy,...','Crimson Grave'),
('CuCuCute', 'ECCHI', 'Up Chap 1', 'Hảo', 'Nojima Kenji, Fujii Rino', 'Đang Tiến Hành', 'image/CuCuCute.jpg', 'Ecchi 18+, Fantasy, ...','Cu Cu Cute'),
('CuocSongCuaToi', 'COMEDY', '13 Tập', 'Admin', 'Hwang Mi Ri', 'Đang Cập Nhập', 'image/CuocSongCuaToi.jpg', 'Comedy, Manhwa,... ','Cuộc Sống Của Tôi'),
('CuonTuDienKyBi', 'COMEDY', '30 Tập', 'Admin', 'Fujiko F. Fujio', 'Đã Đủ Bộ', 'image/CuonTuDienKiBi.jpg', 'Comedy, Fantasy, ...','Cuốn Từ Điển Kì Bí'),
('D.gray-man-ThayTruTa', 'HORROR', 'Up Chap 216', 'Admin', 'Hoshino Katsura', 'Đang Tiến Hành', 'image/D.gray-man.jpg', 'Horror, Action, Adventure, Comedy, Drama, ...','D.gray-man - Thầy Trừ Tà'),
('DaKhuc', 'MANHWA', '15 Tập', 'Hảo', 'Hwang Mi Ri', 'Đã Đủ Bộ', 'image/DaKhuc.jpg', 'Manhwa, Comedy, ...','Dạ Khúc'),
('DakaraBokuWaHGaDekinai', 'ECCHI', 'Up 8 Chap', 'Hảo', 'Tachibana Pan', 'Đang Tiến Hành', 'image/DakaraBokuWaHGaDekinai.jpg', 'Ecchi 18+, Harem, ...','Dakara Boku Wa H Ga Dekinai'),
('DanceInTheVampireBund', 'ECCHI', 'Up Chap 12', 'Hảo', 'TAMAKI Nozomu', 'Đang Tiến Hành', 'image/DanceInTheVampireBund.jpg', 'Ecchi 18+, Action, ....','Dance In The Vampire Bund'),
('DateALive', 'HAREM', 'Up Chap 4', 'Admin', 'Tachibana Koushi', 'Đang Tiến Hành', 'image/DateALive.jpg', 'Harem, Action, ....','Date A Live'),
('DiepVanTienTruyen', 'MANHUA', '20 Chap', 'Admin', 'Hoàng Ngọc Lang', 'Đã Đủ Bộ', 'image/DiepVanTienTruyen.jpg', 'Manhua, Action, Fantasy, ...','Diệp Vấn Tiền Truyện'),
('DogDays', 'HAREM', '1 Chap', 'Admin', 'Tsuzuki Masaki, Fujima Takuya', 'Đang Tiến Hành', 'image/DogDays.jpg', 'Harem, Adventure, Action, ...','Dog Days'),
('Doremon', 'COMEDY', '45 Tập', 'Hảo', 'Fujiko.F.Fujio', 'Đã Đủ Bộ', 'image/Doremon-TapNgan.jpg', 'Comedy, Fantasy, ...','Doremon - Đôrêmon'),
('DrSlump', 'Funny', 'Up Chap 78', 'Admin', 'Toriyama Akira', 'Đang Tiến Hành', 'image/DrSlump.jpg', 'Funny, Adventure, Comedy, ...','Dr Slump - Tiến Sĩ Slump'),
('DracuRiot', 'HAREM', 'Up Chap 6', 'Hảo', ' Yuzu Soft, KINO Konoki', 'Đang Tiến Hành', 'image/DracuRiot.jpg', 'Harem, Comedy, Ecchi 18+, ....','Dracu Riot'),
('DragonBall', 'ACTION', 'Up Chap 243', 'Hảo', 'Toriyama Akira', 'Đã Đủ Bộ', 'image/DragonBall-7VienNgocRong.jpg', 'Action, Adventure, Fantasy, ...','Dragon Ball - 7 Viên Ngọc Rồng'),
('DungSiRong', 'ADVENTURE', '34 Tập', 'Admin', 'Đang Cập Nhật ...', 'Đã Đủ Bộ', 'image/DungSiRong.jpg', 'Adventure, Drama ...','Dũng Sĩ Rồng'),
('DaiCaDiHoc', 'MANHWA', '13 Tập', 'Hảo', 'Hwang Mi Ri', 'Đã Đủ Bộ', 'image/DaiCaDiHoc.jpg', 'Manhwa, Comedy, ...','Đại Ca Đi Học'),
('DauBepTruDanh', 'ADVENTURE', 'Up Tập 37', 'Admin', 'Kawamura Watasu', ' Đang Tiến Hành', 'image/DauBepTruDanh.jpg', 'Aventure, Cooking ...','Đầu Bếp Trứ Danh'),
('DenVoiAnh', 'MANHWA', '9 Tập', 'Admin', 'Han Yu Rang', 'Đã Đủ Bộ', 'image/DenVoiAnh.jpg', 'Manhwa, Comedy, ...','Đến Với Anh'),
('DoanHonDao', 'MANHUA', '8 Tập', 'Admin', 'Mã Vinh Thành', 'Đã Đủ Bộ', 'image/DoanHonDao.jpg', 'Manhua, Action, Adventure, Fantasy, ...','Đoạn Hồn Đao'),
('DoiQuanNhiNho', 'FUNNY', '32 Tập', 'Admin', 'Pắc In Sô & Choi Sang', 'Đã Đủ Bộ', 'image/DoiQuanNhiNho.jpg', 'Funny, Adventure, Comedy, ...','Đội Quân Nhí Nhố'),
('Doraemon-TruyenDai', 'COMEDY', '50 Tập', 'Hảo', 'Fujiko.F.Fujio', 'Đã Đủ Bộ', 'image/Doremon-TruyenDai.jpg', 'Comedy, Fantasy,....','Đôrêmon - Truyện Dài'),
('Doraemon-TruyenMau', 'COMEDY', '29 Tập', 'Admin', 'Đang Cập Nhập', 'Đã Đủ Bộ', 'image/Doremon-TruyenMau.gif', 'Comedy, Fantasy, ....','Doraemon-Truyện Màu'),
('DoraemonThem', 'COMDEY', 'Đang Cập Nhập', 'Admin', 'Tanaka Doumei', 'Đã Đủ Bộ', 'image/Doremon-Them.jpg', 'Comedy, Fantasy, ....','Đôrêmon Thêm'),
('EatManHiepSiOcVit', 'ACTION', 'Up chap 14 bản đẹp', 'Hảo', 'Yoshitomi Akihito', 'Đang Tiến Hành', 'image/EatMan-HiepSiOcVit.jpg', 'Action, Horror, Fantasy ...','Eat Man - Hiệp Sĩ Ốc Vít'),
('Ebiten', 'HAREM', 'Up Chap 1', 'Admin', 'Sukaji, Inugami Kira', 'Đang Tiến Hành', 'image/Ebiten.jpg', 'Harem, Comedy, ','Ebiten'),
('Ef-AFairyTaleOfTheTwo', 'HAREM', 'Up Chap 8', 'Hảo', 'Kagami Yu, Mikage, Miyabi Juri', 'Đang Tiến Hành', 'image/Ef-AFairyTaleOfTheTwo.jpg', 'Harem, Comedy, ...','Ef - A Fairy Tale Of The Two'),
('Eighth', 'HAREM', 'Up Chap 3', 'Admin', 'KAWACHI Izumi', 'Đang Tiến Hành', 'image/Eighth.jpg\r\n\r\n', 'Harem, Comedy, Action, Ecchi 18+, ....','Eighth'),
('EnmaNoHanayome', 'HAREM', 'Up 3 Chap', 'Admien', 'YUUKI Sakuya', 'Đang Tiến Hành', 'image/EnmaNoHanayome.jpg', 'Harem, Action, Comedy, Ecchi 18+, ...','Enma No Hanayome'),
('Enomoto', 'FUNNY', '3 Chap', 'Admin', 'Enomoto Shunji', 'Đang Tiến Hành ', 'image/Enomoto.jpg', 'Funny, Comedy, ...','Enomoto'),
('Fairy Tail','ACTION', 'Up Chap 297', 'Hảo', 'Mashima Hiro', 'Đang Tiến Hành', 'image/FairyTail-HoiPhapSu.jpg', 'Action, Fantasy, Aventure ......','Fairy Tail - Hội Pháp Sư'),
('Fire Emblem', 'ADVENTURE', 'Up Chap 36', 'Admin', 'IZAWA Hiroshi, Yamada Koutarou', 'Đang Tiến Hành', 'image/FireEmblem-DauAnLua.jpg', 'Adventure, Drama, Fantasy ...','Fire Emblem - Dấu Ấn Lửa'),
('FullMetalAlchemist', 'FANTASY', 'Up Chap 109', 'Hảo', 'Arakawa Hiromu', 'Đang Tiến Hành', 'image/FullMetalAlchemist.jpg', 'Fantasy, Action, Drama, ...','Full Metal Alchemist'),
('GEdition', 'Ecchi', '4 chap', 'Admin', 'Kawashita Mizuki', 'Đang Tiến Hành', 'image/GEdition.jpg', 'Ecchi, Comedy, ...','G Edition'),
('G-school', 'ACTION', 'Up Chap 13', 'Admin', 'Kim byeong-sheol', 'Đang Tiến Hành', 'image/G-school-PhapSuTruongHoc.jpg', 'Action, Comedy, Fantasy ....','G-school - Pháp Sư Trường Học'),
('GakuOu-TheTwinkleStar', 'HAREM', 'Up Chap 1', 'Admin', 'Lump of Sugar, TATETSU Teto', 'Đang Tiến Hành', 'image/GakuOu-TheTwinkleStar.jpg', 'Harem, Fantasy, Comedy, Ecchi 18+, ...','Gaku Ou - The Twinkle Star'),
('GanKon', 'HAREM', 'Up Chap 1', 'Admin', 'SUGAWARA Kenji', 'Đang Tiến Hành', 'image/GanKon.jpg', 'Harem,Action, Comedy, ...','Gan Kon'),
('Gift-UnderTheRainbow', 'HAREM', 'UP Chap 12', 'Hảo', 'Moonstone, Yukiwo', 'Đang Tiến Hành', 'image/Gift-UnderTheRainbow.jpg', 'Harem, Comedy, Drama, ...','Gift - Under The Rainbow'),
('GirlSaurus', 'HAREM', '17 Chap', 'Admin', 'Kusunoki Kei', 'Đang Tiến Hành', 'image/GirlSaurus.jpg', 'Harem, Comedy, Ecchi 18+, ....','Girl Saurus'),
('Gou-dereBishoujoNagiharaSora', 'HAREM', 'Up Chap 1', 'Admin', 'Minazuki Suu', 'Đang Tiến Hành', 'image/Gou-dereBishoujoNagiharaSora.jpg', 'Harem, Comedy, Ecchi 18+, ...','Gou-dere Bishoujo Nagihara Sora'),
('HachiIchi', 'HAREM', 'Up Chap 17', 'Admin', 'Saki Kaori', 'Đang Tiến Hành', 'image/HachiIchi.jpg', 'Harem, Comedy, Ecchi 18+, ...','Hachi Ichi'),
('HagureYuushaNoKichikuBigaku', 'HAREM', 'Up Chap 5', 'Hảo', 'UESU Tetsuto, NAKASONE Haiji', 'Đang Tiến Hành', 'image/HagureYuushaNoKichikuBigaku.jpg', 'Harem, Adventure, Ecchi 18+, ...','Hagure Yuusha No Kichiku Bigaku'),
('HakoirinDevilPrincess', 'HAREM', 'Up Chap 13', 'Admin', 'Matsumoto Makoto, NETSU Maika', 'Đang Tiến Hành', 'image/HakoirinDevilPrincess.jpg', 'Harem, Comedy, Ecchi 18 +, ...','Hakoirin Devil Princess'),
('HanhPhucBatTan', 'MANHWA', '10 Tập', 'Admin', 'Han Yu Rang', 'Đã Đủ Bộ', 'image/HanhPhucBatTan.jpg', 'Manhwa, ...','Hạnh Phúc Bất Tận'),
('HarvestDecember', 'HAREM', 'Up Chap 2', 'Admin', 'Talestune', 'Đang Tiến Hành', 'image/HarvestDecember.jpg\r\n', 'Harem, Comedy, Drama, ...','Harvest December'),
('HiepKhachGiangHo', 'ADVENTURE', 'Up Chap 426', 'Hảo', 'Jun Gook Jin, Yang Jae Hyun', 'Đang Cập Nhập', 'image/HiepKhachGiangHo.jpg', 'Adventure, Action, Drama ...','Hiệp Khách Giang Hồ'),
('HighSchoolDxd', 'HAREM', 'Up Chap 21', 'Admin', 'Ishibumi Ichiei', 'Đang Tiến Hành', 'image/HighSchoolDxd.png', 'Harem, Action, Comedy, Ecchi, Fantasy, ... ','High School Dxd'),
('HoaNguoi', 'MANHWA', '7 Tập', 'Admin', 'Jeon Young Hee', 'Đã Đủ Bộ', 'image/HoaNguoi.jpg', 'Manhwa, Comedy, Drama, ...','Hoa Người'),
('HoangCung', 'MANHWA', '27 Tập', 'Admin', 'Park So-hee', 'Đã Đủ Bộ', 'image/HoangCung.jpg', 'Manhwa,Comedy, ...','Hoàng Cung'),
('HopDongNoLe', 'MANHWA', '10 Tập', 'Admin', 'Hwang Mi Ri', 'Đã Đủ Bộ', 'image/HopDongNoLe.jpg', 'Manhwa, Comedy, ...','Hợp Đồng Nô Lệ'),
('IchibanUshiroNoDaiMaou', 'HAREM', 'Up Chap 9', 'Admin', 'Mizuki Shoutarou', 'Đang Tiến Hành', 'image/IchibanUshiroNoDaiMaou.jpg', 'Harem, Comedy, Ecchi 18+, Drama, ...','Ichiban Ushiro No Dai Maou'),
('Ichigo100%', 'HAREM', '19 Chap', 'Admin', 'Kawashita Mizuki', 'Đã Đủ Bộ', 'image/Ichigo100.jpg', 'Harem, Ecchi 18+, Comedy, ...','Ichigo 100%'),
('Jindo', 'FUNNY', '100 Tập', 'Hảo', 'Monma Motoki', 'Đã Đủ Bộ', 'image/Jindo-DuongDanDenKhungThanh.jpg', 'Funny, Comedy, ...','Jindo - Đường Dẫn Đến Khung Thành'),
('JuvenileRemix', 'HORROR', '97 Chap', 'Admin', 'Osuga Megumi, Isaka Kotaro', 'Đã Đủ Bộ', 'image/JuvenileRemix.jpg', 'Horror, Action, Drama, ...','Juvenile Remix - Ma Vương'),
('Kekkaishi', 'FANTASY', '345 Chap', 'Admin', 'Tanabe Yellow', 'Đã Đủ Bộ', 'image/Kekkaishi-KetGioiSu.jpg', 'Fantasy, Action, Adventure, Comedy, Drama, ...','Kekkaishi - Kết Giới Sư'),
('KingOfHell', 'ACTION', 'Up Tập 37', 'Hảo', 'Ra In Soo, Kim Jae Hwan', 'Đang Tiến Hành', 'image/KingOfHell-DiemDe.jpg', 'Action ...','King Of Hell - Diêm Đế'),
('LoLemKenRe', 'MANHWA', '10 Tập', 'Hảo', 'Hwang Mi Ri', 'Đã Đủ Bộ', 'image/LoLemKenRe.jpg', 'Manhwa, Comedy, Harem, ...','Lọ Lem Kén Rể'),
('MaiYeuAnh', 'MANHWA', '9 Tập', 'Hảo', 'Jeon Young Hee', 'Đã Đủ Bộ', 'image/MaiYeuAnh.jpg', 'Manhwa, ...','Mãi Yêu Anh'),
('Malisa', 'ECCHI', 'Up chap 8 bản đẹp', 'Admin', 'LIN Malisa', 'Đang Tiến Hành', 'image/Malisa.jpg', 'Ecchi 18+, Drama, ...','Malisa'),
('MatNaTinhYeu', 'MANHWA', '31 Tập', 'Hảo', 'Han Yu rang', 'Đang Tiến Hành', 'image/MatNaTinhYeu.jpg', 'Manhwa, Action, Comedy, ...','Mặt Nạ Tình Yêu'),
('NabariNoOu', 'ACTION', 'Up Tập 9', 'Admin', 'Kamatani Yuhki', 'Đang Tiến Hành', 'image/NabariNoOu-AnVuong.jpg', 'Action, Aventure, Comedy, Drama...','Nabari No Ou - Ẩn Vương'),
('NankadaPhuThuy', 'FANTASY', '7 tập', 'Admin', 'Đang Cập Nhập', 'Đang Tiến Hành', 'image/NankadaPhuThuyVuiTinh.jpg', 'Fantasy, ...','Nankada Phù Thủy Vui Tính'),
('Naruto', 'ACTION', 'Up Chap 614', 'Hảo', 'Masashi Kishimoto', 'Đang Tiến Hành', 'image/Naruto.jpg', 'Action, Aventure, Fantasy ....','Naruto'),
('NhaHangHanhPhuc', 'COOKING', '5 Tập', 'Admin', 'NAKANISHI Yasuhiro', 'Đang Cập Nhập', 'image/NhaHangHanhPhuc.jpg', 'Cooking, Comedy, ...','Nhà Hàng Hạnh Phúc 5 382'),
('NhipDapTraiTim-OneShot', 'ONESHOT', '1 Chap', 'Admin', 'Mishima Kazuhiko', 'Đã Đủ Bộ', 'image/NhipDapTraiTim.jpg', 'One Shot, ...','Nhịp Đập Trái Tim - One Shot'),
('NhuLaiThanChuong', 'MANHUA', '214 Chap', 'Admin', 'Huang Yu Lang', 'Đã Đủ Bộ', 'image/NhuLaiThanChuong.jpg', 'Manhua, Action, Fantasy, ...','Như Lai Thần Chưởng'),
('PacmanCauBeSieuNhan', 'COMEDY', '7 Tập', 'Hảo', 'FUJIKO F. Fujio', 'Đã Đủ Bộ', 'image/Pacman-CauBeSieuNhan.jpg', 'Comedy, Adventure, Fantasy, ....','Pacman - Cậu Bé Siêu Nhân'),
('PetShopOfHorrors', 'FANTASY', '42 Chap', 'Hảo', 'Akino Matsuri', 'Đã Đủ Bộ', 'image/PetShopOfHorrors.jpg', 'Fantasy, Comedy, Horror, Drama, ...','Pet Shop Of Horrors'),
('Rai-VoTuongNganHa', 'ACTION', 'Up Chap 12 bản đẹp', 'Admin', 'Joji Manabi', 'Đang Tiến Hành', 'image/Rai-VoTuongNganHa.jpg', 'Action, ....','Rai -Võ Tướng Ngân Hà'),
('SagaKiemThanhSu', 'ACTION', 'Up Chap 48 bản đẹp', 'Hảo', 'Shimomura Tomohiro', 'Đang Tiến Hành', 'image/SagaThanhKiemSu.jpg', 'Action, Aventure ......','Saga Kiếm Thánh Sứ'),
('ShanaOhYoshitsuneIi', 'ADVENTURE', 'Up Chap 42', 'Admin', 'Sawada Hirofumi', 'Đang Tiến Hành', 'image/ShanaOhYoshitsuneLi-ThieuNienVuong.jpg', 'Adventure, ....','Shana Oh Yoshitsune Ii - Thiếu Niên Vương 2'),
('ShinAngyoOnshi', 'ACTION', '12 Tập', 'Hảo', 'Youn In-Wan, Yang Kyung-Il', 'Đã Đủ Bộ', 'image/ShinAngyoOnshi-AmHanhNguSu.jpg', 'Action, Horror .....','Shin Angyo Onshi - Ám Hành Ngự Sử'),
('SieuQuayTappi', 'FUNNY', '39 Tập', 'Admin', 'Tetsuya Chiba', 'Đã Đủ Bộ', 'image/SieuQuayTeppi.jpg', 'Funny, Action, Comedy, ...','Siêu Quậy Teppi'),
('TanTayDuki', 'FUNNY', 'Up Chap 26', 'Admin', 'Đang Cập Nhập', 'Đang Tiến Hành', 'image/TanTayDuKy.jpg', 'Funny, ...','Tân Tây Du Ký'),
('ThamTuNhi', 'ADVENTURE', '10 tập', 'Admin', 'Đang cập nhập', 'Đã Đủ Bộ', 'image/ThamTuNhi.jpg', 'Adventure, Comedy ......','Thám Tử Nhí'),
('ThanBepWefifu', 'COOKING', '5 Tập', 'Admin', 'Đang Cập Nhập', 'Đã Đủ Bộ', 'image/ThanBepWefifu.jpg', 'Cooking, Comedy, ...','Thần Bếp Wefifu'),
('ThienThanVaAcQuy', 'ECCHI', '21 Tập', 'Admin', 'Miyoshi Yuki', 'Đã Đủ Bộ', 'image/ThienThanVaAcQuy.jpg', 'Ecchi, Comedy, ....','Thiên Thần Và Ác Quỷ'),
('ThuDauMungMu', 'FUNNY', '2 Chap', 'Admin', 'Thành Phong', 'Đang Tiến Hành', 'image/ThuDauMungMu.jpg', 'Funny, ...','Thủ Đầu Mưng Mủ'),
('TieuDauBepCungDinh', 'COOKING', 'Up Chap 29', 'Admin', 'Ogawa Etsushi', 'Đang Tiến Hành', 'image/TieuDauBepCungDinh.jpg', 'Cooking, Comedy, ...','Tiểu Đầu Bếp Cung Đình'),
('TieuNgaoGiangHo', 'MANHUA', '34 Tập', 'Admin', 'Kim Dung, Lý Chí Thanh', 'Đã Đủ Bộ', 'image/TieuNgaoGiangHo.jpg', 'Manhua, Action, ...','Tiếu Ngạo Giang Hồ'),
('TieuNuVuong', 'FANTASY', '8 Tập', 'Hảo', 'KIM Yeon Joo', 'Đã Đủ Bộ', 'image/TieuNuVuong.jpg', 'Fantasy, Comedy, Manhwa, ...','Tiểu Nữ Vương'),
('TruyenTranhHai', 'FUNNY', 'Up Chap 110', 'Admin', 'Đang Cập Nhập', 'Đang Tiến Hành', 'image/TruyenTranhHai.jpg', 'Funny, Manhua, Comedy, ...','Truyện Tranh Hài'),
('OnePiece', 'ACTION', 'Up Chap 693', 'Admin', 'Oda Eiichiro', 'Đang Tiến Hành', 'image/OnePiece -DaoHaiTac.jpg', 'Action, Funny, Fantasy, Comedy ...','Truyện Tranh One Piece - Đảo Hải Tặc'),
('ShamanKing', 'ADVENTURE', 'Up Chap 300', 'Admin', 'Takei Hiroyuki', 'Đang Tiến Hành', 'image/ShamanKing-VuaPhapThuat.jpg', 'Adventure, Fantasy, ....','Truyện Tranh One Piece - Đảo Hải Tặc'),
('TuDaiDanhBo', 'MANHUA', '371 Chap', 'Admin', 'Ôn Thụy An Tư Đồ Kiếm Kiều', 'Đã Đủ Bộ', 'image/TuDaiDanhBo.jpg', 'Manhua, Action, Adventure, ...','Tứ Đại Danh Bổ'),
('TuyQuyen', 'MANHUA', '81 Tập', 'Admin', 'Triệu Nhữ Đức', 'Đã Đủ Bộ', 'image/TuyQuyen.jpg', 'Manhua, Action, ...','Túy Quyền'),
('Vagabond', 'ADVENTURE', 'Up Chap 282', 'Admin', 'Inoue Takehiko', 'Đang Tiến Hành', 'image/Vagabond-LangKhach.jpg', 'Adventure, Drama .......','Vagabond - Lãng Khách'),
('WildLife', 'COMEDY', 'Up Tập 21', 'Admin', 'Fujisaki masato', 'Đang Tiến Hành', 'image/WildLife-CuocSongHoangDa.jpg', 'Comedy, Aventure, ....','Wild Life - Cuộc Sống Hoang Dã'),
('YurekaLostSaga', 'ADVENTURE', 'Up Chap 104 bản đẹp', 'Hảo', 'Son Hee-joon, Yun Keong Kim', 'Đang Tiến Hành', 'image/YurekaLostSaga-TheGioiDaMat.jpg', 'Adventure, Fantasy, Action .....','Yureka Lost Saga - Thế Giới Đã Mất');





-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `decentralization` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `decentralization`) VALUES
('hao', '12345', 'A'),
('khanh', '12345', 'A'),
('Shiyuri', '091092', 'M'),
('user', '12345', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--
CREATE TABLE IF NOT EXISTS `chapter` (
  `codep` varchar(50) NOT NULL,
  `sochap` varchar(50) NOT NULL,
  `linkchap` varchar(100) NOT NULL,
  `socuachap` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `chapter`
--
INSERT INTO `chapter` (`codep`, `linkchap`, `socuachap`) VALUES
('DaiThanhVuong', './image/daithanhvuong/chap1','1'),
('DaiThanhVuong', './image/daithanhvuong/chap2','2'),
('.hack//link', './image/hacklink/chap1','1'),
('.hack//link', './image/hacklink/chap2','2');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `kind`
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`codep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
