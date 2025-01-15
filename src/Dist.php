<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class Dist
{
    use DataModel;

    /** @see $type */
    public const type = 'type';
    /** @see $url */
    public const url = 'url';
    /** @see $reference */
    public const reference = 'reference';
    /** @see $shasum */
    public const shasum = 'shasum';
    /** @see $mirrors */
    public const mirrors = 'mirrors';
    public null|string $type = null;
    public null|string $url = null;
    public null|string $reference = null;
    public null|string $shasum = null;
    public null|array $mirrors = null;
}