<?php

namespace Zerotoprod\ComposerPackage;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
enum VcsRepositoryTypeEnum: string
{
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case vcs = "vcs";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case github = "github";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case git = "git";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case gitlab = "gitlab";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case bitbucket = "bitbucket";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case git_bitbucket = "git-bitbucket";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case hg = "hg";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case fossil = "fossil";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case perforce = "perforce";
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    case svn = "svn";
}