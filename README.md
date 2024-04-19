# Laravel Blade Variable Declaration
### A laravel package define variables in blade template

## Installation

> **No dependency on PHP version and LARAVEL version**

### STEP 1: Run the composer command:

```shell
composer require arindam/blade-variable
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

> In providers section
```php
Arindam\BladeVariable\BladeVariableServiceProvider::class,
```

## That's it!!, All Done! Now it ready to use

### How to use it? How to declare a valiable in blade page?

```php
//declare it
@var('myname', 'Arindam')

//use it
<h1>{{ $myname }}</h1>
```

```php
//declare it
@var('myAge', 36)

//use it
<p>Age is : {{ $myAge }}</p>
```

## license:
The MIT License (MIT). Please see [License File](https://github.com/dev-arindam-roy/laravel-blade-variable-package/blob/master/LICENSE) for more information.

## Post Issues: if found any
If have any issue please [write me](https://github.com/dev-arindam-roy/laravel-blade-variable-package/issues).


