<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=B612:wght@400;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('mycss/admin-nav.css') }}" rel="stylesheet">
    <link href="{{ asset('mycss/admin.css') }}" rel="stylesheet">
   
    <title>Dashborad</title>
    <link rel="icon" href="./images/hms.svg">
</head>

<body>
    <header class="header-area">
        <div class="title">
            <h1>Hospital Management System</h1>
           
        </div>
        <div class="navigation">
            <nav class="menu">
        <ul>
           
            <div class="logout-btn">
           
            <li><a  href="{{route('logout')}}"> Logout </a></li>
            </div>
           
        </ul>
            </nav>
        </div>
    </header>
  
    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                    <li><a class="btn btn-primary" href="{{route('dashboard')}}"> Dashboard </a></li>
                    <li><a class="btn btn-primary" href="{{route('medicine')}}"> Add Medicine </a></li>
                    <li><a class="btn btn-info" href="{{route('medicinelist')}}"> Show Medicine </a></li>
        

                <li><a class="btn btn-primary" href="{{route('medicines.list')}}">Sell Medicine</a></li>
                <li>
                <a class="btn btn-primary" href="{{route('customer.myorders')}}"> My Orders </a>
                </li>

                <li><a class="btn btn-primary" href="{{route('medicines.mycart')}}">My Cart</a></li>
                <li><a class="btn btn-primary" href="{{route('medicines.emptycart')}}">Empty Cart</a></li>
            
         
            </ul>
        </div>
        <div class="admin-content">
            <div class="content">
                <!-- <h2 class="page-title">Welcome To Your Dashboard </h2> -->
                <div>
            @yield('content')
        </div>
            </div>
        </div>
    </div>
</body>

</html>
