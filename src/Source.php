<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class Source
{
    use DataModel;

    /** @see $type */
    public const type = 'type';
    /** @see $url */
    public const url = 'url';
    /** @see $reference */
    public const reference = 'reference';
    /** @see $mirrors */
    public const mirrors = 'mirrors';
    public string $type;
    public string $url;
    public string $reference;
    public array $mirrors;
}