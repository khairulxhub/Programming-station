drop table if exists  manufacturer;
create table manufacturer (
    id int AUTO_INCREMENT primary key,  
    name varchar(50),
    address varchar(100),
    contact_no varchar(50)
);

drop table if exists product;
create table product (
    id int auto_increment primary key,
    name varchar(100),
    price int(5),
    manufacturer_id int(10)
);

insert into manufacturer(name, address,contact_no) values("lenevo","australia","+1215451554");
insert into manufacturer(name, address,contact_no) values("Philips","Japan","+5454545254");


insert into product(name,price,manufacturer_id) values("monitor",8100,1);
insert into product(name,price,manufacturer_id) values("speaker",8100,2);
insert into product(name,price,manufacturer_id) values("ipad",11800,3);
insert into product(name,price ,manufacturer_id) values("Tripod",500,4);

drop procedure if exists addManufacturer;
delimiter //
create procedure addManufacturer(pname varchar(50), paddress varchar(100), pcontact_no int(50))
begin 
insert into manufacturer(name, address,contact_no) values(pname,paddress,pcontact_no);
end //
delimiter ;
drop view if exists vw_product;
create view vw_product 
select p. *,m.name as mfg
from product p, manufacturer m 
where p.manufacturer_id = m.id and p.price > 5000;

drop trigger if exists delete_mfg;

create trigger delete_mfg
after delete on manufacturer
for each row
delete from product where manufacturer_id = OLD.id;
