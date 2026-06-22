<?php
require_once('models/user.class.php');
if (isset($_POST['delete_id'])) {
  $id = $_POST['delete_id'];
  $res = user::delete($id);
  if ($res === true) {
    $msg = "User deleted successfully";
  } else {
    $msg = $res;
  }
}
$rows = user::readALL();
// echo "<pre>";
// print_r($rows);
// echo "</pre>";


?>

<div class="app-wrapper">
  <!--begin::Header-->

  <!--end::Header-->
  <!--begin::Sidebar-->

  <!--end::Sidebar-->
  <!--begin::App Main-->
  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Simple Tables</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-12">

            <div class="alert alert-info d-flex align-items-center" role="alert">
              <?= isset($msg) ? $msg : '' ?>
            </div>
            <div class="card mb-4">
              <div class="card-header">
                <a href="create-user" class="btn btn-sm btn-primary">Create User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($rows as $item) { ?>
                        <tr>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['name']; ?></td>
                          <td><?php echo $item['email']; ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                             <a href="edit-user?id=<?php echo $item['id']; ?>"class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></a> 
                              <form action="" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $item['id']; ?>">
                                <button type="submit" name="btn_delete" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i>
                              </form>
                            </div>
                          </td>
                        </tr>

                      <?php } ?>
                      <!-- <tr class="align-middle">
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 55%"
                              ></div>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                            </div>
                          </td>
                        </tr> -->
                      <!-- <tr class="align-middle">
                          <td>2.</td>
                          <td>Update Skill</td>
                          <td>
                           khairul@gmailcom
                          </td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                            </div>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>3.</td>
                          <td>ISDB</td>
                          <td>
                            <div class="progress progress-xs">
                              <div
                                class="progress-bar progress-bar-danger"
                                style="width: 55%"
                              ></div>
                            </div>
                          </td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></button>
                              <button type="button" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                            </div>
                          </td>
                        </tr> -->

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->


            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
<!--end::App Main-->

</div>