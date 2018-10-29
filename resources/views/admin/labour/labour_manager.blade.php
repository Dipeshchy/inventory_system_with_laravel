@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Labour Manager</h5>
    <a href="{{ url('/add_labour') }}"> Add Labour </a>
       <hr>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Phone no.</th>
            <th>Salary</th>
            
            <th>Edit</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i=1;

         ?>
        @foreach($labours as $labour)
        
            <tr>
            <td> {{ $i }} </td>
            <td> {{ $labour->name }}</td>
            <td> {{ $labour->phone_no }} </td>
            
            <td>{{ $labour->salary }}</td>
           
            
            <td><a href="#"> Edit </a> </td>
            </tr>
            <?php $i++ ?>
           
            @endforeach
      
    </tbody>
</table>
</div>


@endsection