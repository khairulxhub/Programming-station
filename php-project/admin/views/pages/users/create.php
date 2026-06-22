<?php

require_once('models/user.class.php');
require_once('models/role.class.php');
$roles = Role::readALL();
// echo "<pre>";
// print_r($roles);
// echo "</pre>";

if (isset($_POST['btn_submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $role_id = $_POST['role_id'];
  $pass = $_POST['pass'];
  $conf_pass = $_POST['conf_pass'];

  // echo $name . "<br>" . $email . "<br>" . $role_id . "<br>" . $pass . "<br>" . $conf_pass;


  if($pass == $conf_pass){
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $user = new user(null, $name, $email, $role_id, $pass);
    $result = $user->create();

    if($result===true){
      $msg = "User created successfully";
      
      
    }else{
      $msg = $result;
    }
  }else{
    $msg = "password not match";
  }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="users" class="btn btn-dark">&leftarrow; Back</a>
        <div class="row">
          <div class="col-12">
             <?= $msg ?? '' ?>
            <div class="card card-primary">
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                   
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                      <?php foreach ($roles as $item) { ?>
                      <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                  </div>                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"  name="btn_submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>