<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selamat Datang, Mahasiswa Baru JTK {{ $tahun }}!</title>

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<script>
	function periksaEjaan(element)
	{
		// var value = $(element).val();

		// if (value.trim() != "")
		// {
		// 	if (value.toUpperCase() === value || value.toLowerCase() === value)
		// 	{
		// 		alert("Gunakan ejaan huruf besar dan huruf kecil dengan benar.");
		// 		$(element).focus();
		// 	}
		// }
	}
	</script>
</head>
<body>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Selamat datang, JTK {{ $tahun }}!</h1>
				<p>Selamat datang di keluarga besar Jurusan Teknik Komputer dan Informatika!</p>
			</div>
		</div>
	</div>
</div>

<?php

$attrLabel = array(
		'class' => 'col-md-4 control-label'
	);
$attrInputNotRequired = array(
		'class' => 'form-control',
		'autocomplete' => 'off'
	);
$attrInput = array_merge($attrInputNotRequired, array('required' => ''));

?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p class="lead">Untuk keperluan pendataan, mohon dapat mengisi formulir berikut dengan sebenar-benarnya. Pastikan menggunakan ejaan yang benar dalam mengisi formulir.</p>

			<form action="{{ url('/') }}" method="POST" class="form-horizontal">

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputNamaLengkap">Nama lengkap</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="nama_lengkap" id="inputNamaLengkap" placeholder="Nama lengkap"
							onblur="periksaEjaan(this);" autofocus />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputNamaPanggilan">Nama panggilan</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="nama_panggilan" id="Nama panggilan" placeholder="Nama panggilan"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputJenisKelamin">Jenis kelamin</label>
					<div class="col-md-8">
						@foreach ($kv_jenis_kelamin as $k => $v)
						<div class="radio">
							<label>
								<input type="radio" name="jenis_kelamin" value="{{ $k }}" required> {{ $v }}
							</label>
						</div>
						@endforeach
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputProgramStudi">Program studi</label>
					<div class="col-md-8">
						@foreach ($kv_program_studi as $prodi)
						<div class="radio">
							<label>
								<input type="radio" name="program_studi"
									value="{{ $prodi->kode_program_studi }}" required> {{ $prodi->program_studi }}
							</label>
						</div>
						@endforeach
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputJalurMasuk">Jalur masuk</label>
					<div class="col-md-8">
						@if (count($kv_jalur_masuk) > 0)
							@foreach ($kv_jalur_masuk as $jalur)
							<div class="radio">
								<label>
									<input type="radio" name="jalur_penerimaan"
									value="{{ $jalur->id }}" required> {{ $jalur->nama_jalur }}
								</label>
							</div>
							@endforeach
						@else
							<div class="alert alert-danger">
							Tidak ada jalur penerimaan yang sedang daftar ulang saat ini.
							@if (isset($next_jalur_masuk) && $next_jalur_masuk != null)
								<br>
								Jalur penerimaan terdekat selanjutnya yang akan daftar ulang
								adalah <b>{{ $next_jalur_masuk->nama_jalur }}</b> yang akan dimulai
								pada <b><abbr title="{{ $next_jalur_masuk->start_time }}">{{ $next_jalur_masuk_diff_human }}</abbr></b>.
							@endif
							</div>
						@endif
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputTempatLahir">Tempat dan tanggal lahir</label>
					<div class="col-md-4">
						<input type="text" required class="form-control" autocomplete="off"
							name="tempat_lahir" id="inputTempatLahir" placeholder="Tempat lahir"
							onblur="periksaEjaan(this);" />
					</div>
					<div class="col-md-4">
						<input type="date" class="form-control" autocomplete="off"
							name="tanggal_lahir" id="inputTanggalLahir" placeholder="Tanggal lahir (yyyy-mm-dd)" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAgama">Agama</label>
					<div class="col-md-8">
						@foreach ($kv_agama as $agama)
						<div class="radio">
							<label>
								<input type="radio" name="agama" value="{{ $agama->id }}" required> {{ $agama->agama }}
							</label>
						</div>
						@endforeach
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAlamatAsal">Alamat asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control" autocomplete="off"
							name="alamat_asal" id="inputAlamatAsal" placeholder="Alamat asal"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAlamatSekarang">Alamat sekarang</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="alamat_sekarang" id="inputAlamatSekarang" placeholder="Alamat sekarang"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAsalSekolah">Asal sekolah</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="asal_sekolah" id="inputAsalSekolah" placeholder="Asal sekolah"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputJurusanAsal">Jurusan asal</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="jurusan_asal" id="inputJurusanAsal" placeholder="Jurusan asal" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputNomorHandphone">Nomor handphone</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="nomor_hp" id="inputNomorHandphone" placeholder="Nomor handphone" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAlamatEmail">Alamat email</label>
					<div class="col-md-8">
						<input type="email" required class="form-control" autocomplete="off"
							name="email" id="inputAlamatEmail" placeholder="Alamat email" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputAlamatEmail">Facebook</label>
					<div class="col-md-8">
						<div class="input-group">
							<div class="input-group-addon">www.facebook.com/</div>
							<input type="text" class="form-control" autocomplete="off"
								name="facebook" id="inputAlamatEmail" placeholder="Username Facebook" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputTwitter">Twitter</label>
					<div class="col-md-8">
						<div class="input-group">
							<div class="input-group-addon">twitter.com/</div>
							<input type="text" class="form-control" autocomplete="off"
								name="twitter" id="inputTwitter" placeholder="Username Twitter" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputInstagram">Instagram</label>
					<div class="col-md-8">
						<div class="input-group">
							<div class="input-group-addon">instagram.com/</div>
							<input type="text" class="form-control" autocomplete="off"
								name="instagram" id="inputInstagram" placeholder="Username Instagram" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputLINE">LINE</label>
					<div class="col-md-8">
						<input type="text" class="form-control" autocomplete="off"
							name="line" id="inputLINE" placeholder="ID LINE" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputCitaCita">Cita-cita</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="cita_cita" id="inputCitaCita" placeholder="Cita-cita"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputHobi">Hobi</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="hobi" id="inputHobi" placeholder="Hobi"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputMotivasiMasuk">Motivasi masuk JTK</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="motivasi_masuk" id="inputMotivasiMasuk" placeholder="Motivasi masuk JTK"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputMotoHidup">Moto hidup</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="moto_hidup" id="inputMotoHidup" placeholder="Moto hidup"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputMinatBakat">Minat dan bakat</label>
					<div class="col-md-8">
						<input type="text" required class="form-control" autocomplete="off"
							name="minat_bakat" id="inputMinatBakat" placeholder="Minat dan bakat"
							onblur="periksaEjaan(this);" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="inputDeskripsiDiri">Deskripsi diri</label>
					<div class="col-md-8">
						<textarea required class="form-control"
							name="deskripsi_diri" id="inputDeskripsiDiri" placeholder="Deskripsi diri"
							onblur="periksaEjaan(this);"
							rows="3"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-8 col-md-offset-4">
						<button type="submit" class="btn btn-primary">Kirim data</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script>
$("form").submit(function () {
	if ($(this).valid()) {
		$(this).submit(function () {
			return false;
		});
		return true;
	}
	else {
		return false;
	}
});
</script>

</body>
</html>
