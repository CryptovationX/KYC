@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container">

<h2 class="kycalert">Your Account ID has already been verified.</h1>

@include('partials.footer')
</div>


@endsection