<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

use SebastianBergmann\CodeCoverage\Filter;

final class CacheWarmer
{
    public function warmCache(string $cacheDirectory, bool $useAnnotationsForIgnoringCode, bool $ignoreDeprecatedCode, Filter $filter): void
    {
<<<<<<< HEAD
        $analyser = new CachingFileAnalyser(
            $cacheDirectory,
            new ParsingFileAnalyser(
=======
        $coveredFileAnalyser = new CachingCoveredFileAnalyser(
            $cacheDirectory,
            new ParsingCoveredFileAnalyser(
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
                $useAnnotationsForIgnoringCode,
                $ignoreDeprecatedCode
            )
        );

<<<<<<< HEAD
        foreach ($filter->files() as $file) {
            $analyser->process($file);
=======
        $uncoveredFileAnalyser = new CachingUncoveredFileAnalyser(
            $cacheDirectory,
            new ParsingUncoveredFileAnalyser
        );

        foreach ($filter->files() as $file) {
            $coveredFileAnalyser->process($file);

            /* @noinspection UnusedFunctionResultInspection */
            $uncoveredFileAnalyser->executableLinesIn($file);
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
        }
    }
}
