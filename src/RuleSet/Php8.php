<?php

declare(strict_types=1);

namespace BrekiTomasson\PhpCsFixer\Config\RuleSet;

/**
 * List of rules.
 *
 * As this file is rapidly growing unwieldy, it might be a good idea, down the line, to break it up into multiple files
 * that are imported separately. For now, an ongoing work is to group all of the rules under the headings defined in
 * https://cs.symfony.com/doc/rules/index.html to make the file more manageable.
 */
class Php8 extends RulesetAbstract
{
    protected string $name = "Breki's RuleSet for PHP 8.x";

    protected array $rules = [
        // Strict Rules.
        'declare_strict_types' => true,
        'declare_parentheses' => true,
        'strict_comparison' => true,
        'strict_param' => true,

        // Casing.
        'constant_case' => ['case' => 'lower'],
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,

        // Cast Notation.
        'lowercase_cast' => true,
        'cast_spaces' => true,
        'modernize_types_casting' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,
        'short_scalar_cast' => true,

        // Unsorted/Other rules.
        '@PSR2' => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'declare_equal_normalize' => ['space' => 'none'],
        'dir_constant' => true,
        'echo_tag_syntax' => [
            'format' => 'long',
            'long_function' => 'echo',
        ],
        'elseif' => true,
        'explicit_indirect_variable' => true,
        'fully_qualified_strict_types' => true,
        'function_declaration' => [
            'closure_function_spacing' => 'one',
            'closure_fn_spacing' => 'none',
        ],
        'function_to_constant' => [
            'functions' => [
                'get_called_class',
                'get_class',
                'get_class_this',
                'php_sapi_name',
                'phpversion',
                'pi',
            ],
        ],
        'increment_style' => ['style' => 'post'],
        'is_null' => true,
        'lambda_not_used_import' => true,
        'logical_operators' => true,
        'method_chaining_indentation' => true,
        'no_alias_language_construct_call' => true,
        'no_alternative_syntax' => true,
        'no_break_comment' => ['comment_text' => 'No break, cascades'],
        'no_homoglyph_names' => true,
        'no_leading_import_slash' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'set_type_to_cast' => true,
        'simplified_if_return' => true,
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'static_lambda' => false,
        'switch_case_semicolon_to_colon' => true,
        'switch_continue_to_break' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => false,
            'elements' => ['arguments', 'arrays', 'parameters'],
        ],
        'use_arrow_functions' => true,
        'visibility_required' => ['elements' => ['const', 'method', 'property']],
        'void_return' => true,

