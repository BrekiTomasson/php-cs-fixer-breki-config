<?php

use BrekiTomasson\PhpCsFixer\Config;

$ruleSet = new Config\RuleSet\Php8;

$configuration = Config\Factory::fromRuleSet($ruleSet);

$configuration->getFinder()->in('src');

$configuration->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php-cs-fixer.cache');

return $configuration;
