<img src="https://github.com/kkamara/useful/raw/main/php-react-boilerplate.png" alt="php-react-boilerplate.png" width=""/>

<img src="https://github.com/kkamara/useful/raw/main/php-react-boilerplate2.png" alt="php-react-boilerplate2.png" width=""/>

# symfony-app-2

This repository follows Dave Hollingworth's course Learn Symfony in 1 Hour at https://www.youtube.com/watch?v=i_jgWZItCGI .

## Installation

* [PHP](https://herd.laravel.com)
* [Composer](https://getcomposer.org)
* [Symfony](https://symfony.com/doc/current/setup.html)

```bash
composer i
bin/console doctrine:migrations:migrate
```

#### Insert Seed Data Into Database

```bash
bin/console doctrine:fixtures:load
# To not delete all DB data:
bin/console doctrine:fixtures:load --append
```

## Usage

```bash
symfony server:start
```

## Inline SQL

```bash
bin/console dbal:run-sql "SELECT * FROM product"
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)
