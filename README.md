SB Admin 2 theme for Yii 2 Framework
====================================
A free Bootstrap 4 [SB Admin 2](https://github.com/BlackrockDigital/startbootstrap-sb-admin-2) theme built with HTML/CSS and a modern development workflow environment ready to use to build your next dashboard or web application

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist svit-ws/yii2-sb-admin-2 "dev-master"
```

or add

```
"svit-ws/yii2-sb-admin-2": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your view code by:

```php
/** @var yii\web\View $this */
 \svit\sbAdmin\assets\SBAdminAsset::register($this); 
```

Custom generators for Gii module:

```php
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => require '<path_to_vendor>/svit-ws/yii2-sb-admin-2/generators/config.php',
    ];
```
Teste