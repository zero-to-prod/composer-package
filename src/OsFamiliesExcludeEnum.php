<?php

namespace Zerotoprod\ComposerPackage;

/**
 * The name of the OS family to exclude.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
enum OsFamiliesExcludeEnum: string
{
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case windows = 'windows';
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case bsd = 'bsd';
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case darwin = 'darwin';
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case solaris = 'solaris';
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case linux = 'linux';
    /**
     * The name of the OS family to exclude.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case unknown = 'unknown';
}