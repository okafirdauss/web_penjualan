@extends('layout.app')

@section('title')
All Data
@endsection


@section('content')
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jenis</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th colspan=2>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($barang as $key)
				<tr>
					<td>{{$key->nama}}</td>
					<td>{{$key->jenis}}</td>
					<td>{{$key->jumlah}}</td>
					<td>{{$key->harga}}</td>
					<td><a href="{{url('barang/edit/'.$key->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Yakin hapus data {{$key->nama}} ?')"
						href="{{url('barang/delete/'.$key->id)}}">Delete</a></td>
				</tr>
			@endforeach		
		</tbody>
	</table>
	<a href="{{url('barang/add')}}">Tambah Data barang</a>
@endsection