@extends('layout.app')

@section('title')
All Data
@endsection


@section('content')
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th colspan=2>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pembeli as $key)
				<tr>
					<td>{{$key->nama}}</td>
					<td>{{$key->alamat}}</td>
					<td><a href="{{url('pembeli/edit/'.$key->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Yakin hapus data {{$key->nama}} ?')"
						href="{{url('pembeli/delete/'.$key->id)}}">Delete</a></td>
				</tr>
			@endforeach		
		</tbody>
	</table>
	<a href="{{url('pembeli/add')}}">Tambah Data</a>
@endsection