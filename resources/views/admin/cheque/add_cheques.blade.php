@extends('layouts.admin')

@section('content')

<form action="/storecheques" method='get'>

    {{ csrf_field() }}
    <label for="name">Client Name:</label>
    <select name="client_name">
        @foreach($clients as $client)
            <option value="{{ $client->id }} ">{{ $client->name }} : {{ $client->pan_no }}</option>

        @endforeach
    </select>
    <br>
    <label>Bank/Branch</label>
    <input type="text" name="bank">
    <br>
    <label>Amount</label>
    <input type="number" name="amount">
    <br>
    <label>Cheque Status</label>
    <select name="cheque_status">
        <option value="Cashed">Cashed</option>
        <option value="Returned">Returned</option>
        <option value="Bounced">Bounced</option>
    </select>
    <br>
    <label>Description</label>
    <input type="text" name="description">
    <br>
    <label>Cheque Date</label>
    <input type="date" name="cheque_date">
    <br>
   
    <input type="submit" value="Submit" class="btn btn-primary">


</form>

@endsection