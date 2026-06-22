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
                        <button type="submit" class="btn btn-success">Checkout</button>
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
    }
</style>
<div class="receipt" style="width: 300px; margin: 0 auto;">
    <style>
        #printCartTbody .btn-delete {
            display: none;
        }
    </style>
    <div class="text-center">
        <h2>FixxerTask</h2>
        <h6>Its Solution of Your Problem</h6>
        <p>Date: 2026-05-12</p>
    </div>
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
</div>

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
                    <h2 class="h4 mb-0 text-primary fw-semibold">AdminLTE, Inc.</h2>
                    <p class="text-secondary mb-0 small">
                      795 Folsom Ave, Suite 600<br />
                      San Francisco, CA 94107<br />
                      billing@example.com
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
                    <p class="text-secondary small mb-1">Billed to</p>
                    <p class="mb-0 fw-semibold">Acme Corporation</p>
                    <p class="text-secondary small mb-0">
                      Attn: Jane Doe<br />
                      1234 Market Street<br />
                      San Francisco, CA 94103
                    </p>
                  </div>
                  <div class="col-sm-6 text-sm-end">
                    <p class="text-secondary small mb-1">Issue date</p>
                    <p class="mb-2">May 18, 2026</p>
                    <p class="text-secondary small mb-1">Due date</p>
                    <p class="mb-0">June 1, 2026</p>
                  </div>
                </div>

                <!-- Items -->
                <div class="table-responsive mb-3">
                  <table class="table align-middle mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Description</th>
                        <th class="border-top-0 text-end" style="width: 6rem">Qty</th>
                        <th class="border-top-0 text-end" style="width: 9rem">Unit price</th>
                        <th class="border-top-0 text-end" style="width: 9rem">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p class="mb-0 fw-semibold">Pro plan subscription</p>
                          <small class="text-secondary">May 18 - Jun 18, 2026</small>
                        </td>
                        <td class="text-end">1</td>
                        <td class="text-end">$29.00</td>
                        <td class="text-end">$29.00</td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0 fw-semibold">Additional seats</p>
                          <small class="text-secondary">Pro-rated for current period</small>
                        </td>
                        <td class="text-end">3</td>
                        <td class="text-end">$12.50</td>
                        <td class="text-end">$37.50</td>
                      </tr>
                      <tr>
                        <td>
                          <p class="mb-0 fw-semibold">SMS notifications add-on</p>
                          <small class="text-secondary">1,000 messages</small>
                        </td>
                        <td class="text-end">1</td>
                        <td class="text-end">$5.00</td>
                        <td class="text-end">$5.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- Totals -->
                <div class="row justify-content-end">
                  <div class="col-md-5 col-lg-4">
                    <dl class="row mb-0">
                      <dt class="col-7 text-secondary fw-normal">Subtotal</dt>
                      <dd class="col-5 text-end mb-2">$71.50</dd>
                      <dt class="col-7 text-secondary fw-normal">Tax (8.25%)</dt>
                      <dd class="col-5 text-end mb-2">$5.90</dd>
                      <dt class="col-7 fw-semibold border-top pt-2">Total due</dt>
                      <dd class="col-5 text-end fw-semibold border-top pt-2 mb-0">$77.40 USD</dd>
                    </dl>
                  </div>
                </div>

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

    <div class="text-center">
        <h2>FixxerTask</h2>
        <h6>Its Solution of Your Problem</h6>
        <p>Date: 2026-05-12</p>
    </div>
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
</div>