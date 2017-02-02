'use strict';

angular.module('smoothflowwebsite', [
    'ngRoute',
    'ngMaterial',
    'ngMessages'
]).
    config(['$routeProvider', function ($routeProvider) {
        $routeProvider.when('/', {
            templateUrl: 'pages/homepage.html',
            controller: 'mainController'
        }).when('/pricing', {
            templateUrl: 'pages/pricing.html',
            controller: 'mainController'
        }).when('/features', {
            templateUrl: 'pages/features.html',
            controller: 'mainController'
        }).when('/howitworks', {
            templateUrl: 'pages/howitworks.html',
            controller: 'mainController'
        }).otherwise({ redirectTo: '/pagenotfound' });
    }])

    .controller('mainController', ['$scope', '$rootScope', '$location','$mdDialog', function ($scope, $rootScope, $location, $mdDialog) {
        console.log("application stated");
    }]);
