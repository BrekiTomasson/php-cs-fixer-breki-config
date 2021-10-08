<?php

namespace BrekiTomasson\PhpCsFixer\Config;

use BrekiTomasson\PhpCsFixer\Config\Exceptions\InvalidPhpVersion;
use PhpCsFixer\Config;

class Factory
{
    /**
     * Provide a configuration based on a given RuleSet with optional overrides.
     *
     * @throws InvalidPhpVersion
     */
    public static function fromRuleSet(RuleSet $ruleSet, array $overrideRuleSet = []) : Config
    {
        self::assertPhpVersion($ruleSet->getTargetPhpVersion());

        $configuration = new Config($ruleSet->getName());

        $configuration->setRiskyAllowed(true);

        $configuration->setRules(array_merge(
            $ruleSet->getRules(),
            $overrideRuleSet,
        ));

        return $configuration;
    }

    /**
     * @throws InvalidPhpVersion
     *
     * @see PHP_VERSION_ID in https://www.php.net/manual/en/reserved.constants.php
     */
    protected static function assertPhpVersion(int $ruleSetPhpVersion) : void
    {
        if (\PHP_VERSION_ID < $ruleSetPhpVersion) {
            throw new InvalidPhpVersion(
                'Your current version of PHP is lower than the targeted version of PHP.',
            );
        }
    }
}
