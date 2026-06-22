<?php
require_once 'models/product.class.php';
require_once 'models/order.class.php';
require_once 'models/user.class.php';

$users = User::readAll();

$rows = Product::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';


if (isset($_POST['checkout'])) {
    $cart = json_decode($_POST['checkout']);
    // echo "<pre>";
    // print_r($cart);
    // echo "</pre>";

    $order = new Order();
    $order->create($cart);
    echo "
        <script>
            window.addEventListener('afterprint', () => {
                localStorage.removeItem('cart');
            });
            window.print();
        </script>
    ";
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
                <div class="col-sm-6 mt-3">
                    <h2>Booking Service </h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left justify-content-end mt-3">
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
                                <div class="card service-card shadow-sm border-0"
                                    style="cursor: pointer"
                                    onclick="addToCart(<?= $item['id']; ?>, '<?= htmlspecialchars($item['name'], ENT_QUOTES); ?>', <?= $item['price']; ?>)">

                                    <!-- Image -->
                                    <div class="position-relative">
                                        <img src="<?= BASE_URL_ADMIN . $item['image']; ?>"
                                            class="card-img-top p-3"
                                            style="height:200px; object-fit:cover; border-radius:12px;"
                                            alt="<?= htmlspecialchars($item['name']); ?>">

                                        <!-- Badge -->
                                        <span class="badge bg-success position-absolute top-0 end-0 m-3">
                                            Available
                                        </span>
                                    </div>

                                    <!-- Body -->
                                    <div class="card-body text-center">

                                        <!-- Service Name -->
                                        <h6 class="fw-bold mb-1">
                                            <?= htmlspecialchars($item['name']); ?>
                                        </h6>

                                        <!-- Rating -->
                                        <p class="mb-1 text-warning small">
                                            ⭐ 4.8 <span class="text-muted">(120 reviews)</span>
                                        </p>
                                        <small><?= $item['short_description']; ?></small>

                                        <!-- Duration (optional static or dynamic) -->
                                        <p class="mb-2 text-muted small">
                                            ⏱ 45 min
                                        </p>

                                        <!-- Price -->
                                        <h5 class="text-primary mb-3">
                                            BDT <?= $item['price']; ?>
                                        </h5>

                                        <!-- Button -->
                                        <button class="btn btn-primary btn-sm w-100">
                                            Book Now
                                        </button>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-4">
                    <table class="table table-border">
                        <tr class="table-secondary">
                            <th>Items</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        <tbody id="cartTbody">
                            <tr>
                                <td>Product Name</td>
                                <td>4</td>
                                <td>1200</td>
                                <td><a href=""><i class="fa fa-trash text-danger"></i></a></td>
                            </tr>
                        </tbody>
                        <tr class="table-secondary">
                            <th colspan="2">Total</th>
                            <th id="cartTotal">0</th>
                            <th></th>
                        </tr>
                    </table>
                    <form action="" method="POST" class="text-right">
                       <select name="user_id" class="form-control mb-2" required>
    <option value="">Select Customer</option>

    <?php foreach($users as $user): ?>
        <option value="<?= $user['id']; ?>">
            <?= $user['name']; ?> (<?= $user['email']; ?>)
        </option>
    <?php endforeach; ?>

</select>
                        <input type="hidden" name="checkout" id="cartInput">
                        <button type="submit" class="btn btn-success">Make Payment</button>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<style>
    @media screen {
        .receipt {
            display: none !important;
        }
    }

    @media print {
        .receipt {
            display: block !important;
        }

        .content-wrapper {
            display: none !important;
        }
        .navbar{
            display: none !important;
        }
        footer{
            display: none !important;
        }
    }
</style>
<div class="receipt">
    <style>
        #printCartTbody .btn-delete {
            display: none;
        }
    </style>

  <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 d-flex align-items-center">
    <img src="assets/images/avatar/fixxerlogo.jpeg" alt="Logo" width="40" height="40" class="me-2">
    <br>
    <h3 class="mb-0">Invoice</h3>
