<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADMIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body ng-app="">
        <div class="nav-side-menu">
            <div class="brand"><a href="{{url('')}}"><img src="../image/logo.png" alt="logo"></a></div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard fa-lg"></i> Dashboard
                        </a>
                    </li>

                    <li data-toggle="collapse" data-target="#products" class="collapsed active">
                        <a href=""><i class="fa fa-gift fa-lg"></i> Product <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li class="active"><a href="{{url('product')}}">Product manager</a></li>
                        <li><a href="#">Product2</a></li>
                    </ul>


                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="service">
                        <li>New Service 1</li>
                        <li>New Service 2</li>
                        <li>New Service 3</li>
                    </ul>


                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                        <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                        <li>New New 1</li>
                        <li>New New 2</li>
                        <li>New New 3</li>
                    </ul>


                    <li>
                        <a href="#">
                            <i class="fa fa-user fa-lg"></i> Profile
                        </a>
                    </li>

                    <li data-toggle="collapse" data-target="#user" class="collapsed">
                        <a href="#"><i class="fa fa-users fa-lg"></i> Users <span class="arrow"></span> </a>
                    </li>
                    <ul class="sub-menu collapse" id="user">
                        <li><a href="{{url('createuser')}}">Create user</a></li>
                        <li><a href="{{url('listuser')}}">User manager</a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <nav class="navbar navfix fixed-top navbar-toggleable-md navbar-dark double-nav scrolling-navbar">
            <!--Navigation icons-->
            <ul class="nav navbar-nav width300 navbar-right">
                <li>
                    <a href="">
                        <p>Account</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>
						Dropdown
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('logout')}}">
                        <p>Log out</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
