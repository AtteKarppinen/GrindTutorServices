/* Subject table basic info */

create table Subject_table(
subject_num int AUTO_INCREMENT PRIMARY KEY,
subject_name varchar(100) not null,
subject_level varchar(2) 
);


/*Tutor table. Has its own values and also uses references from user table meaning : YOU CAN'T BE A TUTOR IF YOU'RE NOT A USER 
Takes values from sign up and sets them here if you become a tutor*/

create table Tutor_table(
t_num int AUTO_INCREMENT PRIMARY KEY,
t_fname varchar(100) not null,
t_lname varchar(100) not null,
t_bdate DATE not null ,
t_sex char(4),
t_email varchar(100) not null,
t_password varchar(255) not null,
t_address text not null,
t_location point,
t_fee float (5,2),
t_user_num int(11),
t_subject_num int(11)references subject_table(subject_num)
);

/* Student table same as tutor, can't be student without being a user first */
create table Student_table(
s_num int AUTO_INCREMENT PRIMARY KEY,
s_fname varchar(100) not null ,
s_lname varchar(100) not null ,
s_email varchar(100) not null,
s_password varchar(255) not null ,
s_bdate DATE not null ,
s_sex char(4) not null,
s_address TEXT, 
s_location Point
);

/* Contract table with foreign keys from 3 tables */
CREATE TABLE Contract_table(
    contract_num int AUTO_INCREMENT PRIMARY KEY,
    contract_student_num int REFERENCES student(s_num),
    contract_tutor_num int REFERENCES tutor(t_num),
    contract_subject_num int REFERENCES subject_table(subject_num)
);
