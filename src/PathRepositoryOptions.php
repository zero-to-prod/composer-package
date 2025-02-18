<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class PathRepositoryOptions
{
    use DataModel;

    /**
     * @see  $symlink
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const symlink = 'symlink';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool $symlink = null;
}