<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use function preg_match;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression
{
    /**
     * @return false|int
     */
    public static function safeMatch(string $pattern, string $subject)
    {
        return ErrorHandler::invokeIgnoringWarnings(
<<<<<<< HEAD
            static function () use ($pattern, $subject) {
=======
            static function () use ($pattern, $subject)
            {
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
                return preg_match($pattern, $subject);
            }
        );
    }
}
