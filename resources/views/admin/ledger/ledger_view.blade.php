@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Ledger Manager</h5>
      
       <hr>
       <div class="jumbotron">
        Name: {{ $client->name }}
         <br>

        Location : {{ $client->address }}
       
       </div>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
    <tr>
    <td>{{ now() }}</td>
    <td>hi</td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    
 
      
    </tbody>
</table>
<button class="btn btn-success" id="displayform" onclick="displayResult()">Add Entry</button>
</div>
<br>



<script>
    $(document).ready(function(){
        $('#displayform').on('click',function(){
            $('#showform').show();
        });
    });
</script>

<div class="container">
<form action="/storeledger/{{ $client->id }}" id="showform" style="display:none;">

    <input type="hidden" name="client_id" value="{{ $client->id }}">
    <label for="">Date</label>
    <input type="date" name="date" value="{{ now() }}">
    <label for="">Description</label>
    <input type="text" name="description">
    <label for="">Debit</label>
    <input type="number" name="debit">
    <label for="">Credit</label>
    <input type="number" name="credit">
    <input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>



@endsection