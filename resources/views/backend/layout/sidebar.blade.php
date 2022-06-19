

@section('sidebar')

<div class="site-main">
      <div class="site-left-sidebar">
      
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            
         
              <li class="menu-title">Main</li>
            <li>
              <a href="{{url('admin/index')}}" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Dashboards</span>
            </a>
           
            </li>
     

            <li class="menu-title">Components</li>

            <!-- Projects component -->
            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Projects</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/form')}}">Create</a></li>
                <li><a href="{{url('/viewprojects')}}">View Projects</a></li>
                <li><a href="{{url('/recycle_bin')}}">Recycle Bin</a></li>
              </ul>
                    <!-- Projects component End -->


              <!-- Our teams component -->

              <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <!-- <i class="zmdi zmdi-dot-circle-alt"></i> -->
                  <i class="bi bi-person-fill"></i>

                </span>
                <span class="menu-text">Our Team</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_member')}}">Add Member</a></li>
                <li><a href="{{url('/view_team_members')}}">View Members</a></li>
                <li><a href="{{url('/recycle_bin_members')}}">Recycle Bin</a></li>
              </ul>
            </li>
                       <!-- Our teams component -->

            <!-- Our services component -->

            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-clipboard-minus"></i>

                </span>
                <span class="menu-text">Our Services</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_service')}}">Add Services</a></li>
                <li><a href="{{url('/view_services')}}">View Servicess</a></li>
                <li><a href="{{url('/recycle_bin_service')}}">Recycle Bin</a></li>
              </ul>
            </li>
                       <!-- Our services component -->
            
                 <!----------------------- Our Testimony component ------------------->

            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-clipboard2-fill"></i>

                </span>
                <span class="menu-text">Testimony</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_testimony')}}">Add Testimony</a></li>
                <li><a href="{{url('/view_testimonys')}}">View Testimony</a></li>
                <li><a href="{{url('/recycle_bin_testimony')}}">Recycle Bin</a></li>
              </ul>
            </li>
         <!----------------------- Our testimony component -------------------->   

         <!----------------------- Our Skill component ------------------->

            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-tag"></i>


                </span>
                <span class="menu-text">Skill</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_skilldescription')}}">Edit Description</a></li>
                <li><a href="{{url('/create_skillname')}}">Add Skills</a></li>
                <li><a href="{{url('/view_skillnames')}}">view Skills</a></li>
                <li><a href="{{url('/recycle_bin_skillname')}}">Recycle Bin</a></li>
              </ul>
            </li>
                       <!----------------------- Our Skill component -------------------->  

                         <!----------------------- Our Aboutus component ------------------->

            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-briefcase-fill"></i>
                </span>
                <span class="menu-text">Aboutus</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_aboutus')}}">Edit About us </a></li>
              </ul>
            </li>
                       <!----------------------- Our Aboutus component -------------------->  

              <!----------------------- Our view people to contact component ------------------->

              <li class="with-sub active">
              <a href="" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-telephone-outbound"></i>
                </span>
                <span class="menu-text">Contact People</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/view_people_to_contact')}}">view people to contact</a></li>
                <li><a href="{{url('/people_to_contact_recyclebin')}}">recycle bin</a></li>
              </ul>
            </li>        
            <!----------------------- Our view people to contact component -------------------->  
          
              <!----------------------- connect with us component ------------------->

        
              <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                <i class="bi bi-person-lines-fill"></i>
                </span>
                <span class="menu-text">Contact detail</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{url('/create_contactdetail')}}">Edit Contact detail  </a></li>
              </ul>
            </li>      
                       <!-----------------------connect with us component -------------------->  
          </ul>
        </div>

  
      </div>
    
     
@endsection

