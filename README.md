Nama : Viko Ardiyanto
NIM : 20102292

1. clone project ini di github / download rar
2. lakukan composer install/composer update agar bisa mengakses laravel ini
3. kemudian lakukan php artisan key:generate
4. buat database dan kemudian pada menu env hubungkan database yang sudah dibuat dengan project ini.
   contoh :
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=web-hotel
   DB_USERNAME=root
   DB_PASSWORD=
5. lakukan migrate database dari project ini ke database yang sudah di buat dengan melakukan php artisan php artisan migrate -> artisan migrate:fresh --seed
6. setelah itu lakukan php artisan serve untuk mengakses project web yang sudah dibuat pada localhost.

note : project ini hanya bisa diakses menggunakan php versi 8.2
