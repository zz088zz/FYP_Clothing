SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_code` char(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `colour` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `product_price` decimal(5,2) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_isDelete` int(1) NOT NULL DEFAULT '0',
   PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product` (`product_id`,`product_code`, `product_name`, `product_image`,`colour`,`description`, `product_price`, `product_stock`, `product_isDelete`) VALUES
(1,'p1', 'Azzy 350A','product1.png','white','unisex','99.00', 100, 0),
(2,'p2', 'Azzy 350B','product2.png','white','unisex','100.00', 100, 0),
(3,'p3', 'Azzy 350C','product3.png','white','unisex','120.00', 100, 0),
(4,'p4', 'Azzy 350D','product4.png','white','unisex','99.00', 100, 0),
(5,'p5', 'Azzy 350E','product5.jpg','white','unisex','100.00', 100, 0),
(6,'p6', 'Azzy 350F','product6.jpg','white','unisex','110.00', 100, 0),
(7,'p7', 'Azzy 350G','product7.jpg','white','unisex','120.00', 100, 0),
(8,'p8', 'Azzy 350H','product8.jpg','white','unisex','99.00', 100, 0),
(9,'p9', 'Azzy 350I','product9.jpg','white','unisex','99.00', 100, 0);

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `purchase_name` varchar(100) NOT NULL,
  `cemail` varchar(50) DEFAULT NULL,
  `cid` int(50) DEFAULT NULL,
  `purchase_color` varchar(100) DEFAULT NULL,
  `purchase_quantity` int(3) NOT NULL,
  `purchase_product_price` decimal(5,2) NOT NULL,
  `purchase_product_code` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*INSERT INTO `purchase` (`purchase_id`, `purchase_name`,`cemail`, `cid`,`purchase_quantity`, `purchase_product_price`, `purchase_product_code`) VALUES
(10, 'Lim Zheng Ming', 'Ming@gmail.com',1, 10, '45.00', 'C101'),
(11, 'Khoh', 'Khoh@gmail.com',2, 50, '30.00', 'C121');*/

ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) DEFAULT NULL,
 `password` varchar(50) DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `phone_number` varchar(15)  DEFAULT NULL,
 `user_isDelete` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_number` ,`user_isDelete`) VALUES
(1, 'Lim Zheng Ming', '12345678', 'ming@gmail.com', '0149362118',0),
(2, 'Ah Meng', '123456789', 'meng@gmail.com', '0169877151',0),
(3, 'Ah Beng', '12345678', 'beng@gmail.com', '0177465211',0),
(5, 'Test', 'test1234', 'test@gmail.com', '01234567891',0);

CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) DEFAULT NULL,
 `password` varchar(50) DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `phone_number` varchar(15)  DEFAULT NULL,
 `user_isDelete` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `phone_number`, `user_isDelete`) VALUES
(1, 'admin', '123456789', 'admin@gmail.com', '4456464654', 0);

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
 `orderid` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(100) NOT NULL,
 `email` varchar(255) NOT NULL,
 `phone` varchar(15) NULL,
 `address` varchar(100) NOT NULL,
 `cname` varchar(100)  NOT NULL,
 `cnum` int(20) NOT NULL,
 `expt` int(5)  NOT NULL,
 `cvv` int(5) NOT NULL,
 `totalprice` int(100) NOT NULL,
 `orderpurchase_id` char(5) NOT NULL,
 `cid` int(50) DEFAULT NULL,
 `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `orders` (`orderid`, `fname`, `email`, `phone`, `address`, `cname`, `cnum`, `expt`, `cvv`, `totalprice`, `orderpurchase_id`, `cid`, `order_date`) VALUES
(1, 'Lim Zheng Ming', 'ming@gmail.com', '0149362118', 'No1, parit besar jalan temenggong ahmad 84000 muar,johor', 'Lim Zheng Ming', 5423, 11, 871, 299, '', 1, '2023-01-18 19:43:41'),
(2, 'Ah Meng', 'meng@gmail.com', '0169877151', 'No2, parit bakar jalan temenggong ahmad 84010 muar, johor', 'Ah Meng', 4423, 12, 974, 319, '', 2, '2023-01-18 19:54:39'),
(3, 'Ah Beng', 'beng@gmail.com', '0177465211', 'no3,parit jawa jalan mati 84000 muar, johor', 'Ah Beng', 4134, 11, 846, 460, '', 3, '2023-01-18 19:58:34');

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orders_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `order_items` (`id`, `orders_id`, `prod_id`, `qty`, `price`, `color`) VALUES
(1, 1, 1, 1, 99, 'white'),
(2, 1, 2, 2, 100, 'black'),
(3, 2, 4, 1, 99, 'black'),
(4, 2, 5, 1, 100, 'black'),
(5, 2, 7, 1, 120, 'white'),
(6, 3, 5, 1, 100, 'black'),
(7, 3, 7, 1, 120, 'white'),
(8, 3, 7, 2, 120, 'black');

/*
CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL, 
  `userid` int(50) DEFAULT NULL,
   PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;*/