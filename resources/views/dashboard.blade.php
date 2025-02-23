@extends('layouts.app')

@section('content')
   <h1>Welcome, {{Auth::user()->name}}</h1>
   <p>You are now logged in to this page!</p>
@endsection