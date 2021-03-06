<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Hallo</h1>'
         . 'Selamat Datang Di Webapp Saya<br>'
         . 'Laravel, emang keren.';
});

Route::get('profil',function() {
    return view('biodata');
});

//Route Parameter
Route::get('pesan/{makan}', function($mkn) {
    return 'Makanan Yang Saya Pesan Adalah '.$mkn;
});

Route::get('meser/{makan}/{minum}/{bayar}', function($mkn,$min,$byr) {
    return 'Makanan : '.$mkn. '<br>Minuman : '.$min. '<br>Bayar : '.$byr;
});

Route::get('halo/{nama?}', function($nama='anes'){
    return 'Hallo Nama Saya '.$nama;
});

//Tugas awal
Route::get('meuli/{makan?}/{minum?}/{bayar?}', function($mkn=null,$min=null,$byr=null) {
    if (($mkn)) {
         echo "Anda Meser : ".$mkn;
    }if (($min)) {
        echo " & " .$min;
    }if (($byr)) {
        echo "<br> Total Harga : ".$byr;
    }if (!$mkn && !$min && !$byr) {
         echo "Anda Tidak Meser";
    }
});

// Memunculkan semua data
Route::get('/model', function() {
   $query =  App\Post::all();
   return $query;
});

Route::get('/penggajian', function() {
   $query =  App\Gaji::all();
   return $query;
});

Route::get('penggajian/{id}',function($id) {
   $query = App\Gaji::find($id);
   return $query;
});

Route::get('hi','SekolahController@world');
Route::get('hi2','SekolahController@jungle');
Route::get('hi3','SekolahController@school');
Route::get('hi4','SekolahController@zoo');
Route::get('hi5','SekolahController@garage');
Route::get('hi6/{warna}','SekolahController@jeniskucing');
Route::get('hi7/{warna?}','SekolahController@kucing');

Route::get('beli/{makan?}/{harga?}', 'SekolahController@jual');

// buku
Route::get('book','BookController@index');
Route::get('book-create/{jdl}','BookController@create');
Route::get('book/{id}','BookController@show');
Route::get('book-edit/{id}/{jdl}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');
Route::get('bookss/{jdl}','BookController@creates');

Route::get('buku/{id}','BookController@tampilkan');
Route::get('buku2/{id}','BookController@tampilkan2');
// Artikel
// Route::get('artikel','ArtikelController@index');
// Route::get('artikel/create','ArtikelController@create');
// Route::get('artikel/{id}','ArtikelController@show');
// Route::get('artikel/{id}/edit','ArtikelController@edit');
// Route::delete('artikel/{id}','ArtikelController@destroy');
// RESOURCE
Route::resource('artikel','ArtikelController');

// Menambahkan data
Route::get('/penggajian', function() {
   $query =  new App\Gaji;
   $query->id = "2";
   $query->nama = "Indah Mambo";
   $query->jabatan = "Seketaris";
   $query->jk = "Perempuan";
   $query->alamat = "Bojong Honey";
   $query->agama = "Islam";
   $query->totalgaji = "Rp.5.500.000";
   $query->save();
   return $query;
});

// Memunculkan data berdasarkan nama
Route::get('penggajian',function() {
    $query = App\Gaji::where('nama','=','Agus')->get();
    return $query;
});

// Memunculkan semua data berdasarkan pilihan yang ditujukan
Route::get('penggajian',function() {
    $query = App\Gaji::select('id','nama','totalgaji')
    ->where('totalgaji','=','Rp.5.000.000')
    ->get();
    return $query;
});

// Memunculkan data sesuai data yang ditujukan
Route::get('/testmodel', function() {
   $query =  App\Post::find(1);
   return $query;
});

// Menmunculkan data berdasarkan title
Route::get('/testmodel', function() {
   $query =  App\Post::where('title','like','%cepat nikah%')->get();
   return $query;
});

// Mengubah Record
Route::get('/testmodel', function() {
   $query =  App\Post::find(1);
   $query->title = "Ciri keluarga sakinah";
   $query->save();
   return $query;
});

// Menghapus record (menghapus semua function)
Route::get('/testmodel', function() {
   $query =  App\Post::find(1);
   $query->delete();
//    check delete di database
});

// Menambahkan record
Route::get('/testmodel', function() {
   $query =  new App\Post;
   $query->title = "1 amalan wajah bersinar";
   $query->content = "shalat malam";
   $query->save();
   return $query;
});




Route::get('names', function() {
    return view('names');
});

Route::get('jobs', function() {
    return view('jobs');
});

Route::get('address', function() {
    return view('address');
});

Route::get('vehicle', function() {
    return view('vehicle');
});

// Passing Data
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('passing2','PracticeController@pass2');
Route::get('barang','BarangController@index');

// Book Route
Route::resource('buku','BookController');
Route::resource('barang2','BarangController');

//Blade
Route::get('home', function(){
    return view('home');
});
Route::get('about', function(){
    return view('about');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('a','NewController@index');
