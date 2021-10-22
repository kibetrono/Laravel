<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Novel;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class NovelController extends Controller
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
        $novels=Novel::all();
        $novels=Novel::paginate(2);
        return view('Novels.NovelIndex',compact('novels'));

    }

    public function display(){
        $novels=Novel::all();
        $novels=Novel::paginate(2);
        return view('Novels.Novelsdisplay',compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()->_id=="5dc4469e01a49c4c245bc932"){
return view('Novels.Novelcreate');
        }else{
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
        $request->validate([
           
            'site_title'         =>  'required',
            'site_link'         =>  'required',
            'site_keywords'         =>  'required',
            'site_description'         =>  'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        $novel = new Novel();
        $novel->site_title = $request->get('site_title');
        $novel->site_link = $request->get('site_link');
        $novel->site_keywords = $request->get('site_keywords');
        $novel->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $novel->filename = $filePath;
        }
        $novel->save();
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
        $novel = Novel::find($id);
        return view('Novels.Novelsedit',compact('novel','id'));
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
        $novel= Novel::find($id);
        $novel->site_title = $request->get('site_title');
        $novel->site_link = $request->get('site_link');
        $novel->site_keywords = $request->get('site_keywords');
        $novel->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $novel->filename = $filePath;
        }
        $novel->save();
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
        $novels=Novel::find($id);
        $novels->delete();
        return back()->with('success','Book deleted successfully');
    }
}
