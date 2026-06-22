//table_teacher
drop table if exists teacher;
create table teacher(
    id int auto_increment primary key ,
    name varchar(50),
    qualification varchar(50),
    contact_no varchar(20)
);

//table_course
drop table if exists course;
create table course(
    id int auto_increment primary key,
    course_name varchar(50),
    fee int(6),
    teacher_id int(10)
    
);
//data_insert_in_teacher
insert into teacher(name,qualification,contact_no) values('Anil','MCA','1234567890');
insert into teacher(name,qualification,contact_no) values('Munna','English','1234567890');

//data_insert_in_course
insert into course(course_name,fee,teacher_id) values('Java',15000,1);
insert into course(course_name,fee,teacher_id) values('Python',16000,2); 
insert into course(course_name,fee,teacher_id) values('wdpe',17000,2); 
insert into course(course_name,fee,teacher_id) values('AI',18000,1); 
insert into course(course_name,fee,teacher_id) values('AI-CLOUD',18000,1); 

//procedure
drop procedure if exists addTeacher;
delimiter //
create procedure addTeacher(pname varchar(50), pqualification varchar(50), pcontact_no varchar(20))
begin 
insert into teacher(name, qualification,contact_no) values(pname,pqualification,pcontact_no);
end //
delimiter ;


//view
drop view if exists vw_course;
create view vw_course as
select c. *,t.name as mfg
from course c , teacher t
where c.teacher_id = t.id and c.fee > 15000; 

//trigger
drop trigger if exists deleteTeacher;
create trigger deleteTeacher
after delete on teacher
for each row
delete from course where teacher_id = OLD.id;