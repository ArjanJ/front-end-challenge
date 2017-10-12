@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div id="react-dashboard-entry"></div>
@endsection

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection