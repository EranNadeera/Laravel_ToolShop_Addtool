<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;

class ToolsController extends Controller
{

    // show tools page..........
    public function index(){
        return view('toolsadd');
    }

    // data insert to table............
    public function inserttool(Request $request){
        $tool = new Tools();

        $tool->toolname = $request->input('toolname');
        $tool->toolcategory = $request->input('toolcategory');
        $tool->toolprice = $request->input('toolprice');
        $tool->quantity = $request->input('quantity');
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/tools', $filename);
            $tool->image = $filename;
        }
        else{
            return $request;
            $tool->image = '';
        }

        $tool->save();

        return view('toolsadd')->with('tool',$tool);
    }

    // get table data , display all tools....
    public function display(){
        $tool = Tools::all();
        return view('toolsview')->with('tool',$tool);
    }

    //update tool get data to another form ...........
    public function updatebtn($id){
        $tool=Tools::find($id);

        return view('toolsupdateform')->with('tool',$tool);
    }

    //update tool................
    public function update(Request $request, $id){
        $tool=Tools::find($id);

        $tool->toolname = $request->input('toolname');
        $tool->toolcategory = $request->input('toolcategory');
        $tool->toolprice = $request->input('toolprice');
        $tool->quantity = $request->input('quantity');
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/tools', $filename);
            $tool->image = $filename;
        }

        $tool->save();

        return redirect('/toolspage')->with('tool',$tool);
    }

    //delete function
    public function deletebtn($id){
        $tool=Tools::find($id);
        $tool->delete();

        return redirect('/toolspage')->with('tool',$tool);
    }
}
