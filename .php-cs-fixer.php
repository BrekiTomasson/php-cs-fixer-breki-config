<?php

$ruleSet = new BrekiTomasson\PhpCsFixer\Config\RuleSet\Php8;

$configuration = BrekiTomasson\PhpCsFixer\Config\Factory::fromRuleSet($ruleSet);

$configuration->getFinder()->in('src');

$configuration->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php-cs-fixer.cache');

return $configuration;
