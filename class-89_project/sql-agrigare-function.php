<?php
require_once('db-config.php');

$sql = "select count(*) from students where address = 'Shahbag'";
$sql = "select count(*) as stu_num from students where address = 'Shahbag'";
$sql = "select sum(score) from results";
$sql = "select sum(score) from results where student_id = 1";
$sql = "select sum(score) from results where exam_type = mid-1";
$sql = "select sum(score)  totla_score from results where exam_type = final";

$sql = "select max(score) high_score,student_id,fullname from results,studentd where student_id = student_id"; 
$sql = "select max(score) high_score,student_id,fullname from results,studentd where student_id = student_id"; 

$sql="select student_id, fullname,max(score) high_score from results,students where student_id = student_id";
$sql="select student_id, fullname,min(score) high_score from results,students where student_id = student_id";
$sql=
"select r.student_id, max(score) high_score, s.fullname
from results r, students s
where exam_type = 'mid-1' and r.student_id = s.id";
$sql=
"select r.student_id, min(score) low_score, s.fullname
from results r, students s
where exam_type = 'mid-1' and r.student_id = s.id";
$sql=
"select r.student_id,  s.fullname
from results r, students s
where exam_type = 'mid-1' and r.student_id = s.id";

$sql = " select min(price) low_price from product where id = id";

$sql = " select p.name, min(p.price) as low_price, m.name as kkk
from product p, manufacturer m
where p.manufacturer_id = m.id";
$sql = " select p.name, max(p.price) as low_price, m.name as kkk
from product p, manufacturer m
where p.manufacturer_id = m.id";


$sql="select r.student_id, s.fullname,r.score
 from results r,students s
 where r.exam_type = 'Mid-1' and r.student_id = s.id and
 r.score = (select max(score) from results where exam_type = 'Mid-1')";
$sql="select r.student_id, s.fullname,r.score
 from results r,students s
 where r.exam_type = 'Mid-1' and r.student_id = s.id and
 r.score = (select min(score) from results where exam_type = 'Mid-1')";
$sql = "select avg(score) from product";   

$sql = "select avg(score) from results where exam_type = Mid-1";

$sql = "select exam_type, avg(score) from results group by exam_type";
$sql = "select exam_type, avg(score) from results group by exam_type order by exam_type desc";

$sql = "select exam_type, avg(score) from results group by exam_type";
$sql = "select count(*) as num_of_prodcts,m.name from product p,manufacturer m where p.manufacturer_id = m.id group by m.name";
?>