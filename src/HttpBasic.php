<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class HttpBasic
{
    use DataModel;

    /**
     * The username used for HTTP Basic authentication
     *
     * @see  $username
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const username = 'username';
    /**
     * The username used for HTTP Basic authentication
     *
     * @see  $password
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const password = 'password';
    /**
     * The username used for HTTP Basic authentication
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $username = null;

    /**
     * The password used for HTTP Basic authentication
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $password = null;
}