@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container">

<h2 class="kycalert">All accounts have been KYC.</h1>
    <div>
    <h5 style="text-align:center; margin-bottom: 50px;">Fuck Yeah!!</p>
    </div>
@include('partials.footer')
</div>


@endsection