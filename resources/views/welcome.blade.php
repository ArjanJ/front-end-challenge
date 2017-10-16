@extends('layouts.app')

@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
@endsection
@section('content')
    <div id="react-dashboard-entry"></div>
@endsection

@section('js')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection