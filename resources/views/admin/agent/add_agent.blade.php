@extends('layouts.admin')

@section('content')

<form action="/storeagents" method='get'>

    {{ csrf_field() }}
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <label>Phone no.</label>
    <input type="number" name="phone_no">
    <br>
    <label>Mobile</label>
    <input type="number" name="mobile_no">
    <br>
    
 
    <label>Description</label>
    <textarea name="description" cols="30" rows="2"></textarea>
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">


</form>

@endsection