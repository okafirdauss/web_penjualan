<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class BarangController extends Controller
{
    public function index()
    {
    	$data['barang'] = \App\Barang::paginate(10);
    	return view('barang.all')->with($data);
    }
    public function add()
    {
    	return view('barang.add');
    }
    public function save()
    {
    	$a = new \App\Barang;
    	$a->nama = Input::get('nama');
    	$a->jenis = Input::get('jenis');
    	$a->jumlah = Input::get('jumlah');
    	$a->harga = Input::get('harga');
    	$a->save();
    	return redirect(url('barang/all'));
    }
    public function edit($id)
    {
    	$data['barang'] =\App\Barang::find($id);
    	return view('barang.edit')->with($data);
    }
    public function update()
    {
    	$a =\App\Barang::find(Input::get('id'));
    	$a->nama = Input::get('nama');
    	$a->jenis = Input::get('jenis');
    	$a->jumlah = Input::get('jumlah');
    	$a->harga = Input::get('harga');
    	$a->save();
    	return redirect(url('barang/all'));
    }
    public function delete($id)
    {
    	$a=\App\Barang::find($id);
    	$a->delete();

    	return redirect(url('barang/all'));
    }
}
