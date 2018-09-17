/*
Created		10. 05. 2018
Modified		17. 05. 2018
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


Create table doctors (
	id Int NOT NULL AUTO_INCREMENT,
	first_name Varchar(40) NOT NULL,
	last_name Varchar(40) NOT NULL,
	phone_num Varchar(9) NOT NULL,
	email Varchar(40) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table users (
	id Int NOT NULL,
	first_name Varchar(20) NOT NULL,
	last_name Varchar(40) NOT NULL,
	email Varchar(40) NOT NULL,
	pass Varchar(64) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table appointments (
	doctor_id Int NOT NULL,
	time_id Int NOT NULL,
	user_id Int NOT NULL,
	date_app Timestamp NOT NULL,
	descript Text NOT NULL) ENGINE = MyISAM;

Create table departments (
	id Int NOT NULL AUTO_INCREMENT,
	doctor_id Int NOT NULL,
	name Varchar(40) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;

Create table schedule (
	doctor_id Int NOT NULL,
	department_id Int NOT NULL,
	time_start Timestamp NOT NULL,
	time_end Timestamp NOT NULL,
	lunch_start Timestamp NOT NULL,
	lunch_end Timestamp NOT NULL) ENGINE = MyISAM;

Create table times (
	id Int NOT NULL AUTO_INCREMENT,
	hours Varchar(20) NOT NULL,
	minutes Varchar(20) NOT NULL,
 Primary Key (id)) ENGINE = MyISAM;


Alter table departments add Foreign Key (doctor_id) references doctors (id) on delete  restrict on update  restrict;
Alter table appointments add Foreign Key (doctor_id) references doctors (id) on delete  restrict on update  restrict;
Alter table schedule add Foreign Key (doctor_id) references doctors (id) on delete  restrict on update  restrict;
Alter table appointments add Foreign Key (user_id) references users (id) on delete  restrict on update  restrict;
Alter table schedule add Foreign Key (department_id) references departments (id) on delete  restrict on update  restrict;
Alter table appointments add Foreign Key (time_id) references times (id) on delete  restrict on update  restrict;


/* Users permissions */


