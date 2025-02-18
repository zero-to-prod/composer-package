<?php

namespace Zerotoprod\ComposerPackage;

/**
 * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
enum GitlabProtocolEnum: string
{
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case git = 'git';
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case http = 'http';
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case https = 'https';
}