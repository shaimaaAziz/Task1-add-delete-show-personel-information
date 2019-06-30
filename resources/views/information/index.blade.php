
 @extends('layouts.app')
 <head>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>
        <body>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                           <br>
                            <a href="{{route('information.create')}}" class="btn btn-info btn-sm">Add new Information</a>
                            <br>
                            <br>

                            @if(session('successMsg'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('successMsg')}}</span>
                                </div>
                            @endif


                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h5 class="card-title ">All Information</h5>
                                </div>
                                <div class="card-body">
                                     <div class="table-responsive">
                                            <table class="table table-bordered " style="width:100%">
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
                                                           <th>created_at</th>
                                                           <th>updated_at</th>
                                                           <th>Action</th>
                                                         </tr>
                                                  </thead>
                                              <tbody>

                                                     @foreach($info as $key=>$information)
                                                         <tr>
                                                          <td> {{$key + 1}}</td>
                                                           <td>{{$information->FirstName}}</td>
                                                           <td>{{$information->SecondName}}</td>
                                                           <td>{{$information->ThirdName}}</td>
                                                           <td>{{$information->FourthName}}</td>


                                                             <td>
                                                                 @if( $information->relative_relation == 1)
                                                                     {{ $information->relative_relation ='father' }}
                                                                 @elseif($information->relative_relation == 2)
                                                                     {{ $information->relative_relation ='mother' }}
                                                                 @elseif($information->relative_relation == 3)
                                                                     {{ $information->relative_relation ='Grandpa' }}
                                                                 @elseif($information->relative_relation == 4)
                                                                     {{ $information->relative_relation ='Grandma' }}
                                                                 @elseif($information->relative_relation == 5)
                                                                     {{ $information->relative_relation ='brother' }}
                                                                 @elseif($information->relative_relation == 6)
                                                                     {{ $information->relative_relation ='sister' }}
                                                                 @elseif($information->relative_relation == 7)
                                                                     {{ $information->relative_relation ='Aunt' }}
                                                                 @elseif($information->relative_relation == 8)
                                                                     {{ $information->relative_relation ='uncle' }}
                                                                 @endif
                                                             </td>
                                                           <td>{{$information->Date_of_Birth}}</td>
                                                           <td>{{$information->Social_status}}</td>

                                                             <td>
                                                                 @if( $information->Study == 1)
                                                                    {{ $information->Study ='yes' }}

                                                                 @else
                                                                     {{ $information->Study ='no' }}
                                                                 @endif
                                                             </td>
                                                             <td>
                                                                 @if( $information->work == 1)
                                                                     {{ $information->work ='yes' }}

                                                                 @else
                                                                      {{ $information->work ='no' }}
                                                                 @endif
                                                             </td>
                                                          <td>
                                                             <img src =" {{asset('image/' . $information->image)}}" height="100" width="100"/>
                                                          </td>
                                                          <td>{{$information->created_at}}</td>
                                                          <td>{{$information->updated_at}}</td>
                                                          <td>
                                                               <form id="delete-form-{{ $information->id }}" action="{{ route('information.destroy',$information->id) }}"
                                                                     style="display: none;" method="POST">
                                                                   @csrf
                                                                   @method('DELETE')
                                                               </form>
                                                              <button type="button" class="btn btn-danger btn-sm del" data-id="{{ $information->id }}">delete</button></td>

                                                         </tr>
                                                     @endforeach

                                                  </tbody>

                                             </table>
                                      </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </body>
 <script>
     $(".document").ready(function(){
     $(".del").click(function(){
        var id = $(this).data("id");
         $.ajax(
             {
                 url: "information/"+id,
                 method:'delete',
                 // dataType: "JSON",
                 data:{ body:
                         '', _token:'{{csrf_token()}}'},

                 success: function ()
                 {
                     console.log("it Work");
                     alert(id);
                     window.location.reload();
                 }
             });

     });
     });
 </script>

</html>






