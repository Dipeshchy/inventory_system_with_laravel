<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <br>
        <h3>Personal Account 1.0</h3>
        <br>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-2">
        <ul>
            <li><a href="{{ url('/admin') }}">Home</a></li>
            <li><a href="{{ url('/clientmanager') }}">Client Manager</a></li>
            <li> <a href="{{ url('/chequemanager') }}"> Cheque Manager</a></li>
            <li> <a href="{{ url('/ledgermanager') }}"> Ledger Manager </a></li>
            <li> <a href="{{ url('/ac_receivables') }} "> A/C Receivables</a></li>
            <li> <a href="{{ url('/ac_payables') }} "> A/C Payables</a></li>
            <li> <a href="{{ url('/ac_scrap') }} "> A/C Scrap</a></li>
            <li> <a href="{{ url('/agentmanager') }}"> Agent Manager</a></li>
            <li> <a href="{{ url('/labourmanager') }}"> Labour Manager</a></li>
            <li>Labour Ledger</li>
            <!-- <li>Invoice Generator</li>
            <li>Inventory List</li> -->
            <li>Report</li>
            <li>Change Password</li>
            <li>Logout</li>
        </ul>
    </div>

@yield('content')
</div>

</body>
</html>
