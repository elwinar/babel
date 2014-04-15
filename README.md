# Babel

Laravel 4 wrappers &amp; engines for various markup languages.

## Installation

0. Add `elwinar/babel` to your `composer.json`

	`"elwinar/babel": "dev-master"`

0. Run `composer update` to get the latest version of the package.
0. Edit you `app/config/app.php` to add the following service providers :

	`'Elwinar\Babel\BabelServiceProvider',`

0. Add the following aliases :

	`'Elwinar\Babel\Facades\Markdown',`

## Usage

You can compile a file

```
$result = Markdown::file($path);
```

Or a string

```
$result = Markdown::string('Hello markdown!');
```

Additionally, the package add compilers for the following view extensions :

- `md` using Markdown
- `md.php` using PHP + Markdown
- `md.blade.php` using Blade + PHP + Markdown

## Yet another markdown package for Laravel

I know there is already several markdown packages for both PHP and Laravel 4. I was myself fond of the [vtalbot](https://github.com/vtalbot/markdown) package, and occasionally used others as well such as the excellent [kindari](https://github.com/Kindari/laravel-markdown) one.

However, both these packages rely on the old [dflydev] markdown compiler, that used to be a port of the [PHP Markdown](http://michelf.com/projects/php-markdown/) library by [Michel Fortin](http://michelf.com/) since the author didn't wanted to use composer without thinking about it twice. Now that he made the step, the composer port is deprecated and packages relying upon it are in a precarious state. Thus my decision to create a new package using the now Composer-native library of Michel Fortin and integrating my preferred functionalities of both packages.

And cherry on top, I decided to include others markup format in addition to markdown. They are not here yet, but are planned. Fell free to request your preferred one, to make pull requests, etc.