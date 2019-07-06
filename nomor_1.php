<?php 
	class Sekolah{
		var $nama;
		var $tahun_masuk;
		var $tahun_keluar;
		var $jurusan;	
	}
	class Skill{
		var $nama_skill;
		var $level_skill;
	}
	function data_diri(){
		$nama = "asrul puadi";
		$umur = 23;
		$alamat = "pekanbaru";
		$hobi = ["futsal","ngoding"];
		$status_pernikahan = false;
		
		$obj_sekolah = new Sekolah();
		$obj_sekolah->nama = "asrul";
		$obj_sekolah->tahun_masuk = 2014;
		$obj_sekolah->tahun_keluar ="null";
		$obj_sekolah->jurusan = "teknik informatika";
		
		$obj_skill = new Skill();
		$obj_skill->nama_skill = "ngoding";
		$obj_skill->level_skill = "beginner";
		
		
		$array_datadiri = array(
		"nama"=>$nama,
		"umur"=>$umur,
		"alamat"=>$alamat,
		"hobi"=>$hobi,
		"status_pernikahan"=>$status_pernikahan,
		"list sekolah"=>$obj_sekolah,
		"skills"=>$obj_skill
		) ;
		
		echo json_encode($array_datadiri);
	}
	echo data_diri();
?>