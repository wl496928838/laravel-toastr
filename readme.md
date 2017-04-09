# laravel-toastr

Support laravel5.* 

toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.


### install

Using Composer

    composer require csl/toastr

Add the service provider to `config/app.php`

```php
Csl\Toastr\ToastrServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Toastr'  => Csl\Toastr\Toastr::class,
```

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic

You should add `{!! Reminder::message() !!}` to your html.

Then.
```php
Toastr::info('foo', 'bar', []);

Toastr::success('foo', 'bar', []);

Toastr::warning('foo', 'bar', []);

Toastr::error('foo', 'bar', []);

Toastr()->info('foo', 'bar', []);
```

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
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>

        <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>
```

![](http://ww3.sinaimg.cn/mw690/baa3278fgw1ey7ky56nbgj20n60fuaav.jpg)

### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish

to publish the config file for `config/toastr.php`.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.