        // Rules related to overall file structure and design.
        'clean_namespace' => true,
        'control_structure_braces' => true,
        'control_structure_continuation_position' => true,
        'encoding' => true,
        'full_opening_tag' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'indentation_type' => true,
        'line_ending' => true,
        'no_superfluous_elseif' => true,
        'no_closing_tag' => true,
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'public',
                'protected',
                'private',
                'case',
                'constant',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property',
                'property_static',
                'property_public',
                'property_protected',
                'property_private',
                'property_public_readonly',
                'property_protected_readonly',
                'property_private_readonly',
                'property_public_static',
                'property_protected_static',
                'property_private_static',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method',
                'method_static',
                'method_public_static',
                'method_public',
                'method_protected_static',
                'method_protected',
                'method_private_static',
                'method_private',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
            'sort_algorithm' => 'alpha',
        ],
        'ordered_interfaces' => [
            'direction' => 'ascend',
            'order' => 'alpha',
        ],
        'ordered_traits' => true,
        'single_class_element_per_statement' => true,
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,

        // Rules related to string notation.
        'string_implicit_backslashes' => [
            'double_quoted' => 'escape',
            'heredoc' => 'escape',
            'single_quoted' => 'unescape',
        ],
        'explicit_string_variable' => true,
        'heredoc_to_nowdoc' => true,
        'no_binary_string' => true,
        'no_trailing_whitespace_in_string' => false,
        'no_useless_concat_operator' => [
            'juggle_simple_strings' => true,
        ],
        'simple_to_complex_string_variable' => false,
        'single_quote' => ['strings_containing_single_quote_chars' => false],

        // Rules related to useless/empty code.
        'no_unneeded_control_parentheses' => [
            'statements' => [
                'break',
                'clone',
                'continue',
                'echo_print',
                'return',
                'switch_case',
                'yield',
            ],
        ],
        'no_unneeded_braces' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,

        // Rules relating to semicolon use.
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'no_multiple_statements_per_line' => true,
        'no_empty_statement' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => false,
        ],

        // Rules relating to return notation.
        'no_useless_return' => true,
        'return_assignment' => true,
        'simplified_null_return' => false,

        // Rules relating to arrays.
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => ['syntax' => 'short'],
        'list_syntax' => ['syntax' => 'short'],

        'normalize_index_brace' => true,
        'trim_array_spaces' => true,

        // Rules relating to whitespacing inside of lines.
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [
                '&&' => 'align_single_space_minimal',
                '||' => 'align_single_space_minimal',
            ],
        ],
        'class_definition' => [
            'multi_line_extends_each_single_line' => true,
            'single_item_single_line' => true,
            'single_line' => true,
        ],
        'compact_nullable_type_declaration' => true,
        'concat_space' => ['spacing' => 'one'],
        'type_declaration_spaces' => true,
        'include' => true,
        'method_argument_space' => [
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline' => 'ensure_fully_multiline',
            'after_heredoc' => true,
        ],
        'no_leading_namespace_whitespace' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_space_around_double_colon' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => [
            'positions' => ['inside', 'outside'],
        ],
        'spaces_inside_parentheses' => [
            'space' => 'none',
        ],
        'no_trailing_comma_in_singleline' => [
            'elements' => [
                'arguments',
                'array_destructuring',
                'array',
                'group_import',
            ],
        ],
        'no_trailing_whitespace' => true,
        'no_whitespace_before_comma_in_array' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => [
            'only_booleans' => false,
            'position' => 'beginning',
        ],
        'return_type_declaration' => ['space_before' => 'none'],
        'single_space_around_construct' => [
            'constructs_followed_by_a_single_space' => [
                'abstract',
                'as',
                'attribute',
                'break',
                'case',
                'catch',
                'class',
                'clone',
                'comment',
                'const',
                'const_import',
                'continue',
                'echo',
                'elseif',
                'enum',
                'extends',
                'final',
                'for',
                'function_import',
                'global',
                'goto',
                'if',
                'implements',
                'include',
                'include_once',
                'instanceof',
                'insteadof',
                'interface',
                'match',
                'named_argument',
                'namespace',
                'new',
                'open_tag_with_echo',
                'php_doc',
                'php_open',
                'print',
                'private',
                'protected',
                'public',
                'readonly',
                'require',
                'require_once',
                'return',
                'static',
                'switch',
                'throw',
                'trait',
                'try',
                'use',
                'use_lambda',
                'use_trait',
                'var',
                'while',
                'yield',
                'yield_from',
            ],
        ],
        'switch_case_space' => true,
        'ternary_operator_spaces' => true,
        'types_spaces' => ['space' => 'none'],
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,

        // Rules relating to blank lines and spacing between lines/elements.
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'case',
                'for',
                'foreach',
                'if',
                'return',
                'switch',
                'throw',
                'try',
            ],
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'only_if_meta',
                'method' => 'one',
                'property' => 'one',
            ],
        ],
        'linebreak_after_opening_tag' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'return',
                'square_brace_block',
                'throw',
                'use',
            ],
        ],
        'no_whitespace_in_blank_line' => true,
        'single_blank_line_at_eof' => true,
        'blank_lines_before_namespace' => [
            'max_line_breaks' => 2,
            'min_line_breaks' => 2,
        ],

        // Rules relating to comments and commenting.
        'align_multiline_comment' => ['comment_type' => 'all_multiline'],
        'multiline_comment_opening_closing' => true,
        'no_empty_comment' => true,
        'no_trailing_whitespace_in_comment' => true,
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],

        // Rules relating to phpdoc.
        'general_phpdoc_annotation_remove' => [
            'annotations' => ['package', 'subpackage'],
            'case_sensitive' => false,
        ],
        'general_phpdoc_tag_rename' => [
            'fix_annotation' => true,
            'fix_inline' => true,
            'replacements' => ['inheritDocs' => 'inheritDoc'],
            'case_sensitive' => false,
        ],
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
        'phpdoc_align' => [
            'align' => 'vertical',
            'tags' => [
                'param',
                'property',
                'property-read',
                'property-write',
                'return',
                'throws',
                'type',
                'var',
                'method',
            ],
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => [
            'tags' => [
                'example',
                'id',
                'internal',
                'inheritdoc',
                'inheritdocs',
                'link',
                'source',
                'toc',
                'tutorial',
            ],
        ],
        'phpdoc_line_span' => [
            'const' => 'single',
            'method' => 'single',
            'property' => 'single',
        ],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => [
            'replacements' => ['type' => 'var'],
        ],
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => [
            'order' => [
                'param',
                'property',
                'property-read',
                'property-write',
                'method',
                'mixin',
                'throws',
                'return',
            ],
        ],
        'phpdoc_order_by_value' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => [
            'groups' => [
                ['deprecated'],
                ['link', 'see', 'since'],
                ['author', 'copyright', 'license'],
                ['category', 'package', 'subpackage'],
                ['property', 'property-read', 'property-write'],
                ['throws'],
                ['return'],
            ],
        ],
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_tag_casing' => true,
        'phpdoc_tag_type' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => [
            'groups' => ['alias', 'meta', 'simple'],
        ],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,

        // Rules relating to PHPUnit.
        'php_unit_construct' => [
            'assertions' => [
                'assertSame',
                'assertEquals',
                'assertNotEquals',
                'assertNotSame',
            ],
        ],
        'php_unit_dedicate_assert' => ['target' => 'newest'],
        'php_unit_dedicate_assert_internal_type' => ['target' => 'newest'],
        'php_unit_expectation' => ['target' => 'newest'],
        'php_unit_fqcn_annotation' => true,
        'php_unit_internal_class' => [
            'types' => ['normal', 'final', 'abstract'],
        ],
        'php_unit_method_casing' => ['case' => 'camel_case'],
        'php_unit_mock' => ['target' => 'newest'],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => ['target' => 'newest'],
        'php_unit_no_expectation_annotation' => [
            'target' => 'newest',
            'use_class_const' => true,
        ],
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_size_class' => ['group' => 'small'],
        'php_unit_strict' => false,
        'php_unit_test_annotation' => ['style' => 'prefix'],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'this',
            'methods' => [],
        ],
        'php_unit_test_class_requires_covers' => true,
    ];

    protected int $targetPhpVersion = 80000;
}
