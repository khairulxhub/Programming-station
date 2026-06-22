<?php

require_once('models/product.class.php');
// if (isset($_POST['delete_id'])) {
//   $id = $_POST['delete_id'];
//   $res = user::delete($id);
//   if ($res === true) {
//     $msg = "User deleted successfully";
//   } else {
//     $msg = $res;
//   }
// }
$rows = Product::readALL();
echo "<pre>";
print_r($rows);
echo "</pre>";


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
            <h3 class="mb-0">Products List</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Products Details</li>
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
                <a href="create-product" class="btn btn-sm btn-primary">Create Product Stock</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>image</th>
                        <th>price</th>
                        <th>Qty</th>
                        <th>Brands</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($rows as $item): ?>
                       <tr>
                         <td><?= $item['id'] ?></td>
                         <td><?= $item['name'] ?></td>
                         <td><img src="<?=  BASE_URL_ADMIN .$item['image'] ?>" alt="" width="100px"></td>
                         <td><?= $item['price'] ?></td>
                         <td><?= $item['quantity'] ?></td>
                         <td><?= $item['brand'] ?></td>
                         <td><?= $item['category'] ?></td>
                         <td><?= $item['active'] == 1 ? 'Active' : 'Inactive' ?></td>
                         <td>
                           <a href="edit-user?id=<?php echo $item['id']; ?>"class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></a> 
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                            <button type="submit" name="btn_delete" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i>
                         </td>
                       </tr>
                      <?php endforeach; ?>
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