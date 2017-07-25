<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
	<h3>List mahasiswa dari penerimaan {{ $judul }}</h3>

	<p>Total: <b>{{ count($mahasiswa) }} orang</b></p>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nama Lengkap</th>
				<th>Program Studi</th>
				<th>Jalur Penerimaan</th>
				<th>Created at</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($mahasiswa as $mhs)
			<tr>
				<td><a href="{{ url('admin/mdu', [$mhs->id]) }}">{{ $mhs->nama_lengkap }}</a></td>
				<td>{{ $mhs->programStudi->program_studi }}</td>
				<td>{{ $mhs->jalurPenerimaan->nama_jalur }}</td>
				<td>{{ $mhs->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

</body>
</html>
