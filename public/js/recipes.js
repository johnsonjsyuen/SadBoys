/**
 * Created by Yuen on 14/09/2015.
 */
var RecipesApp = angular.module('RecipesApp', []);

RecipesApp.controller('RecipesController', function($scope, $http){

    $http.get('/getRecipes').success(function(recipes){
       $scope.recipes = recipes;

    });
    });
