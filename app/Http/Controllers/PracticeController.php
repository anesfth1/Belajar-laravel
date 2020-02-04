<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    $a = "Aku Kangen Bandung";
    return view('Latihan', compact('a'));
    }
    public function pass1()
    {
        $data = [
        ['nama' => 'Ucup', 'kelas' => 'XI RPL 1'],
        ['nama' => 'Icip', 'kelas' => 'XI RPL 2'],
        ['nama' => 'Ecep', 'kelas' => 'XI RPL 3'],
        ];
        return view('latihan1', ['siswa' => $data]);
    }

    public function pass2()
    {
        $data = [
            ['Nama' => 'Anes', 'NIP' => '0192838', 'Agama' => 'Islam', 'JK' => 'Laki', 'Jabatan' => 'Manager', 'jam_kerja' => '250'],
            ['Nama' => 'Abdul', 'NIP' => '0109283', 'Agama' => 'Islam', 'JK' => 'Laki', 'Jabatan' => 'Staff', 'jam_kerja' => '100'],
            ['Nama' => 'Fattah', 'NIP' => '0187273', 'Agama' => 'Islam', 'JK' => 'Laki', 'Jabatan' => 'Sekretaris', 'jam_kerja' => '200'],
        ];
        return view('latihanku', ['karyawan' => $data]);
    }
}
