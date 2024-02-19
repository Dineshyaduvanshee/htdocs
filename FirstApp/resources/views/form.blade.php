<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Page</title>
</head>
<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder=""/>
                <!-- <small id="helpId" class="helpId">Help Text</small> -->
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder=""/>
                <!-- <small id="helpId" class="helpId">Help Text</small> -->
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder=""/>
                <!-- <small id="helpId" class="helpId">Help Text</small> -->
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
