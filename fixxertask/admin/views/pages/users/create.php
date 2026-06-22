<?php
require_once 'models/user.class.php';
require_once 'models/role.class.php';

$roles = Role::readAll();
// echo '<pre>';
// print_r($roles);
// echo '</pre>';

if (isset($_POST['btn_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $role_id = $_POST['role_id'];
    $pass = $_POST['pass'];

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // echo $name . "<br>";
    // echo $email . "<br>";
    // echo $role_id . "<br>";
    // echo $pass . "<br>";

    $user = new User(null, $name, $email, $role_id, $pass);

    $res = $user->create();
    if($res === true){
        $msg = "User created successfully";
    }else{
        $msg = $res;
    }

    // var_dump($res);
  
}
?>
<div class="admin-main">
  <main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
      <div class="page-heading">
        <div class="page-heading-copy">
          <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <div>
            <p class="eyebrow mb-1">Management</p>
            <h1 class="h3 mb-1">Add User</h1>
            <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
          </div>
        </div>
        <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="users"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
      </div>

      <section class="row g-3">
        <div class="col-12 ">
          <!-- <form action="" method="POST" class="panel needs-validation" novalidate> -->
          
            <section class="content">
              <div class="container-fluid">
                <a href="users" class="btn btn-sm btn-dark">&leftarrow; Back</a>
                <div class="row">
                  <div class="col-12">
                    <h4><?= $msg ?? "" ?></h4>
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
                                <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
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
                          <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>


      </section>
    </div>
  </main>
</div>
</div>