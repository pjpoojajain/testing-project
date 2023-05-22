@extends('layouts.app-master')
@include('layouts.partials.navbar')
@section('content')
    <div class="bg-light p-5 rounded">
        
        @auth
            @include('home.homepage')
        @endauth

        @guest
            @include('home.homepage')
        @endguest
    </div>
@endsection