<!DOCTYPE HTML>
<html>

<head>
    <title>data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1> all users</h1>

        </div>







        <table class='table table-hover table-bordered table-dark'>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>created_at</th>
                <th>Action</th>

            </tr>

@foreach ($data as  $row)


<tr>


                <td>{{$row->id}}</td>
                <td>{{$row->name}}</th>
                <td>{{$row->phone}}</th>
                <td>{{$row->email}}</td>

                <td>{{$row->created_at}}</td>

                <td>
                <a    href="{{url('/delete/'.$row['id'])}}"class='btn btn-danger m-r-1em'>Delete</a> 
                <a  href="{{url('/showuser/'.$row['id'])}}" class='btn btn-primary m-r-1em'>show</a> 
                </td>

</tr>

@endforeach





        </table>
        {{ $data->links() }}

        

    </div>

<br>
<br>
    <div class="container">


 <form action="{{ url('/logout') }}" method="post" >

 <input   type='hidden'  name='_token' value='{{csrf_token()}}'>

 <button type="submit"  name= "Submit1" class="btn btn-danger"  >Log out</button>

 </form>
</div>



</body>

</html>
