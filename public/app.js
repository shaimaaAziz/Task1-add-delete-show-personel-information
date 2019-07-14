


var myApp =angular.module("myApp",["ngRoute"]);


myApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
        templateUrl : "views/information/index.blade.php",
            controller: "CRUDController"
        })
        .when("/information/create", {
        templateUrl: "views/information/create.blade.php",
        controller: "CRUDController1"

    }).when("/information", {
        templateUrl: "views/information/index.blade.php",

    })
        .otherwise({
            template : "<h1>None</h1><p>Nothing has been selected</p>"
        });

});

myApp.controller("CRUDController", function ($scope ,$http) {

    $scope.info = []; $scope.relative = [];
  $scope.loadinfo = function () {

            $http.get('/information')

                .then(function success(e) {
                    console.log(e);
                    $scope.info = e.data.info;
                });
        };
        $scope.loadinfo();

//  /***************** delete
          $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
               var url='/information/' + id;
                $http.delete(url).then(function (data) {

                    console.log(data);
                     location.reload();
                        $scope.loadinfo();

                }, function (data) {
                    console.log(data);
                    alert('Unable to delete');

                });
            } else {
                return false;
            }
        }

});

myApp.controller("CRUDController1", function ($scope ,$http,$filter ,$window){

    $scope.info = []; $scope.relative = [];


    $scope.info = {
        FirstName: '',
        SecondName: '',
        ThirdName: '',
        FourthName: '',
        relative_relation: '',
        Date_of_Birth: '',
        Social_status: '',
        Study: '',
        work: '',
        image: '',
    };

        $http.get('/information/create')
            .then(function success(e) {
                console.log(e);
                $scope.info = e.data.info;
                $scope.relative = e.data.relative;


            });

    //******************// Add new info
    $scope.addinfo = function () {
        $http.post('/information/', {
            FirstName: $scope.info.FirstName,
            SecondName: $scope.info.SecondName,
            ThirdName: $scope.info.ThirdName,
            FourthName: $scope.info.FourthName,
            relative_relation: $scope.info.relative_relation,
            Date_of_Birth: $filter('date')(new Date($scope.info.Date_of_Birth), 'yyyy-MM-dd') ,
            Social_status: $scope.info.Social_status,
            Study: $scope.info.Study,
            work: $scope.info.work,
            image: $scope.info.image,

        }).then(function success(e) {

                $window.location.href = '/';
                alert(' Success');

            }, function error(error) {
                $scope.recordErrors(error);
            }
        )};


    $scope.recordErrors = function (error) {
        $scope.errors = [];
        if (error.data.errors.FirstName) {
            $scope.errors.push(error.data.errors.FirstName[0]);
        } else if (error.data.errors.SecondName) {
            $scope.errors.push(error.data.errors.SecondName[0]);
        }else if (error.data.errors.ThirdName) {
            $scope.errors.push(error.data.errors.ThirdName[0]);
        }else if (error.data.errors.FourthName) {
            $scope.errors.push(error.data.errors.FourthName[0]);
        }else if (error.data.errors.relative_relation) {
            $scope.errors.push(error.data.errors.relative_relation[0]);
        }else if (error.data.errors.Date_of_Birth) {
            $scope.errors.push(error.data.errors.Date_of_Birth[0]);
        }else if (error.data.errors.Social_status) {
            $scope.errors.push(error.data.errors.Social_status[0]);
        }else if (error.data.errors.Study) {
            $scope.errors.push(error.data.errors.Study[0]);
         }else if (error.data.errors.work) {
            $scope.errors.push(error.data.errors.work[0]);
         }else if (error.data.errors.image) {
            $scope.errors.push(error.data.errors.image[0]);


        }
    }

});
