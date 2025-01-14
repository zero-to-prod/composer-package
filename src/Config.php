<?php

namespace Zerotoprod\ComposerPackage;

use Tests\generated\Audit;
use Tests\generated\BitbucketOauth;
use Tests\generated\HttpBasic;
use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/** Composer options. */
class Config
{
    use DataModel;

    /**
     * This is an object of package name (keys) and version (values) that will be used to mock the platform packages on this machine, the version can be set to false to make it appear like the package is not present.
     *
     * @see $platform
     */
    public const platform = 'platform';
    /**
     * This is an object of {"pattern": true|false} with packages which are allowed to be loaded as plugins, or true to allow all, false to allow none. Defaults to {} which prompts when an unknown plugin is added.
     *
     * @see $allow_plugins
     */
    public const allow_plugins = 'allow-plugins';
    /**
     * The timeout in seconds for process executions, defaults to 300 (5mins).
     *
     * @see $process_timeout
     */
    public const process_timeout = 'process-timeout';
    /**
     * If true, the Composer autoloader will also look for classes in the PHP include path.
     *
     * @see $use_include_path
     */
    public const use_include_path = 'use-include-path';
    /**
     * When running Composer in a directory where there is no composer.json, if there is one present in a directory above Composer will by default ask you whether you want to use that directory's composer.json instead. One of: true (always use parent if needed), false (never ask or use it) or "prompt" (ask every time), defaults to prompt.
     *
     * @see $use_parent_dir
     */
    public const use_parent_dir = 'use-parent-dir';
    /**
     * The install method Composer will prefer to use, defaults to auto and can be any of source, dist, auto, or an object of {"pattern": "preference"}.
     *
     * @see $preferred_install
     */
    public const preferred_install = 'preferred-install';
    /**
     * Security audit configuration options
     *
     * @see $audit
     */
    public const audit = 'audit';
    /**
     * Composer allows repositories to define a notification URL, so that they get notified whenever a package from that repository is installed. This option allows you to disable that behaviour, defaults to true.
     *
     * @see $notify_on_install
     */
    public const notify_on_install = 'notify-on-install';
    /**
     * A list of protocols to use for github.com clones, in priority order, defaults to ["https", "ssh", "git"].
     *
     * @see $github_protocols
     */
    public const github_protocols = 'github-protocols';
    /**
     * An object of domain name => github API oauth tokens, typically {"github.com":"<token>"}.
     *
     * @see $github_oauth
     */
    public const github_oauth = 'github-oauth';
    /**
     * An object of domain name => gitlab API oauth tokens, typically {"gitlab.com":{"expires-at":"<expiration date>", "refresh-token":"<refresh token>", "token":"<token>"}}.
     *
     * @see $gitlab_oauth
     */
    public const gitlab_oauth = 'gitlab-oauth';
    /**
     * An object of domain name => gitlab private tokens, typically {"gitlab.com":"<token>"}, or an object with username and token keys.
     *
     * @see $gitlab_token
     */
    public const gitlab_token = 'gitlab-token';
    /**
     * A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos.
     *
     * @see $gitlab_protocol
     */
    public const gitlab_protocol = 'gitlab-protocol';
    /**
     * An object of domain name => bearer authentication token, for example {"example.com":"<token>"}.
     *
     * @see $bearer
     */
    public const bearer = 'bearer';
    /**
     * Defaults to `false`. If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed. Enabling this is a security risk and is NOT recommended. The better way is to enable the php_openssl extension in php.ini.
     *
     * @see $disable_tls
     */
    public const disable_tls = 'disable-tls';
    /**
     * Defaults to `true`. If set to true only HTTPS URLs are allowed to be downloaded via Composer. If you really absolutely need HTTP access to something then you can disable it, but using "Let's Encrypt" to get a free SSL certificate is generally a better alternative.
     *
     * @see $secure_http
     */
    public const secure_http = 'secure-http';
    /**
     * A list of domains which should be trusted/marked as using a secure Subversion/SVN transport. By default svn:// protocol is seen as insecure and will throw. This is a better/safer alternative to disabling `secure-http` altogether.
     *
     * @see $secure_svn_domains
     */
    public const secure_svn_domains = 'secure-svn-domains';
    /**
     * A way to set the path to the openssl CA file. In PHP 5.6+ you should rather set this via openssl.cafile in php.ini, although PHP 5.6+ should be able to detect your system CA file automatically.
     *
     * @see $cafile
     */
    public const cafile = 'cafile';
    /**
     * If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory.
     *
     * @see $capath
     */
    public const capath = 'capath';
    /**
     * An object of domain name => {"username": "...", "password": "..."}.
     *
     * @see $http_basic
     */
    public const http_basic = 'http-basic';
    /**
     * What to do after prompting for authentication, one of: true (store), false (do not store) or "prompt" (ask every time), defaults to prompt.
     *
     * @see $store_auths
     */
    public const store_auths = 'store-auths';
    /**
     * The location where all packages are installed, defaults to "vendor".
     *
     * @see $vendor_dir
     */
    public const vendor_dir = 'vendor-dir';
    /**
     * The location where all binaries are linked, defaults to "vendor/bin".
     *
     * @see $bin_dir
     */
    public const bin_dir = 'bin-dir';
    /**
     * The location where old phar files are stored, defaults to "$home" except on XDG Base Directory compliant unixes.
     *
     * @see $data_dir
     */
    public const data_dir = 'data-dir';
    /**
     * The location where all caches are located, defaults to "~/.composer/cache" on *nix and "%LOCALAPPDATA%\Composer" on windows.
     *
     * @see $cache_dir
     */
    public const cache_dir = 'cache-dir';
    /**
     * The location where files (zip downloads) are cached, defaults to "{$cache-dir}/files".
     *
     * @see $cache_files_dir
     */
    public const cache_files_dir = 'cache-files-dir';
    /**
     * The location where repo (git/hg repo clones) are cached, defaults to "{$cache-dir}/repo".
     *
     * @see $cache_repo_dir
     */
    public const cache_repo_dir = 'cache-repo-dir';
    /**
     * The location where vcs infos (git clones, github api calls, etc. when reading vcs repos) are cached, defaults to "{$cache-dir}/vcs".
     *
     * @see $cache_vcs_dir
     */
    public const cache_vcs_dir = 'cache-vcs-dir';
    /**
     * The default cache time-to-live, defaults to 15552000 (6 months).
     *
     * @see $cache_ttl
     */
    public const cache_ttl = 'cache-ttl';
    /**
     * The cache time-to-live for files, defaults to the value of cache-ttl.
     *
     * @see $cache_files_ttl
     */
    public const cache_files_ttl = 'cache-files-ttl';
    /**
     * The cache max size for the files cache, defaults to "300MiB".
     *
     * @see $cache_files_maxsize
     */
    public const cache_files_maxsize = 'cache-files-maxsize';
    /**
     * Whether to use the Composer cache in read-only mode.
     *
     * @see $cache_read_only
     */
    public const cache_read_only = 'cache-read-only';
    /**
     * The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy).
     *
     * @see $bin_compat
     */
    public const bin_compat = 'bin-compat';
    /**
     * The default style of handling dirty updates, defaults to false and can be any of true, false or "stash".
     *
     * @see $discard_changes
     */
    public const discard_changes = 'discard-changes';
    /**
     * Optional string to be used as a suffix for the generated Composer autoloader. When null a random one will be generated.
     *
     * @see $autoloader_suffix
     */
    public const autoloader_suffix = 'autoloader-suffix';
    /**
     * Always optimize when dumping the autoloader.
     *
     * @see $optimize_autoloader
     */
    public const optimize_autoloader = 'optimize-autoloader';
    /**
     * If false, the composer autoloader will not be prepended to existing autoloaders, defaults to true.
     *
     * @see $prepend_autoloader
     */
    public const prepend_autoloader = 'prepend-autoloader';
    /**
     * If true, the composer autoloader will not scan the filesystem for classes that are not found in the class map, defaults to false.
     *
     * @see $classmap_authoritative
     */
    public const classmap_authoritative = 'classmap-authoritative';
    /**
     * If true, the Composer autoloader will check for APCu and use it to cache found/not-found classes when the extension is enabled, defaults to false.
     *
     * @see $apcu_autoloader
     */
    public const apcu_autoloader = 'apcu-autoloader';
    /**
     * A list of domains to use in github mode. This is used for GitHub Enterprise setups, defaults to ["github.com"].
     *
     * @see $github_domains
     */
    public const github_domains = 'github-domains';
    /**
     * Defaults to true. If set to false, the OAuth tokens created to access the github API will have a date instead of the machine hostname.
     *
     * @see $github_expose_hostname
     */
    public const github_expose_hostname = 'github-expose-hostname';
    /**
     * A list of domains to use in gitlab mode. This is used for custom GitLab setups, defaults to ["gitlab.com"].
     *
     * @see $gitlab_domains
     */
    public const gitlab_domains = 'gitlab-domains';
    /**
     * An object of domain name => {"consumer-key": "...", "consumer-secret": "..."}.
     *
     * @see $bitbucket_oauth
     */
    public const bitbucket_oauth = 'bitbucket-oauth';
    /**
     * Defaults to true.  If set to false, globally disables the use of the GitHub API for all GitHub repositories and clones the repository as it would for any other repository.
     *
     * @see $use_github_api
     */
    public const use_github_api = 'use-github-api';
    /**
     * The default archiving format when not provided on cli, defaults to "tar".
     *
     * @see $archive_format
     */
    public const archive_format = 'archive-format';
    /**
     * The default archive path when not provided on cli, defaults to ".".
     *
     * @see $archive_dir
     */
    public const archive_dir = 'archive-dir';
    /**
     * Defaults to true. If set to false, Composer will not create .htaccess files in the composer home, cache, and data directories.
     *
     * @see $htaccess_protect
     */
    public const htaccess_protect = 'htaccess-protect';
    /**
     * Defaults to false. If set to true, Composer will sort packages when adding/updating a new dependency.
     *
     * @see $sort_packages
     */
    public const sort_packages = 'sort-packages';
    /**
     * Defaults to true. If set to false, Composer will not create a composer.lock file.
     *
     * @see $lock
     */
    public const lock = 'lock';
    /**
     * Defaults to "php-only" which checks only the PHP version. Setting to true will also check the presence of required PHP extensions. If set to false, Composer will not create and require a platform_check.php file as part of the autoloader bootstrap.
     *
     * @see $platform_check
     */
    public const platform_check = 'platform-check';
    /**
     * Defaults to false and can be any of true, false, "dev"` or "no-dev"`. If set to true, Composer will run the bump command after running the update command. If set to "dev" or "no-dev" then only the corresponding dependencies will be bumped.
     *
     * @see $bump_after_update
     */
    public const bump_after_update = 'bump-after-update';
    /**
     * Defaults to false. If set to true, Composer will allow install when lock file is not up to date with the latest changes in composer.json.
     *
     * @see $allow_missing_requirements
     */
    public const allow_missing_requirements = 'allow-missing-requirements';
    /**
     * This is an object of package name (keys) and version (values) that will be used to mock the platform packages on this machine, the version can be set to false to make it appear like the package is not present.
     *
     * @var array
     */
    public array $platform;
    /** This is an object of {"pattern": true|false} with packages which are allowed to be loaded as plugins, or true to allow all, false to allow none. Defaults to {} which prompts when an unknown plugin is added. */
    #[Describe(['from' => self::allow_plugins])]
    public object|bool $allow_plugins;
    /** The timeout in seconds for process executions, defaults to 300 (5mins). */
    #[Describe(['from' => self::process_timeout])]
    public int $process_timeout;
    /** If true, the Composer autoloader will also look for classes in the PHP include path. */
    #[Describe(['from' => self::use_include_path])]
    public bool $use_include_path;
    /** When running Composer in a directory where there is no composer.json, if there is one present in a directory above Composer will by default ask you whether you want to use that directory's composer.json instead. One of: true (always use parent if needed), false (never ask or use it) or "prompt" (ask every time), defaults to prompt. */
    #[Describe(['from' => self::use_parent_dir])]
    public string|bool $use_parent_dir;
    /** The install method Composer will prefer to use, defaults to auto and can be any of source, dist, auto, or an object of {"pattern": "preference"}. */
    #[Describe(['from' => self::preferred_install])]
    public string|object $preferred_install;
    /** Security audit configuration options */
    public Audit $audit;
    /** Composer allows repositories to define a notification URL, so that they get notified whenever a package from that repository is installed. This option allows you to disable that behaviour, defaults to true. */
    #[Describe(['from' => self::notify_on_install])]
    public bool $notify_on_install;
    /**
     * A list of protocols to use for github.com clones, in priority order, defaults to ["https", "ssh", "git"].
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::github_protocols])]
    public array $github_protocols;
    /** An object of domain name => github API oauth tokens, typically {"github.com":"<token>"}. */
    #[Describe(['from' => self::github_oauth])]
    public array $github_oauth;
    /**
     * An object of domain name => gitlab API oauth tokens, typically {"gitlab.com":{"expires-at":"<expiration date>", "refresh-token":"<refresh token>", "token":"<token>"}}.
     *
     * @var array
     */
    #[Describe(['from' => self::gitlab_oauth])]
    public array $gitlab_oauth;
    /**
     * An object of domain name => gitlab private tokens, typically {"gitlab.com":"<token>"}, or an object with username and token keys.
     *
     * @var array
     */
    #[Describe(['from' => self::gitlab_token])]
    public array $gitlab_token;
    /** A protocol to force use of when creating a repository URL for the `source` value of the package metadata. One of `git` or `http`. By default, Composer will generate a git URL for private repositories and http one for public repos. */
    #[Describe(['from' => self::gitlab_protocol])]
    public GitlabProtocolEnum $gitlab_protocol;
    /** An object of domain name => bearer authentication token, for example {"example.com":"<token>"}. */
    public array $bearer;
    /** Defaults to `false`. If set to true all HTTPS URLs will be tried with HTTP instead and no network level encryption is performed. Enabling this is a security risk and is NOT recommended. The better way is to enable the php_openssl extension in php.ini. */
    #[Describe(['from' => self::disable_tls])]
    public bool $disable_tls;
    /** Defaults to `true`. If set to true only HTTPS URLs are allowed to be downloaded via Composer. If you really absolutely need HTTP access to something then you can disable it, but using "Let's Encrypt" to get a free SSL certificate is generally a better alternative. */
    #[Describe(['from' => self::secure_http])]
    public bool $secure_http;
    /**
     * A list of domains which should be trusted/marked as using a secure Subversion/SVN transport. By default svn:// protocol is seen as insecure and will throw. This is a better/safer alternative to disabling `secure-http` altogether.
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::secure_svn_domains])]
    public array $secure_svn_domains;
    /** A way to set the path to the openssl CA file. In PHP 5.6+ you should rather set this via openssl.cafile in php.ini, although PHP 5.6+ should be able to detect your system CA file automatically. */
    public string $cafile;
    /** If cafile is not specified or if the certificate is not found there, the directory pointed to by capath is searched for a suitable certificate. capath must be a correctly hashed certificate directory. */
    public string $capath;
    /** An object of domain name => {"username": "...", "password": "..."}. */
    #[Describe(['from' => self::http_basic])]
    public HttpBasic $http_basic;
    /** What to do after prompting for authentication, one of: true (store), false (do not store) or "prompt" (ask every time), defaults to prompt. */
    #[Describe(['from' => self::store_auths])]
    public string|bool $store_auths;
    /** The location where all packages are installed, defaults to "vendor". */
    #[Describe(['from' => self::vendor_dir])]
    public string $vendor_dir;
    /** The location where all binaries are linked, defaults to "vendor/bin". */
    #[Describe(['from' => self::bin_dir])]
    public string $bin_dir;
    /** The location where old phar files are stored, defaults to "$home" except on XDG Base Directory compliant unixes. */
    #[Describe(['from' => self::data_dir])]
    public string $data_dir;
    /** The location where all caches are located, defaults to "~/.composer/cache" on *nix and "%LOCALAPPDATA%\Composer" on windows. */
    #[Describe(['from' => self::cache_dir])]
    public string $cache_dir;
    /** The location where files (zip downloads) are cached, defaults to "{$cache-dir}/files". */
    #[Describe(['from' => self::cache_files_dir])]
    public string $cache_files_dir;
    /** The location where repo (git/hg repo clones) are cached, defaults to "{$cache-dir}/repo". */
    #[Describe(['from' => self::cache_repo_dir])]
    public string $cache_repo_dir;
    /** The location where vcs infos (git clones, github api calls, etc. when reading vcs repos) are cached, defaults to "{$cache-dir}/vcs". */
    #[Describe(['from' => self::cache_vcs_dir])]
    public string $cache_vcs_dir;
    /** The default cache time-to-live, defaults to 15552000 (6 months). */
    #[Describe(['from' => self::cache_ttl])]
    public int $cache_ttl;
    /** The cache time-to-live for files, defaults to the value of cache-ttl. */
    #[Describe(['from' => self::cache_files_ttl])]
    public int $cache_files_ttl;
    /** The cache max size for the files cache, defaults to "300MiB". */
    #[Describe(['from' => self::cache_files_maxsize])]
    public string|int $cache_files_maxsize;
    /** Whether to use the Composer cache in read-only mode. */
    #[Describe(['from' => self::cache_read_only])]
    public bool $cache_read_only;
    /** The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy). */
    #[Describe(['from' => self::bin_compat])]
    public BinCompatEnum $bin_compat;
    /** The default style of handling dirty updates, defaults to false and can be any of true, false or "stash". */
    #[Describe(['from' => self::discard_changes])]
    public string|bool $discard_changes;
    /** Optional string to be used as a suffix for the generated Composer autoloader. When null a random one will be generated. */
    #[Describe(['from' => self::autoloader_suffix])]
    public string $autoloader_suffix;
    /** Always optimize when dumping the autoloader. */
    #[Describe(['from' => self::optimize_autoloader])]
    public bool $optimize_autoloader;
    /** If false, the composer autoloader will not be prepended to existing autoloaders, defaults to true. */
    #[Describe(['from' => self::prepend_autoloader])]
    public bool $prepend_autoloader;
    /** If true, the composer autoloader will not scan the filesystem for classes that are not found in the class map, defaults to false. */
    #[Describe(['from' => self::classmap_authoritative])]
    public bool $classmap_authoritative;
    /** If true, the Composer autoloader will check for APCu and use it to cache found/not-found classes when the extension is enabled, defaults to false. */
    #[Describe(['from' => self::apcu_autoloader])]
    public bool $apcu_autoloader;
    /**
     * A list of domains to use in github mode. This is used for GitHub Enterprise setups, defaults to ["github.com"].
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::github_domains])]
    public array $github_domains;
    /** Defaults to true. If set to false, the OAuth tokens created to access the github API will have a date instead of the machine hostname. */
    #[Describe(['from' => self::github_expose_hostname])]
    public bool $github_expose_hostname;
    /**
     * A list of domains to use in gitlab mode. This is used for custom GitLab setups, defaults to ["gitlab.com"].
     *
     * @var array<int, string>
     */
    #[Describe(['from' => self::gitlab_domains])]
    public array $gitlab_domains;
    /** An object of domain name => {"consumer-key": "...", "consumer-secret": "..."}. */
    #[Describe(['from' => self::bitbucket_oauth])]
    public BitbucketOauth $bitbucket_oauth;
    /** Defaults to true.  If set to false, globally disables the use of the GitHub API for all GitHub repositories and clones the repository as it would for any other repository. */
    #[Describe(['from' => self::use_github_api])]
    public bool $use_github_api;
    /** The default archiving format when not provided on cli, defaults to "tar". */
    #[Describe(['from' => self::archive_format])]
    public string $archive_format;
    /** The default archive path when not provided on cli, defaults to ".". */
    #[Describe(['from' => self::archive_dir])]
    public string $archive_dir;
    /** Defaults to true. If set to false, Composer will not create .htaccess files in the composer home, cache, and data directories. */
    #[Describe(['from' => self::htaccess_protect])]
    public bool $htaccess_protect;
    /** Defaults to false. If set to true, Composer will sort packages when adding/updating a new dependency. */
    #[Describe(['from' => self::sort_packages])]
    public bool $sort_packages;
    /** Defaults to true. If set to false, Composer will not create a composer.lock file. */
    public bool $lock;
    /** Defaults to "php-only" which checks only the PHP version. Setting to true will also check the presence of required PHP extensions. If set to false, Composer will not create and require a platform_check.php file as part of the autoloader bootstrap. */
    #[Describe(['from' => self::platform_check])]
    public bool|string $platform_check;
    /** Defaults to false and can be any of true, false, "dev"` or "no-dev"`. If set to true, Composer will run the bump command after running the update command. If set to "dev" or "no-dev" then only the corresponding dependencies will be bumped. */
    #[Describe(['from' => self::bump_after_update])]
    public string|bool $bump_after_update;
    /** Defaults to false. If set to true, Composer will allow install when lock file is not up to date with the latest changes in composer.json. */
    #[Describe(['from' => self::allow_missing_requirements])]
    public bool $allow_missing_requirements;
}