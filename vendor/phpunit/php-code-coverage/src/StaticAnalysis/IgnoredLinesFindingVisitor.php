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

use function array_merge;
use function range;
use function strpos;
use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Function_;
use PhpParser\Node\Stmt\Interface_;
use PhpParser\Node\Stmt\Trait_;
<<<<<<< HEAD
=======
use PhpParser\NodeTraverser;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
use PhpParser\NodeVisitorAbstract;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class IgnoredLinesFindingVisitor extends NodeVisitorAbstract
{
    /**
     * @psalm-var list<int>
     */
    private $ignoredLines = [];

    /**
     * @var bool
     */
    private $useAnnotationsForIgnoringCode;

    /**
     * @var bool
     */
    private $ignoreDeprecated;

    public function __construct(bool $useAnnotationsForIgnoringCode, bool $ignoreDeprecated)
    {
        $this->useAnnotationsForIgnoringCode = $useAnnotationsForIgnoringCode;
        $this->ignoreDeprecated              = $ignoreDeprecated;
    }

<<<<<<< HEAD
    public function enterNode(Node $node): void
=======
    public function enterNode(Node $node): ?int
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    {
        if (!$node instanceof Class_ &&
            !$node instanceof Trait_ &&
            !$node instanceof Interface_ &&
            !$node instanceof ClassMethod &&
            !$node instanceof Function_) {
<<<<<<< HEAD
            return;
        }

        if ($node instanceof Class_ && $node->isAnonymous()) {
            return;
=======
            return null;
        }

        if ($node instanceof Class_ && $node->isAnonymous()) {
            return null;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
        }

        // Workaround for https://bugs.xdebug.org/view.php?id=1798
        if ($node instanceof Class_ ||
            $node instanceof Trait_ ||
            $node instanceof Interface_) {
            $this->ignoredLines[] = $node->getStartLine();
        }

        if (!$this->useAnnotationsForIgnoringCode) {
<<<<<<< HEAD
            return;
        }

        if ($node instanceof Interface_) {
            return;
=======
            return null;
        }

        if ($node instanceof Interface_) {
            return null;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
        }

        $docComment = $node->getDocComment();

        if ($docComment === null) {
<<<<<<< HEAD
            return;
=======
            return null;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
        }

        if (strpos($docComment->getText(), '@codeCoverageIgnore') !== false) {
            $this->ignoredLines = array_merge(
                $this->ignoredLines,
                range($node->getStartLine(), $node->getEndLine())
            );
        }

        if ($this->ignoreDeprecated && strpos($docComment->getText(), '@deprecated') !== false) {
            $this->ignoredLines = array_merge(
                $this->ignoredLines,
                range($node->getStartLine(), $node->getEndLine())
            );
        }
<<<<<<< HEAD
=======

        if ($node instanceof ClassMethod || $node instanceof Function_) {
            return NodeTraverser::DONT_TRAVERSE_CHILDREN;
        }

        return null;
>>>>>>> 44ccf595db7c3c3c71635086dad7d6c5b6625f30
    }

    /**
     * @psalm-return list<int>
     */
    public function ignoredLines(): array
    {
        return $this->ignoredLines;
    }
}
