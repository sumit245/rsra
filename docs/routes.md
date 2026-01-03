# Routes Map

Detected route declarations from `app/Config/Routes.php` (basic parsing):

| Method | URI | Target |
|---|---|---|
|GET|/|Dashboard::index|
|ADD|about/(:any)|About::index/$1|
|GET|Plugins|Plugins::index|
|GET|Plugins/(:any)|Plugins::$1|
|POST|Plugins/(:any)|Plugins::$1|
|GET|Updates|Updates::index|
|GET|Updates/(:any)|Updates::$1|
|POST|Updates/(:any)|Updates::$1|
