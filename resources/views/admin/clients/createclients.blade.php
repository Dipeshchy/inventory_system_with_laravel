@extends('layouts.admin')

@section('content')

<form action="/storeclients" method='get'>

    {{ csrf_field() }}
    <label for="name">Clients Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <label>Phone no.</label>
    <input type="number" name="phone_no">
    <br>
    <label>Mobile</label>
    <input type="number" name="mobile">
    <br>
    <label>Address</label>
    <input type="text" name="address">
    <br>
    <label>Region</label>
    <input type="text" name="region">
    <br>
    <label>Pan no</label>
    <input type="text" name="pan_no">
    <br>
    <label>Agent</label>
    <select name="agent">
    @foreach($agents as $agent)
        <option value="{{ $agent->name }}">{{ $agent->name }}</option>
    @endforeach
    </select>
    <br>
    <label>Account Type</label>
    <select name="account_type">
        <option value="A/C Payables">A/C Payables</option>
        <option value="A/C Receivables">A/C Receivables</option>
        <option value="A/C Scraps">A/C Scrap</option>
    </select>
    <br>
    <label>Credit Limit</label>
    <input type="text" name="credit_limit">
    <br>
    <label>Description</label>
    <textarea name="description" cols="30" rows="2"></textarea>
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">


</form>

@endsection