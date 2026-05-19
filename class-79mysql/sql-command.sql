create table if not exists students_logs(
    id int unsigned primary key auto_increment,
    student_id int ,
    status varchar(20),
    time timestamp
);

--trigger--
create trigger add_student
after insert  on students
for each row
insert into students_logs(student_id,status,time) 
values(new.id,'added',now());

insert into students(fullname,email) 
values('ahmed','ahmed@ahmed.com');

create trigger update_student
after update  on students
for each row
insert into students_logs(student_id,status,time) 
values(old.id,'updated',now());

update students set fullname='ahmed' where id=1;
update students set fullname='nafus' where id=2;



create trigger if not exists modify_student
before update  on students
for each row
insert into students_logs(student_id,status,time) 
values(old.id,'updated',now());

update students set fullname='najil' where id=3;

create trigger delete_student
after delete  on students
for each row
insert into students_logs(student_id,status,time) 
values(old.id,'deleted',now());

delete from students where id=9;