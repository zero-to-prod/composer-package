<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class InlinePackage
{
    use DataModel;

    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @see $name
     */
    public const name = 'name';
    /** @see $type */
    public const type = 'type';
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @see $target_dir
     */
    public const target_dir = 'target-dir';
    /** @see $description */
    public const description = 'description';
    /** @see $keywords */
    public const keywords = 'keywords';
    /** @see $homepage */
    public const homepage = 'homepage';
    /** @see $version */
    public const version = 'version';
    /** @see $time */
    public const time = 'time';
    /** @see $license */
    public const license = 'license';
    /** @see $authors */
    public const authors = 'authors';
    /** @see $require */
    public const require = 'require';
    /** @see $replace */
    public const replace = 'replace';
    /** @see $conflict */
    public const conflict = 'conflict';
    /** @see $provide */
    public const provide = 'provide';
    /** @see $require_dev */
    public const require_dev = 'require-dev';
    /** @see $suggest */
    public const suggest = 'suggest';
    /** @see $extra */
    public const extra = 'extra';
    /** @see $autoload */
    public const autoload = 'autoload';
    /** @see $archive */
    public const archive = 'archive';
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @see $bin
     */
    public const bin = 'bin';
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @see $include_path
     */
    public const include_path = 'include-path';
    /** @see $source */
    public const source = 'source';
    /** @see $dist */
    public const dist = 'dist';
    /** Package name, including 'vendor-name/' prefix. */
    public string $name;
    public string $type;
    /** DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility. */
    #[Describe(['from' => self::target_dir])]
    public string $target_dir;
    public string $description;
    public array $keywords;
    public string $homepage;
    public string $version;
    public string $time;
    public string|array $license;
    public $authors;
    public array $require;
    public array $replace;
    public array $conflict;
    public array $provide;
    #[Describe(['from' => self::require_dev])]
    public array $require_dev;
    public array $suggest;
    public object|array $extra;
    public $autoload;
    public Archive $archive;
    /** A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config). */
    public string|array $bin;
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::include_path])]
    public array $include_path;
    public $source;
    public $dist;
}