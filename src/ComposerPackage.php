<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class ComposerPackage
{
    use DataModel;
    use DataModelHelper;

    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @see  $name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const name = 'name';
    /**
     * Short package description.
     *
     * @see  $description
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const description = 'description';
    /**
     * License name. Or an array of license names.
     *
     * @see  $license
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const license = 'license';
    /**
     * Package type, either 'library' for common packages, 'composer-plugin' for plugins, 'metapackage' for empty packages, or a custom type ([a-z0-9-]+) defined by whatever project this package applies to.
     *
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * Indicates whether this package has been abandoned, it can be boolean or a package name/URL pointing to a recommended alternative. Defaults to false.
     *
     * @see  $abandoned
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const abandoned = 'abandoned';
    /**
     * Package version, see https://getcomposer.org/doc/04-schema.md#version for more info on valid schemes.
     *
     * @see  $version
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const version = 'version';
    /**
     * Internal use only, do not specify this in composer.json. Indicates whether this version is the default branch of the linked VCS repository. Defaults to false.
     *
     * @see  $default_branch
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const default_branch = 'default-branch';
    /**
     * A set of string or regex patterns for non-numeric branch names that will not be handled as feature branches.
     *
     * @see  $non_feature_branches
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const non_feature_branches = 'non-feature-branches';
    /**
     * @see  $keywords
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const keywords = 'keywords';
    /**
     * Relative path to the readme document.
     *
     * @see  $readme
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const readme = 'readme';
    /**
     * Package release date, in `YYYY-MM-DD`, `YYYY-MM-DD HH:MM:SS` or `YYYY-MM-DDTHH:MM:SSZ` format.
     *
     * @see  $time
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const time = 'time';
    /**
     * @see  $authors
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const authors = 'authors';
    /**
     * Homepage URL for the project.
     *
     * @see  $homepage
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const homepage = 'homepage';
    /**
     * @see  $support
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const support = 'support';
    /**
     * A list of options to fund the development and maintenance of the package.
     *
     * @see  $funding
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const funding = 'funding';
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
     * A key to store comments in
     *
     * @see  $_comment
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const _comment = '_comment';
    /**
     * This is an object of package name (keys) and version constraints (values) that are required to run this package.
     *
     * @see  $require
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const require = 'require';
    /**
     * This is an object of package name (keys) and version constraints (values) that this package requires for developing it (testing tools and such).
     *
     * @see  $require_dev
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const require_dev = 'require-dev';
    /**
     * This is an object of package name (keys) and version constraints (values) that can be replaced by this package.
     *
     * @see  $replace
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const replace = 'replace';
    /**
     * This is an object of package name (keys) and version constraints (values) that conflict with this package.
     *
     * @see  $conflict
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const conflict = 'conflict';
    /**
     * This is an object of package name (keys) and version constraints (values) that this package provides in addition to this package's name.
     *
     * @see  $provide
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const provide = 'provide';
    /**
     * This is an object of package name (keys) and descriptions (values) that this package suggests work well with it (this will be suggested to the user during installation).
     *
     * @see  $suggest
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const suggest = 'suggest';
    /**
     * A set of additional repositories where packages can be found.
     *
     * @see  $repositories
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const repositories = 'repositories';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @see  $minimum_stability
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const minimum_stability = 'minimum-stability';
    /**
     * If set to true, stable packages will be preferred to dev packages when possible, even if the minimum-stability allows unstable packages.
     *
     * @see  $prefer_stable
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const prefer_stable = 'prefer-stable';
    /**
     * @see  $autoload
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const autoload = 'autoload';
    /**
     * Description of additional autoload rules for development purpose (eg. a test suite).
     *
     * @see  $autoload_dev
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const autoload_dev = 'autoload-dev';
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @see  $target_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const target_dir = 'target-dir';
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @see  $include_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const include_path = 'include-path';
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @see  $bin
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bin = 'bin';
    /**
     * Options for creating package archives for distribution.
     *
     * @see  $archive
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const archive = 'archive';
    /**
     * Settings for PHP extension packages.
     *
     * @see  $php_ext
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const php_ext = 'php-ext';
    /**
     * Composer options.
     *
     * @see  $config
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const config = 'config';
    /**
     * Arbitrary extra data that can be used by plugins, for example, package of type composer-plugin may have a 'class' key defining an installer class name.
     *
     * @see  $extra
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const extra = 'extra';
    /**
     * Script listeners that will be executed before/after some events.
     *
     * @see  $scripts
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const scripts = 'scripts';
    /**
     * Descriptions for custom commands, shown in console help.
     *
     * @see  $scripts_descriptions
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const scripts_descriptions = 'scripts-descriptions';
    /**
     * Aliases for custom commands.
     *
     * @see  $scripts_aliases
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const scripts_aliases = 'scripts-aliases';
    /**
     * Package name, including 'vendor-name/' prefix.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $name = null;
    /**
     * Short package description.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $description = null;
    /**
     * License name. Or an array of license names.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string|array $license = null;
    /**
     * Package type, either 'library' for common packages, 'composer-plugin' for plugins, 'metapackage' for empty packages, or a custom type ([a-z0-9-]+) defined by whatever project this package applies to.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $type = null;
    /**
     * Indicates whether this package has been abandoned, it can be boolean or a package name/URL pointing to a recommended alternative. Defaults to false.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool|string $abandoned = null;
    /**
     * Package version, see https://getcomposer.org/doc/04-schema.md#version for more info on valid schemes.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $version = null;
    /**
     * Internal use only, do not specify this in composer.json. Indicates whether this version is the default branch of the linked VCS repository. Defaults to false.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::default_branch])]
    public null|bool $default_branch = null;
    /**
     * A set of string or regex patterns for non-numeric branch names that will not be handled as feature branches.
     *
     * @var array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::non_feature_branches])]
    public null|array $non_feature_branches = null;
    /**
     *  A tag/keyword that this package relates to.
     *
     * @var array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $keywords = null;
    /**
     * Relative path to the readme document.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $readme = null;
    /**
     * Package release date, in 'YYYY-MM-DD', 'YYYY-MM-DD HH:MM:SS' or 'YYYY-MM-DDTHH:MM:SSZ' format.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $time = null;
    /**
     * List of authors that contributed to the package. This is typically the main maintainers, not the full list.
     *
     * @var array<int|string, AuthorsItem>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['cast' => [self::class, 'mapOf'], 'type' => AuthorsItem::class])]
    public array $authors = [];
    /**
     * Homepage URL for the project.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $homepage = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Support $support = null;
    /**
     * A list of options to fund the development and maintenance of the package.
     *
     * @var array<int, FundingItem>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['cast' => [self::class, 'mapOf'], 'type' => FundingItem::class])]
    public array $funding = [];
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Source $source = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Dist $dist = null;
    /**
     * A key to store comments in
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array|string $_comment = null;
    /**
     * This is an object of package name (keys) and version constraints (values) that are required to run this package.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $require = null;
    /**
     * This is an object of package name (keys) and version constraints (values) that this package requires for developing it (testing tools and such).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::require_dev])]
    public null|array $require_dev = null;
    /**
     * This is an object of package name (keys) and version constraints (values) that can be replaced by this package.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $replace = null;
    /**
     * This is an object of package name (keys) and version constraints (values) that conflict with this package.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $conflict = null;
    /**
     * This is an object of package name (keys) and version constraints (values) that this package provides in addition to this package's name.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $provide = null;
    /**
     * This is an object of package name (keys) and descriptions (values) that this package suggests work well with it (this will be suggested to the user during installation).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $suggest = null;
    /**
     * @var array<int, ComposerRepository|VcsRepository|PathRepository|ArtifactRepository|PearRepository|PackageRepository>|null $repositories
     *
     * A set of additional repositories where packages can be found.
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['cast' => [self::class, 'repositories']])]
    public null|array $repositories = null;

    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public static function repositories($value): null|array
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

    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::minimum_stability])]
    public null|MinimumStabilityEnum $minimum_stability = null;
    /**
     * If set to true, stable packages will be preferred to dev packages when possible, even if the minimum-stability allows unstable packages.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::prefer_stable])]
    public null|bool $prefer_stable = null;
    /**
     * Description of how the package can be autoloaded.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Autoload $autoload = null;
    /**
     * Description of additional autoload rules for development purpose (eg. a test suite).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::autoload_dev])]
    public null|AutoloadDev $autoload_dev = null;
    /**
     * DEPRECATED: Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::target_dir])]
    public null|string $target_dir = null;
    /**
     * DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.
     *
     * @var array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::include_path])]
    public null|array $include_path = null;
    /**
     * A set of files, or a single file, that should be treated as binaries and symlinked into bin-dir (from config).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string|array $bin = null;
    /**
     * Options for creating package archives for distribution.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Archive $archive = null;
    /**
     * Settings for PHP extension packages.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::php_ext])]
    public null|PhpExt $php_ext = null;
    /**
     * Composer options.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Config $config = null;
    /**
     * Arbitrary extra data that can be used by plugins, for example, package of type composer-plugin may have a 'class' key defining an installer class name.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $extra = null;
    /**
     * Script listeners that will be executed before/after some events.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|Scripts $scripts = null;
    /**
     * Descriptions for custom commands, shown in console help.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::scripts_descriptions])]
    public null|array $scripts_descriptions = null;
    /**
     * Aliases for custom commands.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::scripts_aliases])]
    public null|array $scripts_aliases = null;
}