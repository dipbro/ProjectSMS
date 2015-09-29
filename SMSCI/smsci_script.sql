#To create Status table which is used for indicate status of any entity
Drop database SMS;
create database SMS;
use SMS;

 create table Status
(
	statusId int not null primary key auto_increment,
 	statusName varchar(20) not null
);

insert into status(StatusName)values('Active');

 create table Genders
(
	GenderId int not null primary key auto_increment,
 	GenderName varchar(15) not null
 );

insert into Genders(GenderName)values('Male');
insert into Genders(GenderName)values("Female");

create table PhotoStorages
(
	PhotoStorageId bigint not null primary key auto_increment,
	Photo LONGBLOB not null,
	StatusId int not null,
	foreign key(StatusId) references Status(StatusId)
 );


create table Addresses
(
	AddressId bigint not null primary key auto_increment,
	 AddressName varchar(100) not null,
	StatusId int not null,
	foreign key(StatusId) references Status(StatusId)
);


 create table Users
(
	UserId bigint not null primary key auto_increment,
  FullName varchar(50) not null,
 	UserName varchar(36) not null,
 	Password varchar(200) not null,
 	Email varchar(36) not null,
 	ContactNo varchar(25) not null,
 	AddressId bigint not null,
 	GenderId int not null,
 	PhotoStorageId bigint not null,
	StatusId int not null,
 	foreign key(AddressId) references Addresses(AddressId),
 	foreign key(GenderId) references Genders(GenderId),
 	foreign key(PhotoStorageId) references PhotoStorages(PhotoStorageId),
  foreign key(StatusId) references Status(StatusId)
 );


 CREATE TABLE EducationalYear
 (
	 YearId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 Year varchar(30) NOT NULL,
 	 StatusId int NOT NULL,
	 FOREIGN KEY(StatusId) REFERENCES Status(StatusId)
 );

 CREATE TABLE Subjects
 (
 	 SubjectId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 SubjectName varchar(30) NOT NULL,
	 FullMarks int NOT NULL,
	 PassMarks int NOT NULL,
 	 StatusId int NOT NULL,
 	 FOREIGN KEY(StatusId) REFERENCES Status(StatusId)
 );

CREATE TABLE Classes
 (
	 ClassId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 ClassName varchar(20) NOT NULL,
	 StatusId int NOT NULL,
	 FOREIGN KEY(StatusId) REFERENCES Status(StatusId)
 );



 CREATE TABLE Students
 (
 	StudentId bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
 	StudentName varchar(40) NOT NUll,
  Email varchar(30) NOT NULL,
  Contact varchar(25) NOT NULL,
 	AddressId bigint NOT NULL,
 	GuardianName varchar(35) NOT NULL,
 	DOB varchar(20) NOT NULL,
 	GenderId int NOT NULL,
 	PhotoId varchar(100) NOT NULL,
 	StatusId int NOT NULL,
 	RegisteredDate varchar(20) NOT NULL,
 	FOREIGN KEY(AddressId) REFERENCES Addresses(AddressId),
  FOREIGN KEY(GenderId) REFERENCES Genders(GenderId),
  FOREIGN KEY(StatusId) REFERENCES   Status(StatusId)
	
 );
 
 #student may have in multiple class i.e one student has relation with many class so 
 #we have to make another table which represents releation
 
 create table MarkSheetStatus
 (
    MarkSheetStatusId int not null auto_increment primary key,
    marksheetstatus varchar(50) not null
 );

insert into MarkSheetStatus(marksheetstatus) values ('fill');
insert into MarkSheetStatus(marksheetstatus) values ('blank');

create table StudentStatus
(
  StudentStatusId int not null auto_increment primary key,
  StudentStatus varchar(20) not null
);

insert into StudentStatus(StudentStatus) values ('Running');
insert into StudentStatus(StudentStatus) values ('Pass Out');

 create table StudentHasClass
 (
    StudentHasClassId bigint not null auto_increment primary key,
    StudentId bigint not null,
    ClassId int not null,
    StatusId int not null,
    MarkSheetStatusId int not null,
    StudentStatusId int not null,
    ClassRegistrationDate varchar(20) not null,
    FOREIGN KEY(StatusId) REFERENCES   Status(StatusId),
    FOREIGN KEY(StudentId) REFERENCES   Students(StudentId),
    FOREIGN KEY(StudentStatusId) REFERENCES   StudentStatus(StudentStatusId),
    FOREIGN KEY(ClassId) REFERENCES   Classes(ClassId),
    FOREIGN KEY( MarkSheetStatusId) REFERENCES    MarkSheetStatus( marksheetstatusid)    
 );
 
create view  Students_view as
SELECT     StudentHasClass.*,Students.StudentName,Students.Email,Students.Contact,Students.AddressId,Students.GuardianName,
           Students.DOB,Students.GenderId,Students.PhotoId,Students.RegisteredDate,Addresses.AddressName,
           Classes.ClassName,StudentStatus.StudentStatus
           
FROM         StudentHasClass INNER JOIN
                      Students ON StudentHasClass.StudentId = Students.StudentId INNER JOIN
                      Addresses ON Students.AddressId=Addresses.AddressId INNER JOIN
                      Classes ON StudentHasClass.ClassId=Classes.ClassId INNER JOIN
                      StudentStatus ON StudentHasClass.StudentStatusId=StudentStatus.StudentStatusId
                 
 Create Table MarkSheets
 (
  MarkSheetId bigint not null primary key auto_increment,
  StudentHasClassId bigint not null,
  SubjectId int not null,
  SecuredMarks float not null,
  StudentStatusId int not null,
  foreign key(StudentHasClassId) references StudentHasClass(StudentHasClassId),
  foreign key(SubjectId) references Subjects(SubjectId),
  foreign key(StudentStatusId) references StudentStatus(StudentStatusId)
 );    
 
 Create Table ClassHasSubjects 
 (
  ClassHasSubjectId int not null primary key auto_increment,
  ClassId int not null,
  SubjectId int not null,
  StatusId int not null,
  foreign key(ClassId) references Classes(ClassId),
  foreign key(SubjectId) references Subjects(SubjectId),
  foreign key(StatusId) references Status(StatusId)
 );
 
 
 Create Table Schools
 (
  SchoolId int not null primary key auto_increment,
  SchoolName varchar(100) not null,
  Address varchar(100) not null,
  EstdDate varchar(30) not null
 )
                      
 CREATE TABLE `tbldate` (
  `nepdate` varchar(10) NOT NULL,
  `engdate` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

 


