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
	<h3>{{ $mahasiswa->nama_lengkap }}</h3>

	<table class="table table-bordered">
		<tr>
			<th>Nama lengkap</th>
			<td>{{ $mahasiswa->nama_lengkap }}</td>
		</tr>
		<tr>
			<th>Nama panggilan</th>
			<td>{{ $mahasiswa->nama_panggilan }}</td>
		</tr>
		<tr>
			<th>Jenis kelamin</th>
			<td>{{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
		</tr>
		<tr>
			<th>Program studi</th>
			<td>{{ $mahasiswa->programStudi->program_studi }}</td>
		</tr>
		<tr>
			<th>Jalur penerimaan</th>
			<td>{{ $mahasiswa->jalurPenerimaan->nama_jalur }}</td>
		</tr>
		<tr>
			<th>Tempat, tanggal lahir</th>
			<td>{{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir }}</td>
		</tr>
		<tr>
			<th>Agama</th>
			<td>{{ $mahasiswa->agamaDetail->agama }}</td>
		</tr>
		<tr>
			<th>Alamat asal</th>
			<td>{{ $mahasiswa->alamat_asal }}</td>
		</tr>
		<tr>
			<th>Alamat sekarang</th>
			<td>{{ $mahasiswa->alamat_sekarang }}</td>
		</tr>
		<tr>
			<th>Asal sekolah</th>
			<td>{{ $mahasiswa->asal_sekolah }}</td>
		</tr>
		<tr>
			<th>Jurusan asal</th>
			<td>{{ $mahasiswa->jurusan_asal }}</td>
		</tr>
		<tr>
			<th>Nomor handphone</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['nomor_hp']))
				{{ $mahasiswa['kontak_mahasiswa']['nomor_hp'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>Alamat e-mail</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['email']))
				{{ $mahasiswa['kontak_mahasiswa']['email'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>Facebook</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['facebook']))
				{{ $mahasiswa['kontak_mahasiswa']['facebook'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>Twitter</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['twitter']))
				{{ $mahasiswa['kontak_mahasiswa']['twitter'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>Instagram</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['instagram']))
				{{ $mahasiswa['kontak_mahasiswa']['instagram'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>LINE</th>
			<td>
				@if (isset($mahasiswa['kontak_mahasiswa']['line']))
				{{ $mahasiswa['kontak_mahasiswa']['line'] }}
				@else
				<span class="label label-warning">Tidak diisi</span>
				@endif
			</td>
		</tr>
		<tr>
			<th>Cita-cita</th>
			<td>{{ $mahasiswa->cita_cita }}</td>
		</tr>
		<tr>
			<th>Hobi</th>
			<td>{{ $mahasiswa->hobi }}</td>
		</tr>
		<tr>
			<th>Motivasi masuk</th>
			<td>{{ $mahasiswa->motivasi_masuk }}</td>
		</tr>
		<tr>
			<th>Moto hidup</th>
			<td>{{ $mahasiswa->moto_hidup }}</td>
		</tr>
		<tr>
			<th>Deskripsi diri</th>
			<td>{{ nl2br($mahasiswa->deskripsi_diri) }}</td>
		</tr>
	</table>
</div>

</body>
</html>
