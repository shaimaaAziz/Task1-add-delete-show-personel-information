



<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="app.js"></script>
</head>

<body ng-app="myApp" ng-controller="CRUDController1">

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <br>
                <div class="card" >
                    <div class="card-header card-header-primary">
                        <div class="alert alert-danger " ng-if="errors.length > 0" class="close" data-dismiss="alert" aria-label="Close">
                              <span ng-repeat="error in errors"><i class="material-icons">close</i> {{ error }}</span>
                           </div>
                        <br>
                        <h5 class="card-title ">Add new Information</h5>
                    </div>
                    <div class="model card-body" >
                        <form   enctype="multipart/form-data">
                            <input type="hidden" name="token" value="{{ csrf_token() }}">

                            <div class="col-md-12" id="add_new_info">
                                <div class="form-group bmd-label-floating" >
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control"  name="FirstName" ng-model="info.FirstName">



                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Second Name</label>
                                    <input type="text" class="form-control" name="SecondName" ng-model="info.SecondName"
                                           >


                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Third Name</label>
                                    <input type="text" class="form-control" name="ThirdName" ng-model="info.ThirdName">


                                </div>
                            </div>

                        <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Forth Name</label>
                                    <input type="text" class="form-control" name="FourthName" ng-model="info.FourthName">

                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">relative relation</label>

                                    <select class="form-control" name="relative_relation" ng-model="info.relative_relation">
                                        <option value="{{x.id}}" ng-repeat="x in relative">{{x.name}}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="Date_of_Birth"  ng-model="info.Date_of_Birth" >


                                </div>
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">  Social status</label>

                                <br>
                                <input type="radio" id="smt-fld-1-2"  value="single" name="Social_status"
                                       ng-model="info.Social_status">single
                                <br>
                                <input type="radio" id="smt-fld-1-3" value="Married" name="Social_status"
                                       ng-model="info.Social_status"> Married
                                <br>
                                <input type="radio" id="smt-fld-1-3" value="Divorced" name="Social_status"
                                       ng-model="info.Social_status">Divorced


                            </div>

                            <div class="form-group">
                                <label class="radio-inline">Does he Study ?</label>
                                <br>
                                    <input type="radio" id="smt-fld-1-2" value="1"  name="Study" ng-model="info.Study">Yes

                                <br>
                                    <input type="radio" id="smt-fld-1-3" value="0" name="Study" ng-model="info.Study">No


                            </div>

                            <div class="form-group">
                                <label class="radio-inline">Does he work ?</label>
                                <br>
                                    <input type="radio" id="smt-fld-1-2"  value="1" name="work" ng-model="info.work">Yes
                                <br>
                                    <input type="radio" id="smt-fld-1-3" value="0" name="work" ng-model="info.work">No


                            </div>

                             <div class="col-md-12">
                                <br >
                                <label class="control-label">Image</label>
                                <input type="file" name="image" accept="image" ng-model="info.image">


                                <br>
                             </div>
                            <br>
                            <a href="{{route('information.index')}}" class="btn btn-danger">Back</a>

                            <button type="submit" class="btn btn-primary" ng-click="addinfo()">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>