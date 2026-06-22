 </aside>
      <!--end::Sidebar-->
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Form Elements</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Elements</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row g-4">
              <div class="col-12">
                <div class="callout callout-info">
                  For detailed documentation visit
                  <a
                    href="https://getbootstrap.com/docs/5.3/forms/overview/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="callout-link"
                    >Bootstrap Forms</a
                  >.
                </div>
              </div>

              <!-- Quick Example -->
              <div class="col-md-6">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Quick Example</div>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                        />
                        <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Input Group -->
              <div class="col-md-6">
                <div class="card card-success card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Input Group</div>
                  </div>
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </div>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Recipient's username"
                        aria-label="Recipient's username"
                        aria-describedby="basic-addon2"
                      />
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <div class="mb-3">
                      <label for="basic-url" class="form-label">Your vanity URL</label>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon3"
                          >https://example.com/users/</span
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="basic-url"
                          aria-describedby="basic-addon3 basic-addon4"
                        />
                      </div>
                      <div class="form-text" id="basic-addon4">
                        Example help text goes outside the input group.
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                      />
                      <span class="input-group-text">.00</span>
                    </div>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                      />
                      <span class="input-group-text">@</span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Server"
                        aria-label="Server"
                      />
                    </div>
                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Checks & Radios -->
              <div class="col-md-6">
                <div class="card card-info card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Checks &amp; Radios</div>
                  </div>
                  <div class="card-body">
                    <h6 class="text-secondary small text-uppercase mb-2">Checkboxes</h6>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" id="check-default" />
                      <label class="form-check-label" for="check-default">Default</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" id="check-checked" checked />
                      <label class="form-check-label" for="check-checked">Pre-checked</label>
                    </div>
                    <div class="form-check mb-3">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="check-disabled"
                        disabled
                      />
                      <label class="form-check-label" for="check-disabled">Disabled</label>
                    </div>

                    <h6 class="text-secondary small text-uppercase mb-2 mt-3">Radios</h6>
                    <div class="form-check mb-2">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="radioGroup"
                        id="radio-1"
                        checked
                      />
                      <label class="form-check-label" for="radio-1">Option one</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="radio" name="radioGroup" id="radio-2" />
                      <label class="form-check-label" for="radio-2">Option two</label>
                    </div>

                    <h6 class="text-secondary small text-uppercase mb-2 mt-3">Switches</h6>
                    <div class="form-check form-switch mb-2">
                      <input class="form-check-input" type="checkbox" role="switch" id="switch-1" />
                      <label class="form-check-label" for="switch-1">Notifications</label>
                    </div>
                    <div class="form-check form-switch">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="switch-2"
                        checked
                      />
                      <label class="form-check-label" for="switch-2">Auto-save</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Select / Range / File -->
              <div class="col-md-6">
                <div class="card card-warning card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Selects, Ranges &amp; File</div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default">
                        <option selected>Open this select menu</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="select-multiple">Multi-select</label>
                      <select class="form-select" id="select-multiple" multiple size="3">
                        <option>Apple</option>
                        <option selected>Orange</option>
                        <option>Pear</option>
                        <option>Mango</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="range-1">Range</label>
                      <input
                        type="range"
                        class="form-range"
                        id="range-1"
                        min="0"
                        max="100"
                        value="35"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="form-file-multi">Multiple files</label>
                      <input class="form-control" type="file" id="form-file-multi" multiple />
                    </div>
                    <div>
                      <label class="form-label" for="form-color">Color</label>
                      <input
                        type="color"
                        class="form-control form-control-color"
                        id="form-color"
                        value="#0d6efd"
                        title="Choose your color"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <!-- Floating labels -->
              <div class="col-md-6">
                <div class="card card-secondary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Floating Labels</div>
                  </div>
                  <div class="card-body">
                    <div class="form-floating mb-3">
                      <input
                        type="email"
                        class="form-control"
                        id="floatingEmail"
                        placeholder="name@example.com"
                      />
                      <label for="floatingEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input
                        type="password"
                        class="form-control"
                        id="floatingPwd"
                        placeholder="Password"
                      />
                      <label for="floatingPwd">Password</label>
                    </div>
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        id="floatingTextarea"
                        placeholder="Leave a comment here"
                        style="height: 6rem"
                      ></textarea>
                      <label for="floatingTextarea">Comments</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Disabled / Readonly -->
              <div class="col-md-6">
                <div class="card card-danger card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Disabled &amp; Readonly</div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <label class="form-label" for="dis-text">Disabled text</label>
                      <input
                        type="text"
                        class="form-control"
                        id="dis-text"
                        value="Can't touch this"
                        disabled
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="ro-text">Readonly text</label>
                      <input
                        type="text"
                        class="form-control"
                        id="ro-text"
                        value="Read me, but don't write me"
                        readonly
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="dis-select">Disabled select</label>
                      <select id="dis-select" class="form-select" disabled>
                        <option>Locked option</option>
                      </select>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="dis-check" disabled />
                      <label class="form-check-label" for="dis-check">Can't check this</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025-2026&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">The Khairul Created</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure--><!--begin::Color Mode Toggle (#6010)-->
    <script>
      (() => {
        'use strict';

        const STORAGE_KEY = 'lte-theme';

        const getStoredTheme = () => localStorage.getItem(STORAGE_KEY);
        const setStoredTheme = (theme) => localStorage.setItem(STORAGE_KEY, theme);

        const prefersDark = () => globalThis.matchMedia('(prefers-color-scheme: dark)').matches;

        const getPreferredTheme = () => {
          const stored = getStoredTheme();
          if (stored) return stored;
          return prefersDark() ? 'dark' : 'light';
        };

        const setTheme = (theme) => {
          const resolved = theme === 'auto' ? (prefersDark() ? 'dark' : 'light') : theme;
          document.documentElement.setAttribute('data-bs-theme', resolved);
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme) => {
          // Highlight the active dropdown option
          document.querySelectorAll('[data-bs-theme-value]').forEach((el) => {
            el.classList.remove('active');
            el.setAttribute('aria-pressed', 'false');
            const check = el.querySelector('.bi-check-lg');
            if (check) check.classList.add('d-none');
          });
          const active = document.querySelector(`[data-bs-theme-value="${theme}"]`);
          if (active) {
            active.classList.add('active');
            active.setAttribute('aria-pressed', 'true');
            const check = active.querySelector('.bi-check-lg');
            if (check) check.classList.remove('d-none');
          }
          // Sync the topbar trigger icon
          document.querySelectorAll('[data-lte-theme-icon]').forEach((icon) => {
            icon.classList.toggle('d-none', icon.dataset.lteThemeIcon !== theme);
          });
        };

        globalThis.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
          const stored = getStoredTheme();
          if (!stored || stored === 'auto') setTheme(getPreferredTheme());
        });

        document.addEventListener('DOMContentLoaded', () => {
          showActiveTheme(getPreferredTheme());
          document.querySelectorAll('[data-bs-theme-value]').forEach((toggle) => {
            toggle.addEventListener('click', () => {
              const theme = toggle.getAttribute('data-bs-theme-value');
              setStoredTheme(theme);
              setTheme(theme);
              showActiveTheme(theme);
            });
          });
        });
      })();
    </script>
    <!--end::Color Mode Toggle-->
  </body>
</html>
