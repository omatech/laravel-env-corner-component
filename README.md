# Laravel: Environment Corner Component
Do you have the classic client that confuses the production environment with the testing environment? This simple package is your solution! This prints a banner in the lower right corner to remember the current environment.

## Installation

1. Require the package in your composer.json.

```
composer require omatech/laravel-env-corner-component
```

2. Publish config and components files.

```
php artisan vendor:publish 
```
```
Omatech\EnvCornerComponent\App\Providers\PublishServiceProvider
```

3. Include the component in your layout before ```</body>``` tag.

```
@include('components.vendor.corner')
```

## Extras

* Configure in which environments you have to show the banner in the configuration file: ```/config/env-corner-component.php``` 

```
return [
    'enabled' => true,
    'renderWhen' => [
        'test', 'preprod', 'preproduction'
    ]
];
```

* Disable the component by setting the option ```enabled``` to ```false```.

* Customize the banner by modifying the component: ```views/components/vendor/corner.blade.php```

## Credits

* [Adrià Roca](https://github.com/adriaroca)

## Organization

* [Omatech](https://www.omatech.com)

## Contributors

See the contributors list [here](https://github.com/omatech/laravel-env-corner-component/graphs/contributors).

## License
[MIT license](http://opensource.org/licenses/MIT).
