<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class PearRepository
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
    /** @see $vendor_alias */
    public const vendor_alias = 'vendor-alias';
    public PearRepositoryTypeEnum $type;
    public string $url;
    public bool $canonical;
    public array $only;
    public array $exclude;
    #[Describe(['from' => self::vendor_alias])]
    public string $vendor_alias;
}