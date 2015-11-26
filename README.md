Installation
===

```bash
composer install
vendor/bin/doctrine orm:schema-tool:create
vendor/bin/doctrine orm:generate-proxies
php fixtures.php
```

For Windows
===
```bash

"C:/xampp/php/php.exe" composer install

"C:/xampp/php/php.exe" "vendor/bin/doctrine" orm:schema-tool:create

"C:/xampp/php/php.exe" "vendor/bin/doctrine" orm:generate-proxies

```

Start Server in Windows
===
```bash
"C:/xampp/php/php.exe" -S localhost:[port] "C:/xampp/htdocs/p2bj/public/"
```

Run Test
===

Behat
---

```bash
vendor/bin/behat
```

PhpSpec
---

```bash
vendor/bin/phpspec run
```