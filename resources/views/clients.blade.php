@extends('layouts.app') 

@section('content')

    <div class="card bg-light">
        <form action="" method="GET">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">From Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">To Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->surname }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection