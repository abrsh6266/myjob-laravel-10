<div id="layoutSidenav_nav">
    <nav class="bg-gray-800 text-white sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading text-gray-300">Core</div>
          <a class="nav-link flex items-center py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="index.html">
            <i class="fas fa-tachometer-alt mr-2 text-white"></i>
            Dashboard
          </a>
          <div class="sb-sidenav-menu-heading text-gray-300">Interface</div>
          <a class="nav-link flex items-center py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75 collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <i class="fas fa-columns mr-2 text-white"></i>
            Layouts
            <i class="fas fa-angle-down ml-auto text-white"></i>
          </a>
          <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav pl-4">
              <a class="nav-link py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="layout-static.html">Static Navigation</a>
              <a class="nav-link py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="layout-sidenav-light.html">Light Sidenav</a>
            </nav>
          </div>
          <a class="nav-link flex items-center py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75 collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <i class="fas fa-book-open mr-2 text-white"></i>
            Pages
            <i class="fas fa-angle-down ml-auto text-white"></i>
          </a>
          <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion pl-4" id="sidenavAccordionPages">
              <a class="nav-link collapsed flex items-center py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                <i class="fas fa-user-lock mr-2 text-white"></i>
                Authentication
                <i class="fas fa-angle-down ml-auto text-white"></i>
              </a>
              <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav pl-6">
                  <a class="nav-link py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="login.html">Login</a>
                  <a class="nav-link py-2 px-4 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-75" href="register.html">Register</a>

                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>