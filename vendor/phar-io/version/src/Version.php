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

class Version {
    /** @var string */
    private $originalVersionString;

    /** @var VersionNumber */
    private $major;

    /** @var VersionNumber */
    private $minor;

    /** @var VersionNumber */
    private $patch;

    /** @var null|PreReleaseSuffix */
    private $preReleaseSuffix;

<<<<<<< HEAD
    /** @var null|BuildMetaData */
    private $buildMetadata;

=======
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    public function __construct(string $versionString) {
        $this->ensureVersionStringIsValid($versionString);
        $this->originalVersionString = $versionString;
    }

<<<<<<< HEAD
    /**
     * @throws NoPreReleaseSuffixException
     */
=======
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    public function getPreReleaseSuffix(): PreReleaseSuffix {
        if ($this->preReleaseSuffix === null) {
            throw new NoPreReleaseSuffixException('No pre-release suffix set');
        }

        return $this->preReleaseSuffix;
    }

    public function getOriginalString(): string {
        return $this->originalVersionString;
    }

    public function getVersionString(): string {
        $str = \sprintf(
            '%d.%d.%d',
            $this->getMajor()->getValue() ?? 0,
            $this->getMinor()->getValue() ?? 0,
            $this->getPatch()->getValue() ?? 0
        );

        if (!$this->hasPreReleaseSuffix()) {
            return $str;
        }

        return $str . '-' . $this->getPreReleaseSuffix()->asString();
    }

    public function hasPreReleaseSuffix(): bool {
        return $this->preReleaseSuffix !== null;
    }

    public function equals(Version $other): bool {
<<<<<<< HEAD
        if ($this->getVersionString() !== $other->getVersionString()) {
            return false;
        }

        if ($this->hasBuildMetaData() !== $other->hasBuildMetaData()) {
            return false;
        }

        if ($this->hasBuildMetaData() && $other->hasBuildMetaData() &&
            !$this->getBuildMetaData()->equals($other->getBuildMetaData())) {
            return false;
        }

        return true;
=======
        return $this->getVersionString() === $other->getVersionString();
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    }

    public function isGreaterThan(Version $version): bool {
        if ($version->getMajor()->getValue() > $this->getMajor()->getValue()) {
            return false;
        }

        if ($version->getMajor()->getValue() < $this->getMajor()->getValue()) {
            return true;
        }

        if ($version->getMinor()->getValue() > $this->getMinor()->getValue()) {
            return false;
        }

        if ($version->getMinor()->getValue() < $this->getMinor()->getValue()) {
            return true;
        }

        if ($version->getPatch()->getValue() > $this->getPatch()->getValue()) {
            return false;
        }

        if ($version->getPatch()->getValue() < $this->getPatch()->getValue()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return false;
        }

        if ($version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && $this->hasPreReleaseSuffix()) {
            return false;
        }

        return $this->getPreReleaseSuffix()->isGreaterThan($version->getPreReleaseSuffix());
    }

    public function getMajor(): VersionNumber {
        return $this->major;
    }

    public function getMinor(): VersionNumber {
        return $this->minor;
    }

    public function getPatch(): VersionNumber {
        return $this->patch;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true BuildMetaData $this->buildMetadata
     * @psalm-assert-if-true BuildMetaData $this->getBuildMetaData()
     */
    public function hasBuildMetaData(): bool {
        return $this->buildMetadata !== null;
    }

    /**
     * @throws NoBuildMetaDataException
     */
    public function getBuildMetaData(): BuildMetaData {
        if (!$this->hasBuildMetaData()) {
            throw new NoBuildMetaDataException('No build metadata set');
        }

        return $this->buildMetadata;
    }

    /**
=======
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
     * @param string[] $matches
     *
     * @throws InvalidPreReleaseSuffixException
     */
    private function parseVersion(array $matches): void {
        $this->major = new VersionNumber((int)$matches['Major']);
        $this->minor = new VersionNumber((int)$matches['Minor']);
        $this->patch = isset($matches['Patch']) ? new VersionNumber((int)$matches['Patch']) : new VersionNumber(0);

<<<<<<< HEAD
        if (isset($matches['PreReleaseSuffix']) && $matches['PreReleaseSuffix'] !== '') {
            $this->preReleaseSuffix = new PreReleaseSuffix($matches['PreReleaseSuffix']);
        }

        if (isset($matches['BuildMetadata'])) {
            $this->buildMetadata = new BuildMetaData($matches['BuildMetadata']);
        }
=======
        if (isset($matches['PreReleaseSuffix'])) {
            $this->preReleaseSuffix = new PreReleaseSuffix($matches['PreReleaseSuffix']);
        }
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    }

    /**
     * @param string $version
     *
     * @throws InvalidVersionException
     */
    private function ensureVersionStringIsValid($version): void {
        $regex = '/^v?
<<<<<<< HEAD
            (?P<Major>0|[1-9]\d*)
            \\.
            (?P<Minor>0|[1-9]\d*)
            (\\.
                (?P<Patch>0|[1-9]\d*)
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|rc|alpha|a|patch|p|pl)\.?\d*))
            )?
            (?:
                \\+
                (?P<BuildMetadata>[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-@]+)*)
            )?
=======
            (?<Major>(0|(?:[1-9]\d*)))
            \\.
            (?<Minor>(0|(?:[1-9]\d*)))
            (\\.
                (?<Patch>(0|(?:[1-9]\d*)))
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|rc|alpha|a|patch|p)\.?\d*))
            )?       
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
        $/xi';

        if (\preg_match($regex, $version, $matches) !== 1) {
            throw new InvalidVersionException(
                \sprintf("Version string '%s' does not follow SemVer semantics", $version)
            );
        }

        $this->parseVersion($matches);
    }
}
