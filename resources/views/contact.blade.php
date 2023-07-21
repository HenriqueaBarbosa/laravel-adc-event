@extends('layouts.main')

@section('title', 'Contacts')

@section('content')

    <h1>Tela de contatos</h1>
    <img src="/img/banner.jpg" alt="Banner">
    
@endsection

<!-- history{
  1 composer create-project --prefer-dist laravel/laravel hdcevents
  2 git add .
  3 git commit -m 'feat: adc some routes'
  4 git push -u origin main
  5 git add .
  6 git commit -m 'feat: adc navbar main'
  7 php artisan make:controller EventController
  8 php artisan make:controller contact
  9 php artisan make:controller products
  10 php artisan make:controller product
  11 git add .
  12 git commit -m 'feat: adc make controllers'
  13 git push -u origin main
  14 php artisan migrate
  16 git add .
  17 git commit -m 'feat: connecting to MySql'
  18 php artisan make:migration crate_products_table
  19 php artisan migrate:status
  20 php artisan migrate:rollback
  22 php artisan migrate:status
  23 php artisan make:migration create_products_table
  24 php artisan migrate
  25 php artisan make:migration create_events_table
  26 php artisan migrate
  27 php artisan make:model Event
  28 php artisan migrate refresh
  32 php artisan migrate:fresh
  33 git add .
  34 git commit -m 'feat: adc migrations'
  35 git add .
  36 git commit -m 'feat: styling home'
  37 git push
  38 git add .
  39 git commit -m 'feat: create data'
  40 php artisan make:migration add_image_to_events_table
  41 php artisan migrate
  43 git add .
  44 git commit -m 'feat: img persistence'
  45 git push
  46 php artisan migrate
  47 php artisan make:migration add_items_to_event_table
  48 php artisan migrate
  49 git add .
  50 git commit -m 'feat: adc json collumn'
  51 git push
  53 php artisan make:migration add_date_to_events_table
  54 php migrate:fresh
  55 php artisan migrate:fresh
  57 php artisan migrate
  58 php artisan migrate:refresh
  59 php artisan migrate:fresh
  60 php artisan migrate
  61 git add .
  62 git commit -m 'feat: adc date collumn'
  63 git push
  64 git add .
  65 git commit -m 'feat: adc search'
  66 composer require laravel/jetstream
  68 php artisan jetstream:install livewire
  69 php artisan migrate:status
  70 php artisan migrate
  71 php artisan migrate:status
  74 npm install
  75 npm run dev
} -->