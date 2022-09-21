<?php

declare(strict_types=1);

namespace BrekiTomasson\PhpCsFixer\Config;

interface RuleSet
{
    public function getName(): string;

    public function getRules(): array;

    public function getTargetPhpVersion(): int;
}
