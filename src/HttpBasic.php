<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class HttpBasic
{
    use DataModel;

    /**
     * The username used for HTTP Basic authentication
     *
     * @see $username
     */
    public const username = 'username';
    /**
     * The username used for HTTP Basic authentication
     *
     * @see $password
     */
    public const password = 'password';
    /** The username used for HTTP Basic authentication */
    public null|string $username = null;

    /** The password used for HTTP Basic authentication */
    public null|string $password = null;
}