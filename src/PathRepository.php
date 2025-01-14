<?php

namespace Zerotoprod\ComposerPackage;

use Tests\generated\Options;
use Zerotoprod\DataModel\DataModel;

class PathRepository
{
    use DataModel;

    /** @see $type */
    public const type = 'type';
    /** @see $url */
    public const url = 'url';
    /** @see $canonical */
    public const canonical = 'canonical';
    /** @see $only */
    public const only = 'only';
    /** @see $exclude */
    public const exclude = 'exclude';
    /** @see $options */
    public const options = 'options';
    public TypeEnum $type;
    public string $url;
    public bool $canonical;
    public array $only;
    public array $exclude;
    public Options $options;
}