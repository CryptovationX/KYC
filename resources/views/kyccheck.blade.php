<!DOCTYPE html>
<html lang="en">
<head>
  <title>KYC Check Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid" style = "width: 80%">

        <h2>KYC Check Portal</h2>
        <p>If you have problem, please contact Tech Team via ZOHO.</p>
        <a href="{{route('kyc.refresh')}}" class= "btn btn-primary"style= width: 20%">Refresh</a>
        <a href="{{route('kyc.getpending')}}" class= "btn btn-primary"style= width: 20%">Get Pending</a>
        <hr>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Passport or ID Card</th>
        <th>Self-Portrait</th>
        <th>Verification</th>
        <th>Status</th>
        <th>Note</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $id }}</td>
        <td>{{ $fname }}</td>
        <td>{{ $lname }}</td>
        <td>{{ $email }}</td>
        <td>
            <img src="https://vignette.wikia.nocookie.net/despicableme/images/e/ef/Party_Minions.jpg/revision/latest?cb=20130808131958" class="img-rounded" alt="Passport not found" width="400" height="300">
            {{-- <img src= "$passport" class="img-rounded" alt="Passport not found" width="400" height="300">  --}}

        </td>
        <td>
            <img src="https://vignette.wikia.nocookie.net/parody/images/c/c1/Minions_yay_with_bear.jpg/revision/latest?cb=20150513161252" class="img-rounded" alt="Self-Portrait not found" width="400" height="300">
            {{-- <img src= "$portrait" class="img-rounded" alt="Self-Portrait not found" width="400" height="300">  --}}
 
        </td>

        <td>
            {{-- {!! Form::open(['route' => 'kyccheck.status']) !!} --}}
            <a href="{{route('kyc.approve', $id)}}" class= "btn btn-success">Approve</a>
            </form>
        </td>
        <td>
            {{ $status }}   
        </td>
        <td>
            {!! Form::open(['action' => 'KycCheckController@updateNote']) !!}
                <textarea class="form-control" id="comment" placeholder="Enter your comment" name="comment"></textarea>
                {{ $comment }}
                <br>
                {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block','name' => 'status']) }}
            {!! Form::close() !!}
        
                    <div class="col-md-6" style = "margin-top:5px" >
                <a href="{{route('kyc.pending', $id)}}" class= "btn btn-warning btn-block"style="margin-left :-15px; width: 135%">Pending</a>
            </div>
                    <div class="col-md-6" style = "margin-top:5px">
                <a href="{{route('kyc.reject', $id)}}" class= "btn btn-danger btn-block"style="margin-left :-15px;  width: 135%" >Reject</a>
            </div>
        </td>
    </tr>
    </tbody>
  </table>

{{-- <a href="{{route('getprevious',$id)}}`">previous <span class="badge">{{$pre}}</span></a><br> --}}

<a href="{{route('getprevious',$id)}}" class= "btn btn-default">previous <span class="badge"> {{$pre}}</span></a>
<a href="{{route('getnext',$id)}}" class= "btn btn-default">next <span class="badge"> {{$post}}</span></a>

</div>
</div>

</body>
</html>
</div>
