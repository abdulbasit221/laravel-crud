<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

 <h1>All User List</h1>

<div class="container">
    <td><a href="/newuser" class="btn btn-success">ADD USER </a></td>
    <table class="table table-dark table-hover">
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PHONE</th>
            <th scope="col">DETAILS</th>
            <th scope="col">UPDATE</th>
            <th scope="col">DELETE</th>

          </tr>
        </thead>
        <tbody>
             @foreach ($data as $id => $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td>{{ $user->phone }}</td>
                    <td><a href="{{ route('view.user',  $user->id) }}" class="btn btn-success">View </a></td>
                    <td><a href="{{ route('update.page' , $user->id) }}" class="btn btn-warning btn-sm">UPDATE</a></td>
                    <td><a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger">DELETE </a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="md-5">
        {{$data->links()}}
    </div>
</div>

</body>

</html>
