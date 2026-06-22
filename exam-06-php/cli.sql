drop exists
create table manufacturerr (
    id int auto_increment primary key,

    name varchar(100),
    contact_no varchar(50)
);

create table productr (
    id int auto_increment primary key,
    name varchar(100),
    price int(5),
    manufacturer_id int(10)
);

insert into manufacturerr(name,contact_no) values("lenevo","australia");
insert into manufacturerr(name,contact_no) values("+1215451554","+5454545254");


insert into productr(name,price,manufacturer_id) values("monitor",8100,1);
insert into productr(name,price,manufacturer_id) values("speaker",8100,2);
insert into productr(name,price,manufacturer_id) values("ipad",11800,3);
insert into productr(name,price ,manufacturer_id) values("Tripod",500,4);

 drop procedure if exists createManufacturerr;
delimiter //
create procedure createManufacturerr(pname varchar(100), pcontact_no int(50))
begin 
insert into manufacturerr(name,contact_no) values(pname,pcontact_no);
end //
delimiter ;

drop trigger if exists delete_mfg;
create trigger delete_mfg
after delete on manufacturerr
for each row 
delete from manufacturerr where manufacturer_id = old.id;

drop view if exists vw_product_list;
create view vw_product_list as 
select p.id, p.name, p.price, m.name mfg 
from productr as p, manufacturerr as m 
where p.manufacturer_id = m.id and p.price > 5000;


drop trigger if exists delete_mfg;
DELIMITER $$

CREATE TRIGGER delete_mfg
AFTER DELETE ON manufacturerr
FOR EACH ROW
BEGIN
    DELETE FROM manufacturerr
    WHERE manufacturer_id = OLD.id;
END$$

DELIMITER ;

