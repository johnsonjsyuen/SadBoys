@extends('master')

@section('Content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $("#logoIMG").attr("src","../img/logo.svg");
    </script>
    <link href="../css/reset.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="../css/shadowbox.css" rel="stylesheet">
    <link href="../css/hover-min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

    <link href="../css/index.css" rel="stylesheet">

    <link href="../css/blockLanding.css" rel="stylesheet">
    <link href="../css/blockCVD.css" rel="stylesheet">
    <link href="../css/blockFacts.css" rel="stylesheet">
    <link href="../css/blockRisks.css" rel="stylesheet">
    <link href="../css/blockLifestyle.css" rel="stylesheet">
    <link href="../css/blockLower.css" rel="stylesheet">
    <link href="../css/blockRegister.css" rel="stylesheet">
    <link href="../css/contact.css" rel="stylesheet">
    <link href="../css/about.css" rel="stylesheet">
    <link href="../css/help.css" rel="stylesheet">
    <link href="../css/recipes.css" rel="stylesheet">
    <link href="../css/tools.css" rel="stylesheet">
    <link href="../css/accountpage.css" rel="stylesheet">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

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

                        <form class="form-horizontal" role="form" method="POST" action="/password/email">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection