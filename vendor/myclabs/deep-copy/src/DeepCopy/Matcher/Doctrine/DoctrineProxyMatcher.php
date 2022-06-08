<?php

namespace DeepCopy\Matcher\Doctrine;

use DeepCopy\Matcher\Matcher;
<<<<<<< HEAD
use Doctrine\Persistence\Proxy;
=======
use Doctrine\Common\Persistence\Proxy;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30

/**
 * @final
 */
class DoctrineProxyMatcher implements Matcher
{
    /**
     * Matches a Doctrine Proxy class.
     *
     * {@inheritdoc}
     */
    public function matches($object, $property)
    {
        return $object instanceof Proxy;
    }
}
