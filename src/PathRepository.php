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
    public null|PathRepositoryTypeEnum $type = null;
    public null|string $url = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
    public null|PathRepositoryOptions $options = null;
}