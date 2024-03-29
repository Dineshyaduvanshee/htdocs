<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="C:\Users\Shree\OneDrive\Desktop\Indicosmic-logo.png">info@indicosmic.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/customer/create')}}">Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/customer/view')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/customer')}}">View</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- <a class="nav-link" href="{{url('/customer')}}">View</a> -->
                <!-- <button class="nav-link btn btn-primary" href="{{url('/login')}}">Login</button> -->
                <a class="nav-link btn btn-primary" href="{{url('/login')}}">Login</a>
            </li>
        </ul>
    </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Set your desired background color */
        }
        .container {
            max-width: 600px; /* Set your desired maximum width */
            margin: auto;
            padding: 20px;
            background-color: #fff; /* Set your desired background color */
            border-radius: 8px;
            margin-top: 50px; /* Adjust the top margin as needed */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <title>Form Page</title>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Registration Form</h1>
        <form action="{{url('/')}}/register" method="post">
            @csrf
            @php
                $demo = 1; 
            @endphp
            <x-input type="text" name="name" label=" Name :" placeholder="Please enter your name" :demo="$demo" />
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
            <x-input type="email" name="email" placeholder="Please enter your email" label=" Email :"/>
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            <x-input type="password" name="password" placeholder="Please enter your password" label=" Password :"/>
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
            <x-input type="password" name="password_confirmation" placeholder="Please enter your confirm password" label=" Comfirm Password : "/> 
            <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
            <div>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

