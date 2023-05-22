drop database if exists contact;
create database if not exists contact;

drop table if exists contacts;
create table if not exists contacts (
id int unsigned not null auto_increment,
name varchar(40) not null,
email varchar(50) not null,
message varchar(60) not null
) engine = InnoDB;