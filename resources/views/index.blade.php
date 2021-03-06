<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital Bga</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        .table {
            border-radius: 5px;
            width: 50%;
            margin: 0px auto;
            float: none;
        }
    </style>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 60px;
        }
        @media (max-width: 980px) {
            body {
                padding-top: 0;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <a href="/addrecord">Add Record</a>
    <div class="row justify-content-center">

            <form role="form" method="GET" action="{{action('PolicyController@search')}}">
            <div class="input-group">
                <input name="search" value="{{ old('search') }}" autocomplete="off" type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search</button>
          </span>
            </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class="col px-md-5"><div class="p-3"></div></div>
<!-- Search Result section start-->
    @if(!empty($merged))
    @foreach($merged as $data)

   <table style="width: auto;" class="table">
     <tr>
       <td>{{ $data->policy }}</td>
       <td> {{ $data->clients }}</td>
       <td>{{ $data->advisor_name }}</td>
       <td>{{ $data->career_name }}</td>
       <td>{{ $data->firstname }}</td>
       <td> {{ $data->lastname }}</td>
       <td>{{ $data->address }}</td>
       <td>{{ $data->phone }}</td>
     </tr>
   </table>

    @endforeach
@endif
<!-- Search Result section start end -->
<div class="row justify-content-center">

        @if(!empty($agents))

        <table style="width: auto;" class="table table-striped table-condensed">
            <thead>

            <tr>
                <td colspan="4" class="label"><h5>Agent</h5></td>
            </tr>

            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agents as $key => $value)
        <tr>
            <td>{{ $value->firstname }}</td>
            <td>{{ $value->lastname }}</td>
            <td>{{ $value->address}}</td>
            <td>{{ $value->phone }}</td>

        </tr>
            @endforeach
            </tbody>
        </table>
        @endif

          @if(!empty($policies))

        <table style="width: auto;" class="table table-striped table-condensed">
            <thead>
            <tr>
                <td colspan="4" class="label"><h5>Policy</h5></td>
            </tr>
            <tr>
                <th>Policy</th>
                <th>Client</th>
                <th>Advisor Name</th>
                <th>Career Name</th>
            </tr>
            </thead>
            <tbody>
                @foreach($policies as $key => $value)
             <tr>
            <td>{{ $value->policy }}</td>
            <td>{{ $value->clients }}</td>
            <td>{{ $value->advisor_name}}</td>
            <td>{{ $value->career_name }}</td>
             </tr>
                @endforeach
            </tbody>
        </table>
            @endif
</div>
</div>
</body>
</html>
