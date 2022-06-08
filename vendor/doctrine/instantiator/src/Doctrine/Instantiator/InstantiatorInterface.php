<?php

namespace Doctrine\Instantiator;

use Doctrine\Instantiator\Exception\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string $className
<<<<<<< HEAD
     * @phpstan-param class-string<T> $className
     *
     * @return object
     * @phpstan-return T
=======
     *
     * @return object
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
     *
     * @throws ExceptionInterface
     *
     * @template T of object
<<<<<<< HEAD
=======
     * @phpstan-param class-string<T> $className
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
     */
    public function instantiate($className);
}
