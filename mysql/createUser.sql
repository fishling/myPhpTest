create table user(
  id int PRIMARY KEY auto_increment,
  name varchar(32) NOT NULL,
  password varchar(64) NOT NULL,
  email varchar(128) NOT NULL,
  age tinyint unsigned NOT NULL
);

insert into user(name,password,email,age) values ('李希',md5(123456),'lixi@163.com',29);

--查看表结构
show create table user;
--查看数据库字符集
show variables like 'char%';
--转换user表的字符集
ALTER TABLE `user` CONVERT TO CHARACTER SET UTF8;
--设置数据库字符集(使用mysql command line client时设置)
set character_set_client=gbk;
set character_set_result=gbk;