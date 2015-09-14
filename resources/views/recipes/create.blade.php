@extends('master')

@section('Content')
    <div id="blockCVD" class="container">
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