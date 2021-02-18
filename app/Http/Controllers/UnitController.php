<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use Illuminate\Support\Facades\DB;
class UnitController extends Controller
{
    //get List Unit
    public function getList(){
        $data = DB::table('units')->get();
        return view('backend.unit.unitList', compact('data'));
    }

    public function getAdd(){
        return view('backend.unit.addUnit');
    }

    public function postAdd(Request $request){
        $unit = new Unit();
        $validated = $request->validate([
            'txtUnitName' => 'required',
        ]);
        $unit->unit_name   = $request->txtUnitName;
    	$unit->unit_description = $request->txtDVTIntro;
    	$unit->save();
        return redirect()->route('admin.unit.list')->with(['flash_level'=>'success','flash_message'=>'Thêm đơn vị tính thành công!!!']);

    }
    
}
