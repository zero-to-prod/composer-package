<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class PathRepositoryOptions
{
    use DataModel;

    /** @see $symlink */
    public const symlink = 'symlink';
    public ?bool $symlink = null;
}