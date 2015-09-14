@extends('master')

@section('Head')


    
@endsection

@section('Content')
    <div ng-app="RecipesApp">
        <div ng-controller="RecipesController"><br>

            <br>
            <br>
            <br>
            <br>
            <ul>
                <li ng-repeat="recipe in recipes"><h2>Name:</h2>@{{recipe.title}}

                    <br>
                    <h2>Ingredients:</h2>
                    @{{recipe.ingredients}}
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2>Method:</h2>
                    @{{recipe.body}}
                    <br>
                    <br>
                    <br>
                    This was created at @{{recipe.timestamp}}
                </li>

            </ul>
        </div>
    </div>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="/js/recipes.js"></script>
@endsection

@stop