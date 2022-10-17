<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>User</h1>
    <table class="table">
        <thead>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($user as $u)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>   