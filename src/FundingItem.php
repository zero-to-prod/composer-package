<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class FundingItem
{
    use DataModel;

    /**
     * Type of funding or platform through which funding is possible.
     *
     * @see $type
     */
    public const type = 'type';
    /**
     * URL to a website with details on funding and a way to fund the package.
     *
     * @see $url
     */
    public const url = 'url';
    /** Type of funding or platform through which funding is possible. */
    public string $type;
    /** URL to a website with details on funding and a way to fund the package. */
    public string $url;
}