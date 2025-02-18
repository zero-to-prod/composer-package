<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class InlinePackage
{
    use DataModel;

    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @see  $name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const name = 'name';
    /**
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @see  $target_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const target_dir = 'target-dir';
    /**
     * @see  $description
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const description = 'description';
    /**
     * @see  $keywords
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const keywords = 'keywords';
    /**
     * @see  $homepage
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const homepage = 'homepage';
    /**
     * @see  $version
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const version = 'version';
    /**
     * @see  $time
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const time = 'time';
    /**
     * @see  $license
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const license = 'license';
    /**
     * @see  $authors
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const authors = 'authors';
    /**
     * @see  $require
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const require = 'require';
    /**
     * @see  $replace
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const replace = 'replace';
    /**
     * @see  $conflict
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const conflict = 'conflict';
    /**
     * @see  $provide
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const provide = 'provide';
    /**
     * @see  $require_dev
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const require_dev = 'require-dev';
    /**
     * @see  $suggest
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const suggest = 'suggest';
    /**
     * @see  $extra
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const extra = 'extra';
    /**
     * @see  $autoload
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const autoload = 'autoload';
    /**
     * @see  $archive
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const archive = 'archive';
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @see  $bin
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bin = 'bin';
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @see  $include_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const include_path = 'include-path';
    /**
     * @see  $source
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const source = 'source';
    /**
     * @see  $dist
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const dist = 'dist';
    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $name;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $type;
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::target_dir])]
    public null|string $target_dir;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $description;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $keywords;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $homepage;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $version;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $time;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string|array $license;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $authors;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $require;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $replace;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $conflict;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $provide;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::require_dev])]
    public null|array $require_dev;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $suggest;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $extra;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Autoload $autoload;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Archive $archive;
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string|array $bin;
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @var array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::include_path])]
    public null|array $include_path;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Source $source;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Dist $dist;
}