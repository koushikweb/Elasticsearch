<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="{{ url('/') }}">Back to Home</a>
            <p></p>
        </div>
        <div class="panel-body">
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Policy
                        </div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{ Form::open(array('url' => 'createpolicy','autocomplete'=>'off')) }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Policy:</strong>
                                        {{ Form::text('policy', null, array('placeholder' => 'Policy','class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Clients:</strong>
                                        {{ Form::text('clients', null, array('placeholder' => 'Clients','class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Advisor Name : </strong>
                                        {{ Form::text('advisor_name', null, array('placeholder' => 'Advisor Name','class' => 'form-control')) }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Career name : </strong>
                                        {{ Form::text('career_name', null, array('placeholder' => 'Career name','class' => 'form-control')) }}
                                    </div>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Agent
                        </div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{ Form::open(array('url' => 'createagent','autocomplete'=>'off')) }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>First Name:</strong>
                                        {{ Form::text('firstname', null, array('placeholder' => 'First Name','class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Last Name:</strong>
                                        {{ Form::text('lastname', null, array('placeholder' => 'Last Name','class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Address:</strong>
                                        {{ Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        {{ Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>


