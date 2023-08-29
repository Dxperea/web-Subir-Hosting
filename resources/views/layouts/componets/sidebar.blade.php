<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{('img/profile.jpg')}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">{{Auth::user()->name}}</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">
          <!--- titulo descripcion-->
            <li class="side-nav-title">Navegación</li>       
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendario </span>
                </a>
            </li>           

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-user"></i>
                    <span>Usuarios</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('usuarios')}}">Usuarios</a>
                        </li>
                    </ul>
                </div>
                
            </li> 
            <li class="side-nav-item">
                <a href="{{route('cargos')}}"  class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span>Cargos</span>
                </a>
            </li> 
            <li class="side-nav-item">
                <a href="{{route('vehiculos')}}"  class="side-nav-link">
                 <i class="bi bi-bus-front"></i>
                    <span>Vehiculos</span>
                </a>
            </li> 
            <li class="side-nav-item">
                <a href="{{route('Autorizaciones')}}"  class="side-nav-link">
                <i class="bi bi-journal-bookmark"></i>
                    <span>Autorizaciones</span>
                </a>
            </li> 
            <li class="side-nav-item">
                <a href="{{route('tipo_cargas')}}"  class="side-nav-link">
                  <i class="bi bi-wallet2"></i>
                    <span>Tipo de carga</span>
                </a>
            </li> 
            <li class="side-nav-item">
                <a href="{{route('viatico_conductores')}}"  class="side-nav-link">
                <i class="bi bi-geo-alt"></i>
                    <span>Viaticos conductores</span>
                </a>
            </li> 
            <li class="side-nav-item">
                <a href="{{route('municipios')}}"  class="side-nav-link">
                <i class="bi bi-geo-alt"></i>
                    <span>Municipios</span>
                </a>
            </li> 
            

         

           

           

     



        


            <!-- Help Box -->
            
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>