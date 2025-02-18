<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class ComposerRepository
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
     * @see  $allow_ssl_downgrade
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const allow_ssl_downgrade = 'allow_ssl_downgrade';
    /**
     * @see  $force_lazy_providers
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const force_lazy_providers = 'force-lazy-providers';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|ComposerRepositoryTypeEnum $type = null;
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
    public null|array $options = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool $allow_ssl_downgrade = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::force_lazy_providers])]
    public null|bool $force_lazy_providers = null;
}