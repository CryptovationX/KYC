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
    {!! Form::open(['action'=>'UserCXAController@addRecord','enctype' => 'multipart/form-data','data-parsley-validate' => '']) !!}
    
<h4>Add Balance Record</h4>
<h4>Account ID: {{$id}}</h4>
<hr>      
<div class="row kycheading kycrow ">
        <div class="col-md-2">
            Type
        </div>
        <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
                {{Form::select('type', [ "Private Sale" => "Private Sale", "Airdrop" => "Airdrop"], null, ['class'
                => 'kycselect', 'placeholder' => 'Please enter keyword and select transaction type'])}}
        </div>
        <div class="col-md-2" style='margin-left:30px'>
            Amount USD (USD)
        </div>
        <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
            {{ Form::text('amount_usd', null,["class" => "kyctextbox "]) }}
        </div>
    </div>
    <div class="row kycheading kycrow ">
            <div class="col-md-2">
                Price (USD)
            </div>
            <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
    
                {{ Form::text('price', null, ["class" => "kyctextbox "]) }}
            </div>
    
            <div class="col-md-2" style='margin-left:30px'>
                Token (CXA)
            </div>
            <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
                {{ Form::text('token', null,["class" => "kyctextbox "]) }}
            </div>
        </div>
        <div class="row kycheading kycrow ">
                <div class="col-md-2">
                    Bonus (%)
                </div>
                <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
        
                    {{ Form::text('bonus', null, ["class" => "kyctextbox "]) }}
                </div>
        
                <div class="col-md-2" style='margin-left:30px'>
                    Total Token (CXA)
                </div>
                <div class='col-md-4' , style='color:gray; text-align:center; margin-left:-30px'>
                    {{ Form::text('total_token', null,["class" => "kyctextbox "]) }}
                </div>
            </div>
<div class="row" style="margin-top:20px;">
        <div class='col-md-2'></div>
        <div class='col-md-2'>
                <form method="post" action="/user/saverecord">
                    <input type="hidden" name="id" value= {{$id}} >
                            <input type="submit" value="Save" class = 'btn btn-primary'>
                </form>
        </div>
</div>
    <hr>

{!! Form::close() !!} @endsection     
@section('script')
    @include('partials.footer')
</div>
@endsection