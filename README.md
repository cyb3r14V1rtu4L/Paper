# Paper
Portable Pluging for common Project

### Enable Plugin

```php
// config/bootstrap.php
Plugin::load('Paper');
```

### Enable theme perController
> in controller add method
```php
public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```

### Enable theme Global
```php
// src/Controller/AppController.php

public function beforeRender(Event $event) {
    $this->viewBuilder()->theme('Paper');
}
```

> Since handling static assets, such as images, JavaScript and CSS files of plugins, 
through the Dispatcher is incredibly inefficient, it is strongly recommended to symlink them for production. 
This can be done by using the plugin shell:
```php
bin/cake plugin assets symlink
```
