@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container">

<h2 class="kycalert">Error: Your Account ID has already been verified.</h1>
    <div>
    <h5 style="text-align:center; margin-bottom: 50px;">If this is your first attempt to KYC, please contact our support: x@cryptovationx.io</p>
    </div>
@include('partials.footer')
</div>


@endsection