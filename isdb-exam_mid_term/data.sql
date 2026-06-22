drop table if exists manufacturer;

create table manufacturer (
    id int auto_increment primary key,
    name varchar(50),
    address varchar(100),
    contact_no varchar(50)
);

drop table if exists product;

create table product (
    id int auto_increment primary key,
    name varchar(50),
    price int(5),
    manufacturer_id int(10)
   
);

insert into manufacturer(name, address, contact_no) values("Dell", "xyz", "12345");
insert into manufacturer(name, address, contact_no) values("Sony", "xyz", "12345");

insert into product(name, price, manufacturer_id) values("abc", 123, 1);
insert into product(name, price, manufacturer_id) values("abc", 123, 1);
insert into product(name, price, manufacturer_id) values("abc", 123, 1);
insert into product(name, price, manufacturer_id) values("abc", 123, 1);
insert into product(name, price, manufacturer_id) values("abc", 123, 1);


insert into product(name, price, manufacturer_id) values("CPU", 25000, 3);
insert into product(name, price, manufacturer_id) values("Cooler", 1050, 2);
insert into product(name, price, manufacturer_id) values("laptop", 55100, 1);
insert into product(name, price, manufacturer_id) values("keyboard2", 5100, 1);
insert into product(name, price, manufacturer_id) values("Motherboard", 5100, 1);
insert into product(name, price, manufacturer_id) values("z2", 15100, 4);
insert into product(name, price, manufacturer_id) values("samsung z ultra", 5100, 4);

drop procedure if exists addManufacturer;
delimiter //
create procedure addManufacturer(pname varchar(50), paddress varchar(100), pcontact_no varchar(50))
begin 
insert into manufacturer(name,address,contact_no) values(pname,paddress,pcontact_no);
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
