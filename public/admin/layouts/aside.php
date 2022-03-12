 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <span class="brand-text font-weight-light">Home Helper</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


         <li class="nav-item 
         <?=
          (getUrl() == getPage("users/create.php") ||
            getUrl() == getPage("users/index.php"))
            ? 'menu-open' : '' ?>">


           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("users/create.php") ||
              getUrl() == getPage("users/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-user"></i>
             
             <p>
             المستخدمون
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("users/create.php") ?>" class="nav-link <?= getUrl() == getPage("users/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("users/index.php") ?>" class="nav-link <?= getUrl() == getPage("users/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




         <li class="nav-item 
         <?=
          (getUrl() == getPage("customers/create.php") ||
            getUrl() == getPage("customers/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("customers/create.php") ||
              getUrl() == getPage("customers/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-user-plus"></i>
            
            
             <p>
             عملاء
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("customers/create.php") ?>" class="nav-link <?= getUrl() == getPage("customers/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("customers/index.php") ?>" class="nav-link <?= getUrl() == getPage("customers/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>



         <li class="nav-item 
         <?=
          (getUrl() == getPage("workers/create.php") ||
            getUrl() == getPage("workers/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("workers/create.php") ||
              getUrl() == getPage("workers/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-people-carry"></i>
             
             <p>
             عمال
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("workers/create.php") ?>" class="nav-link <?= getUrl() == getPage("workers/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("workers/index.php") ?>" class="nav-link <?= getUrl() == getPage("workers/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
               <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




         <li class="nav-item 
         <?=
          (getUrl() == getPage("works/create.php") ||
            getUrl() == getPage("works/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("works/create.php") ||
              getUrl() == getPage("works/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-chalkboard-teacher"></i>
           
             <p>
              العمل
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("works/create.php") ?>" class="nav-link <?= getUrl() == getPage("works/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("works/index.php") ?>" class="nav-link <?= getUrl() == getPage("works/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
               <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>






         <li class="nav-item 
         <?=
          (getUrl() == getPage("work_images/create.php") ||
            getUrl() == getPage("work_images/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("work_images/create.php") ||
              getUrl() == getPage("work_images/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-images"></i>
             
             <p>
             صور العمل
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("work_images/create.php") ?>" class="nav-link <?= getUrl() == getPage("work_images/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("work_images/index.php") ?>" class="nav-link <?= getUrl() == getPage("work_images/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
               <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>





         <li class="nav-item 
         <?=
          (getUrl() == getPage("customers_workers/create.php") ||
            getUrl() == getPage("customers_workers/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("customers_workers/create.php") ||
              getUrl() == getPage("customers_workers/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-users-cog"></i>
             
             <p>
             وظائف العملاء
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("customers_workers/create.php") ?>" class="nav-link <?= getUrl() == getPage("customers_workers/create.php") ? 'active' : '' ?>">
               <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("customers_workers/index.php") ?>" class="nav-link <?= getUrl() == getPage("customers_workers/index.php") ? 'active' : '' ?>">
               <i class="fas fa-users nav-icon"></i>
               <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>