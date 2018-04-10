<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
    <script src="{{ asset('js/superAdminJs.js') }}"></script>
  </head>
  <body ng-app='myApp'>
<h1>Angular</h1>
<div ng-view></div>
<p><a href="#/!">Main</a></p>

<a href="#!red">Red</a>
<a href="#!green">Green</a>
<a href="#!blue">Blue</a>
<p>Click on the links to navigate to "red.htm", "green.htm", "blue.htm", or back to "main.htm"</p>
  </body>
</html>
