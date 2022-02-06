# php-cs-fixer-breki-config

[![Check & fix styling](https://github.com/BrekiTomasson/php-cs-fixer-breki-config/actions/workflows/php_cs_fixer.yml/badge.svg?event=push)](https://github.com/BrekiTomasson/php-cs-fixer-breki-config/actions/workflows/php_cs_fixer.yml)

My own personal preferences for `php-cs-fixer` configuration. This is largely based on legibility and being able to
understand the code quickly when reading it and places no emphasis on being compact, minimalistic or anything like that.

I believe in the old adage that "code is read far more than it is written", so this configuration is themed around that.

This project is also intentionally "light" and not tied to any framework or other third party package(s). The only
required dependency for this project is `php-cs-fixer`, and this will likely continue to be true also in the future.
For this reason, there is no ServiceProvider that integrates the package with Laravel or anything like that, even though
I could consider releasing a separate package that provides a "Laravel wrapper" around this package at some point for
simplicity's sake.

## Installation and Usage

Install the project via `composer` as per usual:

```
composer require --dev brekitomasson/php-cs-fixer-breki-config
```

Once installed into your project, the RuleSet can be used by `php-cs-fixer` by generating your own `.php-cs-fixer` file
with contents similar to the following:

```
<?php

use BrekiTomasson\PhpCsFixer\Config\Exceptions\InvalidPhpVersion;
use BrekiTomasson\PhpCsFixer\Config\Factory;
use BrekiTomasson\PhpCsFixer\Config\RuleSet\Php8;

$ruleSet = new Php8();

try {
    $configuration = Factory::fromRuleSet($ruleSet);
    $configuration->getFinder()->in(__DIR__ . '/' . 'src');
    $configuration->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php-cs-fixer.cache');

    return $configuration;
} catch (InvalidPhpVersion $exception) {
    echo 'Failed to generate php-cs-fixer configuration: ' . $exception->getMessage() . PHP_EOL;
}
```

## Future Plans and Ambitions

While I think `php-cs-fixer` is the best tool in the category, there are a couple of other tools out there that also
perform various important functions when it comes to code analysis, linting and the long-term health of PHP projects. I
may be adding more features to this project as time goes on so that it can be used for more than just my `php-cs-fixer`
configuration, although it probably makes sense to handle those configurations in separate packages and have another
package that ties them together somehow.

Also:

- [ ] Add tests and coverage
- [ ] Look into ways of breaking the ruleset down into chunks for more personalization options.

## Thanks, Acknowledgements and Credit

First, a massive thanks to [Fabien Potencier](http://fabien.potencier.org/) and [Dariusz Rumiński](https://github.com/keradus)
for making `php-cs-fixer`, as well as to the PHP community at large for all your contributions to this project over the
years. I've been a fan of the `php-cs-fixer` project from a distance for a long time and tinkered with configurations
and various ways of integrating it in my own workflow more than I have with any other PHP package. It's to the point
where `php-cs-fixer` is among the first handful of packages that I install, no matter what PHP project I'm working on.

I also want to thank a couple of other developers out there who have made their own `php-cs-fixer` config packages, as
these were very useful to me to read for inspiration of how to structure the code and organize things. This includes:

- [This gist by `laravel-shift`](https://gist.github.com/laravel-shift/cab527923ed2a109dda047b97d53c200), which contains
  their own set of rules for a "Laravel-like" configuration for `php-cs-fixer`.
- [This repo by `matt-allan`](https://github.com/matt-allan/laravel-code-style), which also contains a `php-cs-fixer`
  RuleSet inspired by Laravel.
- [This repo by `ergebnis`](https://github.com/ergebnis/php-cs-fixer-config), which helped me work out a good way of
  organizing the file structure for a project such as this one.
- [This repo by `localheinz`](https://github.com/localheinz/php-cs-fixer-config), also for inspiration on how best to
  structure this kind of project and organize my files.

## Licence

This code is published under the [MIT Licence](https://opensource.org/licenses/MIT). Feel free to do what you want with
it. This includes adapting, copying, changing or removing any or all parts of it. I take no responsibility or ownership
of anything you do with the code, of course, so use your common sense and make sure you understand what it does before
using it in your own projects or something like that.

> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
> documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
> rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
> persons to whom the Software is furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
> Software.

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
> WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
> COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
> OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
