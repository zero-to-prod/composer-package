<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

class ComposerPackage
{
    use DataModel;

    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @see $name
     */
    public const name = 'name';
    /**
     * Short package description.
     *
     * @see $description
     */
    public const description = 'description';
    /**
     * License name. Or an array of license names.
     *
     * @see $license
     */
    public const license = 'license';
    /**
     * Package type, either 'library' for common packages, 'composer-plugin' for plugins, 'metapackage' for empty packages, or a custom type ([a-z0-9-]+) defined by whatever project this package applies to.
     *
     * @see $type
     */
    public const type = 'type';
    /**
     * Indicates whether this package has been abandoned, it can be boolean or a package name/URL pointing to a recommended alternative. Defaults to false.
     *
     * @see $abandoned
     */
    public const abandoned = 'abandoned';
    /**
     * Package version, see https://getcomposer.org/doc/04-schema.md#version for more info on valid schemes.
     *
     * @see $version
     */
    public const version = 'version';
    /**
     * Internal use only, do not specify this in composer.json. Indicates whether this version is the default branch of the linked VCS repository. Defaults to false.
     *
     * @see $default_branch
     */
    public const default_branch = 'default-branch';
    /**
     * A set of string or regex patterns for non-numeric branch names that will not be handled as feature branches.
     *
     * @see $non_feature_branches
     */
    public const non_feature_branches = 'non-feature-branches';
    /** @see $keywords */
    public const keywords = 'keywords';
    /**
     * Relative path to the readme document.
     *
     * @see $readme
     */
    public const readme = 'readme';
    /**
     * Package release date, in 'YYYY-MM-DD', 'YYYY-MM-DD HH:MM:SS' or 'YYYY-MM-DDTHH:MM:SSZ' format.
     *
     * @see $time
     */
    public const time = 'time';
    /** @see $authors */
    public const authors = 'authors';
    /**
     * Homepage URL for the project.
     *
     * @see $homepage
     */
    public const homepage = 'homepage';
    /** @see $support */
    public const support = 'support';
    /**
     * A list of options to fund the development and maintenance of the package.
     *
     * @see $funding
     */
    public const funding = 'funding';
    /** @see $source */
    public const source = 'source';
    /** @see $dist */
    public const dist = 'dist';
    /**
     * A key to store comments in
     *
     * @see $_comment
     */
    public const _comment = '_comment';
    /**
     * This is an object of package name (keys) and version constraints (values) that are required to run this package.
     *
     * @see $require
     */
    public const require = 'require';
    /**
     * This is an object of package name (keys) and version constraints (values) that this package requires for developing it (testing tools and such).
     *
     * @see $require_dev
     */
    public const require_dev = 'require-dev';
    /**
     * This is an object of package name (keys) and version constraints (values) that can be replaced by this package.
     *
     * @see $replace
     */
    public const replace = 'replace';
    /**
     * This is an object of package name (keys) and version constraints (values) that conflict with this package.
     *
     * @see $conflict
     */
    public const conflict = 'conflict';
    /**
     * This is an object of package name (keys) and version constraints (values) that this package provides in addition to this package's name.
     *
     * @see $provide
     */
    public const provide = 'provide';
    /**
     * This is an object of package name (keys) and descriptions (values) that this package suggests work well with it (this will be suggested to the user during installation).
     *
     * @see $suggest
     */
    public const suggest = 'suggest';
    /**
     * A set of additional repositories where packages can be found.
     *
     * @see $repositories
     */
    public const repositories = 'repositories';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @see $minimum_stability
     */
    public const minimum_stability = 'minimum-stability';
    /**
     * If set to true, stable packages will be preferred to dev packages when possible, even if the minimum-stability allows unstable packages.
     *
     * @see $prefer_stable
     */
    public const prefer_stable = 'prefer-stable';
    /** @see $autoload */
    public const autoload = 'autoload';
    /**
     * Description of additional autoload rules for development purpose (eg. a test suite).
     *
     * @see $autoload_dev
     */
    public const autoload_dev = 'autoload-dev';
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @see $target_dir
     */
    public const target_dir = 'target-dir';
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @see $include_path
     */
    public const include_path = 'include-path';
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @see $bin
     */
    public const bin = 'bin';
    /**
     * Options for creating package archives for distribution.
     *
     * @see $archive
     */
    public const archive = 'archive';
    /**
     * Settings for PHP extension packages.
     *
     * @see $php_ext
     */
    public const php_ext = 'php-ext';
    /**
     * Composer options.
     *
     * @see $config
     */
    public const config = 'config';
    /**
     * Arbitrary extra data that can be used by plugins, for example, package of type composer-plugin may have a 'class' key defining an installer class name.
     *
     * @see $extra
     */
    public const extra = 'extra';
    /**
     * Script listeners that will be executed before/after some events.
     *
     * @see $scripts
     */
    public const scripts = 'scripts';
    /**
     * Descriptions for custom commands, shown in console help.
     *
     * @see $scripts_descriptions
     */
    public const scripts_descriptions = 'scripts-descriptions';
    /**
     * Aliases for custom commands.
     *
     * @see $scripts_aliases
     */
    public const scripts_aliases = 'scripts-aliases';
    /** Package name, including 'vendor-name/' prefix. */
    public string $name;
    /** Short package description. */
    public string $description;
    /** License name. Or an array of license names. */
    public string|array $license;
    /** Package type, either 'library' for common packages, 'composer-plugin' for plugins, 'metapackage' for empty packages, or a custom type ([a-z0-9-]+) defined by whatever project this package applies to. */
    public string $type;
    /** Indicates whether this package has been abandoned, it can be boolean or a package name/URL pointing to a recommended alternative. Defaults to false. */
    public bool|string $abandoned;
    /** Package version, see https://getcomposer.org/doc/04-schema.md#version for more info on valid schemes. */
    public string $version;
    /** Internal use only, do not specify this in composer.json. Indicates whether this version is the default branch of the linked VCS repository. Defaults to false. */
    #[Describe(['from' => self::default_branch])]
    public bool $default_branch;
    /**
     * A set of string or regex patterns for non-numeric branch names that will not be handled as feature branches.
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::non_feature_branches])]
    public array $non_feature_branches;
    /**
     *  A tag/keyword that this package relates to.
     *
     * @var array<int, string>
     */
    public array $keywords;
    /** Relative path to the readme document. */
    public string $readme;
    /** Package release date, in 'YYYY-MM-DD', 'YYYY-MM-DD HH:MM:SS' or 'YYYY-MM-DDTHH:MM:SSZ' format. */
    public string $time;
    /**
     * List of authors that contributed to the package. This is typically the main maintainers, not the full list.
     *
     * @var array<int|string, AuthorsItem>
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => AuthorsItem::class])]
    public array $authors;
    /** Homepage URL for the project. */
    public string $homepage;
    public Support $support;
    /**
     * A list of options to fund the development and maintenance of the package.
     *
     * @var array<int, FundingItem>
     */
    #[Describe(['cast' => [DataModelHelper::class, 'mapOf'], 'type' => FundingItem::class])]
    public array $funding;
    public Source $source;
    public Dist $dist;
    /** A key to store comments in */
    public array|string $_comment;
    /** This is an object of package name (keys) and version constraints (values) that are required to run this package. */
    public array $require;
    /** This is an object of package name (keys) and version constraints (values) that this package requires for developing it (testing tools and such). */
    #[Describe(['from' => self::require_dev])]
    public array $require_dev;
    /** This is an object of package name (keys) and version constraints (values) that can be replaced by this package. */
    public array $replace;
    /** This is an object of package name (keys) and version constraints (values) that conflict with this package. */
    public array $conflict;
    /** This is an object of package name (keys) and version constraints (values) that this package provides in addition to this package's name. */
    public array $provide;
    /** This is an object of package name (keys) and descriptions (values) that this package suggests work well with it (this will be suggested to the user during installation). */
    public array $suggest;
    /**
     * @var array<int, ComposerRepository|VcsRepository|PathRepository|ArtifactRepository|PearRepository|PackageRepository>|null $repositories
     *
     * A set of additional repositories where packages can be found.
     */
    #[Describe(['cast' => [self::class, 'repositories']])]
    public null|array $repositories;

