Caffeinated Flash Messages
==========================
[![Author](http://img.shields.io/badge/author-Shea_Lewis-blue.svg?style=flat-square)](https://caffeinated.ninja)
[![Source](http://img.shields.io/badge/source-caffeinated/flash-blue.svg?style=flat-square)](https://github.com/caffeinated/flash)
[![Build Status](http://img.shields.io/travis/caffeinated/flash/master.svg?style=flat-square)](https://travis-ci.org/caffeinated/flash)
[![Scrutinizer Code Quality](http://img.shields.io/scrutinizer/g/caffeinated/flash.svg?style=flat-square)](https://scrutinizer-ci.com/g/caffeinated/flash/?branch=master)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

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