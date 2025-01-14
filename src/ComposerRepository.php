<?php

namespace Zerotoprod\ComposerPackage;

use Tests\generated\Options;
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
    public TypeEnum $type;
    public string $url;
    public bool $canonical;
    public array $only;
    public array $exclude;
    public Options $options;
    public bool $allow_ssl_downgrade;
    #[Describe(['from' => self::force_lazy_providers])]
    public bool $force_lazy_providers;
}