<?php
require_once 'models/product.class.php';
require_once 'models/order.class.php';


$rows = Product::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';

if (isset($_POST['checkout'])) {
  $cart = json_decode($_POST['checkout']);
  
$order = new Order();
$order->create($cart);

  // echo '<pre>';
  // print_r($cart);
  // echo '</pre>';
}
?>

<style>
  .main-sidebar,
  .main-header,
  .main-footer {
    display: none;
  }

  .content-wrapper {
    margin-left: 0px !important;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>POS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="products" class="btn btn-sm btn-dark">&larr; Back to Products</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8">
          <div class="row">
            <?php
            foreach ($rows as $item):
              if ($item['active'] == 0) {
                continue;
              }
            ?>
              <div class="col-lg-3 col-sm-6">
                <div class="card " style="cursor: pointer"
                  onclick="addToCart(<?= $item['id']; ?>,
                 '<?= $item['name']; ?>',
                 '<?= $item['price']; ?>',
                 ) ">
                  <img src="<?= $item['image']; ?>" alt="" height="200" class="card-img p-3">
                  <div class="card-body text-center">
                    <h6><?= $item['name']; ?></h6>
                    <h5 class="card-text">BDT <?= $item['price']; ?></h5>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- /.card -->
        </div>
        <div class="col-4">
          <table class="table table-striped`">
            <tr>
              <th>Item</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Product Name</td>
              <td>4</td>
              <td>1200</td>
              <td><a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
            </tr>
            <tbody id="cartTbody">
              <tr>
                <td>Product Name</td>
                <td>4</td>
                <td>1200</td>
                <td><a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
              </tr>
              <tr>
                <td>Product Name</td>
                <td>4</td>
                <td>1200</td>
                <td><a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
              </tr>
              <tr>
                <th class="text-right" colspan="2">Total</th>
                <td>1200</td>
                <td></td>
              </tr>
            </tbody>
            <tr class="table-secondary">
              <th>Total</th>
              <th id="cartTotal">0</th>
              <th></th>
            </tr>

          </table>

          <form action="" method="POST" class="text-right">
            <input type="hidden" name="cart" value="0" id="cartInput">
            <button type="submit" class="btn btn-success">Checkout</button>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<script src="helpers/cart-helper.js"></script>
<script>
  var cart = new CartHelper("cart");
  // console.log(cart);
  function printCart() {
    // console.log("My Items");
    // console.log(cart.getCart());
    var items = cart.getCart();
    document.querySelector("#cartInput").value = JSON.stringify(items);
    var html = "";
    var total = 0;
    items.forEach(item => {
      html += `
            <tr>
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>${item.quantity * item.price}</td>
                <td><a href="javascript:;" onclick="removeFormCard(${item.id})"><i class="fa fa-trash text-danger"></i></a></td>
            </tr>
            `;
      total += (item.quantity * item.price);
    });
    document.querySelector("#cartTbody").innerHTML = html;
    document.querySelector(".cartTotal").innerHTML = total;
  }
  printCart();

  function addToCart(id, name, price) {
    cart.addItem(id, name, price);
    printCart();
  }
</script>