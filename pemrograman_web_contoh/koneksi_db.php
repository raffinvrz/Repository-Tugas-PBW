<?php

   $koneksi = new mysqli("localhost", "root", "", "pemrograman_web_contoh");
   if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
