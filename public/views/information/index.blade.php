

 <html  >

 <head>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


 </head>
 </head>
        <body ng-app="myApp" ng-controller="CRUDController">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col -md-12" ng-controller="CRUDController1">
                           <br>
                      <a href="#!information/create" class="btn btn-info btn-sm">Add new Information</a>

                            <br>
                            <br>

                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h5 class="card-title ">All Information</h5>
                                </div>
                                <div class="card-body">
                                     <div class="table-responsive">
                                            <table class="table table-bordered " style="width:100%" >
                                                 <thead class="thead-light">
                                                       <tr>
                                                            <th>Id</th>
                                                            <th>FirstName</th>
                                                            <th>SecondName</th>
                                                            <th>ThirdName</th>
                                                            <th>FourthName</th>
                                                            <th>relative_relation </th>
                                                            <th>Date_of_Birth</th>
                                                            <th>Social_status</th>
                                                            <th>Study</th>
                                                            <th>Work</th>
                                                            <th>Image</th>
                                                           <th>Action</th>
                                                         </tr>
                                                  </thead>
                                              <tbody>

                                                           <tr ng-repeat ="(index , information) in info" >
                                                                 <td>{{ index + 1 }}</td>
                                                                 <td>{{information.FirstName }}</td>
                                                                 <td>{{information.SecondName }}</td>
                                                                 <td>{{information.ThirdName }}</td>
                                                                 <td>{{information.FourthName }}</td>

                                                                   <td ng-if="information.relative_relation ==1" >father</td>
                                                                   <td ng-if="information.relative_relation ==2" >mother</td>
                                                                   <td ng-if="information.relative_relation ==3" >Grandpa</td>
                                                                   <td ng-if="information.relative_relation ==4" >Grandma</td>
                                                                   <td ng-if="information.relative_relation ==5" >brother</td>
                                                                   <td ng-if="information.relative_relation ==6" >sister</td>
                                                                   <td ng-if="information.relative_relation ==7" >Aunt</td>
                                                                   <td ng-if="information.relative_relation ==8" >uncle</td>


                                                                 <td>{{information.Date_of_Birth}}</td>
                                                                 <td>{{information.Social_status}}</td>

                                                                   <td ng-if="information.Study ==0" >false</td>
                                                                   <td ng-if="information.Study ==1" >true</td>

                                                                   <td ng-if="information.work ==0" >false</td>
                                                                   <td ng-if="information.work ==1" >true</td>

                                                                     <td>{{information.image}}</td>

                                                                     <td><button type="button" class="btn btn-danger btn-sm del"
                                                                     ng-click="confirmDelete(information.id) "data-id="">delete</button></td>
                                                                      </td>


                                                         </tr>

                                                  </tbody>

                                             </table>

                                      </div>
                                      </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

        </body>


</html>






