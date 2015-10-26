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
    <br><div id="blockCVD" class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

            <h1>Enter a new recipe</h1>
            <hr>
                {!! Form::open(['url' => 'recipes']) !!}

               <!--Title-->
            <div class="form-group">
                {!! Form::label ('title', 'Title:') !!}
                {!! Form::text ('title', null, ['class' => 'form-control']) !!}
            </div>
                <!--Body-->
                <div class="form-group">
                    {!! Form::label ('ingredients', 'Ingredients:') !!}
                    {!! Form::textarea ('ingredients', null, ['class' => 'form-control']) !!}
                </div>
            <!--Body-->
            <div class="form-group">
                {!! Form::label ('body', 'Body:') !!}
                {!! Form::textarea ('body', null, ['class' => 'form-control']) !!}
            </div>

            <!--submit button-->
            <div class="form-group">
                {!! Form::submit ('Add Article', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close([ 'URL' => 'recipes']) !!}
            </div>
        </div>
    </div>


@endsection

@stop