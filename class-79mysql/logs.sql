create table if not exists brands_logs(
    id int unsigned primary key auto_increment,
    product_id int ,
    status varchar(20),
    time timestamp
);

create trigger remove_brand
after insert  on brands
for each row
insert into brands_logs(brand_id,status,time) 
values(old.id,'deleted',now());

drop trigger if exists remove_brand
create trigger if not exists remove_brand
after delete  on brands
for each row
insert into brands_logs(brand_id,status,time) 
values(old.id,'deleted',now());
delete from brands where id=1;
select * from brands_logs;
delete from brands_logs;