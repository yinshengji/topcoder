-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-16 05:01:29
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topcoder`
--

-- --------------------------------------------------------

--
-- 表的结构 `tc_bbs`
--

CREATE TABLE IF NOT EXISTS `tc_bbs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '帖主的id',
  `pid` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL COMMENT '回帖人的姓名',
  `tc_group` varchar(5) NOT NULL COMMENT '回帖人的组别',
  `grade` varchar(5) NOT NULL COMMENT '回帖人的年级',
  `conf` varchar(5) DEFAULT NULL COMMENT '是否允许评论',
  `title` varchar(40) NOT NULL COMMENT '标题',
  `content` varchar(300) NOT NULL COMMENT '内容',
  `date` date NOT NULL COMMENT '时间',
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='回贴信息' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tc_bbs`
--

INSERT INTO `tc_bbs` (`id`, `pid`, `name`, `tc_group`, `grade`, `conf`, `title`, `content`, `date`) VALUES
(1, 0, '桂荣珍', '项目组', '2015级', 'on', '这是发表的第一个帖子', '这个就是内容了，怎么办啊，怎么版不着调的说些什么东西的话呢				                ', '2017-04-24'),
(2, 0, '桂荣珍', '项目组', '2015级', NULL, '这是第二个评论', '这是内容哦\r\n						                ', '2017-04-25'),
(3, 0, 'xubin', '项目组', '2014级', 'on', '这是第三个贴纸', '文章内容是的当时的的三分到手的\r\n						                ', '2017-04-25'),
(4, 0, 'xubin', '项目组', '2014级', NULL, 'sdfsd风格豆腐干反对', '文章内容豆腐干豆腐干豆腐干豆腐干风格豆腐干\r\n						                ', '0000-00-00'),
(5, 0, 'xubin', '项目组', '2014级', NULL, 'sdfsd风格豆腐干反对', '尔特瑞特瑞特瑞特瑞特瑞特热\r\n						                ', '0000-00-00'),
(6, 0, 'xubin', '项目组', '2014级', NULL, 'dfgfd', '文章内容\r\n			dfgsdfgsdfgsdfgsdfg			                ', '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `tc_bbscof`
--

CREATE TABLE IF NOT EXISTS `tc_bbscof` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(15) NOT NULL,
  `uid` int(15) NOT NULL COMMENT '帖子内容',
  `name` varchar(15) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `tc_group` varchar(5) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='写帖人信息' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `tc_bbscof`
--

INSERT INTO `tc_bbscof` (`id`, `pid`, `uid`, `name`, `grade`, `tc_group`, `content`, `date`) VALUES
(18, 0, 1, '桂荣珍', '2015级', '项目组', '111111111111', '2017-04-11'),
(19, 18, 1, '桂荣珍', '2015级', '项目组', '2222222222222', '2017-04-07'),
(20, 19, 1, '桂荣珍', '2015级', '项目组', '333333333333333333', '2017-04-24'),
(21, 20, 1, '桂荣珍', '2015级', '项目组', '444444444444444', '2017-04-24'),
(22, 0, 2, 'xubin', '2014级', '项目组', 'hha哈哈哈哈哈哈哈哈哈', '2017-04-24'),
(23, 0, 3, 'xubin', '2014级', '项目组', '士大夫士大夫', '2017-04-24'),
(24, 0, 3, 'xubin', '2014级', '项目组', '士大夫似的', '2017-04-15');

-- --------------------------------------------------------

--
-- 表的结构 `tc_greatest`
--

CREATE TABLE IF NOT EXISTS `tc_greatest` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `sex` text NOT NULL,
  `grade` text NOT NULL,
  `groups` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `wechat` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL COMMENT '电子邮件',
  `address` text NOT NULL COMMENT '工作地址',
  `l_exp` text NOT NULL COMMENT '学习经验',
  `w_exp` text NOT NULL COMMENT '工作经验',
  `motto` text NOT NULL COMMENT '寄语',
  `status` varchar(4) NOT NULL DEFAULT 'on',
  `class` varchar(6) NOT NULL DEFAULT 'common' COMMENT '等级',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tc_greatest`
--

