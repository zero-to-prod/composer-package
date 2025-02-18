<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class ConfigureOptionsItem
{
    use DataModel;

    /**
     * The name of the flag, this would typically be prefixed with `--`, for example, the value 'the-flag' would be passed as `./configure --the-flag`.
     *
     * @see  $name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const name = 'name';
    /**
     * If this is set to true, the flag needs a value (e.g. --with-somelib=<path>), otherwise it is a flag without a value (e.g. --enable-some-feature).
     *
     * @see  $needs_value
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const needs_value = 'needs-value';
    /**
     * The description of what the flag does or means.
     *
     * @see  $description
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const description = 'description';
    /**
     * The name of the flag, this would typically be prefixed with `--`, for example, the value 'the-flag' would be passed as `./configure --the-flag`.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $name = null;
    /**
     * If this is set to true, the flag needs a value (e.g. --with-somelib=<path>), otherwise it is a flag without a value (e.g. --enable-some-feature).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::needs_value])]
    public null|bool $needs_value = null;
    /**
     * The description of what the flag does or means.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $description = null;
}