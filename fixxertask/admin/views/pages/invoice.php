  <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Invoice</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                </ol>
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
                      
                        <th class="border-top-0 text-end" style="width: 9rem">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p ></p>
                          <small></small>
                        </td>
                        <td ></td>
                        <td ></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <p></p>
                          <small></small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <p></p>
                          <small></small>
                        </td>
                        <td >1</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- Totals -->
                <div class="row justify-content-end">
                  <div class="col-md-5 col-lg-4">
                    <dl class="row mb-0">
                      
                      <dt class="col-7 fw-semibold border-top pt-2">Total due</dt>
                      <dd class="col-5 text-end fw-semibold border-top pt-2 mb-0" id="printCartTotal">0</dd>
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
      </main>