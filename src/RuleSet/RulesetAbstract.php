<?php

declare(strict_types=1);

namespace BrekiTomasson\PhpCsFixer\Config\RuleSet;

use BrekiTomasson\PhpCsFixer\Config\RuleSet;
use function trim;

abstract class RulesetAbstract implements RuleSet
{
    /** A list of tags that should be ignored by fixers related to Doctrine. */
    protected const DOCTRINE_IGNORED_TAGS = [
        'abstract',
        'access',
        'after',
        'afterClass',
        'api',
        'author',
        'backupGlobals',
        'backupStaticAttributes',
        'before',
        'beforeClass',
        'category',
        'code',
        'codeCoverageIgnore',
        'codeCoverageIgnoreEnd',
        'codeCoverageIgnoreStart',
        'copyright',
        'covers',
        'coversDefaultClass',
        'coversNothing',
        'dataProvider',
        'depends',
        'deprec',
        'deprecated',
        'encode',
        'enduml',
        'example',
        'exception',
        'expectedException',
        'expectedExceptionCode',
        'expectedExceptionMessage',
        'expectedExceptionMessageRegExp',
        'filesource',
        'final',
        'fix',
        'FIXME',
        'fixme',
        'global',
        'group',
        'ignore',
        'ingroup',
        'inheritdoc',
        'inheritDoc',
        'internal',
        'large',
        'license',
        'link',
        'magic',
        'medium',
        'method',
        'name',
        'noinspection',
        'override',
        'package',
        'package_version',
        'param',
        'preserveGlobalState',
        'private',
        'property',
        'property-read',
        'property-write',
        'requires',
        'return',
        'runInSeparateProcess',
        'runTestsInSeparateProcesses',
        'see',
        'since',
        'small',
        'source',
        'startuml',
        'static',
        'staticvar',
        'staticVar',
        'subpackage',
        'SuppressWarnings',
        'template',
        'test',
        'testdox',
        'throw',
        'throws',
        'ticket',
        'toc',
        'todo',
        'TODO',
        'tutorial',
        'usedBy',
        'uses',
        'uses',
        'var',
        'version',
    ];

    protected string $name = '';

    protected array $rules = [];

    protected int $targetPhpVersion = 0;

    public function __construct(?string $header = null)
    {
        if (null === $header) {
            return;
        }

        $this->rules['header_comment'] = [
            'comment_type' => 'PHPDoc',
            'header' => trim($header),
            'location' => 'after_declare_strict',
            'separate' => 'both',
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function getTargetPhpVersion(): int
    {
        return $this->targetPhpVersion;
    }
}
