-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 11 月 11 日 18:14
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cfc`
--
CREATE DATABASE IF NOT EXISTS `cfc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cfc`;

-- --------------------------------------------------------

--
-- 表的结构 `cfc_admin`
--

CREATE TABLE IF NOT EXISTS `cfc_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL DEFAULT 'admin' COMMENT '用户名',
  `password` varchar(32) NOT NULL DEFAULT '123456' COMMENT '密码',
  `authority` int(11) NOT NULL DEFAULT '3' COMMENT '0:超级管理员1:管理员2:财务部3:客服部',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cfc_admin`
--

INSERT INTO `cfc_admin` (`id`, `username`, `password`, `authority`) VALUES
(1, 'admin', 'admin', 0),
(2, 'caiwu', 'caiwu', 2),
(3, 'kefu', 'kefu', 3),
(4, 'kefu2', 'kefu2', 3),
(5, 'kefu3', 'kefu3', 3);

-- --------------------------------------------------------

--
-- 表的结构 `cfc_customer_information`
--

CREATE TABLE IF NOT EXISTS `cfc_customer_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_number` varchar(200) NOT NULL COMMENT '案件号码',
  `customer` varchar(200) NOT NULL COMMENT '客户名称',
  `recipients` varchar(200) NOT NULL COMMENT '收件人',
  `mobile` varchar(200) NOT NULL COMMENT '手机号',
  `address` varchar(400) NOT NULL COMMENT '收件地址',
  `generality` varchar(200) NOT NULL COMMENT '选择总类',
  `BU` varchar(200) NOT NULL COMMENT 'BU',
  `OfferPrice` float NOT NULL COMMENT 'Offer Price',
  `NetPrice` float NOT NULL COMMENT 'Net Price',
  `Sales` varchar(200) NOT NULL COMMENT 'Sales',
  `PE` varchar(200) NOT NULL COMMENT 'PE',
  `action` varchar(200) NOT NULL COMMENT '本条记录的操作者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `cfc_customer_information`
--

INSERT INTO `cfc_customer_information` (`id`, `case_number`, `customer`, `recipients`, `mobile`, `address`, `generality`, `BU`, `OfferPrice`, `NetPrice`, `Sales`, `PE`, `action`) VALUES
(1, '170602197\r\n', '21212', '21212', '13857465648', '上海市闵行区', '1212', '2312313232', 3232, 3232, 'tylor liu\r\n', 'mary', 'admin'),
(2, '1111', '2222', '3333', '4444', '5555', 'RS', 'RT', 6666, 7777, 'EMC', 'Others', 'admin'),
(3, '', '22222', '2222', '', '', 'RS', '528', 0, 0, '528', '528', 'caiwu'),
(4, '', '', '333333', '', '', 'RS', '528', 0, 0, '528', '528', 'caiwu'),
(5, 'qwer', '', '', '', '', 'RS', '528', 0, 0, '528', '528', ''),
(6, '2222', '2222', '22222', '', '', 'RS', '528', 0, 0, '528', '528', 'kefu'),
(7, '1111', '2222', '3333', '', '', 'RS', '528', 0, 0, '528', '528', 'kefu');

-- --------------------------------------------------------

--
-- 表的结构 `cfc_data`
--

CREATE TABLE IF NOT EXISTS `cfc_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_number` varchar(200) DEFAULT NULL COMMENT '案件号码',
  `customer` varchar(200) DEFAULT NULL COMMENT '客户名称',
  `recipients` varchar(200) DEFAULT NULL COMMENT '收件人',
  `mobile` varchar(200) DEFAULT NULL COMMENT '手机号',
  `address` varchar(400) DEFAULT NULL COMMENT '收件地址',
  `generality` varchar(200) DEFAULT NULL COMMENT '选择总类',
  `BU` varchar(200) DEFAULT NULL COMMENT 'BU',
  `OfferPrice` decimal(10,2) DEFAULT NULL COMMENT 'Offer Price',
  `NetPrice` decimal(10,2) DEFAULT NULL COMMENT 'Net Price',
  `Sales` varchar(200) DEFAULT NULL COMMENT 'Sales',
  `PE` varchar(200) DEFAULT NULL COMMENT 'PE',
  `action` varchar(200) DEFAULT NULL COMMENT '本条记录的操作者',
  `invoice` varchar(200) DEFAULT NULL COMMENT '发票号码',
  `invoice_date` varchar(200) DEFAULT NULL COMMENT '开票日期',
  `express_number` varchar(200) DEFAULT NULL COMMENT '快递单号',
  `express_date` varchar(200) DEFAULT NULL COMMENT '寄件日期',
  `contact_date` varchar(40) DEFAULT NULL COMMENT '联系日期',
  `pay_date` varchar(40) DEFAULT NULL COMMENT '预计付款日期',
  `customer_payment_cycle` varchar(40) DEFAULT NULL COMMENT '客户付款周期',
  `time` int(11) DEFAULT NULL COMMENT '本条记录最后修改时间',
  `status` varchar(20) DEFAULT NULL COMMENT '表示状态',
  `remark` varchar(1000) DEFAULT NULL COMMENT '第三部分的备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `cfc_data`
--

INSERT INTO `cfc_data` (`id`, `case_number`, `customer`, `recipients`, `mobile`, `address`, `generality`, `BU`, `OfferPrice`, `NetPrice`, `Sales`, `PE`, `action`, `invoice`, `invoice_date`, `express_number`, `express_date`, `contact_date`, `pay_date`, `customer_payment_cycle`, `time`, `status`, `remark`) VALUES
(13, '1234567890', '1111', '11111111111', '1111111111111', '11111111111111111', 'RT', 'RT', '99999999.99', '99999999.99', 'RT', 'RT', 'admin', '1', '2017-11-12', '2', '2017-11-12', '2017-11-12', '2017-11-12', '3', 1510423492, 'closed', '4'),
(19, '2222', '22222', '22222', '222', '222', 'RT', 'RT', '22.22', '22.20', 'RT', 'EMC', 'admin', '1111', '2017-11-24', '1111', '2017-11-24', '2017-11-07', '2017-11-07', '2', 1510423904, 'closed', '2');

-- --------------------------------------------------------

--
-- 表的结构 `cfc_express_information`
--

CREATE TABLE IF NOT EXISTS `cfc_express_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice` varchar(200) NOT NULL COMMENT '发票号码',
  `invoice_date` varchar(200) NOT NULL COMMENT '开票日期',
  `express_number` varchar(200) NOT NULL COMMENT '快递单号',
  `express_date` varchar(200) NOT NULL COMMENT '寄件日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='快递信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cfc_express_information`
--

INSERT INTO `cfc_express_information` (`id`, `invoice`, `invoice_date`, `express_number`, `express_date`) VALUES
(1, '1212', '2017-11-03', 'wqewqew', '2017-11-02');

-- --------------------------------------------------------

--
-- 表的结构 `cfc_password`
--

CREATE TABLE IF NOT EXISTS `cfc_password` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(200) NOT NULL DEFAULT '123456' COMMENT '用户密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户密码表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cfc_track_log`
--

CREATE TABLE IF NOT EXISTS `cfc_track_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_date` varchar(40) NOT NULL COMMENT '联系日期',
  `pay_date` varchar(40) NOT NULL COMMENT '预计付款日期',
  `customer_payment_cycle` varchar(40) NOT NULL COMMENT '客户付款周期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='追踪日志表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cfc_track_log`
--

INSERT INTO `cfc_track_log` (`id`, `contact_date`, `pay_date`, `customer_payment_cycle`) VALUES
(1, '2017-11-01', '2017-11-01', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
