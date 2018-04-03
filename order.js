var app = angular.module("myApp", [ ]).controller("orderController",['$scope', function( $scope )
{
    $scope.brands = {
        'Poomex':{
            'Premium RN':[ '75','80','85','90','95','100'],
            'Premium Rns':[ '75','80','85','90','95','100'],
            'Flexrib Rns':[ '75','80','85','90','95','100'],
            'Golden Rn':[ '75','80','85','90','95','100'],
            'Golden Rns':[ '75','80','85','90','95','100'],
            'FlexRib Rns':[ '75','80','85','90','95','100'],
            'Cotton Shirts': ['90','95','100']
        },
        'Prisma':{
            'Capri':[ 'Small','Medium','Large','Extra Large' ],
            'SlimFit':[ 'Small','Medium','Large','Extra Large' ],
            'Bermuda':[ 'Small','Medium','Large','Extra Large' ],
            'Trackpant':[ 'Small','Medium','Large','Extra Large' ]
        },
        'MSP':{
            'RNS':['40','45','50','55','60','65','70','75'],
            'RNBS':['40','45','50','55','60','65','70','75'],
            'Remo Junior':['40','45','50','55','60','65','70','75'],
            'CoolCotton':['40','45','50','55','60','65','70','75']
        },
        'Janson':{
            'Single':[ '1','2','3','4','5', ],
            'Than':[ '1','2','3','4','5', ]
        }
    };
    $scope.GetSelectedBrand = function(){
        $scope.strBrand = document.getElementById("brand").value;
    };
    $scope.GetSelectedBrand = function(){
        $scope.strBrand = document.getElementById("model").value;
    };
    
}]);