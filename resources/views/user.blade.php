<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>
<body>
    <table border=1>
        <thead>
          <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Gmail</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
           <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
           </tr>
           @endforeach
        </tbody>
    </table>
</body>
</html>