INSERT INTO `tc_greatest` (`id`, `username`, `name`, `password`, `sex`, `grade`, `groups`, `phone`, `qq`, `wechat`, `email`, `address`, `l_exp`, `w_exp`, `motto`, `status`, `class`, `date`) VALUES
(4, '123', '123', '', 'female', '2015级', '项目组', '13465987458', '1254896578', '45875965845', '1245874586@qq.com', '瑞', '鹅肉i是根据', '', '让他发个新的', 'pass', 'manage', '2017-04-18 13:42:30'),
(5, '456', 'xubin', '456', '男', '2014级', '项目组', '13213767383', '910820818', 'xb910820818', '910820818@qq.com', '北京', '说是道非', '', '士大夫士大夫', 'pass', 'manage', '2017-04-18 13:46:34'),
(6, '789', '852', '789', '女', '2011级', '项目组', '14585478965', '2456987413', '14585478965', '2456987413@qq.com', '警告', '减肥', '', '看完', 'die', 'super', '2017-04-18 13:58:38'),
(7, '147', '桂荣珍', '147', 'female', '2015级', '项目组', '13462507449', '2634682912', '13462507449', '2634682912@qq.com', 'null', 'TC', '', '全力以赴追求卓越\r\n', 'on', '', '2017-04-18 14:03:42'),
(8, '369', '369', '', 'female', '2019级', '算法组', '13456895689', '5895566', '5896589', '5689856@qq.com', '56', '556', '', '15', '', '', '2017-04-18 15:08:21'),
(10, '654', '', '654', '', '', '', '', '', '', '654@qq.com', '', '', '', '', 'pass', 'common', '2017-04-20 10:37:23');

-- --------------------------------------------------------

--
-- 表的结构 `tc_image`
--

CREATE TABLE IF NOT EXISTS `tc_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(8) NOT NULL,
  `img_name` varchar(10) NOT NULL DEFAULT 'TC',
  `path` varchar(10) NOT NULL COMMENT '文件夹位置',
  `src_image` varchar(50) NOT NULL COMMENT '原图',
  `small_image` varchar(50) NOT NULL COMMENT '缩略图',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `tc_image`
--

INSERT INTO `tc_image` (`id`, `user`, `img_name`, `path`, `src_image`, `small_image`, `date`) VALUES
(31, '', '速度', '', '', '', '2017-01-07 09:05:30'),
(32, 'admin', 'adfsd', 'pic2', 'Public/images/pic2/58704e506636c.jpg', 'Public/images/pic2/small_58704e506636c.jpg', '2017-01-07 10:11:28'),
(34, 'admin', 'sdf', 'pic1', 'Public/images/pic1/58719ba2224de.jpg', 'Public/images/pic1/small_58719ba2224de.jpg', '2017-01-08 09:53:38'),
(35, 'admin', 'gdf', 'pic1', 'Public/images/pic1/58719be58e5b6.jpg', 'Public/images/pic1/small_58719be58e5b6.jpg', '2017-01-08 09:54:45'),
(36, 'admin', 'sadgd', 'pic1', 'Public/images/pic1/58719bf070f1b.jpg', 'Public/images/pic1/small_58719bf070f1b.jpg', '2017-01-08 09:54:56'),
(37, 'admin', 'sdfsdf', 'pic1', 'Public/images/pic1/58719c0b00194.jpg', 'Public/images/pic1/small_58719c0b00194.jpg', '2017-01-08 09:55:23');

-- --------------------------------------------------------

--
-- 表的结构 `tc_newstudent`
--

CREATE TABLE IF NOT EXISTS `tc_newstudent` (
  `id` int(200) unsigned NOT NULL AUTO_INCREMENT,
  `n_name` text NOT NULL COMMENT '姓名',
  `n_sno` int(15) NOT NULL COMMENT '学号',
  `n_grade` text NOT NULL COMMENT '班级',
  `n_qq` int(25) NOT NULL COMMENT 'QQ',
  `n_phone` int(15) NOT NULL COMMENT '手机号',
  `n_why` text NOT NULL COMMENT '原因',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新生信息' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tc_newstudent`
--

INSERT INTO `tc_newstudent` (`id`, `n_name`, `n_sno`, `n_grade`, `n_qq`, `n_phone`, `n_why`) VALUES
(5, '123', 123, '123', 123, 123, '123'),
(7, '456', 456, '456', 456, 456, '456'),
(8, '987', 987, '987', 987, 987, '987'),
(9, '申请代付', 123144, '顺德区', 53433234, 2147483647, '4243214'),
(10, '姓名', 0, '班级', 0, 552, '12\r\n8'),
(11, '258', 258, '258', 258, 258, '258');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
