<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->files()
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->exclude('vendor')
    ->exclude('bin')
    ->in(__DIR__.'/src')
;

return (new PhpCsFixer\Config())
    ->setCacheFile(__DIR__.'/.php-cs-fixer.cache')
    ->setRules(array(
        '@Symfony' => true,
        'phpdoc_summary' => false,
    ))
    ->setFinder($finder)
;
