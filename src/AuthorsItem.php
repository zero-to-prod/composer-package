<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class AuthorsItem
{
    use DataModel;

    /**
     * Full name of the author.
     *
     * @see  $name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const name = 'name';
    /**
     * Email address of the author.
     *
     * @see  $email
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const email = 'email';
    /**
     * Homepage URL for the author.
     *
     * @see  $homepage
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const homepage = 'homepage';
    /**
     * Author's role in the project.
     *
     * @see  $role
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const role = 'role';
    /**
     * Full name of the author.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $name = null;
    /**
     * Email address of the author.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $email = null;
    /**
     * Homepage URL for the author.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $homepage = null;
    /**
     * Author's role in the project.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $role = null;
}