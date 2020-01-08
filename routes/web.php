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

// Route::get('names', function() {
//     return view('names');
// });

// Route::get('jobs', function() {
//     return view('jobs');
// });

// Route::get('address', function() {
//     return view('address');
// });

// Route::get('vehicle', function() {
//     return view('vehicle');
// });
