## Library yang digunakan

### Dari Composer 

- laravel/ui 
- tymon/jwt-auth

### Dari NPM

- vue
- @websanova/vue-auth 
- vue-router 
- vue-axios 
- axios 
- es6-promise

## Cara installasi

Langkah 1: 
Clone git ke lokal direktori `git clone https://github.com/backids99/laravel-vue-jwt`. 

Langkah 2: 
Rubah file `.env` untuk APP_URL maupun koneksi database. 

Langkah 3: 
Jalankan perintah `php artisan migrate:fresh --seed`.

Langkah 4: 
Jalankan perintah `npm install`.

## Schema Database

`CREATE TABLE users (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  full_name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  date_of_birth date NOT NULL,
  remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY users_username_unique (username),
  UNIQUE KEY users_email_unique (email)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci`

## Postman Collection

https://www.getpostman.com/collections/18e6eb4319cfdf0cb935