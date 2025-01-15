<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class ArtifactRepository
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
    public null|ArtifactRepositoryTypeEnum $type = null;
    public null|string $url = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
}