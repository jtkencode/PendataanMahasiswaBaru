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
	<h3>List mahasiswa berdasarkan jalur penerimaan</h3>

	<ul>
		@foreach ($jalur as $tahun => $jalur_tahun)
		<li>
			<a href="{{ url('admin/mdu') }}?tahun={{ $tahun }}">{{ $tahun }}</a>
			<ul>
				@foreach ($jalur_tahun as $j)
				<li><a href="{{ url('admin/mdu') }}?jalur={{ $j->id }}">{{ $j->nama_jalur }}</a></li>
				@endforeach
			</ul>
		</li>
		@endforeach
	</ul>
</div>

</body>
</html>
