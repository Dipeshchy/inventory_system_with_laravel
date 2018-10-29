@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Client Manager</h5>
       <a href="{{ url('/add_client') }}"> Add Client </a>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Address</th>
            <th>Pan No</th>
            <th>Status</th>
            <th>Edit</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
   <?php $i=1 ?>
        @foreach($clients as $client)
  
            <tr>
            <td> {{ $i }} </td>
            <td> {{ $client->name }}</td>
            <td> {{ $client->address }} </td>
            <td> {{ $client->pan_no }} </td>
            <td> {{ $client->account_type }}</td>
            <td><a href="/clientmanager/{{ $client->id }}/edit_client"> Edit </a> </td>
            </tr>
           <?php $i++ ?>
            @endforeach
      
    </tbody>
</table>
</div>


@endsection