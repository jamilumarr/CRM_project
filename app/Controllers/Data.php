<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use Config\Services;

class Data extends BaseController
{
	public function index()
	{
		$db = db_connect();
		$user = $db->query("SELECT * FROM user");
		$data["user"] = $user->getResult();

		return view('data/index', $data);
	}


	public function create()
	{
		$data = [
			'title' => 'From Tambah Data User'
		];

		return view('data/create', $data);
	}

	public function save()
	{
		$request = Services::request();
		$tNama = $request->getPost('tNama');
		$tTanggal_lahir = $request->getPost('tTanggal_lahir');
		$tJenis_Kelamin = $request->getPost('tJenis_Kelamin');
		$tNo_Handphone = $request->getPost('tNo_Handphone');
		$tProvinsi = $request->getPost('tProvinsi');
		$tKota = $request->getPost('tKota');

		$data = [
			'Nama' => $tNama,
			'Tgl_lahir'  => $tTanggal_lahir,
			'Jenis_kelamin'  => $tJenis_Kelamin,
			'No_Handphone'  => $tNo_Handphone,
			'Provinsi'  => $tProvinsi,
			'Kota'  => $tKota,
		];

		$db = db_connect();
		$db->table('user')->insert($data);

		$return = '/data';
		return redirect()->to($return);
	}

	public function delete($id)
	{
		$db = db_connect();
		$db->table('user')->delete(['id_user' => $id]);

		$return = '/data';
		return redirect()->to($return);
	}

	public function edit()
	{
		$id = $_GET['id'];
		$db = db_connect();
		$query = 'SELECT * FROM user WHERE Id_user=' . $id;
		$user = $db->query($query);
		// var_dump($user->getResult());
		$data["user"] = $user->getResult();


		return view('data/edit', $data);
	}



	public function update()
	{
		$id = $_GET['id'];
		$db = db_connect();
		$request = Services::request();
		$tNama = $request->getPost('tNama_edit');
		$tTanggal_lahir = $request->getPost('tTanggal_lahir_edit');
		$tJenis_Kelamin = $request->getPost('tJenis_Kelamin_edit');
		$tNo_Handphone = $request->getPost('tNo_Handphone_edit');
		$tProvinsi = $request->getPost('tProvinsi_edit');
		$tKota = $request->getPost('tKota_edit');

		$data = [
			'Nama' => $tNama,
			'Tgl_lahir'  => $tTanggal_lahir,
			'Jenis_kelamin'  => $tJenis_Kelamin,
			'No_Handphone'  => $tNo_Handphone,
			'Provinsi'  => $tProvinsi,
			'Kota'  => $tKota,
		];




		$builder = $db->table('user');
        $builder->where('Id_user', $id);
        $result = $builder->update($data);

		
		$return = '/data';
		return redirect()->to($return);
	}
}
