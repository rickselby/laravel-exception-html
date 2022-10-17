# Laravel Exception HTML

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
![Packagist Version](https://img.shields.io/packagist/v/rickselby/laravel-exception-html)

When Symfony updated to version 5, they changed their exception handling, and this removed a very neat way of
generating HTML for an exception to populate an email:

```php
$handler = new ExceptionHandler(true);
$html = $handler->getHtml($this->exception);
```

This is a copy of the Symfony 4 code to allow the above snippet to work again.

## Additional HTML

You may pass some additional HTML heading tags to display in the main title block. 
This can be any additional information useful to your exception (e.g. request URL, logged in user...)

```html
<h3 class="exception-message">{$this->request->method()} {$this->request->fullUrl()}</h3>
```

```php
$handler = new ExceptionHandler(true);
$html = $handler->getHtml($this->exception, $extraHeadings);
```
