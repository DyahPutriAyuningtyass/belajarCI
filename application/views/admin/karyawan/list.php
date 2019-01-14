<?php


foreach ($karyawan as $karyawan ) :
  echo $karyawan->id_karyawan;
  echo $karyawan->nama_karyawan;
  echo $karyawan->alamat_karyawan;
  echo $karyawan->nomor_telepon;
  echo "<br />";
endforeach;
