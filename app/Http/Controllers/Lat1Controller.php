<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Agus";
        $data["asal"]="Bandung";
        $data["username"] = "@agus123";
        $data["img"] = "https://as1.ftcdn.net/v2/jpg/03/38/30/80/1000_F_338308078_iiXC8b9lxpxmjGKaKu4dtXHSIVfzE8qm.jpg";
        $data["deskripsi"] =  "Seorang lulusan SMK Negeri 1 Ciamis yang memiliki dedikasi tinggi dan pengalaman luas di bidang Teknologi Informasi, siap untuk memberikan kontribusi yang berarti dalam proyek-proyek IT yang menantang.";
        return view('v_latihan1',  $data);
    }

    public function method2() {
        $data['title'] = "Daftar Mahasiswa";
		$data['daf_mhs'] = array(
			array("nama" => "Agus", "asal" => "Bandung","prodi" => "S1 Informatika", "semester" => "4"),
	 	    array("nama" => "Budi", "asal" => "Jakarta","prodi" => "S1 Sistem Informasi", "semester" => "4"),
			array("nama" => "Roni", "asal" => "Surabaya","prodi" => "S1 DKV", "semester" => "4")
		);
		return view('v_latihan2', $data);

    }
}
