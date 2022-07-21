 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="index3.html" class="brand-link">
         <img src="{{asset('public/asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-dark">E-commerce-project</span>
     </a>
     <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{asset('public/asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Admin Panel</a>
             </div>
         </div>
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/dashboard')}}" class="nav-link active">
                   
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
             </ul>

             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/cat')}}" class="nav-link">
                  
                     <i class="nav-icon fas fa-th"></i>
                        <p>
                             Category
                         </p>
                         
            
                       
                     </a>
                 </li>
             </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/subCategory')}}" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                         <p>
                             Subcategory
                         </p>
                     </a>
                 </li>
             </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/pro')}}" class="nav-link">
                         <i class="nav-icon fas fa-shopping-cart"></i>
                         <i class="fa-thin fa-cart-shopping-fast"></i>
                         <p>
                             AddProduct
                         </p>
                     </a>
                 </li>
             </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/slide')}}" class="nav-link">
                     <i class="nav-icon fas fa-edit"></i>
                         <p>
                             Addslide
                         </p>
                     </a>
                 </li>
             </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="{{url('/order')}}" class="nav-link">
                     <div class="icon">
                    <i class="ion ion-bag"> <p>
                             All Order
                         </p></i>
                  </div>
                         
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>