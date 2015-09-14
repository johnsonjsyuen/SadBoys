@extends('master')

@section('Content')
    <div id="blockCVD" class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <br>
            <br>
            <br>
            <br>
            <br>
                <h1>Feedback</h1>
                <hr>
                {!! Form::open(['url' => 'feedback']) !!}

                        <!--Title-->
                <div class="form-group">
                    {!! Form::label ('name', 'Name (or anonymous):') !!}
                    {!! Form::text ('name', null, ['class' => 'form-control']) !!}
                </div>
                <!--Body-->
                <div class="form-group">
                    {!! Form::label ('email', 'Email Address:') !!}
                    {!! Form::textarea ('email', null, ['class' => 'form-control']) !!}
                </div>
                <!--Body-->
                <div class="form-group">
                    {!! Form::label ('telephone', 'Telephone Number:') !!}
                    {!! Form::textarea ('telephone', null, ['class' => 'form-control']) !!}
                </div>

                <!--submit button-->
                <div class="form-group">
                    {!! Form::submit ('Submit Feedback', ['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::close([ 'URL' => 'recipes']) !!}
            </div>
        </div>
    </div>


@endsection

@stop




