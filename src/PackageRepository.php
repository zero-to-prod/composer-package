<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class PackageRepository
{
    use DataModel;

    /**
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * @see  $canonical
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const canonical = 'canonical';
    /**
     * @see  $only
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const only = 'only';
    /**
     * @see  $exclude
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const exclude = 'exclude';
    /**
     * @see  $package
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const package = 'package';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|PackageRepositoryTypeEnum $type = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool $canonical = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $only = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $exclude = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $package = null;
}