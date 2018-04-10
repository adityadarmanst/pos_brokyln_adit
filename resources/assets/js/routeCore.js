var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.htm"
    })
    .when("/red", {
        template : "red.htm"
    })
    .when("/green", {
        template : "green.htm"
    })
    .when("/blue", {
        template : "blue.htm"
    });
});
