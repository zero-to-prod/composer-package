<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class VcsRepository
{
    use DataModel;

    /**
     * @see  $type
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const type = 'type';
    /**
     * @see  $url
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const url = 'url';
    /**
     * @see  $canonical
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const canonical = 'canonical';
    /**
     * @see  $only
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const only = 'only';
    /**
     * @see  $exclude
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const exclude = 'exclude';
    /**
     * @see  $no_api
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const no_api = 'no-api';
    /**
     * @see  $secure_http
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const secure_http = 'secure-http';
    /**
     * @see  $svn_cache_credentials
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const svn_cache_credentials = 'svn-cache-credentials';
    /**
     * @see  $trunk_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const trunk_path = 'trunk-path';
    /**
     * @see  $branches_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const branches_path = 'branches-path';
    /**
     * @see  $tags_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const tags_path = 'tags-path';
    /**
     * @see  $package_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const package_path = 'package-path';
    /**
     * @see  $depot
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const depot = 'depot';
    /**
     * @see  $branch
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const branch = 'branch';
    /**
     * @see  $unique_perforce_client_name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const unique_perforce_client_name = 'unique_perforce_client_name';
    /**
     * @see  $p4user
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const p4user = 'p4user';
    /**
     * @see  $p4password
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const p4password = 'p4password';
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|VcsRepositoryTypeEnum $type = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $url = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|bool $canonical = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $only = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $exclude = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::no_api])]
    public null|bool $no_api = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::secure_http])]
    public null|bool $secure_http = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::svn_cache_credentials])]
    public null|bool $svn_cache_credentials = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::trunk_path])]
    public null|string|bool $trunk_path = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::branches_path])]
    public null|string|bool $branches_path = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::tags_path])]
    public null|string|bool $tags_path = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::package_path])]
    public null|string $package_path = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $depot = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $branch = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $unique_perforce_client_name = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $p4user = null;
    /**
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $p4password = null;
}