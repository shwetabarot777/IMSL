  <!-- Sidebar -->
  
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->photo; }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->full_name; }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
<!--       <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        <?php $role = Auth::user()->role; ?>
        @if($role == "admin")
          <li class="nav-header">Product Management</li>
          <li class="nav-item">
            <a href="products" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Products
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/order" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Order
              </p>
            </a>
          </li>
        @endif 
        @if($role =="manager" || $role =="admin" )
          <li class="nav-item">
            <a href="/currents" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Currents
              </p>
            </a>
          </li>
         @endif 
          @if($role == "admin")
          <li class="nav-item">
            <a href="/importExportView" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Product Import/Export
              </p>
            </a>
          </li>
          @endif 
          @if($role == "admin")

          <li class="nav-item">
            <a href="/send-mail" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Send Email Demo
              </p>
            </a>
          </li>

<li class="nav-item">
            <a href="file:///C:/xampp/htdocs/IMSL1/public/assets/AdminLTE-3.1.0/index.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Theme Demo
              </p>
            </a>
          </li>@endif 


         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
