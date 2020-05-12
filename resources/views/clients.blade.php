@extends('layouts.app') 

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p @if($loop->last) class="mb-0" @endif>{{ $error }}</p>
    @endforeach
    </div>
    @endif

    <form action="/submit" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">From Date</label>
                <input name="from_date" type="text" value="{{ old('from_date') }}" class="form-control @error('from_date') is-invalid @enderror" placeholder="Enter Start Date">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">To Date</label>
                <input name="to_date" type="text" value="{{ old('to_date') }}"  class="form-control @error('from_date') is-invalid @enderror"  placeholder="Enter To Date">
            </div>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

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
                <td>{!! isset($client->last_payment) ? $client->last_payment->amount : '<i>none</i>' !!}</td>
                <td>{!! isset($client->last_payment) ? $client->last_payment->created_at : '<i>none</i>' !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection