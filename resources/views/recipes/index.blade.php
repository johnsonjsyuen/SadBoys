@extends('master')

@section('Head')
        <!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<script src="/js/recipes.js"></script>

    
@endsection

@section('Content')
    <div ng-app="RecipesApp">
        <div ng-controller="RecipesController"><br>

            <br>
            <br>
            <br>
            <br>
            <div id="blockCVD" class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
            Search: <input ng-model="query">
            <ul>

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

            </ul>
            </div>
        </div>
    </div>
    </div>


@endsection

@stop