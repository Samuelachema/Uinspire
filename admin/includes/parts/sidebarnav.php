<!-- Sidebar Nav -->
      <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
        <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
          
		  <!-- Lighthouse -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-opened has-active">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu1">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-layout-grid-3"></i>
    </span>
              <span class="media-body align-self-center">Lighthouse</span>
              <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>
              <span class="u-side-nav--has-sub-menu__indicator"></span>
            </a>

            <!-- Lighthouse: Submenu-1 -->
            <ul id="subMenu1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: block;">
              <!-- View Members -->
              <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 <?php if($page=="member"){echo "active";} ?>" href="/Uinspire/admin/members/">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-id-badge"></i>
        </span>
                  <span class="media-body align-self-center">Members</span>
                </a>
              </li>
              <!-- End View Members -->

              <!-- Reports -->
              <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 <?php if($page=="report"){echo "active";} ?>" href="/Uinspire/admin/reports/">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-pie-chart"></i>
        </span>
                  <span class="media-body align-self-center">Reports</span>
                </a>
              </li>
              <!-- End Reports -->
            </ul>
            <!-- End Lighthouse: Submenu-1 -->
          </li>
          <!-- End Lighthouse -->
        </ul>
      </div>
      <!-- End Sidebar Nav -->