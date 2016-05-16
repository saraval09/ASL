var app = angular.module('myApp', ["xeditable"]);


app.controller('GroceryController', function($scope){

    $scope.newItem;

    $scope.groceries=['butter', 'cheese','yogurt'];

    $scope.addItem= function () {
      if($scope.groceries.indexOf($scope.newItem.toLowerCase()) === -1) {
          $scope.groceries.push($scope.newItem.toLowerCase());
          $scope.newItem= '';
        }
    };


    $scope.removeItem= function(item){
        var idx= $scope.groceries.indexOf(item);
        if(idx!==-1)
        $scope.groceries.splice(idx,1);
    }

});

app.run(function(editableOptions) {
    editableOptions.theme = 'bs3';
});

app.controller('TextBtnCtrl', function($scope) {

});
