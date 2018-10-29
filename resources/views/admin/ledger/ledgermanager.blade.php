@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Ledger Manager</h5>
      
       <hr>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Balance</th>
            <th>Type</th>
            <th>View</th>
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
            
            <td>{{ $client->balance->balance }}</td>
            <td> {{ $client->account_type }} </td>
            
            <td><a href="/ledger_view/{{ $client->id }}"> View </a> </td>
            </tr>
            <?php $i++ ?>
           
            @endforeach
      
    </tbody>
</table>
</div>


@endsection