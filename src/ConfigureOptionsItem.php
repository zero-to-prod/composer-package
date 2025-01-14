<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class ConfigureOptionsItem
{
    use DataModel;

    /**
     * The name of the flag, this would typically be prefixed with `--`, for example, the value 'the-flag' would be passed as `./configure --the-flag`.
     *
     * @see $name
     */
    public const name = 'name';
    /**
     * If this is set to true, the flag needs a value (e.g. --with-somelib=<path>), otherwise it is a flag without a value (e.g. --enable-some-feature).
     *
     * @see $needs_value
     */
    public const needs_value = 'needs-value';
    /**
     * The description of what the flag does or means.
     *
     * @see $description
     */
    public const description = 'description';
    /** The name of the flag, this would typically be prefixed with `--`, for example, the value 'the-flag' would be passed as `./configure --the-flag`. */
    public string $name;
    /** If this is set to true, the flag needs a value (e.g. --with-somelib=<path>), otherwise it is a flag without a value (e.g. --enable-some-feature). */
    #[Describe(['from' => self::needs_value])]
    public bool $needs_value;
    /** The description of what the flag does or means. */
    public string $description;
}