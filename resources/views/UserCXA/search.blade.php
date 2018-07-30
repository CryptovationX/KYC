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
    {{-- {!! Form::open(['action' => 'UserCXAController@search']) !!} --}}
    
    <div class="row">
        <div class='col-md-12'>
            <h1 class="topic" style="text-align:center">
                    User Information Portal
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
        {{ Form::text('lastname', null, ["class" => "kyctextbox ","placeholder" => "(Ex. Ananchai)"]) }}
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
    <h4>Account Profile</h4>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            Account ID: 
        </div>
        <div class='col-md-2'>
           {{$info->account_id}}
        </div>
    </div>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            First Name:
        </div>
        <div class='col-md-4'>
            {{$info->firstname}}
        </div>
        <div class='col-md-2'>
            Last Name:
        </div>
        <div class='col-md-4'>
            {{$info->lastname}}
        </div>
    </div>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            Sex:
        </div>
        <div class='col-md-4'>
            {{$info->sex}}
        </div>
        <div class='col-md-2'>
            Birth Date:
        </div>
        <div class='col-md-4'>
            {{$info->birthday}}
        </div>
    </div>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            Nationality:
        </div>
        <div class='col-md-4'>
            {{$info->nationality}}
        </div>
        <div class='col-md-2'>
            Residence:
        </div>
        <div class='col-md-4'>
            {{$info->residence}}
        </div>
    </div>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            Passport no. or ID no.:
        </div>
        <div class='col-md-4'>
            {{$info->id_number}}
        </div>
        <div class='col-md-2'>
            Email:
        </div>
        <div class='col-md-4'>
            {{$info->email}}
        </div>
    </div>
    <div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
            Tel:
        </div>
        <div class='col-md-4'>
            {{$info->tel}}
        </div>
        <div class='col-md-2'>
            ETH Wallet Address
        </div>
        <div class='col-md-4'>
            {{$info->ethwallet}}
        </div>
    </div>
    <hr>
<h4>Balance</h4>

<h4>Available Token: {{$sum}} CXA</h4>
<div class="row" style='margin-bottom:-10px'>
        <div class='col-md-2'>
                <h5>Type</h5>
        </div>
        <div class='col-md-2'>
                <h5>Amount (USD)</h5>
        </div>
        <div class='col-md-2'>
                <h5>Number of Token (CXA)</h5>
        </div>
        <div class='col-md-2'>
                <h5>Bonus (%)</h5>
        </div>
        <div class='col-md-2'>
                <h5>Total Token (CXA)</h5>
        </div>
        <div class='col-md-2'>
                <h5>Created At</h5>
        </div>
</div>
<hr>
@foreach ($balances as $balance)
<div class="row" style='margin-top:20px'>
        <div class='col-md-2'>
        {{$balance->type}}
        </div>
        <div class='col-md-2'>
        {{$balance->amount_usd}}
        </div>
        <div class='col-md-2'>
        {{$balance->token}}
        </div>
        <div class='col-md-2'>
        {{$balance->bonus}}
        </div>
        <div class='col-md-2'>
        {{$balance->total_token}}
        </div>
        <div class='col-md-2'>
        {{date('M j, Y', strtotime($balance->created_at)) }}
        </div>          
</div>
@endforeach

<hr>
<a href="{{route('user.add',$info->account_id)}}" class= "btn btn-primary">Add new record</a>


{!! Form::close() !!} @endsection     
@section('script')
    @include('partials.footer')
</div>
@endsection