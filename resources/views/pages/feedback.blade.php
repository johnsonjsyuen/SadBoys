@extends('master')

@section('Content')
    <div class="container feedback">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Feedback</h1>
                <hr>
                {!! Form::open(['url' => 'feedback']) !!}

                <div class="form-group">
                    {!! Form::label ('name', 'Name (or anonymous):') !!}
                    {!! Form::text ('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label ('email', 'Email Address:') !!}
                    {!! Form::textarea ('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label ('telephone', 'Telephone Number:') !!}
                    {!! Form::textarea ('telephone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit ('Submit Feedback', ['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::close([ 'URL' => 'recipes']) !!}
            </div>
        </div>
    </div>
    
@endsection

@stop




