<?php

require_once('helpers/img-upload-helper.php');
require_once('models/product.class.php');
require_once('models/brand.class.php');
require_once('models/category.class.php');
$brands = Brands::readALL();
$categories = Categories::readALL();
// echo "<pre>";
// print_r($roles);
// echo "</pre>";

if (isset($_POST['btn_submit'])) {
  $name = $_POST['name'];
  $category_id = $_POST['category_id'];
  $brand_id = $_POST['brand_id'];
  $desc = $_POST['desc'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $restock = $_POST['restock'];
  $active =isset($_POST['is_active']) ?  1: 0;

  // print_r($_FILES['image']);
  $file = isset($_FILES['image']) ? $_FILES['image'] : [];
  $image = imgUpload($file);

  // print_r($image);
  if(isset($image['error'])){
    $msg = $image['error'];
  }else{
    $image = $image['success'];
    $product = new Product(null, $name, $category_id, $brand_id, $price, $qty, $restock, $active,$image, $desc );
    $res = $product->create();
   $msg = "Product created successfully";
  }
  // $image = $_FILES['image'];
  // echo $name . "<br> " . $category_id . "<br> " . $brand_id ."<br> ". $desc . "<br> " .$price ."<br> ". $qty ."<br> ". $restock ."<br> ". $active;
  // $product = new Product(null, $name, $category_id, $brand_id, $qty, $price, $restock, $active,null, $desc);
  // $res = $product->create();

  // if ($res === true) {
  //   $msg = "Product created successfully";
  // } else {
  //   $msg = $res;
  // }

}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create products</h1>
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
        <a href="products" class="btn btn-dark">&leftarrow; Back</a>
        <div class="row">
          <div class="col-12">
            <h2> <?= $msg ?? '' ?></h2>
            <div class="card card-primary">
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                   
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="">Category</label>
                    <select type="text" class="form-control" name="category_id" >
                    <?php foreach ($categories as $item) { ?>
                      <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Brand</label>
                    <select type="text" class="form-control" name="brand_id" >
                    <?php foreach ($brands as $item) { ?>
                      <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Short Description</label>
                    <input type="text" class="form-control" name="desc" >
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" >
                  </div>
                  <div class="form-group">
                    <label for="">QTY</label>
                    <input type="number" class="form-control" name="qty" >
                  </div>
                  <div class="form-group">
                    <label for="">Point of restock</label>
                    <input type="number" class="form-control" name="restock"  value="0">
                  </div>
                  <div class="form-group">
                    <label for="">Image</label> <br>
                    <input type="file"  name="image" >
                  </div>
                  <div class="form-group">
                    <label for="">Is Active</label>
                    <input type="checkbox"  name="is_active" value="1" >
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