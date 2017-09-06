CREATE TABLE `shop_admin` (
  `adminid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `adminuser` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员账号',
  `adminpass` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员密码',
  `adminemail` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员电子邮箱',
  `logintime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `loginip` bigint(32) unsigned NOT NULL DEFAULT '0' COMMENT '登录IP',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `shop_admin_adminuser_adminpass` (`adminuser`,`adminpass`),
  UNIQUE KEY `shop_admin_adminuser_adminemail` (`adminuser`,`adminemail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO "shop_admin"(adminuser,adminpass,adminemail,createtime) VALUES ('admin',md5('123456'),'403228075@qq.com',UNIX_TIMESTAMP());

