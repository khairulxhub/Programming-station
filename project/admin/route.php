<?php 
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if($page == 'dashboard' ){
        include_once 'views/pages/dashboard.php';
    }else if($page == 'form' || $page == 'form.php'){
        include_once 'views/pages/form.php';
    }
    else if($page == 'table' || $page == 'table.php'){
        include_once 'views/pages/table.php';
    }
     else if($page == 'users' || $page == 'manage.php'){
       include_once("views/pages/users/manage.php");
    }
    else if($page == 'create-user' || $page == 'create.php'){
        include_once 'views/pages/users/create.php';
    }
    else{
        include_once('views/pages/dashboard.php');
    } 

}
 

?>