</div>
            </div>
          </div>
        </div>
         <div class="text-center">
        <h2>FixxerTask</h2>
        <h6>Its Solution of Your Problem</h6>
        <p>Date: 2026-05-12</p>
    </div>
        <div class="app-content">
          <div class="container-fluid">
            <!-- Action bar (hidden on print) -->
            <div class="d-flex justify-content-end gap-2 mb-3 d-print-none">
              <button class="btn btn-outline-secondary" onclick="window.print()" type="button">
                <i class="bi bi-printer me-1" aria-hidden="true"></i>Print
              </button>
              <a href="#" class="btn btn-outline-secondary">
                <i class="bi bi-download me-1" aria-hidden="true"></i>PDF
              </a>
              <a href="#" class="btn btn-primary">
                <i class="bi bi-send me-1" aria-hidden="true"></i>Send invoice
              </a>
            </div>

            <div class="card">
              <div class="card-body p-4 p-md-5">
                <!-- Header -->
                <div class="row mb-4">
                  <div class="col-sm-6">
                    <h2 class="h4 mb-0 text-primary fw-semibold">FixxerTask</h2>
                    <p class="text-secondary mb-0 small">
                      Dhaka, Bangladesh<br />
                     
                    </p>
                  </div>
                  <div class="col-sm-6 text-sm-end">
                    <h1 class="h2 mb-1">Invoice</h1>
                    <p class="text-secondary mb-0">
                      <span class="fw-semibold">#</span>INV-2026-00428
                    </p>
                    <span class="badge text-bg-success mt-1">Paid</span>
                  </div>
                </div>

                <!-- Billing details -->
                <div class="row mb-4">
                  <div class="col-sm-6">
                    <p class="text-secondary small mb-1">Assign to</p>
                    <p class="mb-0 fw-semibold">A1</p>
                    <p class="text-secondary small mb-0">
                      Attn: Arif Hossain<br />
                     framgate<br />
                      
                    </p>
                  </div>
               <div class="col-sm-6 text-sm-end">
    <p class="text-secondary small mb-1">Issue date</p>
    <p class="mb-2"><?= date('M d, Y') ?></p>

    <p class="text-secondary small mb-1">Due date</p>
    <p class="mb-0"><?= date('M d, Y', strtotime('+7 days')) ?></p>
</div>

                <!-- Items -->
             <table class="table table-border">
        <tr class="table-secondary">
            <th>Items</th>
            <th>QTY</th>
            <th>Amount</th>
        </tr>
        <tbody id="printCartTbody">
        </tbody>
        <tr class="table-secondary">
            <th colspan="2">Total</th>
            <th id="printCartTotal">0</th>
        </tr>
    </table>

                <!-- Footer note -->
                <hr class="my-4" />
                <p class="text-secondary small mb-0">
                  Thanks for your business. Payment is due within 14 days. If you have any questions
                  about this invoice, please contact
                  <a href="mailto:billing@example.com">billing@example.com</a>.
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>

<script src="<?= BASE_URL_ADMIN; ?>helpers/cart-helper.js"></script>
<script>
    var cart = new CartHelper("cart");
    // console.log(cart);
    function printCart() {
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
                <td class="btn-delete"><a href="javascript:;" onclick="removeFromCart(${item.id})"><i class="fa fa-trash text-danger"></i></a></td>
            </tr>
            `;
            total += (item.quantity * item.price);
        });
        document.querySelector("#cartTbody").innerHTML = html;
        document.querySelector("#cartTotal").innerHTML = total;
        document.querySelector("#printCartTbody").innerHTML = html;
        document.querySelector("#printCartTotal").innerHTML = total;
    }
    printCart();

    function removeFromCart(id) {
        cart.removeItem(id);
        printCart();
    }

    function addToCart(id, name, price) {
        cart.addItem(id, name, price);
        printCart();
    }
</script>