<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Form Page</title>
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        @php
        $demo = 1; 
        @endphp
       <div class="container">
       <x-input type="text" name="name" label="please enter your name " :demo="$demo" />
       <span class="text-danger">@error('name'){{$message}}@enderror</span>
        <x-input type="email" name="email" label="please enter your email"/>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
        <x-input type="password" name="password" label="please enter your Password"/>
        <span class="text-danger">@error('password'){{$message}}@enderror</span>
        <x-input type="password" name="password_confirmation" label="please enter your confirm password"/> 
        <span class="text-danger">@error('password_confirmation'){{$message}}@enderror</span>
        <div>
        <button class="btn btn-primary">Submit</button>
        </div>
       </div>
    </form>
</body>
</html>
