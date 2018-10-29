@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Agent Manager</h5>
       <a href="{{ url('/add_agents') }}"> Add Manager </a>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Phone no.</th>
            <th>Mobile</th>
            <th>Description</th>
            
            <th>Edit</th>
            <th> - </th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=1
    ?>
        @foreach($agents as $agent)
  
            <tr>
            <td> {{ $i }} </td>
            <td> {{ $agent->name }}</td>
            <td> {{ $agent->phone_no }} </td>
            <td> {{ $agent->mobile_no }} </td>
            <td> {{ $agent->description }}</td>
            
            <td><a href="#"> Edit </a> </td>
            </tr>
            <?php $i++ ?>
           
            @endforeach 
      
    </tbody>
</table>
</div>


@endsection