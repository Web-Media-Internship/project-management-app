        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand  align-items-center justify-content-center" href="/" style="transition: none;">
                <img src="/img/logo 1.png" alt="" width="20%" class="img" id="logo">
                <div class="sidebar-brand-text "><img src="/img/webmedia2.png" alt="" width="60%"></div>
            </a>

            <!-- Divider -->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item mt-3">
                <a class="nav-link" href="/">
                    <i class="fas fa-home" id="i-Dashboard"></i>
                    <span id="Dashboard" >Dashboard</span></a>
            </li>

            <!-- Divider -->

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/clients">
                    <i class="fas fa-fw fa-users" id="i-Clients"></i>
                    <span id="Clients">Clients</span>

                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" id="projectsidebar" href="/projects" data-toggle="collapse" data-target="#collapsePagessettings" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-briefcase" id="i-Projects"></i>
                    <span id="Projects">Projects</span>
                </a>
                <div id="collapsePagessettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="/category">Category</a>
                        <div class="collapse-divider"></div>
                        <a class="collapse-item" href="/platform">Platform</a>


                    </div>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="/payments" >
                    <i class="fas fa-fw fa-money-bill" id="i-Payments"></i>
                    <span id="Payments">Payments</span>

                </a>
            
            </li> --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa fa-book"  rgb(0, 183, 255)"></i>
                    <span>Repost</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/Reports">Project</a>
                        <a class="collapse-item" href="/TransactionPorject">Transaction Project</a>
                        <a class="collapse-item" href="/TransactionSalary">Transaction Salary</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/finances" >
                    <i class="fas fa-fw fa-wallet" id="i-Finance"></i>
                    <span id="Finance">Finance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/salary">
                    <i class="fas fa-hand-holding-usd" id="i-salary"></i>
                    <span id="Salary ">Salary</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/developers" >
                    <i class="fas fa-fw fa-users" id="i-Developers"></i>
                    <span id="Developers">Developers</span>

                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


              {{-- fas fa-sign-in-alt --}}
            <!-- Nav Item - Pages Collapse Menu -->
         

            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/recovery" >
                    <i class="fas fa-sign-in-alt" id="i-Recovery"></i>
                    <span id="Recovery">Change Password</span>
                </a>
            </li>
            <!-- Nav Item - Tables -->
    

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>