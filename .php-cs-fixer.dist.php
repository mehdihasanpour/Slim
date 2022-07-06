<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__,
    __DIR__.'/tests',
]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'array_push' => true,
        'ereg_to_preg' => true,
        'mb_str_functions' => true,
        'modernize_strpos' => true,
        'set_type_to_cast' => true,
        'array_syntax' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_superfluous_elseif' => true,
        'no_useless_else' => true,
        'simplified_if_return' => true,
        'switch_continue_to_break' => true,
        'lambda_not_used_import' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'dir_constant' => true,
        'php_unit_construct' => true,
        'no_useless_return' => true,
        'return_assignment' => true,
        'simplified_null_return' => true,
        'strict_comparison' => true,
        'explicit_string_variable' => true,
    ])
    ->setFinder($finder);
