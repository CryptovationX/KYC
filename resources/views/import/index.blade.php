@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 
    
<style>
    div[class^='col-md'] { /* class name starts with col-md */
        margin-left: 20px;
    }
</style>

@endsection 

@section('contents')


<div id="particles-js" class="space-bg"></div>
@include('KYC._theme')

<div class="container fill">
    <div class="row">
        @include('partials.error')
        <div class="col-md-12">
            <h2>Import Google Sheet Data</h2>
            <h5>Please select csv file:</h5>
            {{ Form::open(['route' => 'import.csv','enctype' => 'multipart/form-data','file' => true]) }}
            {!! Form::File('sheet') !!}
            <br>
            {!! Form::submit('Import',['class'=>'btn btn-primary']) !!}
            {{ Form::close() }}
        <hr>
        </div>
        <div class="col-md-12">
            <h2>Move Image to S3</h2>

            <a href="{{route('import.s3')}}" class= "btn btn-primary">Move</a>
        </div>
    </div>

</div> 



@endsection