    public static function repositories($value): ?array
    {
        if (!isset($value[0]['type'])) {
            return null;
        }

        $repos = [];

        foreach ($value as $repo) {
            $repos[] = match ($repo['type']) {
                ComposerRepositoryTypeEnum::composer->value => ComposerRepository::from($repo),
                VcsRepositoryTypeEnum::vcs->value,
                VcsRepositoryTypeEnum::github->value,
                VcsRepositoryTypeEnum::git->value,
                VcsRepositoryTypeEnum::gitlab->value,
                VcsRepositoryTypeEnum::bitbucket->value,
                VcsRepositoryTypeEnum::git_bitbucket->value,
                VcsRepositoryTypeEnum::hg->value,
                VcsRepositoryTypeEnum::fossil->value,
                VcsRepositoryTypeEnum::perforce->value,
                VcsRepositoryTypeEnum::svn->value => VcsRepository::from($repo),
                PathRepositoryTypeEnum::path->value => PathRepository::from($repo),
                ArtifactRepositoryTypeEnum::artifact->value => ArtifactRepository::from($repo),
                PearRepositoryTypeEnum::pear->value => PearRepository::from($repo),
                PackageRepositoryTypeEnum::package->value => PackageRepository::from($repo),
                default => $repo,
            };
        }

        return $repos;
    }

    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    #[Describe(['from' => self::minimum_stability])]
    public MinimumStabilityEnum $minimum_stability;
    /** If set to true, stable packages will be preferred to dev packages when possible, even if the minimum-stability allows unstable packages. */
    #[Describe(['from' => self::prefer_stable])]
    public bool $prefer_stable;
    /** Description of how the package can be autoloaded. */
    public Autoload $autoload;
    /** Description of additional autoload rules for development purpose (eg. a test suite). */
    #[Describe(['from' => self::autoload_dev])]
    public AutoloadDev $autoload_dev;
    /** DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility. */
    #[Describe(['from' => self::target_dir])]
    public string $target_dir;
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::include_path])]
    public array $include_path;
    /** A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config). */
    public string|array $bin;
    /** Options for creating package archives for distribution. */
    public Archive $archive;
    /** Settings for PHP extension packages. */
    #[Describe(['from' => self::php_ext])]
    public PhpExt $php_ext;
    /** Composer options. */
    public Config $config;
    /** Arbitrary extra data that can be used by plugins, for example, package of type composer-plugin may have a 'class' key defining an installer class name. */
    public object|array $extra;
    /** Script listeners that will be executed before/after some events. */
    public Scripts $scripts;
    /** Descriptions for custom commands, shown in console help. */
    #[Describe(['from' => self::scripts_descriptions])]
    public array $scripts_descriptions;
    /** Aliases for custom commands. */
    #[Describe(['from' => self::scripts_aliases])]
    public array $scripts_aliases;
}