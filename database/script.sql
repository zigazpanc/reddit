/*
Created		5. 09. 2019
Modified		5. 09. 2019
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table users (
	id Serial NOT NULL AUTO_INCREMENT,
	ime Varchar(50) NOT NULL,
	priimek Varchar(50) NOT NULL,
	nickname Varchar(50) NOT NULL,
	email Varchar(50) NOT NULL,
	password Varchar(50) NOT NULL,
	role Varchar(50) NOT NULL,
	UNIQUE (id),
 Primary Key (id)) ENGINE = MyISAM;

Create table posts (
	id Serial NOT NULL AUTO_INCREMENT,
	user_id Bigint UNSIGNED NOT NULL,
	slika_id Bigint UNSIGNED NOT NULL,
	ime Varchar(50) NOT NULL,
	post Text NOT NULL,
	upvotes Int NOT NULL,
	downvotes Int NOT NULL,
	UNIQUE (id),
 Primary Key (id)) ENGINE = MyISAM;

Create table kategorije (
	id Serial NOT NULL AUTO_INCREMENT,
	ime Varchar(50) NOT NULL,
	opis Text NOT NULL,
	UNIQUE (id),
 Primary Key (id)) ENGINE = MyISAM;

Create table slike (
	id Serial NOT NULL AUTO_INCREMENT,
	user_id Bigint UNSIGNED NOT NULL,
	ime Varchar(50) NOT NULL,
	slika Blob BINARY NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table komentarji (
	id Serial NOT NULL AUTO_INCREMENT,
	user_id Bigint UNSIGNED NOT NULL,
	post_id Bigint UNSIGNED NOT NULL,
	ime Varchar(50) NOT NULL,
	komentar Text NOT NULL,
	datum Date NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table posts_kategorije (
	id Serial NOT NULL AUTO_INCREMENT,
	kategorija_id Bigint UNSIGNED NOT NULL,
	post_id Bigint UNSIGNED NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;


Alter table posts add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table komentarji add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table slike add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table posts_kategorije add Foreign Key (post_id) references posts (id) on delete  restrict on update  restrict;
Alter table komentarji add Foreign Key (post_id) references posts (id) on delete  restrict on update  restrict;
Alter table posts_kategorije add Foreign Key (kategorija_id) references kategorije (id) on delete  restrict on update  restrict;
Alter table posts add Foreign Key (slika_id) references slike (id) on delete  restrict on update  restrict;


/* Users permissions */


