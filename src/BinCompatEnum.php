<?php

namespace Zerotoprod\ComposerPackage;

/**
 * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
enum BinCompatEnum: string
{
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case auto = 'auto';
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case full = 'full';
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case proxy = 'proxy';
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case symlink = 'symlink';
}