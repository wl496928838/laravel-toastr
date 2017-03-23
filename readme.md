# laravel-toastr

Inspired by [laracasts flash](https://github.com/laracasts/flash)

### install

Using Composer

    composer require chensuilong/reminder

Add the service provider to `config/app.php`

```php
chensuilong\Reminder\ReminderServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Reminder'  => chensuilong\Reminder\ReminderFacade::class,
```

> You can use reminder() function available.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic

You should add `{!! Reminder::message() !!}` to your html.

Then.

* Reminder::info('foo', 'bar', []);

* Reminder::success('foo', 'bar', []);

* Reminder::warning('foo', 'bar', []);

* Reminder::error('foo', 'bar', []);

* reminder()->info('foo', 'bar', []);

```php
<?php

Route::get('/', function () {
    Reminder::success('Hi! this is Reminder', 'Hello', ["positionClass" => "toast-bottom-right"]);

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
        {!! reminder()->message() !!}
    </body>
</html>
```

![](http://ww3.sinaimg.cn/mw690/baa3278fgw1ey7ky56nbgj20n60fuaav.jpg)

### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish

to publish the config file for reminder.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.

### MIT
