<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="card">
                <div class="card-body">
                <form class="form-inline" action="{{ route('searching') }}" method="get">
                    @csrf
                    <label class="sr-only" >Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search..." name="searchData">

                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                    <div class="card-footer">
                        <div class="text-right">
                        <a href="{{ route('csv_download') }}"><button class="btn btn-success">CSV Download</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">Customer List</div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Register Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $item)
                <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->created_at }}</td>
                <td><button class="btn btn-secondary">Info</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
</body>
</html>

