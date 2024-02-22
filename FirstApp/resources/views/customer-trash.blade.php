
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customer Trash </title>
</head>
<body>


  <table class="table mx-auto d-block mt-5">
       
      <thead>
        <tr>
            <td>
                <a href="{{route('customer.create')}}">
                    <button class="btn btn-success">add</button>
                </a>
            </td>
            <td>
                <a href="{{url('customer/view')}}">
                    <button class="btn btn-primary">Customer View</button>
                </a>
            </td>
    </tr>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">address</th>
          <th scope="col">State</th>
          <th scope="col">Country</th>
          <th scope="col">Dob</th>
          <th scope="col">Password</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          <!-- <th scope="col">Created_at</th>
          <th scope="col">updated_at</th> -->

        </tr>
      </thead>
      <tbody>
        @foreach($customer as $cr)
    <tr>
        <th scope="row">{{$cr->id}}</th>
        <td>{{$cr->name}}</td>
        <td>{{$cr->email}}</td>
        <!-- <td>{{$cr->gender}}</td> -->
        <td>@if($cr->gender == "M")
            Male
            @elseif($cr->gender == "F")
            Female 
            @else
            Other
            @endif
        </td>
        <td>{{$cr->address}}</td>
        <td>{{$cr->state}}</td>
        <td>{{$cr->country}}</td>
        <td>{{$cr->dob}}</td>
        <td>{{$cr->password}}</td>
        <td>@if($cr->status == "1")
               <a href=""> <span class="badge badge-success">Active</span></a>
            @else
              <a href="">  <span class="badge badge-danger">Inactive</span></a>
            @endif
        </td>
        <!-- <td>
            <a href="{{url('customer/delete')}}/{{$cr->id}}"><button class="btn btn-danger">Delete</button></a>
        </td> -->
        <td>
            <!--this is route methed-->
    <!-- <a href="{{ route('customer.delete', ['id' => $cr->id]) }}">
        <button class="btn btn-danger">Delete</button>
    </a> -->
    <!--this is url methed-->
    <a href="{{ url('customer/delete/')}}/{{$cr->id}}">
        <button class="btn btn-danger">Delete</button>
    </a>
</td>
        <td>
           <a href="{{ route('customer.restore', ['id' => $cr->id]) }}"> <button class="btn btn-primary">Restore</button></a>
        </td>
    </tr>

    <tr>
            <!-- ... other columns ... -->
            <!-- <td>
                <a href="{{ url('customer/delete/' . $cr->id) }}">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
            <td>
                <a href="{{ route('customer.update', ['id' => $cr->id]) }}">
                    <button class="btn btn-primary">Edit</button>
                </a>
            </td>
        </tr> -->
@endforeach

      </tbody>
    </table>

</body>
</html>