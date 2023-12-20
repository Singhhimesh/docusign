 <!-- partial: -->
 <nav class="sidebar">
     <div class="sidebar-header">
         <a href="http://127.0.0.1:8000/admin/home" class="sidebar-brand">
             <img class="rounded-circle" src="http://127.0.0.1:8000/images/logo_.jpeg"></span>
         </a>
         <div class="sidebar-toggler not-active">
             <span></span>
             <span></span>
             <span></span>
         </div>
     </div>
     <div class="sidebar-body">
         <ul class="nav">
             <li class="nav-item nav-category">Main</li>
             <li class="nav-item">
                 <a href="{{ route('home') }}" class="nav-link">
                     <i class="link-icon" data-feather="box"></i>
                     <span class="link-title">Dashboard</span>
                 </a>
             </li>

             <li class="nav-item nav-category">Patients</li>
             <li class="nav-item">
                 <a href="{{ route('patients.index') }}" class="nav-link">
                     <i class="link-icon" data-feather="box"></i>
                     <span class="link-title">Patients</span>
                 </a>
             </li>
             <li class="nav-item nav-category">Doctors</li>
             <li class="nav-item">
                 <a href="{{ route('doctors.index') }}" class="nav-link">
                     <i class="link-icon" data-feather="box"></i>
                     <span class="link-title">Doctors</span>
                 </a>
             </li>
         </ul>
     </div>
 </nav>
