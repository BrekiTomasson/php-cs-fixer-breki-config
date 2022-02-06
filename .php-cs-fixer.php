<?php

declare(strict_types=1);

$ruleSet = new BrekiTomasson\PhpCsFixer\Config\RuleSet\Php8;

try {
    $configuration = BrekiTomasson\PhpCsFixer\Config\Factory::fromRuleSet($ruleSet);

    $configuration->getFinder()
        ->files()
        ->in(__DIR__ . '/' . 'src');

    $configuration->setCacheFile(__DIR__ . '/.build/php-cs-fixer/php-cs-fixer.cache');

    return $configuration;
} catch (BrekiTomasson\PhpCsFixer\Config\Exceptions\InvalidPhpVersion $exception) {
    echo 'Failed to generate php-cs-fixer configuration: ' . $exception->getMessage();
}
