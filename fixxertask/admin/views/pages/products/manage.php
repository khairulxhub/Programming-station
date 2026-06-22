<?php
require_once 'models/product.class.php';
 

if(isset($_POST['delete_id'])){
  $id = $_POST['delete_id'];
  // echo $id;
  $res = Product::delete($id);
  if($res === true){
    $msg = "User deleted successfully";
  }else{
    $msg = $res;
  }
}


$rows = Product::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2>Service list</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?php if(isset($msg)): ?>
          <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <?php echo $msg ?? "" ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
          </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-header">
              <a href="create-product" class="btn btn-sm btn-dark">Create New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>location</th>
                      <th>Brand</th>
                      <th>Catrgory</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($rows as $item): ?>
                      <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td>
                          <img src="<?= BASE_URL_ADMIN . $item['image']; ?>" alt="" width="50">
                        </td>
                        <td><?= $item['price']; ?></td>
                        <td><?= $item['location']; ?></td>
                        <td><?= $item['brand']; ?></td>
                        <td><?= $item['category']; ?></td>
                        <td><?= $item['active'] == 1 ? 'Active' : 'Inactive'; ?></td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                            <a href="edit-product?id=<?= $item['id']; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></a>
                            <form method="POST">
                              <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                              <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                            </form>
                          </div>
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
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>