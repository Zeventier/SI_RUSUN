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
final class InvalidMethodNameException extends \PHPUnit\Framework\Exception implements Exception
{
    public function __construct(string $method)
    {
        parent::__construct(
            sprintf(
<<<<<<< HEAD
                'Cannot stub or mock method with invalid name "%s"',
=======
                'Cannot double method with invalid name "%s"',
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
                $method
            )
        );
    }
}
