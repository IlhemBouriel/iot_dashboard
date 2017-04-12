<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\IotDevice;
use App\Models\Datasource;
use Session;

class AdminController extends Controller
{

	public function connect()
	{
		if (Session::has('login'))
		{
			Session::forget('login');
		}
		return view('connect');
	}


	//connect function
    public function index(Request $req)
    {
    	$login = $req->input('login');
    	$password = $req->input('pass');
    	$admin = Admin::all();

	foreach ($admin as $a) {
    	if (($a->login == $login)&&($a->password == $password))
    	{
    		Session::put('login',$login);
    		return view('admin');
    	}
	}
	return view('connect');
    }

    //Choose the divice to delete
    public function delete()
    {
    	$devices = IotDevice::all();
    	return view ('delete',['devices'=>$devices]);
    }
    
      public function update()
    {
    	$devices = IotDevice::all();
    	return view ('update',['devices'=>$devices]);
    }

    public function addForm()
    {
    	return view('admin');
    }

    public function add(Request $req)
    {
    	$datasource = new Datasource;
    	$iot = new IotDevice;

        $iot->designation =  $req->input('desc');
        $iot->adresse_ip =  $req->input('adress');
        $datasource->url =  $req->input('url');
        $datasource->user = $req->input('user');
        $datasource->password = $req->input('pass');
        $iot->datasource = $datasource;
        $datasource->save();
        $datasource_id = Datasource::orderBy('id', 'desc')->take(1)->first();
        $iot->datasource = $datasource_id->id;
        $iot->save();
       return view('admin');
    }

 	public function delNow(Request $req)
 	{
 		$id = $req->get('id');
 		$iot = IotDevice::all();
 		$id_datasource = 0;
 		foreach ($iot as $dev) {
 			if ($dev->id == $id)
 			{
 				$id_datasource = $dev->datasource()->first()->id;
 				print($id_datasource);
 			    $dev->delete();
 				$dt = Datasource::find($id_datasource);
 				$dt->delete();
 			}
 		}
 	}

 	public function updateDate(Request $req)
 		{
 		$id = $req->input('id');
 		$designation =  $req->input('desc');
        $adresse_ip =  $req->input('adress');
        $url =  $req->input('url');
        $user = $req->input('user');
        $password = $req->input('pass');
        IotDevice::find($id)->update(['designation'=>$designation,'adresse_ip'=>$adresse_ip]);
        $dev = IotDevice::find($id);
        $id_datasource = $dev->datasource()->first()->id;
        $dt = Datasource::find($id_datasource)->update(['url'=>$url,'user'=>$user,'password'=>$password]);
        return  redirect()->action('AdminController@update');
 		}
 		

 	
}
