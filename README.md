# Laravel Deployer config remover
Simply remove deployer configuration from release

# Why?

If you use Laraver Deployer with private Github Repos you can simply remove config file with sensitive data (GitHub login/password) after deploy.

# How to use

Run this command in you project folder

```bash
git clone https://github.com/RusTorg/laravel-deployer-config-remover.git
mv laravel-deployer-config-remover/recipe recipe
rm -rf laravel-deployer-config-remover
```

in config/deploy.php add new include

```php
'include' => [
    'recipe/clean_config.php',
],
```

and register new hook

```php
'done' => [
    'clean:deployerConfig'
],
```

Enjoy!

If you need custom functionality, you can write to me or make a pull request.
