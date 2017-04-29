<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\msgModel;

class msgController extends Controller
{
    public function show($page=1){
    	$perpage = 5;
    	$record = msgModel::take($perpage)->skip(($page-1)*$perpage)->get();
    	$count = msgModel::get()->count();
    	$pages = ceil($count/10);
    	$data = compact('record','pages');

    	return view('index',$data);
    }
}
