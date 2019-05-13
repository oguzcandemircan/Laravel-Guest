# Laravel Guest

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require oguzcandemircan/laravel-guest
```

## Usage

Your models should use the LaravelGuestTrait trait.
```php
use OguzcanDemircan\LaravelGuest\LaravelGuestTrait;

class User extends Authenticatable
{
  use LaravelGuestTrait
}
```

Via helper functions
```php
user()->isGuest();
```

Via facades
```php
$user = LaravelGuest::make();
$user->isGuest();

```
Via Laravel resolve helper function
```php
$user = resolve('laravelguest')->make();
$user->isMember();   
```

Service Container
```php
$user = $this->app->resolving('laravelguest')->make();
$user->name;
```
## Helper Functions

```php
if(is_member()) {
 #...
}
if(is_guest()) { 
#...
}

user_id()
#..
```

## Available Methods

|  Resource | Method  | Type  |
|---|---|---|
| OguzcanDemircan\LaravelGuest\LaravelGuest  | isGuest | Boolean   |
| OguzcanDemircan\LaravelGuest\LaravelGuest  | isMember  | Boolean  |
| OguzcanDemircan\LaravelGuest\Helpers\Functions.php | is_guest() | Boolean |
| OguzcanDemircan\LaravelGuest\Helpers\Functions.php | is_member() | Boolean |
| OguzcanDemircan\LaravelGuest\Helpers\Functions.php | user_id() | Integer |


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Oğuzcan Demircan](https://github.com/oguzcandemircan)
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/oguzcandemircan/laravel-guest.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/oguzcandemircan/laravel-guest.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/oguzcandemircan/laravel-guest
[link-downloads]: https://packagist.org/packages/oguzcandemircan/laravel-guest
[link-author]: https://github.com/oguzcandemircan
[link-contributors]: ../../contributors
