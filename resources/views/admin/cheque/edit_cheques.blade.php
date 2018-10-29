@extends('layouts.admin')

@section('content')

<form action="/updatecheques/{{ $cheque->id }}" method='get'>

    {{ csrf_field() }}
    <label for="name">Client Name:</label>
    <select name="client_name">
        @foreach($clients as $client)
            <option value="{{ $client->id }} " {{ ($cheque->client_id == $client->id ) ? 'selected' : '' }}>{{ $client->name }} : {{ $client->pan_no }}</option>

        @endforeach
    </select>
    <br>
    <label>Bank/Branch</label>
    <input type="text" name="bank" value="{{ $cheque->bank }}">
    <br>
    <label>Amount</label>
    <input type="number" name="amount" value="{{ $cheque->amount }}">
    <br>
    <label>Cheque Status</label>
    <select name="cheque_status">
        <option value="Cashed" {{ ($cheque->cheque_detail =='Cashed') ? 'selected' : '' }}>Cashed</option>
        <option value="Returned" {{ ($cheque->cheque_detail =='Returned') ? 'selected' : '' }}>Returned</option>
        <option value="Bounced" {{ ($cheque->cheque_detail =='Bounced') ? 'selected' : '' }}>Bounced</option>
    </select>
    <br>
    <label>Description</label>
    <input type="text" name="description" value="{{ $cheque->description }}">
    <br>
    <label>Cheque Date</label>
    <input type="date" name="cheque_date" value="{{ $cheque->cheque_date }}">
    <br>
   
    <input type="submit" value="Submit" class="btn btn-primary">


</form>

@endsection