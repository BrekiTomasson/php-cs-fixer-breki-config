<?php

namespace BrekiTomasson\PhpCsFixer\Config;

interface RuleSet
{
    /**
     * @return string The name of the RuleSet being provided.
     */
    public function getName() : string;

    /**
     * @return array The php-cs-fixer RuleSet being provided.
     */
    public function getRules() : array;

    /**
     * @see PHP_VERSION_ID in https://www.php.net/manual/en/reserved.constants.php
     *
     * @return int The minimum required PHP version.
     */
    public function getTargetPhpVersion() : int;
}
