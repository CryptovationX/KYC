@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container">

<h2 class="kycalert">Your information has been save successfully.</h1>

    <div id='timeCounterHolder'>
            <div id='row'>
                <h4 id='displayTimer' style="text-align:center;     margin-bottom: 100px;"></p>
            </div>            
        </div>
@include('partials.footer')
</div>
<script>
        var count = 3;
    /* Website to redirect */
    var url = "http://localhost:8000/user/admin";
    /* Call function at specific intervals */
    var countdown = setInterval(function() { 
        /* Display Countdown with txt */
        $('#displayTimer').text("Redirection in: " + count-- + " seconds");
        /* If count is smaller than 0 ...*/
        if (count < 0) {
            $('#displayTimer').text("Redirecting now....");
            /* Clear timer set with setInterval */
            clearInterval(countdown);
            /* Redirect */
            $(location).attr("href", url);
       } 
        // milliseconds
    }, 1000);
</script>


@endsection