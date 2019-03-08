# [phpkonf-izmir-demo](https://github.com/eserozvataf/phpkonf-izmir-demo)

[PHPKonf İzmir](https://izmir.phpkonf.org/) 2019'da sunacak olduğum "Azure DevOps ve GitHub ile uçtan uca PHP Projeleri?" konuşmasının demo sunumudur.

## Çalıştırmak için adımlar:

- Öncelikle sisteminizde PHP, composer ve git komut satırı araçlarının kurulu olduğundan emin olun,

- Bu demoyu git aracılığı ile klonlayın.

```sh
$ git clone https://github.com/eserozvataf/phpkonf-izmir-demo
$ cd phpkonf-izmir-demo
```

- Demo klasörüne composer bağımlılıklarını indirin.

```sh
$ composer install
```

## Testler

Testler için PHPUnit kullanılmakta:

```sh
$ ./vendor/bin/phpunit ./src/ 
```
