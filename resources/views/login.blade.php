<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <div class="container">
        <h2 style="margin-top: 40px;" >Log in </h2>
        <form action="{{ url('/login') }}" method="post" >

        <input   type='hidden'  name='_token' value='{{csrf_token()}}'>


            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}" id="exampleInputName" aria-describedby="" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pasword</label>
                <input type="password" name="password" class="form-control" value="{{old('password')}}" id="exampleInputName" aria-describedby="" placeholder="Enter password">
            </div>
    


            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>

</body>

</html>
 

