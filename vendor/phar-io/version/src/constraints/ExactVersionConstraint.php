<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Version;

class ExactVersionConstraint extends AbstractVersionConstraint {
    public function complies(Version $version): bool {
<<<<<<< HEAD
        $other = $version->getVersionString();

        if ($version->hasBuildMetaData()) {
            $other .= '+' . $version->getBuildMetaData()->asString();
        }

        return $this->asString() === $other;
=======
        return $this->asString() === $version->getVersionString();
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    }
}
