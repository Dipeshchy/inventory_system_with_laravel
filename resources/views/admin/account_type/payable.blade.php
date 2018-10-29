@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Payable Manager</h5>
      
       <hr>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Pan no.</th>
            <th>Balance</th>
            
            <th>Details</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i=1;

         ?>
        @foreach($clients as $client)
        
            <tr>
            <td> {{ $i }} </td>
            <td> {{ $client->name }}</td>
            <td> {{ $client->address }} </td>
            <td> {{ $client->pan_no }} </td>
            
            <td>{{ $client->balance->balance }}</td>
            
            
            <td><a href="#"> View </a> </td>
            </tr>
            <?php $i++ ?>
           
            @endforeach
      
    </tbody>
</table>
</div>


@endsection