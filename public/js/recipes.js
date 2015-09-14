/**
 * Created by Yuen on 14/09/2015.
 */
var RecipesApp = angular.module('RecipesApp', []);

RecipesApp.controller('RecipesController', function($scope, $http){

    //$scope.recipes = [
    //    {'title': 'flan', 'ingredients': 'eggs', 'body': 'iuhgiugigi', 'timestamp': 'monday'},
//
  //  ];

    $http.get('/getRecipes').success(function(recipes){
       $scope.recipes = recipes;

    });
    });
