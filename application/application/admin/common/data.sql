#tms 数据库
DROP DATABASE IF EXISTS tms;
CREATE DATABASE tms;
USE tms;
#管理员表
CREATE TABLE admin(
id SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(12) NOT NULL COMMENT '名称',
email VARCHAR(32) NOT NULL DEFAULT '',
password varchar(32) NOT NULL,
role TINYINT(2) UNSIGNED NOT NULL DEFAULT 1 COMMENT '角色',
status int(2) UNSIGNED NOT NULL DEFAULT 1 COMMENT '状态：1启用0禁用',
create_time INT(11) NOT NULL DEFAULT 0,
update_time INT(11) NOT NULL DEFAULT 0,
delete_time INT(11) NOT NULL DEFAULT 0,
login_time INT(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '登录时间',
login_count INT(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '登录次数',
is_delete INT(2) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否删除1是0否'
)Engine=InnoDB DEFAULT CHARSET=utf8;
#班级表 
