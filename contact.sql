drop database if exists contact;
create database if not exists contact;
use contact;

drop table if exists info;
create table if not exists info (
id int unsigned not null auto_increment,
naam varchar(50) not null,
email varchar(50) not null,
bericht varchar(200) not null,
constraint primary key CLUSTERED(id)
) engine=InnoDB;