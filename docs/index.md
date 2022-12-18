# Documentation

You need to updated your projects config/bundles.php 

You have to add the namespace\bundle name to config/bundles.php
```vendorName\bundleName\bundleName::class => ['all' => true],```

And you have to auto load the class by adding the next line in composer.json:
```
"autoload": {
        "psr-4": {
            "vendorName\\bundleName\\": "lib/bundleName/src/",
            "App\\": "src/"
        }
    },
```
(replace vendorName\bundleName and make sure the directory is correct)

run ```composer dump-autoload``` after updating the composer.json


configure router
configure services (see config directory)

php bin/console debug:router