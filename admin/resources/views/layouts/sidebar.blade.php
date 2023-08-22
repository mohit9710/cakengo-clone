<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::to('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a>
          </li>

          <li class="nav-header">Product Management</li>
          <li class="nav-item">
            <a href="{{route('product.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Products</p>
            </a>
          </li>

          <li class="nav-header">Category Management</li>
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('sub_category.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Sub-Category</p>
            </a>
          </li>
         
          <li class="nav-header">User Management</li>
          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-header">Role Management</li>
          <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Role</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-header">Content Management</li>
          <li class="nav-item">
            <a href="{{route('banner.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Banners</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pages.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Pages</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('voucher.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Voucher</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pincode.index')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Pincode</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>