# laravel-toastr

Support laravel5.* 

toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.


## Installation

Using Composer

    composer require csl/toastr

Add the service provider to `config/app.php`

```php
Csl\Toastr\ToastrServiceProvider::class,
```

Add the Facade in `config/app.php`

```php
'Toastr'  => Csl\Toastr\Toastr::class,
```

## Usage

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

```php
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}
```

```php
Toastr::info('foo', 'bar');

Toastr::success('foo', 'bar');

Toastr::warning('foo', 'bar');

Toastr::error('foo', 'bar');
```

# Example

```php
<?php

Route::get('/', function () {
    Toastr::success('Hi! this is Toastr', 'Hello', ["positionClass" => "toast-bottom-left"]);

    return view('welcome');
});
```

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>
```

![](https://github.com/wl496928838/laravel-toastr/blob/master/pic.png?raw=true)

## Config

If you need to modify the flash message partials, you can run:

```
    php artisan vendor:publish
```

to publish the config file for `config/toastr.php`.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.
