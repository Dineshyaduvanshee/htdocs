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
    <title>Home</title>

       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light" >

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center">Welcome to Indicosmic Pvt ltd</h1>

                <p >In 2016, the inception story of Indicosmic began with two visionary individuals, Abhay and Amit. Fueled by their passion for technology and their deep understanding of the insurance and automobile industries, they embarked on a journey to bridge the gap between Insurtech and the Automobile Industry. Drawing on their expertise, they set out to revolutionize the intersection of these two sectors.

With a clear mission in mind, Abhay and Amit assembled a dedicated team of professionals who shared their vision of driving industry transformation through innovative technology solutions. Through their unwavering determination, collaborative spirit, and commitment to excellence, Abhay and Amit have built Indicosmic into trusted leader, empowering businesses to thrive in the digital era.</p>

          
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
