<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
        <a class="btn btn-danger" href="{{route('home')}}">Home</a>
        <a class="btn btn-success" href="{{route('profile')}}">My Profile</a>
        <a class="btn btn-primary" href="{{route('contact')}}">Contact</a>
        <a class="btn btn-dark" href="{{route('student.create')}}">Registration</a>
        <a class="btn btn-primary" href="{{route('student.list')}}">Student Info</a>
    </body>
    
</html>