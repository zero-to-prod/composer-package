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
    public VcsRepositoryTypeEnum $type;
    public string $url;
    public bool $canonical;
    public array $only;
    public array $exclude;
    #[Describe(['from' => self::no_api])]
    public bool $no_api;
    #[Describe(['from' => self::secure_http])]
    public bool $secure_http;
    #[Describe(['from' => self::svn_cache_credentials])]
    public bool $svn_cache_credentials;
    #[Describe(['from' => self::trunk_path])]
    public string|bool $trunk_path;
    #[Describe(['from' => self::branches_path])]
    public string|bool $branches_path;
    #[Describe(['from' => self::tags_path])]
    public string|bool $tags_path;
    #[Describe(['from' => self::package_path])]
    public string $package_path;
    public string $depot;
    public string $branch;
    public string $unique_perforce_client_name;
    public string $p4user;
    public string $p4password;
}