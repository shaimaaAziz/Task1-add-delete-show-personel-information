<?php

namespace App\Http\Controllers;

//use Faker\Provider\Image;
use App\RelativeRelation;
use Illuminate\Http\Request;
use Image;
class informationFamily extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info =\App\InformationFamily::all();

//        return view('information/index',compact('info'));
        return response()->json([
            'info' => $info
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $info = \App\InformationFamily::all();
        $relative =   RelativeRelation::all();
//        return view('information/create',compact('info','relative'));

        return response()->json([
            'info' => $info ,
             'relative' => $relative
        ], 200);

    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

       $this->validate($request,[
            'FirstName'=>'required',
            'SecondName'=>'required',
            'ThirdName'=>'required',
            'FourthName'=>'required',
           'relative_relation'=>'required',
            'Date_of_Birth'=>'required',
            'Social_status'=>'required',
            'Study'=>'required',
            'work'=>'required',
            'images'=>'image'
        ]);

            $info = new \App\InformationFamily();

          $info->FirstName =$request->FirstName;
          $info->SecondName =$request->SecondName;
          $info->ThirdName =$request->ThirdName;
          $info->FourthName =$request->FourthName;
          $info->relative_relation =$request->relative_relation;
          $info->Date_of_Birth =$request->Date_of_Birth;
          $info->Social_status =$request->Social_status;
          $info->Study =$request->Study;
          $info->work =$request->work;



        if($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('image/' . $fileName);

            Image::make($image)->resize(100, 200)->save($location);
            $info->image=$fileName;
        }

        $info->save();
//        return redirect()->route('information.index')->with('successMsg','add successfully' );
        return response()->json([
        'infos'    => $info
        ,
        'message' => 'Success'
    ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = \App\InformationFamily::find($id);
        $info->delete();

//        return redirect()->route('information.index')->with('successMsg',' deleted successfully' );


        return response('successifull',200);
        $info->save();
    }
}
