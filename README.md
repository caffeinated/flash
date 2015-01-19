Caffeinated Flash Messages
==========================
Laravel 5 flash messages, originally developed after the Laracasts video tutorial on the same topic: [Flexible Flash Messages](https://laracasts.com/lessons/flexible-flash-messages).

Installation
------------
Begin by installing the package through Composer. The best way to do this is through your terminal via Composer itself:

```
composer require caffeinated/flash
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider
```
'Caffeinated\Flash\FlashServiceProvider'
```

#### Facade
```
'Flash' => 'Caffeinated\Flash\Facades\Flash'
```

And that's it! With your coffee in reach, start flashing out messages! 