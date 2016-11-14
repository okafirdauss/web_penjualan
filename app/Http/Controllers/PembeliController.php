<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class PembeliController extends Controller
{
    public function index()
    {
    	$data['pembeli'] = \App\Pembeli::paginate(10);
    	return view('pembeli.all')->with($data);
    }
    public function add()
    {
    	return view('pembeli.add');
    }
    public function save()
    {
    	$a = new \App\Pembeli;
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->save();
    	return redirect(url('pembeli/all'));
    }
    public function edit($id)
    {
    	$data['pembeli'] =\App\Pembeli::find($id);
    	return view('pembeli.edit')->with($data);
    }
    public function update()
    {
    	$a =\App\Pembeli::find(Input::get('id'));
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->save();
    	return redirect(url('pembeli/all'));
    }
    public function delete($id)
    {
    	$a=\App\Pembeli::find($id);
    	$a->delete();

    	return redirect(url('pembeli/all'));
    }
}
