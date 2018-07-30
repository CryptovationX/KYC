@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container"    style="border-radius: 10px;" >

    @if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif 
    {!! Form::open(['action' => 'UserCXAController@search']) !!}
    
    <div class="row">
        <div class='col-md-12'>
            <h1 class="topic" style="text-align:center">
                    {{$info}}
            </h1>
            <br>
        </div>
        <hr>
    <br>
    <hr>

    <div class="row kycheading kycrow ">
        <div class="col-md-2">
            Account ID
        </div>
        <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>

            {{ Form::text('account_id', null, ["class" => "kyctextbox ", "placeholder" => "(Ex. CXA9999)"]) }}
        </div>
    </div>

    <div class="row kycheading kycrow ">
        <div class="col-md-2">
            First Name
        </div>
        <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>

            {{ Form::text('firstname', null, ["class" => "kyctextbox ","placeholder" => "(Ex. Pondet)"]) }}
        </div>

    <div class="col-md-2" style='margin-left:30px'>
        Last Name
    </div>
    <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
        {{ Form::text('lastname', null,["class" => "kyctextbox ","placeholder" => "(Ex. Ananchai)"]) }}
    </div>
</div>


    <div class="row" style="margin-top:20px;">
        <div class='col-md-2'>
            {{Form::submit('Search', ['id' => 'search', 'class' => 'btn btn-primary'])}}
        </div>
        <div class='col-md-2'>
                <button type="button" class = "btn btn-danger" onclick="window.location='{{ route("user.index") }}'">Reset</button>
        </div>
    </div>
    <hr>

{!! Form::close() !!} @endsection     
@section('script')
    @include('partials.footer')
</div>
@endsection