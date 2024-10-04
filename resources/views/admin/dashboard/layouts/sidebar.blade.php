  <!--start sidebar-->
  <aside class="sidebar-wrapper">
      <div class="sidebar-header">
          <div class="logo-icon">
              <img src="assets/images/logo-icon.png" class="logo-img" alt="">
          </div>
          <div class="logo-name flex-grow-1">
              <h5 class="mb-0">Roksyn</h5>
          </div>
          <div class="sidebar-close ">
              <span class="material-symbols-outlined">close</span>
          </div>
      </div>
      <div class="sidebar-nav" data-simplebar="true">

          <!--navigation-->
          <ul class="metismenu" id="menu">
              <li>
                  <a href="index.html">
                      <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                      </div>
                      <div class="menu-title">Dashboard</div>
                  </a>
              </li>
              <li>
                  <a href="javascript:;" class="has-arrow">
                      <div class="parent-icon"><span class="material-symbols-outlined">apps</span></div>
                      <div class="menu-title">Product</div>
                  </a>
                  <ul>
                      <li>
                          <a href="{{route('index.view')}}"><span class="material-symbols-outlined">arrow_right</span>Category</a>
                      </li>
                  </ul>
              </li>
      </div>
      <div class="sidebar-bottom dropdown dropup-center dropup">
          <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
              <li style="list-style:none;"><a style="list-style:none;" class="dropdown-item"
                      href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span
                          class="material-symbols-outlined me-2">logout</span><span>Logout</span></a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </div>
  </aside>
  <!--end sidebar-->
