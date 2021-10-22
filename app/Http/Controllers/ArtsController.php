<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class ArtsController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arts =Art::all();
        $arts=Art::paginate(5);
        return view('Arts.ArtsIndex',compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function display(){
        $arts = Art::all();
        $arts = Art::paginate(4);

	return view("Arts.Artsdisplay", compact('arts'));

     }

    public function create()
    {
        //

        if(Auth::user()->_id=="5dc4469e01a49c4c245bc932"){
        return view('Arts.Artscreate');}

    else{
        return redirect('/');

    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'site_title'      =>'required',
            'site_link'       =>'required',
            'site_keywords'   =>'required',
            'site_description'=>'required',
            'filename'        =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);  
            $arts = new Art();
            $arts->site_title = $request->get('site_title');
            $arts->site_link = $request->get('site_link');
            $arts->site_keywords = $request->get('site_keywords');
            $arts->site_description =$request->get('site_description');
          
          if ($request->has('filename')) {
              
              $image = $request->file('filename');
              $name = str_slug($request->input('title')).'_'.time();
              $folder = '/uploads/images/';
              $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
  
              $this->uploadOne($image, $folder, 'public', $name);
              $arts->filename = $filePath;
          }
          $arts->save();
          return back()->with("success","Book successfully added!!");
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
        $art = Art::find($id);
        return view('Arts.Artsedit',compact('art','id'));
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
        $art= Art::find($id);
        $art->site_title = $request->get('site_title');
        $art->site_link = $request->get('site_link');
        $art->site_keywords = $request->get('site_keywords');
        $art->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $art->filename = $filePath;
        }
        $art->save();
        return back()->with('success', 'Book successfully updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $arts=Art::find($id);
        $arts->delete();
        return back()->with('success','Book has been  deleted');
    }
}
