<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/** Options for creating package archives for distribution. */
class Archive
{
    use DataModel;

    /**
     * A base name for archive.
     *
     * @see $name
     */
    public const name = 'name';
    /**
     * A list of patterns for paths to exclude or include if prefixed with an exclamation mark.
     *
     * @see $exclude
     */
    public const exclude = 'exclude';
    /** A base name for archive. */
    public string $name;
    /**
     * A list of patterns for paths to exclude or include if prefixed with an exclamation mark.
     *
     * @var array
     */
    public array $exclude;
}