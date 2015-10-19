@extends('master')

@section('Head')
        <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<script src="/js/recipes.js"></script>

    
@endsection

@section('Content')

<br>
<br>
<br>
<br>
<br>
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif

    <div ng-app="RecipesApp">
        <div ng-controller="RecipesController"><br>
            <div class="container recipes">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    Search: <input ng-model="query">
                    <div class="row form-group product-chooser">

                        <div class="col-xs-12 col-sm-12" ng-repeat="recipe in recipes | filter:query">
                            <div class="product-chooser-item">
                                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                                    <span class="title"><h3>@{{recipe.title}}<h3></span>
                                    <span class="description">This was created at @{{recipe.created_at}}</span>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Ingredients:</h4>
                                            <span class="description">@{{recipe.ingredients}}</span>
                                        </div>
                                        <div class="col-md-8">
                                            <h4>Steps:</h4>
                                            <span class="description">@{{recipe.body}}</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            <!-- <ul>

                <li ng-repeat="recipe in recipes | filter:query"><h3>Name:</h3>@{{recipe.title}}

                    <br>
                    <h3>Ingredients:</h3>
                    @{{recipe.ingredients}}
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Method:</h3>
                    @{{recipe.body}}
                    <br>
                    <br>
                    <br>
                    This was created at @{{recipe.created_at}}
                </li>

            </ul> -->
            </div>
        </div>
    </div>
    </div>


@endsection

@stop