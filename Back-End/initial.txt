CREATE DATABASE Grind_tutor;
use girnd_tutor;
CREATE TABLE student (
	student_number int AUTO_INCREMENT PRIMARY KEY ,
    Fname Varchar(100),
    Lname Varchar(100),
    Bdate DATE,
    Sex CHAR(4),
    Address TEXT,
    Location Point
);

CREATE TABLE tutor (
	tutor_number int AUTO_INCREMENT PRIMARY KEY,
    Fname Varchar(100),
    Lname Varchar(100),
    Bdate DATE,
    Sex CHAR(4),
    Address TEXT,
    Location Point,
    desire_tuition_fee INT,
    t_subject_number INT,
    CONSTRAINT FK_t_subjectnum FOREIGN KEY (t_subject_number) REFERENCES Subject(subject_number)
);

CREATE TABLE Subject(
	subject_number int AUTO_INCREMENT PRIMARY KEY,
    name Varchar(100),
    level int
);

CREATE TABLE contract(
    contract_number int AUTO_INCREMENT PRIMARY KEY,
    c_student_number int,
    c_tutor_number int,
    c_subject_number int,
    CONSTRAINT FK_c_studentnum FOREIGN KEY (c_student_number) REFERENCES Student(student_number),
    CONSTRAINT FK_c_tutornum FOREIGN KEY(c_tutor_number) REFERENCES Tutor(tutor_number),
    CONSTRAINT FK_c_subjectnum FOREIGN KEY(c_subject_number) REFERENCES Subject(sujbect_number)
);

