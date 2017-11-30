# yii2-nivoslider-widget
```
http://demo.dev7studios.com/nivo-slider/
```

composer.json
---------
```json
"require": {
    "xj/yii2-nivoslider-widget": "*"
},
```
In View
---------
```php
use xj\nivo\silder\SilderAsset;
SilderAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\nivo\silder\SilderAsset',
];
```
