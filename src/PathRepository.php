<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class PathRepository
{
    use DataModel;

    /**
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * @see  $url
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const url = 'url';
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
     * @see  $options
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const options = 'options';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|PathRepositoryTypeEnum $type = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $url = null;
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
    public null|PathRepositoryOptions $options = null;
}