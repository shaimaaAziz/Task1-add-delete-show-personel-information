

@extends('layouts.app')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                {{--@if ($errors->any())--}}
                    {{--@foreach ($errors->all() as $error)--}}

                        {{--<div class="alert alert-danger">--}}
                            {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                {{--<i class="material-icons">close</i>--}}
                            {{--</button>--}}
                            {{--<span><b> Danger - </b> {{ $error }}</span>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}

                {{--@endif--}}


                 <br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h5 class="card-title ">Add new Information</h5>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('information.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control"  name="first"
                                           class=" @error('first'){{$errors->first('FirstName')}} @enderror">

                                    @error('first')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Second Name</label>
                                    <input type="text" class="form-control" name="second"
                                           class=" @error('second'){{$errors->first('SecondName')}} @enderror" >

                                    @error('second')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Third Name</label>
                                    <input type="text" class="form-control" name="third"
                                           class=" @error('third'){{$errors->first('ThirdName')}} @enderror" >

                                    @error('third')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Forth Name</label>
                                    <input type="text" class="form-control" name="forth"
                                           class=" @error('forth'){{$errors->first('ForthName')}} @enderror" >

                                    @error('forth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">relative relation</label>

                                    <select class="form-control" name="relative_relation"
                                            class=" @error('relative_relation'){{$errors->first('relative_relation')}} @enderror" >

                                        @error('relative_relation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        @foreach($relative as $relatives)
                                            <option value="{{$relatives->id}}">{{$relatives->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="date"
                                           class=" @error('date'){{$errors->first('Date_of_Birth')}} @enderror" >

                                    @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">  Social status</label>

                                <br>
                                <input type="radio" id="smt-fld-1-2"  value="single" name="Social_status"
                                       class=" @error('Social_status'){{$errors->first('Social_status')}} @enderror">single
                                <br>
                                <input type="radio" id="smt-fld-1-3" value="Married" name="Social_status"
                                       class=" @error('Social_status'){{$errors->first('Social_status')}} @enderror"> Married
                                <br>
                                <input type="radio" id="smt-fld-1-3" value="Divorced" name="Social_status"
                                       class=" @error('Social_status'){{$errors->first('Social_status')}} @enderror" >Divorced

                                @error('Social_status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">Does he Study ?</label>
                                <br>
                                    <input type="radio" id="smt-fld-1-2" value="1"  name="study"
                                           class=" @error('Social_status'){{$errors->first('Study')}} @enderror" >Yes

                                <br>
                                    <input type="radio" id="smt-fld-1-3" value="0" name="study"
                                           class=" @error('Social_status'){{$errors->first('Study')}} @enderror" >No

                                @error('study')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">Does he work ?</label>
                                <br>
                                    <input type="radio" id="smt-fld-1-2"  value="1" name="work"
                                           class=" @error('Social_status'){{$errors->first('work')}} @enderror" >Yes
                                <br>
                                    <input type="radio" id="smt-fld-1-3" value="0" name="work"
                                           class=" @error('Social_status'){{$errors->first('work')}} @enderror" >No

                                @error('work')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                             <div class="col-md-12">
                                <br >
                                <label class="control-label">Image</label>
                                <input type="file" name="image" accept="image"
                                       class=" @error('image'){{$errors->first('image')}} @enderror" >

                                 @error('image')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                <br>
                             </div>
                            <br>
                            <a href="{{route('information.index')}}" class="btn btn-danger">Back</a>

                            <button type="submit" class="btn btn-primary">Save</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>