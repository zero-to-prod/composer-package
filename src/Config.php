<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * Composer options.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
class Config
{
    use DataModel;
    use DataModelHelper;

    /**
     * This is an object of package name (keys) and version (values) that will be used to mock the platform packages on this machine, the version can be set to `false` to make it appear like the package is not present.
     *
     * @see  $platform
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const platform = 'platform';
    /**
     * This is an object of {"pattern": true|false} with packages which are allowed to be loaded as plugins, or true to allow all, false to allow none. Defaults to {} which prompts when an unknown plugin is added.
     *
     * @see  $allow_plugins
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const allow_plugins = 'allow-plugins';
    /**
     * The timeout in seconds for process executions, defaults to 300 (5 minutes).
     *
     * @see  $process_timeout
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const process_timeout = 'process-timeout';
    /**
     * If true, the Composer autoloader will also look for classes in the PHP include path.
     *
     * @see  $use_include_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const use_include_path = 'use-include-path';
    /**
     * When running Composer in a directory where there is no composer.json, if there is one present in a directory above Composer will by default ask you whether you want to use that directory's composer.json instead. One of: true (always use parent if needed), false (never ask or use it) or "prompt" (ask every time), defaults to prompt.
     *
     * @see  $use_parent_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const use_parent_dir = 'use-parent-dir';
    /**
     * The `install` method Composer will prefer to use, defaults to auto and can be any of source, dist, auto, or an object of {"pattern": "preference"}.
     *
     * @see  $preferred_install
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const preferred_install = 'preferred-install';
    /**
     * Security audit configuration options
     *
     * @see  $audit
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const audit = 'audit';
    /**
     * Composer allows repositories to define a notification URL, so that they get notified whenever a package from that repository is installed. This option allows you to disable that behaviour, defaults to true.
     *
     * @see  $notify_on_install
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const notify_on_install = 'notify-on-install';
    /**
     * A list of protocols to use for github.com clones, in priority order, defaults to ["https", "ssh", "git"].
     *
     * @see  $github_protocols
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const github_protocols = 'github-protocols';
    /**
     * An object of domain name => github API oauth tokens, typically {"github.com":"<token>"}.
     *
     * @see  $github_oauth
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const github_oauth = 'github-oauth';
    /**
     * An object of domain name => gitlab API oauth tokens, typically {"gitlab.com":{"expires-at":"<expiration date>", "refresh-token":"<refresh token>", "token":"<token>"}}.
     *
     * @see  $gitlab_oauth
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const gitlab_oauth = 'gitlab-oauth';
    /**
     * An object of domain name => gitlab private tokens, typically {"gitlab.com":"<token>"}, or an object with username and token keys.
     *
     * @see  $gitlab_token
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const gitlab_token = 'gitlab-token';
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @see  $gitlab_protocol
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const gitlab_protocol = 'gitlab-protocol';
    /**
     * An object of domain name => bearer authentication token, for example {"example.com":"<token>"}.
     *
     * @see  $bearer
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bearer = 'bearer';
    /**
     * Defaults to `false`. If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed. Enabling this is a security risk and is NOT recommended. The better way is to enable the php_openssl extension in php.ini.
     *
     * @see  $disable_tls
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const disable_tls = 'disable-tls';
    /**
     * Defaults to `true`. If set to true only HTTPS URLs are allowed to be downloaded via Composer. If you really absolutely need HTTP access to something then you can disable it, but using "Let's Encrypt" to get a free SSL certificate is generally a better alternative.
     *
     * @see  $secure_http
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const secure_http = 'secure-http';
    /**
     * A list of domains which should be trusted/marked as using a secure Subversion/SVN transport. By default, svn:// protocol is seen as insecure and will throw. This is a better/safer alternative to disabling `secure-http` altogether.
     *
     * @see  $secure_svn_domains
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const secure_svn_domains = 'secure-svn-domains';
    /**
     * A way to set the path to the openssl CA file. In PHP 5.6+ you should rather set this via openssl.cafile in php.ini, although PHP 5.6+ should be able to detect your system CA file automatically.
     *
     * @see  $cafile
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cafile = 'cafile';
    /**
     * If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
     *
     * @see  $capath
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const capath = 'capath';
    /**
     * An object of domain name => {"username": "...", "password": "..."}.
     *
     * @see  $http_basic
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const http_basic = 'http-basic';
    /**
     * What to do after prompting for authentication, one of: true (store), false (do not store) or "prompt" (ask every time), defaults to prompt.
     *
     * @see  $store_auths
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const store_auths = 'store-auths';
    /**
     * The location where all packages are installed, defaults to "vendor".
     *
     * @see  $vendor_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const vendor_dir = 'vendor-dir';
    /**
     * The location where all binaries are linked, defaults to "vendor/bin".
     *
     * @see  $bin_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bin_dir = 'bin-dir';
    /**
     * The location where old phar files are stored, defaults to "$home" except on XDG Base Directory compliant unixes.
     *
     * @see  $data_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const data_dir = 'data-dir';
    /**
     * The location where all caches are located, defaults to "~/.composer/cache" on *nix and "%LOCALAPPDATA%\Composer" on windows.
     *
     * @see  $cache_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_dir = 'cache-dir';
    /**
     * The location where files (zip downloads) are cached, defaults to "{$cache-dir}/files".
     *
     * @see  $cache_files_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_files_dir = 'cache-files-dir';
    /**
     * The location where repo (git/hg repo clones) are cached, defaults to "{$cache-dir}/repo".
     *
     * @see  $cache_repo_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_repo_dir = 'cache-repo-dir';
    /**
     * The location where vcs infos (git clones, github api calls, etc. when reading vcs repos) are cached, defaults to "{$cache-dir}/vcs".
     *
     * @see  $cache_vcs_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_vcs_dir = 'cache-vcs-dir';
    /**
     * The default cache time-to-live, defaults to 15552000 (6 months).
     *
     * @see  $cache_ttl
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_ttl = 'cache-ttl';
    /**
     * The cache time-to-live for files, defaults to the value of cache-ttl.
     *
     * @see  $cache_files_ttl
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_files_ttl = 'cache-files-ttl';
    /**
     * The cache max size for the files cache, defaults to "300MiB".
     *
     * @see  $cache_files_maxsize
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_files_maxsize = 'cache-files-maxsize';
    /**
     * Whether to use the Composer cache in read-only mode.
     *
     * @see  $cache_read_only
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const cache_read_only = 'cache-read-only';
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @see  $bin_compat
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bin_compat = 'bin-compat';
    /**
     * The default style of handling dirty updates, defaults to false and can be any of true, false or "stash".
     *
     * @see  $discard_changes
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const discard_changes = 'discard-changes';
    /**
     * Optional string to be used as a suffix for the generated Composer autoloader. When null a random one will be generated.
     *
     * @see  $autoloader_suffix
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const autoloader_suffix = 'autoloader-suffix';
    /**
     * Always optimize when dumping the autoloader.
     *
     * @see  $optimize_autoloader
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const optimize_autoloader = 'optimize-autoloader';
    /**
     * If false, the composer autoloader will not be prepended to existing autoloaders, defaults to true.
     *
     * @see  $prepend_autoloader
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const prepend_autoloader = 'prepend-autoloader';
    /**
     * If true, the composer autoloader will not scan the filesystem for classes that are not found in the class map, defaults to false.
     *
     * @see  $classmap_authoritative
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const classmap_authoritative = 'classmap-authoritative';
    /**
     * If true, the Composer autoloader will check for APCu and use it to cache found/not-found classes when the extension is enabled, defaults to false.
     *
     * @see  $apcu_autoloader
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const apcu_autoloader = 'apcu-autoloader';
    /**
     * A list of domains to use in github mode. This is used for GitHub Enterprise setups, defaults to ["github.com"].
     *
     * @see  $github_domains
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const github_domains = 'github-domains';
    /**
     * Defaults to true. If set to false, the OAuth tokens created to access the github API will have a date instead of the machine hostname.
     *
     * @see  $github_expose_hostname
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const github_expose_hostname = 'github-expose-hostname';
    /**
     * A list of domains to use in gitlab mode. This is used for custom GitLab setups, defaults to ["gitlab.com"].
     *
     * @see  $gitlab_domains
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const gitlab_domains = 'gitlab-domains';
    /**
     * An object of domain name => {"consumer-key": "...", "consumer-secret": "..."}.
     *
     * @see  $bitbucket_oauth
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bitbucket_oauth = 'bitbucket-oauth';
    /**
     * Defaults to true.  If set to false, globally disables the use of the GitHub API for all GitHub repositories and clones the repository as it would for any other repository.
     *
     * @see  $use_github_api
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const use_github_api = 'use-github-api';
    /**
     * The default archiving format when not provided on cli, defaults to "tar".
     *
     * @see  $archive_format
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const archive_format = 'archive-format';
    /**
     * The default archive path when not provided on cli, defaults to ".".
     *
     * @see  $archive_dir
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const archive_dir = 'archive-dir';
    /**
     * Defaults to true. If set to false, Composer will not create .htaccess files in the composer home, cache, and data directories.
     *
     * @see  $htaccess_protect
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const htaccess_protect = 'htaccess-protect';
    /**
     * Defaults to false. If set to true, Composer will sort packages when adding/updating a new dependency.
     *
     * @see  $sort_packages
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const sort_packages = 'sort-packages';
    /**
     * Defaults to true. If set to false, Composer will not create a `composer.lock` file.
     *
     * @see  $lock
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const lock = 'lock';
    /**
     * Defaults to "php-only" which checks only the PHP version. Setting to true will also check the presence of required PHP extensions. If set to false, Composer will not create and require a platform_check.php file as part of the autoloader bootstrap.
     *
     * @see  $platform_check
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const platform_check = 'platform-check';
    /**
     * Defaults to false and can be any of true, false, "dev"` or "no-dev"`. If set to true, Composer will run the bump command after running the update command. If set to "dev" or "no-dev" then only the corresponding dependencies will be bumped.
     *
     * @see  $bump_after_update
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const bump_after_update = 'bump-after-update';
    /**
     * Defaults to false. If set to true, Composer will allow `install` when lock file is not up to date with the latest changes in composer.json.
     *
     * @see  $allow_missing_requirements
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const allow_missing_requirements = 'allow-missing-requirements';
    /**
     * This is an object of package name (keys) and version (values) that will be used to mock the platform packages on this machine, the version can be set to `false` to make it appear like the package is not present.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $platform = null;
    /**
     * @var null|array<string, bool>|bool $allow_plugins
     *
     * This is an object of {"pattern": true|false} with packages which are allowed to be loaded as plugins, or true to allow all, false to allow none. Defaults to {} which prompts when an unknown plugin is added.
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::allow_plugins])]
    public null|array|bool $allow_plugins = null;
    /**
     * The timeout in seconds for process executions, defaults to 300 (5 minutes).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::process_timeout])]
    public null|int $process_timeout = null;
    /**
     * If true, the Composer autoloader will also look for classes in the PHP include path.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::use_include_path])]
    public null|bool $use_include_path = null;
    /**
     * When running Composer in a directory where there is no composer.json, if there is one present in a directory above Composer will by default ask you whether you want to use that directory's composer.json instead. One of: true (always use parent if needed), false (never ask or use it) or "prompt" (ask every time), defaults to prompt.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::use_parent_dir])]
    public null|string|bool $use_parent_dir = null;
    /**
     * @var null|array<string, bool>|bool $preferred_install
     *
     * The `install` method Composer will prefer to use, defaults to auto and can be any of source, dist, auto, or an object of {"pattern": "preference"}.
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::preferred_install])]
    public null|string|array $preferred_install = null;
    /**
     * Security audit configuration options
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $audit = null;
    /**
     * Composer allows repositories to define a notification URL, so that they get notified whenever a package from that repository is installed. This option allows you to disable that behaviour, defaults to true.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::notify_on_install])]
    public null|bool $notify_on_install = null;
    /**
     * A list of protocols to use for github.com clones, in priority order, defaults to ["https", "ssh", "git"].
     *
     * @var null|array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::github_protocols])]
    public null|array $github_protocols = null;
    /**
     * An object of domain name => github API oauth tokens, typically {"github.com":"<token>"}.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::github_oauth])]
    public null|array $github_oauth = null;
    /**
     * An object of domain name => gitlab API oauth tokens, typically {"gitlab.com":{"expires-at":"<expiration date>", "refresh-token":"<refresh token>", "token":"<token>"}}.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::gitlab_oauth])]
    public null|array $gitlab_oauth = null;
    /**
     * An object of domain name => gitlab private tokens, typically {"gitlab.com":"<token>"}, or an object with username and token keys.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::gitlab_token])]
    public null|array $gitlab_token = null;
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::gitlab_protocol])]
    public null|GitlabProtocolEnum $gitlab_protocol = null;
    /**
     * An object of domain name => bearer authentication token, for example {"example.com":"<token>"}.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $bearer = null;
    /**
     * Defaults to `false`. If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed. Enabling this is a security risk and is NOT recommended. The better way is to enable the php_openssl extension in php.ini.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::disable_tls])]
    public null|bool $disable_tls = null;
    /**
     * Defaults to `true`. If set to true only HTTPS URLs are allowed to be downloaded via Composer. If you really absolutely need HTTP access to something then you can disable it, but using "Let's Encrypt" to get a free SSL certificate is generally a better alternative.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::secure_http])]
    public null|bool $secure_http = null;
    /**
     * A list of domains which should be trusted/marked as using a secure Subversion/SVN transport. By default, svn:// protocol is seen as insecure and will throw. This is a better/safer alternative to disabling `secure-http` altogether.
     *
     * @var null|array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::secure_svn_domains])]
    public null|array $secure_svn_domains = null;
    /**
     * A way to set the path to the openssl CA file. In PHP 5.6+ you should rather set this via openssl.cafile in php.ini, although PHP 5.6+ should be able to detect your system CA file automatically.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $cafile = null;
    /**
     * If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $capath = null;
    /**
     * @var null|array<string, HttpBasic> $http_basic
     *
     * An object of domain name => {"username": "...", "password": "..."}.
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe([
        'from' => self::http_basic,
        'cast' => [self::class, 'mapOf'],
        'type' => HttpBasic::class
    ])]
    public array $http_basic = [];
    /**
     * What to do after prompting for authentication, one of: true (store), false (do not store) or "prompt" (ask every time), defaults to prompt.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::store_auths])]
    public null|string|bool $store_auths = null;
    /**
     * The location where all packages are installed, defaults to "vendor".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::vendor_dir])]
    public null|string $vendor_dir = null;
    /**
     * The location where all binaries are linked, defaults to "vendor/bin".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::bin_dir])]
    public null|string $bin_dir = null;
    /**
     * The location where old phar files are stored, defaults to "$home" except on XDG Base Directory compliant unixes.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::data_dir])]
    public null|string $data_dir = null;
    /**
     * The location where all caches are located, defaults to "~/.composer/cache" on *nix and "%LOCALAPPDATA%\Composer" on windows.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_dir])]
    public null|string $cache_dir = null;
    /**
     * The location where files (zip downloads) are cached, defaults to "{$cache-dir}/files".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_files_dir])]
    public null|string $cache_files_dir = null;
    /**
     * The location where repo (git/hg repo clones) are cached, defaults to "{$cache-dir}/repo".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_repo_dir])]
    public null|string $cache_repo_dir = null;
    /**
     * The location where vcs infos (git clones, github api calls, etc. when reading vcs repos) are cached, defaults to "{$cache-dir}/vcs".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_vcs_dir])]
    public null|string $cache_vcs_dir = null;
    /**
     * The default cache time-to-live, defaults to 15552000 (6 months).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_ttl])]
    public null|int $cache_ttl = null;
    /**
     * The cache time-to-live for files, defaults to the value of cache-ttl.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_files_ttl])]
    public null|int $cache_files_ttl = null;
    /**
     * The cache max size for the files cache, defaults to "300MiB".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_files_maxsize])]
    public null|string|int $cache_files_maxsize = null;
    /**
     * Whether to use the Composer cache in read-only mode.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::cache_read_only])]
    public null|bool $cache_read_only = null;
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::bin_compat])]
    public null|BinCompatEnum $bin_compat = null;
    /**
     * The default style of handling dirty updates, defaults to false and can be any of true, false or "stash".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::discard_changes])]
    public null|string|bool $discard_changes = null;
    /**
     * Optional string to be used as a suffix for the generated Composer autoloader. When null a random one will be generated.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::autoloader_suffix])]
    public null|string $autoloader_suffix = null;
    /**
     * Always optimize when dumping the autoloader.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::optimize_autoloader])]
    public null|bool $optimize_autoloader = null;
    /**
     * If false, the composer autoloader will not be prepended to existing autoloaders, defaults to true.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::prepend_autoloader])]
    public null|bool $prepend_autoloader = null;
    /**
     * If true, the composer autoloader will not scan the filesystem for classes that are not found in the class map, defaults to false.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::classmap_authoritative])]
    public null|bool $classmap_authoritative = null;
    /**
     * If true, the Composer autoloader will check for APCu and use it to cache found/not-found classes when the extension is enabled, defaults to false.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::apcu_autoloader])]
    public null|bool $apcu_autoloader = null;
    /**
     * A list of domains to use in github mode. This is used for GitHub Enterprise setups, defaults to ["github.com"].
     *
     * @var null|array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::github_domains])]
    public null|array $github_domains = null;
    /**
     * Defaults to true. If set to false, the OAuth tokens created to access the github API will have a date instead of the machine hostname.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::github_expose_hostname])]
    public null|bool $github_expose_hostname = null;
    /**
     * A list of domains to use in gitlab mode. This is used for custom GitLab setups, defaults to ["gitlab.com"].
     *
     * @var null|array<int, string>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::gitlab_domains])]
    public null|array $gitlab_domains = null;
    /**
     * @var null|array<string, BitbucketOauth> $bitbucket_oauth
     *
     * An object of domain name => {"consumer-key": "...", "consumer-secret": "..."}.
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe([
        'from' => self::bitbucket_oauth,
        'cast' => [self::class, 'mapOf'],
        'type' => BitbucketOauth::class
    ])]
    public array $bitbucket_oauth = [];
    /**
     * Defaults to true.  If set to false, globally disables the use of the GitHub API for all GitHub repositories and clones the repository as it would for any other repository.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::use_github_api])]
    public null|bool $use_github_api = null;
    /**
     * The default archiving format when not provided on cli, defaults to "tar".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::archive_format])]
    public null|string $archive_format = null;
    /**
     * The default archive path when not provided on cli, defaults to ".".
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::archive_dir])]
    public null|string $archive_dir = null;
    /**
     * Defaults to true. If set to false, Composer will not create .htaccess files in the composer home, cache, and data directories.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::htaccess_protect])]
    public null|bool $htaccess_protect = null;
    /**
     * Defaults to false. If set to true, Composer will sort packages when adding/updating a new dependency.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::sort_packages])]
    public null|bool $sort_packages = null;
    /**
     * Defaults to true. If set to false, Composer will not create a `composer.lock` file.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool $lock = null;
    /**
     * Defaults to "php-only" which checks only the PHP version. Setting to true will also check the presence of required PHP extensions. If set to false, Composer will not create and require a platform_check.php file as part of the autoloader bootstrap.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::platform_check])]
    public null|bool|string $platform_check = null;
    /**
     * Defaults to false and can be any of true, false, "dev"` or "no-dev"`. If set to true, Composer will run the bump command after running the update command. If set to "dev" or "no-dev" then only the corresponding dependencies will be bumped.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::bump_after_update])]
    public null|string|bool $bump_after_update = null;
    /**
     * Defaults to false. If set to true, Composer will allow `install` when lock file is not up to date with the latest changes in composer.json.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::allow_missing_requirements])]
    public null|bool $allow_missing_requirements = null;
}