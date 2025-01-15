<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class PackageRepository
{
    use DataModel;

    /** @see $type */
    public const type = 'type';
    /** @see $canonical */
    public const canonical = 'canonical';
    /** @see $only */
    public const only = 'only';
    /** @see $exclude */
    public const exclude = 'exclude';
    /** @see $package */
    public const package = 'package';
    public null|PackageRepositoryTypeEnum $type = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
    public null|array $package = null;
}