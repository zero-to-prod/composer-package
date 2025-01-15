<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class ComposerRepository
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
    /** @see $allow_ssl_downgrade */
    public const allow_ssl_downgrade = 'allow_ssl_downgrade';
    /** @see $force_lazy_providers */
    public const force_lazy_providers = 'force-lazy-providers';
    public null|ComposerRepositoryTypeEnum $type = null;
    public null|string $url = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
    public null|array $options = null;
    public null|bool $allow_ssl_downgrade = null;
    #[Describe(['from' => self::force_lazy_providers])]
    public null|bool $force_lazy_providers = null;
}