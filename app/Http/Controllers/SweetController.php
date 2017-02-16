<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweet;

class SweetController extends Controller
{
	public function getIndex(){
		$sweet = Sweet::all();
		return view('sweet.index',['sweets'=>$sweet]);		
	}
	public function sellSweet($id){
		$sweet=Sweet::find($id);
		$sweet->qty--;
		$sweet->save();
		return back();

	}
	public function buySweet($id){
		$sweet=Sweet::find($id);
		$sweet->qty++;
		$sweet->save();
		return back();
		
	}
	public function addSweet(Request $request){
		$sweet = new Sweet;
		$sweet->name = $request->name;
		$sweet->qty = $request->qty;
		$sweet->save();
		return back();
	}
	public function deleteSweet($id){
		$sweet=Sweet::find($id);
		$sweet->delete();
		return back();
	}
}
