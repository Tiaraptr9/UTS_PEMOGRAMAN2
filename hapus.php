<?php

$nim=$_GET['nim'];
include "koneksi.php";
					
$hapus=$koneksi->query("delete into pasien='$no_kartu'")

if($hapus==true){

	header("location:tampil-mahasiswa.php?pesan=hapusberhasil");

} else {
	
	echo"error";
}

