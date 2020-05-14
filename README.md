# RajaOngkir API untuk Laravel 6.x

## Installation

Installasi dilakukan menggunakan Composer. Ubah file `composer.json` dan tambahkan `oneslynx/rajaongkir-laravel`.

	composer require oneslynx/rajaongkir-laravel

Selanjutnya, update Composer dari Terminal:

    composer update

Setelah selesai update, tambahkan item di dalam provider array pada `app/config/app.php`.

    'providers' => [
    	...
    	OnesLynx\RajaOngkir\RajaOngkirServiceProvider::class,
    ]

Langkah terakhir yaitu tambahkan alias pada `app/config/app.php`.
	
	'aliases' => [
		...
		'RajaOngkir' => OnesLynx\RajaOngkir\RajaOngkirFacade::class,
	]

Untuk melakukan konfigurasi Token dan Jenis Produk, ketikan pada Terminal perintah sebagai berikut.

	php artisan vendor:publish

Perintah ini akan men-generate file `rajaongkir.php` pada `config/rajaongkir.php`.

Tambahkan setting pada `.env`

	RAJAONGKIR_ACCOUNT_TYPE=pro
	RAJAONGKIR_APIKEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	> RAJAONGKIR_ACCOUNT_TYPE dapat diisi dengan `starter`, `basic`, `pro`

