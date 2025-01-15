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
    public null|PearRepositoryTypeEnum $type = null;
    public null|string $url = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
    #[Describe(['from' => self::vendor_alias])]
    public null|string $vendor_alias = null;
}