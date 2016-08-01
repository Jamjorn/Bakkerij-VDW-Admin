var BakkerijApp = angular.module('BakkerijApp', ['mainCtrl'], function($interpolateProvider) {

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});


