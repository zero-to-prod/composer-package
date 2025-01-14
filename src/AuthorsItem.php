<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class AuthorsItem
{
    use DataModel;

    /**
     * Full name of the author.
     *
     * @see $name
     */
    public const name = 'name';
    /**
     * Email address of the author.
     *
     * @see $email
     */
    public const email = 'email';
    /**
     * Homepage URL for the author.
     *
     * @see $homepage
     */
    public const homepage = 'homepage';
    /**
     * Author's role in the project.
     *
     * @see $role
     */
    public const role = 'role';
    /** Full name of the author. */
    public string $name;
    /** Email address of the author. */
    public string $email;
    /** Homepage URL for the author. */
    public string $homepage;
    /** Author's role in the project. */
    public string $role;
}