<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class Source
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
     * @see  $reference
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const reference = 'reference';
    /**
     * @see  $mirrors
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const mirrors = 'mirrors';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $type = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $url = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $reference = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $mirrors = null;
}