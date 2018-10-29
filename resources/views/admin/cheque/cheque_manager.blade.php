@extends('layouts.admin')

@section('content')

<div class="row">
    <h5>Cheque Manager</h5>
       <a href="{{ url('/add_cheques') }}"> Add Cheque </a>
<table class="col-md-10" border="1">
    <thead>
        <tr>
            <th>SN</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>Bank</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
            <th>Edit</th>
            <th> - </th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i=1
    ?>
        @foreach($cheques as $cheque)
  
            <tr>
            <td> {{ $i }} </td>
            <td> {{ $cheque->clients->name }}</td>
            <td> {{ $cheque->clients->address }} </td>
            <td> {{ $cheque->bank }} </td>
            <td> {{ $cheque->amount }}</td>
            <td> {{ $cheque->cheque_detail }} </td>
            <td>  {{ $cheque->cheque_date }} </td>
            <td><a href="/chequemanager/{{ $cheque->id }}/edit_cheque"> Edit </a> </td>
            </tr>
            <?php $i++ ?>
           
            @endforeach 
      
    </tbody>
</table>
</div>


@endsection