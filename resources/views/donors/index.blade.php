<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<br>
<a  href="{{ route('donor.create')}}" class="btn btn-primary">Create New</a>
<br>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Donation_amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($donors as $donor)
            <tr>
            <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$donor->name ?? ''}}</td>
                <td>{{$donor->email ?? ''}}</td>
                <td>{{$donor->password ?? ''}}</td>
                <td>{{$donor->donation_amount ?? ''}}</td>
                <td>
                <a href='{{route("donor.edit",$donor->id)}}'  class='btn btn-primary'> EDIT </a> | <a  href="{{ route('donor.delete',$donor->id)}}" class="btn btn-danger">Delete</a></td>
                </td>
                
            </tr>
            @empty
            <td>No Data</td>
            @endforelse
        </tbody>
    </table>
</body>
</html>