<?php

namespace BrekiTomasson\PhpCsFixer\Config\RuleSet;

class Php8 extends RulesetAbstract
{
    protected string $name = "Breki's RuleSet for PHP 8.0";

    protected int $targetPhpVersion = 80000;

    /**
     * @todo Organize this more clearly with similar/related rules grouped together.
     */
    protected array $rules = [
        // Unsorted/Other rules.
        '@PSR2'  => true,
        'braces' => [
            'allow_single_line_closure'                         => true,
            'allow_single_line_anonymous_class_with_empty_body' => true,
        ],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'declare_equal_normalize'    => true,
        'echo_tag_syntax'            => [
            'format' => 'long',
        ],
        'elseif'                       => true,
        'fully_qualified_strict_types' => true,
        'function_declaration'         => [
            'closure_function_spacing' => 'one',
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
        'heredoc_to_nowdoc' => true,
        'increment_style'   => [
            'style' => 'post',
        ],
        'lambda_not_used_import'                  => true,
        'native_function_casing'                  => true,
        'native_function_type_declaration_casing' => true,
        'no_alias_language_construct_call'        => true,
        'no_alternative_syntax'                   => true,
        'no_leading_import_slash'                 => true,
        'no_mixed_echo_print'                     => [
            'use' => 'echo',
        ],
        'no_short_bool_cast'             => true,
        'no_trailing_comma_in_list_call' => true,
        'return_assignment'              => true,
        'short_scalar_cast'              => true,
        'simplified_if_return'           => true,
        'simplified_null_return'         => true,
        'standardize_not_equals'         => true,
        'strict_comparison'              => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_continue_to_break'       => true,
        'ternary_to_null_coalescing'     => true,
        'trailing_comma_in_multiline'    => [
            'after_heredoc' => false,
            'elements'      => [
                'arguments',
                'arrays',
                'parameters',
            ],
        ],
        'use_arrow_functions' => true,
        'visibility_required' => [
            'elements' => [
                'method',
                'property',
            ],
        ],
        'void_return' => true,

        // Rules related to overall file structure and design.
        'clean_namespace'  => true,
        'encoding'         => true,
        'full_opening_tag' => true,
        'indentation_type' => true,
        'line_ending'      => true,
        'no_binary_string' => true,
        'no_closing_tag'   => true,
        'ordered_imports'  => [
            'imports_order' => [
                'class',
                'const',
                'function',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'ordered_interfaces' => [
            'direction' => 'ascend',
            'order'     => 'alpha',
        ],
        'ordered_traits'                     => false,
        'single_class_element_per_statement' => true,
        'single_import_per_statement'        => true,
        'single_line_after_imports'          => true,
        'single_quote'                       => true,

        // Rules related to uppercase and lowercase.
        'constant_case' => [
            'case' => 'lower',
        ],
        'lowercase_cast'             => true,
        'lowercase_keywords'         => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing'      => true,
        'magic_method_casing'        => true,

        // Rules related to useless/empty code.
        'no_empty_statement'              => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces'        => true,
        'no_unset_cast'                   => true,
        'no_unused_imports'               => true,
        'no_useless_else'                 => true,
        'no_useless_return'               => true,

        // Rules relating to arrays.
        'array_indentation' => true,
        'array_push'        => true,
        'array_syntax'      => [
            'syntax' => 'short',
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'no_trailing_comma_in_singleline_array' => true,
        'normalize_index_brace'                 => true,
        'trim_array_spaces'                     => true,

        // Rules relating to adding/removing whitespaces before or after specific elements.
        'binary_operator_spaces' => [
            'default'   => 'single_space',
            'operators' => [
                '&&' => 'align_single_space_minimal',
                '||' => 'align_single_space_minimal',
                '=>' => 'align_single_space_minimal',
            ],
        ],
        'cast_spaces'               => true,
        'compact_nullable_typehint' => true,
        'concat_space'              => [
            'spacing' => 'one',
        ],
        'function_typehint_space' => true,
        'include'                 => true,
        'method_argument_space'   => [
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline'                     => 'ensure_fully_multiline',
            'after_heredoc'                    => true,
        ],
        'multiline_whitespace_before_semicolons'      => true,
        'no_leading_namespace_whitespace'             => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_singleline_whitespace_before_semicolons'  => true,
        'no_space_around_double_colon'                => true,
        'no_spaces_after_function_name'               => true,
        'no_spaces_around_offset'                     => [
            'positions' => [
                'inside', 'outside',
            ],
        ],
        'no_spaces_inside_parenthesis'        => true,
        'no_trailing_whitespace'              => true,
        'no_whitespace_before_comma_in_array' => true,
        'not_operator_with_successor_space'   => true,
        'object_operator_without_whitespace'  => true,
        'return_type_declaration'             => [
            'space_before' => 'one',
        ],
        'space_after_semicolon'   => true,
        'switch_case_space'       => true,
        'ternary_operator_spaces' => true,
        'types_spaces'            => [
            'space' => 'single',
        ],
        'unary_operator_spaces'           => true,
        'whitespace_after_comma_in_array' => true,

        // Rules relating to blank lines in code.
        'blank_line_after_namespace'   => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement'  => [
            'statements' => [
                'for',
                'if',
                'return',
            ],
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const'    => 'only_if_meta',
                'method'   => 'one',
                'property' => 'one',
            ],
        ],
        'linebreak_after_opening_tag'        => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc'        => true,
        'no_extra_blank_lines'               => [
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'square_brace_block',
                'return',
                'throw',
                'use',
            ],
        ],
        'no_whitespace_in_blank_line'        => true,
        'single_blank_line_at_eof'           => true,
        'single_blank_line_before_namespace' => true,

        // Rules relating to comments and commenting.
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
        'multiline_comment_opening_closing' => true,
        'no_trailing_whitespace_in_comment' => true,
        'single_line_comment_style'         => [
            'comment_types' => [
                'hash',
            ],
        ],

        // Rules relating to phpdoc.
        'no_superfluous_phpdoc_tags'                    => true,
        'phpdoc_indent'                                 => true,
        'phpdoc_inline_tag_normalizer'                  => true,
        'phpdoc_no_access'                              => true,
        'phpdoc_no_alias_tag'                           => ['replacements' => ['type' => 'var']],
        'phpdoc_no_empty_return'                        => true,
        'no_empty_phpdoc'                               => true,
        'phpdoc_no_package'                             => true,
        'phpdoc_no_useless_inheritdoc'                  => true,
        'phpdoc_return_self_reference'                  => true,
        'phpdoc_scalar'                                 => ['types' => ['boolean', 'callback', 'double', 'integer', 'real', 'str']],
        'phpdoc_separation'                             => true,
        'phpdoc_single_line_var_spacing'                => true,
        'phpdoc_summary'                                => true,
        'phpdoc_tag_type'                               => ['tags' => ['inheritdoc' => 'inline']],
        'phpdoc_trim'                                   => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types'                                  => ['groups' => ['alias', 'meta', 'simple']],
        'phpdoc_types_order'                            => ['null_adjustment' => 'always_first', 'sort_algorithm' => 'alpha'],
        'phpdoc_var_annotation_correct_order'           => true,
        'phpdoc_var_without_name'                       => true,
    ];
}
