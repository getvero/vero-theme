'use strict';
 
angular
.module('popupApp.allPages', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/', {
    templateUrl: '/wp-content/themes/vero/assets/scripts/angular/any.html',
    controller: 'allController'
  });
}])
.controller('allController', function($scope, $firebaseArray, $location) {
  var locationsRef = new Firebase("https://veroblog.firebaseio.com/pages");
  //var locations = $firebaseArray(locationsRef);

  locationsRef.on('value', function(snap) { 
    snap.forEach(function(pageSnap){
      var data = pageSnap.val();

      console.log(data.url);
      if($location.absUrl().match(data.url)){
        $scope.message = data.message;
        $scope.cta     = data.cta;
        $scope.$apply();
        jQuery('#popup-area').show().animate({bottom:'0'},800);
      }
    });
  });
});