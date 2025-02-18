<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * Options for creating package archives for distribution.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
class Archive
{
    use DataModel;

    /**
     * A base name for archive.
     *
     * @see  $name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const name = 'name';
    /**
     * A list of patterns for paths to exclude or include if prefixed with an exclamation mark.
     *
     * @see  $exclude
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const exclude = 'exclude';
    /**
     * A base name for archive.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $name = null;
    /**
     * A list of patterns for paths to exclude or include if prefixed with an exclamation mark.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $exclude = null;
}