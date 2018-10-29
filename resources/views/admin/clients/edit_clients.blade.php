@extends('layouts.admin')

@section('content')

<form action="/updateclients/{{ $client->id }}" method='get'>

    {{ csrf_field() }}
    <label for="name">Clients Name:</label>
    <input type="text" name="name" id="name" value="{{ $client->name }}">
    <br>
    <label>Phone no.</label>
    <input type="number" name="phone_no" value="{{ $client->phone_no }}">
    <br>
    <label>Mobile</label>
    <input type="number" name="mobile" value="{{ $client->mobile }}" >
    <br>
    <label>Address</label>
    <input type="text" name="address" value="{{ $client->address }}">
    <br>
    <label>Region</label>
    <input type="text" name="region" value="{{ $client->region }}">
    <br>
    <label>Pan no</label>
    <input type="text" name="pan_no" value="{{ $client->pan_no }}">
    <br>
    <label>Agent</label>
    <select name="agent">
    @foreach($agents as $agent)
        <option value="{{ $agent->name }}" {{ ($client->agent == $agent->name ) ? 'selected' : '' }}>{{ $agent->name }}</option>
    @endforeach
    </select>
    <br>
    <label>Account Type</label>
    <select name="account_type">
        <option value="A/C Payables" {{ ($client->account_type =='A/C Payables') ? 'selected' : '' }}>A/C Payables</option>
        <option value="A/C Receivables" {{ ($client->account_type =='A/C Receivables') ? 'selected' : '' }}>A/C Receivables</option>
        <option value="A/C Scraps" {{ ($client->account_type =='A/C Scraps') ? 'selected' : '' }}>A/C Scrap</option>
    </select>
    <br>
    <label>Credit Limit</label>
    <input type="text" name="credit_limit" value=" {{ $client->credit_limit }}">
    <br>
    <label>Description</label>
    <input type="text" name="description" value=" {{ $client->Description }} ">
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">


</form>

@endsection