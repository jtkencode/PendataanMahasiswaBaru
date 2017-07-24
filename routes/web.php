<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\ProgramStudi;
use App\JalurPenerimaan;
use App\Agama;
use App\MahasiswaDaftarUlang;
use App\KontakMahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;

Route::get('/', function () {
	$data['tahun'] = date('Y');
	$data['kv_jenis_kelamin'] = ['L' => 'Laki-laki', 'P' => 'Perempuan'];
	$data['kv_program_studi'] = ProgramStudi::all();
	$data['kv_jalur_masuk'] = JalurPenerimaan::where([
														['start_time', '<=', Carbon::now()],
														['end_time', '>=', Carbon::now()]
													])->get();

	if (count($data['kv_jalur_masuk']) == 0)
	{
		$next_jalur = JalurPenerimaan::where('start_time', '>', Carbon::now())
		                             ->oldest('start_time')->first();

		if ($next_jalur != null)
		{
			$data['next_jalur_masuk'] = $next_jalur;
			$data['next_jalur_masuk_diff_human'] = Carbon::parse($next_jalur->start_time)->diffForHumans();
		}
	}

	$data['kv_agama'] = Agama::all();

    return view('front/pendataan', $data);
});

Route::post('/', function (Request $request) {
	$mahasiswa = new MahasiswaDaftarUlang;

	$mahasiswa->nama_lengkap = $request->input('nama_lengkap');
	$mahasiswa->nama_panggilan = $request->input('nama_panggilan');
	$mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
	$mahasiswa->program_studi = $request->input('program_studi');
	$mahasiswa->jalur_penerimaan = $request->input('jalur_penerimaan');
	$mahasiswa->tempat_lahir = $request->input('tempat_lahir');
	$mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
	$mahasiswa->agama = $request->input('agama');
	$mahasiswa->alamat_asal = $request->input('alamat_asal');
	$mahasiswa->alamat_sekarang = $request->input('alamat_sekarang');
	$mahasiswa->asal_sekolah = $request->input('asal_sekolah');
	$mahasiswa->jurusan_asal = $request->input('jurusan_asal');
	$mahasiswa->cita_cita = $request->input('cita_cita');
	$mahasiswa->hobi = $request->input('hobi');
	$mahasiswa->motivasi_masuk = $request->input('motivasi_masuk');
	$mahasiswa->moto_hidup = $request->input('moto_hidup');
	$mahasiswa->deskripsi_diri = $request->input('deskripsi_diri');

	$mahasiswa->save();

	$daftar_kontak = ['nomor_hp', 'email', 'facebook', 'twitter', 'instagram', 'line'];

	foreach ($daftar_kontak as $k)
	{
		if ($request->input($k) != NULL)
		{
			$kontak = new KontakMahasiswa;

			$kontak->mahasiswa_daftar_ulang = $mahasiswa->id;
			$kontak->jenis_kontak = $k;
			$kontak->detil_kontak = $request->input($k);

			$kontak->save();
		}
	}

	return redirect('success');
});

Route::get('success', function () {
    return view('front/success');
});
