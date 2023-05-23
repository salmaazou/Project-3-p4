use mydatabase;

drop table if exists contacts;
create table if not exists contacts (
id int unsigned not null auto_increment primary key,
name varchar(40) not null,
email varchar(50) not null,
message varchar(200) not null
) engine = InnoDB;