-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: MySQL-8.2
-- Generation Time: Feb 12, 2025 at 11:08 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothesDB`
--
CREATE DATABASE IF NOT EXISTS `clothesDB` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `clothesDB`;

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE `authorization` (
  `id_authorization` int NOT NULL,
  `login` char(50) DEFAULT NULL,
  `pass` char(50) DEFAULT NULL,
  `stat` char(20) NOT NULL,
  `img_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYAhBdjd5Dc183RfLQZmtTfkKt34zxUU5iEw&s'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authorization`
--

INSERT INTO `authorization` (`id_authorization`, `login`, `pass`, `stat`, `img_user`) VALUES
(1, 'root', '123456', 'admin', 'https://avatars.mds.yandex.net/i?id=d076d16d9fbe57a17605768171da2a9a_l-5221765-images-thumbs'),
(2, 'user123', '12345678', 'user', 'https://cdn1.flamp.ru/c564ba45697d44877dd81d2cb274d47b.jpg'),
(3, 'user23423', 'kill', 'user', 'https://image.winudf.com/v2/image/Y29tLmNhbWVyYS54aWFvbWlfc2NyZWVuXzBfMTUyMTg0MjgwMl8wMjU/screen-0.jpg?fakeurl=1'),
(8, 'user34', 'qwerty', 'user', 'https://i.pinimg.com/originals/c5/2e/e2/c52ee2866efbfa28a0e94d6a730e05f2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id_clothes` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id_clothes`, `title`, `price`, `img`) VALUES
(1, 'blazer', 10900, 'https://cdn1.ozone.ru/s3/multimedia-3/6154583859.jpg'),
(2, 'cup', 2300, 'https://blagoy-art.ru/uploads/media/product/0001/34/thumb_33663_product_ajax_medium.jpeg'),
(3, 'Tshirt', 1600, 'https://termodecor.ru/wa-data/public/shop/products/72/17/11772/images/28511/28511.750x0.png'),
(4, 'shirt', 4700, 'https://helengifts.ru/700x700xffffff/i/product/oa-3816299XS.jpg'),
(5, 'coat', 9300, 'https://cdn1.ozone.ru/s3/multimedia-e/6123683306.jpg'),
(6, 'trousers', 3400, 'https://www.logostudioltd.co.uk/wp-content/uploads/2020/09/UC902_cover.jpg'),
(9, 'shorts', 2100, 'https://main-cdn.sbermegamarket.ru/big1/hlr-system/162/083/531/129/179/100030542943b0.jpg'),
(15, 'turtleneck', 4700, 'https://cdn1.ozone.ru/s3/multimedia-v/6724354243.jpg'),
(17, 'scarf', 1900, 'https://www.houseofbruar.com/images/products/medium/TF20113FRENCHNAVY.jpg'),
(18, 'watch', 6700, 'https://dr-store.ru/image/cache/catalog/demo-prostore/products/apple/watch/watch-s10/apple-watch-10-alum-dr-store-2-1000x1000.jpg'),
(47, 'gloves', 2400, 'https://i.pinimg.com/originals/37/2f/2e/372f2ec044a0847e3d689c1b3171d7df.png'),
(48, 'tie', 1400, 'https://s3-eu-west-1.amazonaws.com/megaimage/mega-lutbc1550.jpg'),
(49, 'shoes', 3200, 'https://img.kwinto-shoes.ru/img/big/0018450.jpg'),
(50, 'dress', 5600, 'https://st-cdn.tsum.com/sig/be709213e14e7155e2b9c5bd7cd4c912/width/434/i/d9/8c/8b/87/06928eb9-cb32-4b15-b680-16778276da93.jpg'),
(51, 'womens shoes', 3400, 'https://massimorenne.com/upload/resize_cache/webp/iblock/cf0/810_810_2/cf0cbe8138ca92d634cd4c53a8de3d7d.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int NOT NULL,
  `img_review` varchar(10000) NOT NULL,
  `title_review` varchar(100) NOT NULL,
  `text_review` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id_review`, `img_review`, `title_review`, `text_review`) VALUES
(3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZss986ItXylutf82rtKtx8oUrlL9ADEF0_Q&s', 'Кира', 'В Легенде я часто покупаю одежду и аксессуары, и никогда не разочаровывалась. Каждый раз товар приходит качественным, а если есть вопросы — служба поддержки отвечает очень быстро. Особенно порадовали скидки на распродажах! Спасибо за отличный сервис!'),
(4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTegVDJxZeWE_hbDNSXOrIlNuUBvn3-x2EptQ&s', 'Энштейн', 'Покупки в интернет-магазине Легенда — это всегда приятно! Сайт удобный, находить товары легко, а оформление заказа проходит без проблем. Доставка быстрая, а полученные вещи идеально подошли. Очень рада, что открыла для себя этот магазин!'),
(5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1PAhPzNRv_p56DOY62U59MRBs8-VgFXsWLQ&s', 'Валерия', 'Я заказала несколько товаров в интернет-магазине Легенда и осталась в полном восторге!'),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDJkc_89y-dMGIkZfWO0J_NDPxeDvWjgdsQg&s', 'Костя', 'Ткани замечательные. Модели современные и отличные лекала. Сидит одежда как на модели.\r\nБольшая благодарность консультантам в магазине. С вниманием и любовью относятся к покупателям!\r\nУпаковка бережная в фирменные пакеты.'),
(7, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAeLonnIYd5b4LT6caeBZeyiQmnmHyf71G6A&s', 'Кармен', 'Мне всё понравилось. Быстро, качественно, красиво!'),
(8, 'https://cameralabs.org/media/k2/items/cache/3cb06e4cb464be7a87ae9907c7d62b4b_L.jpg', 'Варвара', 'Сегодня впервые узнала о марке Ruxara, случайно зайдя в магазин в ТЦ Мозаика. Приятные к телу ткани, хорошая посадка, актуальные цвета. Большое спасибо Карине за помощь в подборе, рекомендацию комплектов, за вежливость, открытость и доброту.'),
(9, 'https://bigpicture.ru/wp-content/uploads/2019/04/grandbeauty00.jpg', 'Касандра', 'Добрый день, благодарим за приятные слова! Будем рады видеть Вас снова!\r\n'),
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVhADEm5wUWO7epKvQgLzRTlQRXgQj2awMDw&s', 'Лиза', 'Получила свой заказ с этого магазина!'),
(11, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSfoD15iBWykJTDro0bfok2HBjd9Z6TI8uXQ&s', 'Пушкин', 'Хочу поблагодарить компанию Ruxara за качество продукции, а ее сотрудников - за компетентность, трудолюбие, достойный сервис и доброжелательность.\r\nВ очередной раз приезжала в трц Мозаику за летним костюмом.\r\nОтдельная благодарность сотрудникам Диане и Виктории)))??❤️'),
(36, 'https://image.winudf.com/v2/image/Y29tLmNhbWVyYS54aWFvbWlfc2NyZWVuXzBfMTUyMTg0MjgwMl8wMjU/screen-0.jpg?fakeurl=1', 'user23423', 'Хорошая одежда по низкой цене\r\n'),
(37, 'https://cdn1.flamp.ru/c564ba45697d44877dd81d2cb274d47b.jpg', 'user123', 'Хороший магазин одежды!'),
(39, 'https://cdn1.flamp.ru/c564ba45697d44877dd81d2cb274d47b.jpg', 'user1234', 'Хороший костюм, за хорошую цену!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id_authorization`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id_clothes`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id_authorization` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id_clothes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
