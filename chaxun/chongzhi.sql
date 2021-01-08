/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.14 : Database - chongzhi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chongzhi` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `chongzhi`;

/*Table structure for table `db_admin` */

DROP TABLE IF EXISTS `db_admin`;

CREATE TABLE `db_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `account` varchar(32) DEFAULT NULL COMMENT '管理员账号',
  `password` varchar(36) DEFAULT NULL COMMENT '管理员密码',
  `login_time` int(11) DEFAULT NULL COMMENT '最后登录时间',
  `login_ip` varchar(15) NOT NULL,
  `login_count` mediumint(8) NOT NULL COMMENT '登录次数',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '账户状态，禁用为0   启用为1',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `db_admin` */

insert  into `db_admin`(`id`,`account`,`password`,`login_time`,`login_ip`,`login_count`,`status`,`create_time`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3',1592269595,'0.0.0.0',346,1,1437979578);

/*Table structure for table `db_card` */

DROP TABLE IF EXISTS `db_card`;

CREATE TABLE `db_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `account` varchar(64) DEFAULT '' COMMENT '卡号',
  `pwd` varchar(32) DEFAULT '' COMMENT '密码',
  `amount` int(11) DEFAULT '0' COMMENT '面额',
  `isuse` int(11) DEFAULT '0' COMMENT '是否使用',
  `utime` int(11) DEFAULT '0' COMMENT '使用时间',
  `mobile` varchar(11) DEFAULT '' COMMENT '电话号码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='卡号表';

/*Data for the table `db_card` */

insert  into `db_card`(`id`,`account`,`pwd`,`amount`,`isuse`,`utime`,`mobile`) values (20,'csk00010','08285562',50,1,1592234498,'15201210000'),(19,'csk00009','18371737',50,0,0,''),(18,'csk00008','79454491',50,0,0,''),(17,'csk00007','42523779',50,0,0,''),(16,'csk00006','05832121',50,0,0,''),(15,'csk00005','24479800',50,0,0,''),(14,'csk00004','21807237',50,0,0,''),(13,'csk00003','21960518',50,0,0,''),(12,'csk00002','92708608',50,0,0,''),(11,'csk00001','12429435',50,0,0,''),(21,'zsk00021','31298100',100,0,0,''),(22,'zsk00022','50981755',100,0,0,''),(23,'zsk00023','47353295',100,0,0,''),(24,'zsk00024','27731000',100,0,0,''),(25,'zsk00025','70809431',100,0,0,'');

/*Table structure for table `db_user` */

DROP TABLE IF EXISTS `db_user`;

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(128) DEFAULT '' COMMENT '用户名',
  `mobile` varchar(11) DEFAULT '' COMMENT '电话号码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

/*Data for the table `db_user` */

insert  into `db_user`(`id`,`username`,`mobile`) values (2,'oHTCM5Xd6avv_uMSi30VwnLP6ubs','15201210000'),(3,'oHTCM5QvAhfpaJTInsB6I-7O2J8o','13055555555'),(4,'oHTCM5c87yhvlBlmrEP5Fhm5tZFc','13865452525');

/*Table structure for table `db_user_info` */

DROP TABLE IF EXISTS `db_user_info`;

CREATE TABLE `db_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `platform_user_id` varchar(128) DEFAULT '' COMMENT '用户名',
  `balance` decimal(10,2) DEFAULT '0.00' COMMENT '余额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户余额表';

/*Data for the table `db_user_info` */

insert  into `db_user_info`(`id`,`user_id`,`platform_user_id`,`balance`) values (1,2,'oHTCM5Xd6avv_uMSi30VwnLP6ubs','50.00'),(2,3,'oHTCM5QvAhfpaJTInsB6I-7O2J8o','0.00'),(3,4,'oHTCM5c87yhvlBlmrEP5Fhm5tZFc','0.00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
