@extends('layouts.main') 

@section('title', 'KYC') 

@section('stylesheet')

<link rel="stylesheet" href="{{ asset('css/kycpage.css') }}"> 

@endsection 

@section('contents')

@include('KYC._theme')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <div class="row kycmargin-sm"><h2>KYC Check Portal</h2></div>
        </div>
        <div class="col-md-6" style="margin-top:26px;">
            @switch($info->status)
            @case('unconfirmed')
              <div class="dot-grey"></div>
                @break
            @case('Approved')
              <div class="dot-success"></div>
                @break
            @case('Reject')
              <div class="dot-danger"></div>
                @break
            @case('Pending')
              <div class="dot-warning"></div>
                @break
          @endswitch
        </div>
      </div>
      

      <div class="row kycmargin-sm"><p>If you have problem, please contact Tech Team via ZOHO.</p></div>
      <div class="row">
        <div class="col-md-3 kycmargin-sm"><a href="{{route('kyc.refresh')}}" class= " btn btn-primary" style= "width: 120%">Refresh</a></div>
        <div class="col-md-3 kycmargin-sm"><a href="{{route('kyc.getpending')}}" class= "btn btn-primary"style= "width: 120%">Get Pending</a></div>
      </div>
    </div>

    <div class="col-md-6">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8" style="margin-top:20px">
          <div class="btn-group btn-group-justified">


            @if ($info->nationality=='American' || $info->nationality=='Central African' ||$info->nationality=='Afghan' ||$info->nationality=='Congolese' ||$info->nationality=='Eritrean' ||$info->nationality=='Guinea-Bissauan' ||
            $info->nationality=='Iranian' || $info->nationality=='Iraqi' ||$info->nationality=='Lebanese' ||$info->nationality=='Libyan' ||
            $info->nationality=='Malian' || $info->nationality=='North Korean' ||$info->nationality=='Somali' ||$info->nationality=='Sudanese' ||$info->nationality=='Syrian' ||$info->nationality=='Yemenite' ||
            $info->residence=='United States' || $info->residence=='Afghanistan' ||$info->residence=='Central African Republic' ||$info->residence=='Congo Brazzaville' ||$info->residence=='Congo' ||
            $info->residence=='Eritrea' || $info->residence=='Guinea-Bissau' ||$info->residence=='Iran' ||$info->residence=='Iraq' ||$info->residence=='Lebanon' ||
            $info->residence=='Libya' || $info->residence=='Mali' ||$info->residence=='North Korea' ||$info->residence=='Somalia' ||$info->residence=='Sudan' ||$info->residence=='Syria' ||$info->residence=='Yemen' ||
            $info->us_citizen=='Yes')
              <a href="" class= "btn btn-success btn-block" disabled>Approve</a>
            @else
                <a href="{{route('kyc.approve', $info->id)}}" class= "btn btn-success btn-block">Approve</a>            
            @endif
            
            <a href="{{route('kyc.pending', $info->id)}}" class= "btn btn-warning btn-block">Pending</a>
            <a href="{{route('kyc.reject', $info->id)}}" class= "btn btn-danger btn-block">Reject</a>
          </div>
        </div>
      </div>

      <div class="row">
          {!! Form::open(['action' => 'KycCheckController@updateNote']) !!}
            <div class="col-md-4"></div>
            <div class="col-md-6" style="margin-top:15px;">
                {!! Form::textarea('comment',null,['placeholder' => "Enter your comment",'class'=>'form-control', 'rows' => 2]) !!}
                {{ $info->note }}
            </div>
            <div class="col-md-2" style="margin-top:15px;">
                {{ Form::submit('Save', ['class' => 'btn btn-default btn-block', 'style' => 'margin-left:-15px; width:120%; padding:15px;']) }}
            </div>
          {!! Form::close() !!}
      </div>

      <br>
      
  

    </div>
  </div>
    <hr>
      
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Acount ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Identity</th>
        <th>Passport or ID Card</th>
        <th>Magnifier</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            @if (strtoupper($info->firstname) == strtoupper($read->firstname))
                <td style="list-style-type:disc; color:green; width:120px"><b>{{ $read->firstname }} <span>&#10004;</span></b></td>
            @else
                <td style="list-style-type:disc; color:darkred;"><b>{{ $read->firstname }} <span>&#10008;</span></b></td>
            @endif
            @if (strtoupper($info->lastname) == strtoupper($read->lastname))
                <td style="list-style-type:disc; color:green; width:150px"><b>{{ $read->lastname }} <span>&#10004;</span></b></td>
            @else
            <td style="list-style-type:disc; color:darkred;"><b>{{ $read->lastname }} <span>&#10008;</span></b></td>
            @endif
            @if (strtoupper($info->id_number) == strtoupper($read->id_number))
                <td style="list-style-type:disc; color:green; width:140px"><b>{{ $read->id_number }} <span>&#10004;</span></b></td>
            @else
            <td style="list-style-type:disc; color:darkred;"><b>{{ $read->id_number }} <span>&#10008;</span></b></td>
            @endif
            <td></td>
            <td></td>
        </tr>
      <tr>
        <td>{{ $info->account_id }}</td>
        <td>{{ $info->firstname }}</td>
        <td>{{ $info->lastname }}</td>
        <td>{{ $info->id_number }}</td>
        <td>
            <div class="img-zoom-container">
            <img src={{ $info->pic_passport[0] }} id="myimage" class="north" alt="Passport not found" style = "margin-top: 50px" width={{ $info->pic_passport['width'] }} height={{ $info->pic_passport['height'] }}>    
            {{-- <img src={{ $info->pic_passport[0] }} id="myimage" class="north" alt="Passport not found" style = "margin-top: 50px"  }}>     --}}
          </td>
        <td>
            <div id="myresult" class="img-zoom-result" style="max-height: 270px" > </div>
            </div>
        </td>
        
    </tr>
    </tbody>
  </table>

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Sex</th>
          <th>Date of Birth</th>
          <th>Nationality</th>
          <th>Residence</th>
          <th>U.S. Citizen</th>
          <th>Self-Portrait</th>

        </tr>
      </thead>
      <tbody>
          <tr>
              @if (strtoupper($info->sex) == strtoupper($read->sex))
                <td style="list-style-type:disc; color:green; width:120px"><b>{{ $read->sex }} <span>&#10004;</span></b></td>
              @else
                <td style="list-style-type:disc; color:darkred;"><b>{{ $read->sex }} <span>&#10008;</span></b></td>
              @endif
              @if (strtoupper($info->birthday) == strtoupper($read->birthday))
                <td style="list-style-type:disc; color:green; width:120px"><b>{{ $read->birthday }} <span>&#10004;</span></b></td>
              @else
                <td style="list-style-type:disc; color:darkred;"><b>{{ $read->birthday }} <span>&#10008;</span></b></td>
              @endif
              @if (strtoupper($info->nationality) == strtoupper($read->nationality))
                <td style="list-style-type:disc; color:green; width:120px"><b>{{ $read->nationality }} <span>&#10004;</span></b></td>
              @else
                <td style="list-style-type:disc; color:darkred;"><b>{{ $read->nationality }} <span>&#10008;</span></b></td>
              @endif
              @if (strtoupper($info->residence) == strtoupper($read->residence))
                <td style="list-style-type:disc; color:green; width:120px"><b>{{ $read->residence }} <span>&#10004;</span></b></td>
              @else
                <td style="list-style-type:disc; color:darkred;"><b>{{ $read->residence }} <span>&#10008;</span></b></td>
              @endif
              <td></td>
              <td></td>
          </tr>
          <tr>
            <td>{{ $info->sex }}</td>
            <td>{{ $info->birthday }}</td>

            @if ($info->nationality=='American'||$info->nationality=='Central African'||$info->nationality=='Afghan'||$info->nationality=='Congolese'||
            $info->nationality=='Eritrean'||$info->nationality=='Guinea-Bissauan'||$info->nationality=='Iranian'||$info->nationality=='Iraqi'||
            $info->nationality=='Lebanese'||$info->nationality=='Libyan'||$info->nationality=='Malian'||$info->nationality=='North Korean'||
            $info->nationality=='Somali'||$info->nationality=='Sudanese'||$info->nationality=='Syrian'||$info->nationality=='Yemenite' )
              <td style="list-style-type:disc; color:darkred;"><b>{{ $info->nationality }} <span>&#10008;</span></b></td>
            @else
              <td style="list-style-type:disc; color:green;"><b>{{ $info->nationality }} <span>&#10004;</span></b></td>
            @endif

            @if ($info->residence=='United States' ||$info->residence=='Afghanistan' ||$info->residence=='Central African Republic' ||$info->residence=='Congo Brazzaville' ||$info->residence=='Congo' ||
            $info->residence=='Eritrea' ||$info->residence=='Guinea-Bissau' ||$info->residence=='Iran' ||$info->residence=='Iraq' ||$info->residence=='Lebanon' ||
            $info->residence=='Libya' ||$info->residence=='Mali' ||$info->residence=='North Korea' ||$info->residence=='Somalia' ||$info->residence=='Sudan'||$info->residence=='Syria' ||$info->residence=='Yemen')
              <td style="list-style-type:disc; color:darkred;"><b>{{ $info->residence }} <span>&#10008;</span></b></td>
            @else
              <td style="list-style-type:disc; color:green;"><b>{{ $info->residence }} <span>&#10004;</span></b></td>
            @endif

            @if ($info->us_citizen=='Yes')
              <td style="list-style-type:disc; color:green;"><b>{{ $info->us_citizen }} <span>&#10004;</span></b></td>
            @else
              <td style="list-style-type:disc; color:darkred;"><b>{{ $info->us_citizen }} <span>&#10008;</span></b></td>
            @endif

            <td>
                <img src={{ $info->pic_portrait }} alt="Portrait not found" style="max-width:300px; max-height:300px; margin-top:60px; margin-bottom:60px" class="north" id = "self" >
            </td>

        </tr>
        </tbody>

  </table>
  
  <hr>

  @if ($info->pre==0)
    <a href="" class= "btn btn-primary">Previous<span class="badge kycmargin-sm">{{$info->pre}}</span></a>

  @else
    <a href="{{route('getprevious',$info->id)}}" class= "btn btn-primary">Previous<span class="badge kycmargin-sm">{{$info->pre}}</span></a>

  @endif

  @if ($info->post==0)
    <a href="" class= "btn btn-primary" style="float: right;">Next<span class="badge kycmargin-sm">   {{$info->post}}</span></a>

  @else
    <a href="{{route('getnext',$info->id)}}" class= "btn btn-primary" style="float: right;">Next<span class="badge kycmargin-sm">   {{$info->post}}</span></a>

  @endif

@include('partials.footer')

</div>
</div>



@endsection

@section('script')
  <script>
    // Initiate zoom effect:
    imageZoom("myimage", "myresult");
  </script>
  
  <script>
$('#myimage').click(function(){
    var img = $('#myimage');
    if(img.hasClass('north')){
        img.attr('class','west');
    }else if(img.hasClass('west')){
        img.attr('class','south');
    }else if(img.hasClass('south')){
        img.attr('class','east');
    }else if(img.hasClass('east')){
        img.attr('class','north');
    }
}); 
</script>

<script>
  $('#self').click(function(){
      var img = $('#self');
      if(img.hasClass('north')){
          img.attr('class','west');
      }else if(img.hasClass('west')){
          img.attr('class','south');
      }else if(img.hasClass('south')){
          img.attr('class','east');
      }else if(img.hasClass('east')){
          img.attr('class','north');
      }
  }); 
  </script>

@endsection

