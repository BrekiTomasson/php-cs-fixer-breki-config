# Changelog

## v1.1.7 (2022-09-26)

- Replaced deprecated rules `no_trailing_comma_in_list_call` and `no_trailing_comma_in_singleline_array` with `no_trailing_comma_in_singleline`.

## v1.1.6 (2022-09-21)

- Restored `declare_equal_normalize['space']` to `'none'`.

## v1.1.5 (2022-09-13)

- Added `control_structure_continuation_position` rule.
- Added `phpdoc_tag_casing` rule.
- Changed `'phpdoc_line_span['method']` from `multi` to `single`.
- Changed order of contents in `phpdoc_separation['groups']`.
- Restored `phpdoc_order_by_value` to default values.
- Restored `phpdoc_return_self_reference` to default values.
- Restored `phpdoc_scalar` to default values.
- Restored `phpdoc_tag_type` to default values.
- Updated `phpdoc_order` to cover more annotations.

## v1.1.4 (2022-09-12)

- Changed `return_type_declaration['space_before']` from `one` to `none`.

## v1.1.3 (2022-08-10)

- No new features or changes, only minor code refactoring behind the scenes.

## v1.1.2 (2022-08-09)

- Minor tweaks to aligning `=>` statements
- Fixes to rule that would incorrectly remove `return null` statements.

## v1.1.1 (2022-08-02)

- Added 'assign_null_coalescing_to_coalesce_equal' rule.
- Changed `types_spaces` from `single` to `none`.

## v1.1.0 (2022-02-06)

First minor release since I released this package. While none of the changes should be breaking, the fact that there have been multiple, and quite extensive,
changes to the rules makes this release no longer a candidate for a simple patch release. That said, code formatted using `v1.0.2` should still come out looking
more or less the same as code formatted using `v1.1.0`, with two major differences:

1. `v1.1.0` introduces a set of sorting rules for the contents of a class.
2. `v1.1.0` converts existing `protected` variables and methods to `private` where possible.

- Added `const` to list of elements in `visibility_required` rule.
- Added `dir_constant` rule.
- Added `global_namespace_import` rule.
- Added `semicolon_after_instruction` rule.
- Added `escape_implicit_backslashes` rule.
- Added `explicit_string_variable` rule.
- Added `no_trailing_whitespace_in_string` rule, set to `false`.
- Added `simple_to_complex_string_variable` rule, set to `false`.
- Added `is_null` rule.
- Added `general_phpdoc_annotation_remove` rule.
- Added `class_definition` rule.
- Added `modernize_types_casting` rule.
- Added `no_break_comment` rule.
- Added `operator_linebreak` rule.
- Added `standardize_increment` rule.
- Added `no_homoglyph_names` rule.
- Added `no_empty_comment` rule.
- Added `no_superfluous_elseif` rule.
- Added `ordered_class_elements` rule.
- Added `protected_to_private` rule.
- Added `logical_operators` rule.
- Added `set_type_to_cast` rule.
- Added `single_space_after_construct` rule.
- Added `static_lambda` rule.
- Added/updated multiple rules relating to `phpunit`.
- Added/updated multiple rules relating to `phpdoc`.
- Changed `ordered_traits` from `false` to `true`.
- Formatted/sorted rule list to make it more human-readable.
- Updated `declare_equal_normalize` from `true` to `['space' => 'none']`
- Updated `no_unneeded_control_parentheses` with list of `statements`.
- Updated name of Ruleset to reflect it's for PHP `v8.x`, not PHP `v8.0`.

## v1.0.2 (2022-02-05)

- Updated `php-cs-fixer` dependency from `~v3.2.1` to `^v3.5`.

## v1.0.1 (2021-10-08)

- Fixed typo in packagist name.

## v1.0.0 (2021-10-08)

- First public release.
