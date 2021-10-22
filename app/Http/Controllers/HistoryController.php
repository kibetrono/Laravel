<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;
use Auth;
class HistoryController extends Controller
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
        $historicals=History::all();
        $historicals=History::paginate(5);
        return view('Historicals.historyindex',compact('historicals'));
    }

    public function display()
    {
        //
        $historicals = History::all();
        $historicals = History::paginate(4);

	return view("Historicals.historydisplay", compact('historicals'));
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
            return view('Historicals.historycreate');
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
      $this->validate($request,[
          'site_title'      =>'required',
          'site_link'       =>'required',
          'site_keywords'   =>'required',
          'site_description'=>'required',
          'filename'        =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);  
          $historicals = new History();
          $historicals->site_title = $request->get('site_title');
          $historicals->site_link = $request->get('site_link');
          $historicals->site_keywords = $request->get('site_keywords');
          $historicals->site_description =$request->get('site_description');
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $historicals->filename = $filePath;
        }
        $historicals->save();
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
        $history = History::find($id);
        return view('Historicals.historyedit',compact('history','id'));
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
        $history= History::find($id);
        $history->site_title = $request->get('site_title');
        $history->site_link = $request->get('site_link');
        $history->site_keywords = $request->get('site_keywords');
        $history->site_description = $request->get('site_description');    
        
        if ($request->has('filename')) {
            
            $image = $request->file('filename');
            $name = str_slug($request->input('title')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $name);
            $history->filename = $filePath;
        }
        $history->save();
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
        $history = History::find($id);
        $history->delete();
        return back()->with('success','Book has been  deleted');
    }
}
