<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class PathRepositoryOptions
{
    use DataModel;

    /** @see $symlink */
    public const symlink = 'symlink';
    public null|bool $symlink = null;
}