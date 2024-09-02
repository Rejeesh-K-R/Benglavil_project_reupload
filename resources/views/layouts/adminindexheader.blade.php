<html>
    <head>

    
    </head>
    <body>
    <div class="main-header">
        <div class="logo-header">
            <a href="#" class="logo">
                <img style="width: 70px;" src="{{ asset('assets/img/img.jpeg.png') }}" alt="">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>

        <nav class="navbar navbar-header navbar-expand-lg">
            <div class="container-fluid">
                <!--
            <form class="navbar-left navbar-form nav-search" action="" style="display: flex; margin-right: 15px;">
                <div class="input-group" style="flex-grow: 1;">
                    <input type="text" placeholder="Search ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>-->

                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img src="{{ asset('assets/img/img.jpeg.png') }}" alt="user-img" width="36" class="img-circle"><span>Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="{{ asset('assets/img/img.jpeg.png') }}" alt="user"></div>
                                    <div class="u-text">
                                        <h4>Admin</h4>
                                        <p class="text-muted">contact@benglavil.com</p>
                                    </div>
                                </div>
                            </li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('assets/img/img.jpeg.png') }}">
                </div>
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Admin
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a href="/admin">
                        <i class="la la-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/about">
                        <i class="la la-keyboard-o"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/gallery">
                        <i class="la la-keyboard-o"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/services">
                        <i class="la la-keyboard-o"></i>
                        <p>Services</p>
                        <span class="badge badge-count"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/contact">
                        <i class="la la-keyboard-o"></i>
                        <p>Contact</p>
                        <span class="badge badge-count"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="admin/testimonials">
                        <i class="la la-keyboard-o"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>







			
    </body>
</html>