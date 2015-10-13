

@extends('master')

@section('Content')
    <div class="container contact">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Contact</h1>
                <hr>
                {!! Form::open(['url' => 'contact']) !!}

                        <!--Title-->
                <div class="form-group">
                    {!! Form::label ('contact', 'Contact:') !!}
                    {!! Form::text ('contact', null, ['class' => 'form-control']) !!}
                </div>
                <!--Body-->
                <div class="form-group">
                    {!! Form::label ('email', 'Email Address:') !!}
                    {!! Form::text ('email', null, ['class' => 'form-control']) !!}
                </div>
                <!--Body-->
                <div class="form-group">
                    {!! Form::label ('telephone', 'Telephone Number:') !!}
                    {!! Form::text ('telephone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label ('message', 'Message:') !!}
                    {!! Form::textarea ('message', null, ['class' => 'form-control']) !!}
                </div>

                <!--submit button-->
                <div class="form-group">
                    {!! Form::submit ('Submit Form', ['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::close([ 'URL' => 'recipes']) !!}
            </div>
        </div>
    </div>

@endsection

@stop