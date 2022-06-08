<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report;

use function dirname;
use function file_put_contents;
use function serialize;
use function sprintf;
use SebastianBergmann\CodeCoverage\CodeCoverage;
<<<<<<< HEAD
use SebastianBergmann\CodeCoverage\Driver\WriteOperationFailedException;
use SebastianBergmann\CodeCoverage\Util\Filesystem;
=======
use SebastianBergmann\CodeCoverage\Directory;
use SebastianBergmann\CodeCoverage\Driver\WriteOperationFailedException;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30

final class PHP
{
    public function process(CodeCoverage $coverage, ?string $target = null): string
    {
        $buffer = sprintf(
            "<?php
return \unserialize(<<<'END_OF_COVERAGE_SERIALIZATION'%s%s%sEND_OF_COVERAGE_SERIALIZATION%s);",
            PHP_EOL,
            serialize($coverage),
            PHP_EOL,
            PHP_EOL
        );

        if ($target !== null) {
<<<<<<< HEAD
            Filesystem::createDirectory(dirname($target));
=======
            Directory::create(dirname($target));
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30

            if (@file_put_contents($target, $buffer) === false) {
                throw new WriteOperationFailedException($target);
            }
        }

        return $buffer;
    }
}
