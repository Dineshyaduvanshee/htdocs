
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
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Customer view </title>
</head>
<body>
<!-- table mx-auto d-block mt-5 -->
<table class="table mx-auto d-block mt-5 table-responsive">

            <thead>
             
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <!-- <td colspan="1"><input type="text"></td>                  -->
                    <td colspan="1">
                        <div class="input-group-append">
                        <!-- <a href="{{ url('/customer/view') }}"> <input type="text" class="form-control" placeholder="Search..."  > </a>
                             -->
                                <!-- <div class="input-group-append">
                                  
                                   <button class="btn btn-outline-secondary" type="button"> 
                                   <i class="fas fa-search">Search</i>
                                    </button>
                                </div>
                        </div> -->
                        <input type="search" id="" name="search" class="form-control" placeholder="Search...">
                                <button class="btn btn-outline-secondary" type="button" >
                                <i class="fas fa-search">Search</i>
                                </button>

                    </td>


                  



                    <!-- <td>
                        <a href="{{ url('/customer-trash') }}"><button class="btn btn-success">Search</button></a> 
                    </td> -->
                    <td> 
                        <a href="{{ route('customer.create') }}"><button class="btn btn-primary">Create</button></a>
                    </td>
                   
                    <td><a href="{{ url('/customer-trash') }}">
                            <button class="btn btn-danger" style="align:left;">Go to Trash</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col">Restore</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $cr)
                    <tr>
                        <th scope="row">{{$cr->id}}</th>
                        <td>{{$cr->name}}</td>
                        <td>{{$cr->email}}</td>
                        <td>
                            @if($cr->gender == "M")
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
                        <td>
                            @if($cr->status == "1")
                                <a href="">
                                    <span class="badge badge-success">Active</span>
                                </a>
                            @else
                                <a href="">
                                    <span class="badge badge-danger">Inactive</span>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('customer/delete/')}}/{{$cr->id}}">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                        <td>
                        <a href="{{ route('customer.restore', ['id' => $cr->id]) }}">
                                <button class="btn btn-primary">Restore</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>

</html>