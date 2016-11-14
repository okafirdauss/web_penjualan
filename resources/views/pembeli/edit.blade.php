@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{url('pembeli/update')}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{$pembeli->nama}}" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea type="text" name="alamat" required></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="update">Update</button></td>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$pembeli->id}}">
		</tr>
	</table>
</form>