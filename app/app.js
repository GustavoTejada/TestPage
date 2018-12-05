(function(){
	"use strict";
	var app = angular.module("MyPage",["ui.router"]);

	app.config(function($stateProvider, $urlRouterProvider){
		
		$urlRouterProvider.otherwise("/")

		$stateProvider
		.state(
			"home",{
				url: "/",
				templateUrl: "app/views/home.php"
			})
		.state(
			"content",{
				url: "/content",
				templateUrl: "app/views/content.php",
				controller: "newsController as vm"
			})
	});

}());