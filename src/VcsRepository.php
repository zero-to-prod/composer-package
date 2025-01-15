<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class VcsRepository
{
    use DataModel;

    /** @see $type */
    public const type = 'type';
    /** @see $url */
    public const url = 'url';
    /** @see $canonical */
    public const canonical = 'canonical';
    /** @see $only */
    public const only = 'only';
    /** @see $exclude */
    public const exclude = 'exclude';
    /** @see $no_api */
    public const no_api = 'no-api';
    /** @see $secure_http */
    public const secure_http = 'secure-http';
    /** @see $svn_cache_credentials */
    public const svn_cache_credentials = 'svn-cache-credentials';
    /** @see $trunk_path */
    public const trunk_path = 'trunk-path';
    /** @see $branches_path */
    public const branches_path = 'branches-path';
    /** @see $tags_path */
    public const tags_path = 'tags-path';
    /** @see $package_path */
    public const package_path = 'package-path';
    /** @see $depot */
    public const depot = 'depot';
    /** @see $branch */
    public const branch = 'branch';
    /** @see $unique_perforce_client_name */
    public const unique_perforce_client_name = 'unique_perforce_client_name';
    /** @see $p4user */
    public const p4user = 'p4user';
    /** @see $p4password */
    public const p4password = 'p4password';
    public null|VcsRepositoryTypeEnum $type = null;
    public null|string $url = null;
    public null|bool $canonical = null;
    public null|array $only = null;
    public null|array $exclude = null;
    #[Describe(['from' => self::no_api])]
    public null|bool $no_api = null;
    #[Describe(['from' => self::secure_http])]
    public null|bool $secure_http = null;
    #[Describe(['from' => self::svn_cache_credentials])]
    public null|bool $svn_cache_credentials = null;
    #[Describe(['from' => self::trunk_path])]
    public null|string|bool $trunk_path = null;
    #[Describe(['from' => self::branches_path])]
    public null|string|bool $branches_path = null;
    #[Describe(['from' => self::tags_path])]
    public null|string|bool $tags_path = null;
    #[Describe(['from' => self::package_path])]
    public null|string $package_path = null;
    public null|string $depot = null;
    public null|string $branch = null;
    public null|string $unique_perforce_client_name = null;
    public null|string $p4user = null;
    public null|string $p4password = null;
}