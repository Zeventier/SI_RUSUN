<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ClassIsFinalException extends \PHPUnit\Framework\Exception implements Exception
{
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
<<<<<<< HEAD
                'Class "%s" is declared "final" and cannot be mocked',
=======
                'Class "%s" is declared "final" and cannot be doubled',
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
                $className
            )
        );
    }
}
