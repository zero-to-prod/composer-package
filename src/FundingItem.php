<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class FundingItem
{
    use DataModel;

    /**
     * Type of funding or platform through which funding is possible.
     *
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * URL to a website with details on funding and a way to fund the package.
     *
     * @see  $url
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const url = 'url';
    /**
     * Type of funding or platform through which funding is possible.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $type = null;
    /**
     * URL to a website with details on funding and a way to fund the package.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $url = null;
}