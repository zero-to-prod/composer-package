<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\ComposerPackage\Archive;
use Zerotoprod\ComposerPackage\ArtifactRepository;
use Zerotoprod\ComposerPackage\ArtifactRepositoryTypeEnum;
use Zerotoprod\ComposerPackage\AuthorsItem;
use Zerotoprod\ComposerPackage\Autoload;
use Zerotoprod\ComposerPackage\AutoloadDev;
use Zerotoprod\ComposerPackage\BinCompatEnum;
use Zerotoprod\ComposerPackage\BitbucketOauth;
use Zerotoprod\ComposerPackage\ComposerPackage;
use Zerotoprod\ComposerPackage\ComposerRepository;
use Zerotoprod\ComposerPackage\ComposerRepositoryTypeEnum;
use Zerotoprod\ComposerPackage\Config;
use Zerotoprod\ComposerPackage\ConfigureOptionsItem;
use Zerotoprod\ComposerPackage\Dist;
use Zerotoprod\ComposerPackage\FundingItem;
use Zerotoprod\ComposerPackage\GitlabProtocolEnum;
use Zerotoprod\ComposerPackage\HttpBasic;
use Zerotoprod\ComposerPackage\MinimumStabilityEnum;
use Zerotoprod\ComposerPackage\OsFamiliesEnum;
use Zerotoprod\ComposerPackage\OsFamiliesExcludeEnum;
use Zerotoprod\ComposerPackage\PackageRepository;
use Zerotoprod\ComposerPackage\PackageRepositoryTypeEnum;
use Zerotoprod\ComposerPackage\PathRepository;
use Zerotoprod\ComposerPackage\PathRepositoryOptions;
use Zerotoprod\ComposerPackage\PathRepositoryTypeEnum;
use Zerotoprod\ComposerPackage\PearRepository;
use Zerotoprod\ComposerPackage\PearRepositoryTypeEnum;
use Zerotoprod\ComposerPackage\PhpExt;
use Zerotoprod\ComposerPackage\Scripts;
use Zerotoprod\ComposerPackage\Source;
use Zerotoprod\ComposerPackage\Support;
use Zerotoprod\ComposerPackage\VcsRepository;
use Zerotoprod\ComposerPackage\VcsRepositoryTypeEnum;

class ComposerPackageTest extends TestCase
{
    #[Test] public function transforms_to_composer_package(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::name => 'zero-to-prod/composer-package',
            ComposerPackage::description => 'description',
            ComposerPackage::license => 'license',
            ComposerPackage::type => 'type',
            ComposerPackage::abandoned => false,
            ComposerPackage::version => '1.0.0',
            ComposerPackage::default_branch => true,
            ComposerPackage::non_feature_branches => ['main'],
            ComposerPackage::keywords => ['word1', 'word2'],
            ComposerPackage::readme => 'readme',
            ComposerPackage::time => '2025-01-01',
            ComposerPackage::authors => [
                [
                    AuthorsItem::name => 'name',
                    AuthorsItem::email => 'dave0016@gmail.com',
                    AuthorsItem::homepage => 'https://github.com/zero-to-prod/composer-package',
                    AuthorsItem::role => 'role',
                ]
            ],
            ComposerPackage::homepage => 'https://github.com/zero-to-prod/composer-package',
            ComposerPackage::support => [
                Support::email => 'dave0016@gmail.com',
                Support::issues => 'https://github.com/zero-to-prod/composer-package',
                Support::forum => 'https://github.com/zero-to-prod/composer-package',
                Support::wiki => 'https://github.com/zero-to-prod/composer-package',
                Support::irc => 'irc://server/channel',
                Support::chat => 'https://github.com/zero-to-prod/composer-package',
                Support::source => 'https://github.com/zero-to-prod/composer-package',
                Support::docs => 'https://github.com/zero-to-prod/composer-package',
                Support::rss => 'https://github.com/zero-to-prod/composer-package',
                Support::security => 'https://github.com/zero-to-prod/composer-package',
            ],
            ComposerPackage::funding => [
                [
                    FundingItem::type => 'type',
                    FundingItem::url => 'https://github.com/sponsors/zero-to-prod',
                ]
            ],
            ComposerPackage::source => [
                Source::type => 'type',
                Source::url => 'url',
                Source::reference => 'reference',
                Source::mirrors => ['mirrors'],
            ],
            ComposerPackage::dist => [
                Dist::type => 'type',
                Dist::url => 'url',
                Dist::reference => 'reference',
                Dist::shasum => 'shasum',
                Dist::mirrors => ['mirrors'],
            ],
            ComposerPackage::_comment => 'comment',
            ComposerPackage::require => ['monolog/monolog' => '2.0.*'],
            ComposerPackage::require_dev => ['php' => '>=8.1.0'],
            ComposerPackage::replace => ['php' => '>=8.1.0'],
            ComposerPackage::conflict => ['php' => '>=8.1.0'],
            ComposerPackage::provide => ['php' => '>=8.1.0'],
            ComposerPackage::suggest => ['php' => '>=8.1.0'],
            ComposerPackage::repositories => [
                [
                    ComposerRepository::type => ComposerRepositoryTypeEnum::composer->value,
                    ComposerRepository::url => 'https://github.com/zero-to-prod/composer-package',
                    ComposerRepository::canonical => true,
                    ComposerRepository::only => [ComposerRepository::only],
                    ComposerRepository::exclude => [ComposerRepository::exclude],
                    ComposerRepository::options => [ComposerRepository::options],
                    ComposerRepository::allow_ssl_downgrade => true,
                    ComposerRepository::force_lazy_providers => false,
                ],
                [
                    VcsRepository::type => VcsRepositoryTypeEnum::vcs->value,
                    VcsRepository::url => 'https://github.com/zero-to-prod/composer-package',
                    VcsRepository::canonical => true,
                    VcsRepository::only => [VcsRepository::only],
                    VcsRepository::exclude => [VcsRepository::exclude],
                    VcsRepository::no_api => true,
                    VcsRepository::secure_http => true,
                    VcsRepository::svn_cache_credentials => true,
                    VcsRepository::trunk_path => true,
                    VcsRepository::branches_path => true,
                    VcsRepository::tags_path => true,
                    VcsRepository::package_path => VcsRepository::package_path,
                    VcsRepository::depot => VcsRepository::depot,
                    VcsRepository::branch => VcsRepository::branch,
                    VcsRepository::unique_perforce_client_name => VcsRepository::unique_perforce_client_name,
                    VcsRepository::p4user => VcsRepository::p4user,
                    VcsRepository::p4password => VcsRepository::p4password,
                ],
                [
                    PathRepository::type => PathRepositoryTypeEnum::path->value,
                    PathRepository::url => 'https://github.com/zero-to-prod/composer-package',
                    PathRepository::canonical => true,
                    PathRepository::only => [PathRepository::only],
                    PathRepository::exclude => [PathRepository::exclude],
                    PathRepository::options => [
                        PathRepositoryOptions::symlink => PathRepositoryOptions::symlink,
                    ]
                ],
                [
                    ArtifactRepository::type => ArtifactRepositoryTypeEnum::artifact->value,
                    ArtifactRepository::url => 'https://github.com/zero-to-prod/composer-package',
                    ArtifactRepository::canonical => true,
                    ArtifactRepository::only => [ArtifactRepository::only],
                    ArtifactRepository::exclude => [ArtifactRepository::exclude],
                ],
                [
                    PearRepository::type => PearRepositoryTypeEnum::pear->value,
                    PearRepository::url => 'https://github.com/zero-to-prod/composer-package',
                    PearRepository::canonical => true,
                    PearRepository::only => [PearRepository::only],
                    PearRepository::exclude => [PearRepository::exclude],
                    PearRepository::vendor_alias => PearRepository::vendor_alias,
                ],
                [
                    PackageRepository::type => PackageRepositoryTypeEnum::package->value,
                    PackageRepository::canonical => true,
                    PackageRepository::only => [PackageRepository::only],
                    PackageRepository::exclude => [PackageRepository::exclude],
                    PackageRepository::package => [PackageRepository::package],
                ],
            ],
            ComposerPackage::minimum_stability => 'stable',
            ComposerPackage::prefer_stable => true,
            ComposerPackage::autoload => [
                Autoload::psr_0 => ['Vendor\\Package\\' => 'src/'],
                Autoload::psr_4 => ['Vendor\\Package\\' => 'src/'],
                Autoload::classmap => ['.'],
                Autoload::files => ['.'],
                Autoload::exclude_from_classmap => ['.'],
            ],
            ComposerPackage::autoload_dev => [
                AutoloadDev::psr_0 => ['Vendor\\Package\\' => 'src/'],
                AutoloadDev::psr_4 => ['Vendor\\Package\\' => 'src/'],
                AutoloadDev::classmap => ['.'],
                AutoloadDev::files => ['.'],
            ],
            ComposerPackage::target_dir => '/target/dir',
            ComposerPackage::include_path => ['/target/dir'],
            ComposerPackage::bin => './bin',
            ComposerPackage::archive => [
                Archive::name => 'name',
                Archive::exclude => ['.', './path/2'],
            ],
            ComposerPackage::php_ext => [
                PhpExt::extension_name => 'extension_name',
                PhpExt::priority => 10,
                PhpExt::support_zts => true,
                PhpExt::support_nts => true,
                PhpExt::build_path => 'build_path',
                PhpExt::os_families => [
                    OsFamiliesEnum::bsd->value
                ],
                PhpExt::os_families_exclude => [
                    OsFamiliesExcludeEnum::bsd->value
                ],
                PhpExt::configure_options => [
                    [
                        ConfigureOptionsItem::name => 'name',
                        ConfigureOptionsItem::description => 'description',
                        ConfigureOptionsItem::needs_value => true,
                    ]
                ]
            ],
            ComposerPackage::config => [
                Config::platform => ['php' => '7.0.3', 'ext-something' => '4.0.3'],
                Config::allow_plugins => ['third-party/required-plugin' => true],
                Config::process_timeout => 2,
                Config::use_include_path => true,
                Config::use_parent_dir => true,
                Config::preferred_install => ['my-organization/stable-package' => 'dist'],
                Config::audit => [
                    'ignore' => [
                        'CVE-1234' => 'The affected component is not in use.'
                    ],
                    'abandoned' => 'ignore'
                ],
                Config::notify_on_install => true,
                Config::github_protocols => ['https', 'ssh', 'git'],
                Config::github_oauth => ['github.com' => 'oauthtoken'],
                Config::gitlab_oauth => ['gitlab.com' => 'oauthtoken'],
                Config::gitlab_token => ["gitlab.com" => ["username" => "gitlabuser", "token" => "privatetoken"]],
                Config::gitlab_protocol => GitlabProtocolEnum::http->value,
                Config::bearer => ["example.org" => "foo"],
                Config::disable_tls => true,
                Config::secure_http => true,
                Config::secure_svn_domains => ['example.org'],
                Config::cafile => Config::cafile,
                Config::capath => Config::capath,
                Config::http_basic => [
                    'example.org' => [
                        HttpBasic::username => 'alice',
                        HttpBasic::password => 'foo',
                    ]
                ],
                Config::store_auths => Config::store_auths,
                Config::vendor_dir => Config::vendor_dir,
                Config::bin_dir => Config::bin_dir,
                Config::data_dir => Config::data_dir,
                Config::cache_dir => Config::cache_dir,
                Config::cache_files_dir => Config::cache_files_dir,
                Config::cache_repo_dir => Config::cache_repo_dir,
                Config::cache_vcs_dir => Config::cache_vcs_dir,
                Config::cache_ttl => 1,
                Config::cache_files_ttl => 1,
                Config::cache_files_maxsize => Config::cache_files_maxsize,
                Config::cache_read_only => true,
                Config::bin_compat => BinCompatEnum::symlink->value,
                Config::discard_changes => true,
                Config::autoloader_suffix => Config::autoloader_suffix,
                Config::optimize_autoloader => true,
                Config::prepend_autoloader => true,
                Config::classmap_authoritative => true,
                Config::apcu_autoloader => true,
                Config::github_domains => ['https://example.org'],
                Config::github_expose_hostname => true,
                Config::gitlab_domains => ['https://example.org'],
                Config::bitbucket_oauth => [
                    'bitbucket.org' => [
                        BitbucketOauth::consumer_key => BitbucketOauth::consumer_key,
                        BitbucketOauth::consumer_secret => BitbucketOauth::consumer_secret,
                        BitbucketOauth::access_token => BitbucketOauth::access_token,
                        BitbucketOauth::access_token_expiration => 1,
                    ],
                ],
                Config::use_github_api => true,
                Config::archive_format => Config::archive_format,
                Config::archive_dir => Config::archive_dir,
                Config::htaccess_protect => true,
                Config::sort_packages => true,
                Config::lock => true,
                Config::platform_check => true,
                Config::bump_after_update => true,
                Config::allow_missing_requirements => true,
            ],
            ComposerPackage::extra => [
                'laravel' => [
                    'dont-discover' => []
                ]
            ],
            ComposerPackage::scripts => [
                Scripts::pre_install_cmd => Scripts::pre_install_cmd,
                Scripts::post_install_cmd => Scripts::post_install_cmd,
                Scripts::pre_update_cmd => Scripts::pre_update_cmd,
                Scripts::post_update_cmd => Scripts::post_update_cmd,
                Scripts::pre_status_cmd => Scripts::pre_status_cmd,
                Scripts::post_status_cmd => Scripts::post_status_cmd,
                Scripts::pre_package_install => Scripts::pre_package_install,
                Scripts::post_package_install => Scripts::post_package_install,
                Scripts::pre_package_update => Scripts::pre_package_update,
                Scripts::post_package_update => Scripts::post_package_update,
                Scripts::pre_package_uninstall => Scripts::pre_package_uninstall,
                Scripts::post_package_uninstall => Scripts::post_package_uninstall,
                Scripts::pre_autoload_dump => Scripts::pre_autoload_dump,
                Scripts::post_autoload_dump => Scripts::post_autoload_dump,
                Scripts::post_root_package_install => Scripts::post_root_package_install,
                Scripts::post_create_project_cmd => Scripts::post_create_project_cmd,
            ],
            ComposerPackage::scripts_descriptions => [
                'key' => 'value'
            ],
            ComposerPackage::scripts_aliases => [
                ['key' => ['value']]
            ]
        ]);

        self::assertEquals(['third-party/required-plugin' => true], $ComposerPackage->config->allow_plugins);
        self::assertEquals(2, $ComposerPackage->config->process_timeout);
        self::assertTrue($ComposerPackage->config->use_include_path);
        self::assertTrue($ComposerPackage->config->use_parent_dir);
        self::assertEquals(['my-organization/stable-package' => 'dist'], $ComposerPackage->config->preferred_install);
        self::assertEquals(['CVE-1234' => 'The affected component is not in use.'], $ComposerPackage->config->audit['ignore']);
        self::assertEquals('ignore', $ComposerPackage->config->audit['abandoned']);
        self::assertTrue($ComposerPackage->config->notify_on_install);
        self::assertEquals(['https', 'ssh', 'git'], $ComposerPackage->config->github_protocols);
        self::assertEquals(['github.com' => 'oauthtoken'], $ComposerPackage->config->github_oauth);
        self::assertEquals(['gitlab.com' => 'oauthtoken'], $ComposerPackage->config->gitlab_oauth);
        self::assertEquals(["gitlab.com" => ["username" => "gitlabuser", "token" => "privatetoken"]], $ComposerPackage->config->gitlab_token);
        self::assertEquals(GitlabProtocolEnum::http, $ComposerPackage->config->gitlab_protocol);
        self::assertEquals(["example.org" => "foo"], $ComposerPackage->config->bearer);
        self::assertTrue($ComposerPackage->config->disable_tls);
        self::assertTrue($ComposerPackage->config->secure_http);
        self::assertEquals(['example.org'], $ComposerPackage->config->secure_svn_domains);
        self::assertEquals(Config::cafile, $ComposerPackage->config->cafile);
        self::assertEquals(Config::capath, $ComposerPackage->config->capath);
        self::assertInstanceOf(HttpBasic::class, $ComposerPackage->config->http_basic['example.org']);
        self::assertEquals('alice', $ComposerPackage->config->http_basic['example.org']->username);
        self::assertEquals('foo', $ComposerPackage->config->http_basic['example.org']->password);
        self::assertEquals(Config::store_auths, $ComposerPackage->config->store_auths);
        self::assertEquals(Config::vendor_dir, $ComposerPackage->config->vendor_dir);
        self::assertEquals(Config::bin_dir, $ComposerPackage->config->bin_dir);
        self::assertEquals(Config::data_dir, $ComposerPackage->config->data_dir);
        self::assertEquals(Config::cache_dir, $ComposerPackage->config->cache_dir);
        self::assertEquals(Config::cache_files_dir, $ComposerPackage->config->cache_files_dir);
        self::assertEquals(Config::cache_repo_dir, $ComposerPackage->config->cache_repo_dir);
        self::assertEquals(Config::cache_vcs_dir, $ComposerPackage->config->cache_vcs_dir);
        self::assertEquals(1, $ComposerPackage->config->cache_ttl);
        self::assertEquals(1, $ComposerPackage->config->cache_files_ttl);
        self::assertEquals(Config::cache_files_maxsize, $ComposerPackage->config->cache_files_maxsize);
        self::assertTrue($ComposerPackage->config->cache_read_only);
        self::assertEquals(BinCompatEnum::symlink, $ComposerPackage->config->bin_compat);
        self::assertTrue($ComposerPackage->config->discard_changes);
        self::assertEquals(Config::autoloader_suffix, $ComposerPackage->config->autoloader_suffix);
        self::assertTrue($ComposerPackage->config->optimize_autoloader);
        self::assertTrue($ComposerPackage->config->prepend_autoloader);
        self::assertTrue($ComposerPackage->config->classmap_authoritative);
        self::assertTrue($ComposerPackage->config->apcu_autoloader);
        self::assertEquals(['https://example.org'], $ComposerPackage->config->github_domains);
        self::assertTrue($ComposerPackage->config->github_expose_hostname);
        self::assertEquals(['https://example.org'], $ComposerPackage->config->gitlab_domains);
        self::assertInstanceOf(BitbucketOauth::class, $ComposerPackage->config->bitbucket_oauth['bitbucket.org']);
        self::assertEquals(BitbucketOauth::consumer_key, $ComposerPackage->config->bitbucket_oauth['bitbucket.org']->consumer_key);
        self::assertEquals(BitbucketOauth::consumer_secret, $ComposerPackage->config->bitbucket_oauth['bitbucket.org']->consumer_secret);
        self::assertEquals(BitbucketOauth::access_token, $ComposerPackage->config->bitbucket_oauth['bitbucket.org']->access_token);
        self::assertEquals(1, $ComposerPackage->config->bitbucket_oauth['bitbucket.org']->access_token_expiration);
        self::assertTrue($ComposerPackage->config->use_github_api);
        self::assertEquals(Config::archive_format, $ComposerPackage->config->archive_format);
        self::assertEquals(Config::archive_dir, $ComposerPackage->config->archive_dir);
        self::assertTrue($ComposerPackage->config->htaccess_protect);
        self::assertTrue($ComposerPackage->config->sort_packages);
        self::assertTrue($ComposerPackage->config->lock);
        self::assertTrue($ComposerPackage->config->platform_check);
        self::assertTrue($ComposerPackage->config->bump_after_update);
        self::assertTrue($ComposerPackage->config->allow_missing_requirements);

        self::assertEquals('zero-to-prod/composer-package', $ComposerPackage->name);
        self::assertEquals('description', $ComposerPackage->description);
        self::assertEquals('license', $ComposerPackage->license);
        self::assertEquals('type', $ComposerPackage->type);
        self::assertFalse($ComposerPackage->abandoned);
        self::assertEquals('1.0.0', $ComposerPackage->version);
        self::assertTrue($ComposerPackage->default_branch);
        self::assertEquals(['main'], $ComposerPackage->non_feature_branches);
        self::assertEquals(['word1', 'word2'], $ComposerPackage->keywords);
        self::assertEquals('readme', $ComposerPackage->readme);
        self::assertEquals('2025-01-01', $ComposerPackage->time);
        self::assertEquals('name', $ComposerPackage->authors[0]->name);
        self::assertEquals('dave0016@gmail.com', $ComposerPackage->authors[0]->email);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->authors[0]->homepage);
        self::assertEquals('role', $ComposerPackage->authors[0]->role);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->homepage);
        self::assertEquals('dave0016@gmail.com', $ComposerPackage->support->email);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->issues);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->forum);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->wiki);
        self::assertEquals('irc://server/channel', $ComposerPackage->support->irc);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->chat);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->source);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->docs);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->rss);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->support->security);
        self::assertEquals('type', $ComposerPackage->funding[0]->type);
        self::assertEquals('https://github.com/sponsors/zero-to-prod', $ComposerPackage->funding[0]->url);
        self::assertEquals('type', $ComposerPackage->source->type);
        self::assertEquals('url', $ComposerPackage->source->url);
        self::assertEquals('reference', $ComposerPackage->source->reference);
        self::assertEquals(['mirrors'], $ComposerPackage->source->mirrors);
        self::assertEquals('type', $ComposerPackage->dist->type);
        self::assertEquals('url', $ComposerPackage->dist->url);
        self::assertEquals('reference', $ComposerPackage->dist->reference);
        self::assertEquals('shasum', $ComposerPackage->dist->shasum);
        self::assertEquals(['mirrors'], $ComposerPackage->dist->mirrors);
        self::assertEquals('comment', $ComposerPackage->_comment);
        self::assertEquals('2.0.*', $ComposerPackage->require['monolog/monolog']);
        self::assertEquals('>=8.1.0', $ComposerPackage->require_dev['php']);
        self::assertEquals('>=8.1.0', $ComposerPackage->replace['php']);
        self::assertEquals('>=8.1.0', $ComposerPackage->conflict['php']);
        self::assertEquals('>=8.1.0', $ComposerPackage->provide['php']);
        self::assertEquals('>=8.1.0', $ComposerPackage->suggest['php']);
        self::assertInstanceOf(ComposerRepository::class, $ComposerPackage->repositories[0]);
        self::assertEquals(ComposerRepositoryTypeEnum::composer, $ComposerPackage->repositories[0]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[0]->url);
        self::assertTrue($ComposerPackage->repositories[0]->canonical);
        self::assertEquals([ComposerRepository::only], $ComposerPackage->repositories[0]->only);
        self::assertEquals([ComposerRepository::exclude], $ComposerPackage->repositories[0]->exclude);
        self::assertEquals([ComposerRepository::options], $ComposerPackage->repositories[0]->options);
        self::assertTrue($ComposerPackage->repositories[0]->allow_ssl_downgrade);
        self::assertFalse($ComposerPackage->repositories[0]->force_lazy_providers);
        self::assertInstanceOf(VcsRepository::class, $ComposerPackage->repositories[1]);
        self::assertEquals(VcsRepositoryTypeEnum::vcs, $ComposerPackage->repositories[1]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[1]->url);
        self::assertTrue($ComposerPackage->repositories[1]->canonical);
        self::assertEquals([VcsRepository::only], $ComposerPackage->repositories[1]->only);
        self::assertEquals([VcsRepository::exclude], $ComposerPackage->repositories[1]->exclude);
        self::assertTrue($ComposerPackage->repositories[1]->no_api);
        self::assertTrue($ComposerPackage->repositories[1]->secure_http);
        self::assertTrue($ComposerPackage->repositories[1]->svn_cache_credentials);
        self::assertTrue($ComposerPackage->repositories[1]->trunk_path);
        self::assertTrue($ComposerPackage->repositories[1]->branches_path);
        self::assertTrue($ComposerPackage->repositories[1]->tags_path);
        self::assertEquals(VcsRepository::package_path, $ComposerPackage->repositories[1]->package_path);
        self::assertEquals(VcsRepository::depot, $ComposerPackage->repositories[1]->depot);
        self::assertEquals(VcsRepository::branch, $ComposerPackage->repositories[1]->branch);
        self::assertEquals(VcsRepository::unique_perforce_client_name, $ComposerPackage->repositories[1]->unique_perforce_client_name);
        self::assertEquals(VcsRepository::p4user, $ComposerPackage->repositories[1]->p4user);
        self::assertEquals(VcsRepository::p4password, $ComposerPackage->repositories[1]->p4password);
        self::assertInstanceOf(PathRepository::class, $ComposerPackage->repositories[2]);
        self::assertEquals(PathRepositoryTypeEnum::path, $ComposerPackage->repositories[2]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[2]->url);
        self::assertTrue($ComposerPackage->repositories[2]->canonical);
        self::assertEquals([PathRepository::only], $ComposerPackage->repositories[2]->only);
        self::assertEquals([PathRepository::exclude], $ComposerPackage->repositories[2]->exclude);
        self::assertEquals(PathRepositoryOptions::symlink, $ComposerPackage->repositories[2]->options->symlink);
        self::assertInstanceOf(ArtifactRepository::class, $ComposerPackage->repositories[3]);
        self::assertEquals(ArtifactRepositoryTypeEnum::artifact, $ComposerPackage->repositories[3]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[3]->url);
        self::assertTrue($ComposerPackage->repositories[3]->canonical);
        self::assertEquals([ArtifactRepository::only], $ComposerPackage->repositories[3]->only);
        self::assertEquals([ArtifactRepository::exclude], $ComposerPackage->repositories[3]->exclude);
        self::assertInstanceOf(PearRepository::class, $ComposerPackage->repositories[4]);
        self::assertEquals(PearRepositoryTypeEnum::pear, $ComposerPackage->repositories[4]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[4]->url);
        self::assertTrue($ComposerPackage->repositories[4]->canonical);
        self::assertEquals([PearRepository::only], $ComposerPackage->repositories[4]->only);
        self::assertEquals([PearRepository::exclude], $ComposerPackage->repositories[4]->exclude);
        self::assertEquals(PearRepository::vendor_alias, $ComposerPackage->repositories[4]->vendor_alias);
        self::assertInstanceOf(PackageRepository::class, $ComposerPackage->repositories[5]);
        self::assertEquals(PackageRepositoryTypeEnum::package, $ComposerPackage->repositories[5]->type);
        self::assertTrue($ComposerPackage->repositories[5]->canonical);
        self::assertEquals([PackageRepository::only], $ComposerPackage->repositories[5]->only);
        self::assertEquals([PackageRepository::exclude], $ComposerPackage->repositories[5]->exclude);
        self::assertEquals([PackageRepository::package], $ComposerPackage->repositories[5]->package);
        self::assertInstanceOf(ComposerRepository::class, $ComposerPackage->repositories[0]);
        self::assertEquals(ComposerRepositoryTypeEnum::composer, $ComposerPackage->repositories[0]->type);
        self::assertEquals('https://github.com/zero-to-prod/composer-package', $ComposerPackage->repositories[0]->url);
        self::assertEquals(MinimumStabilityEnum::stable, $ComposerPackage->minimum_stability);
        self::assertTrue($ComposerPackage->prefer_stable);
        self::assertEquals('src/', $ComposerPackage->autoload->psr_0['Vendor\\Package\\']);
        self::assertEquals('src/', $ComposerPackage->autoload->psr_4['Vendor\\Package\\']);
        self::assertEquals('.', $ComposerPackage->autoload->classmap[0]);
        self::assertEquals('.', $ComposerPackage->autoload->files[0]);
        self::assertEquals('.', $ComposerPackage->autoload->exclude_from_classmap[0]);
        self::assertEquals('src/', $ComposerPackage->autoload_dev->psr_0['Vendor\\Package\\']);
        self::assertEquals('src/', $ComposerPackage->autoload_dev->psr_4['Vendor\\Package\\']);
        self::assertEquals('.', $ComposerPackage->autoload_dev->classmap[0]);
        self::assertEquals('.', $ComposerPackage->autoload_dev->files[0]);
        self::assertEquals('/target/dir', $ComposerPackage->target_dir);
        self::assertEquals(['/target/dir'], $ComposerPackage->include_path);
        self::assertEquals('./bin', $ComposerPackage->bin);
        self::assertEquals('name', $ComposerPackage->archive->name);
        self::assertEquals(['.', './path/2'], $ComposerPackage->archive->exclude);
        self::assertEquals('extension_name', $ComposerPackage->php_ext->extension_name);
        self::assertEquals(10, $ComposerPackage->php_ext->priority);
        self::assertTrue($ComposerPackage->php_ext->support_zts);
        self::assertTrue($ComposerPackage->php_ext->support_nts);
        self::assertEquals('build_path', $ComposerPackage->php_ext->build_path);
        self::assertEquals(OsFamiliesEnum::bsd, $ComposerPackage->php_ext->os_families[0]);
        self::assertEquals(OsFamiliesExcludeEnum::bsd, $ComposerPackage->php_ext->os_families_exclude[0]);
        self::assertEquals('name', $ComposerPackage->php_ext->configure_options[0]->name);
        self::assertEquals('description', $ComposerPackage->php_ext->configure_options[0]->description);
        self::assertTrue($ComposerPackage->php_ext->configure_options[0]->needs_value);
        self::assertEquals(['php' => '7.0.3', 'ext-something' => '4.0.3'], $ComposerPackage->config->platform);
        self::assertEquals([], $ComposerPackage->extra['laravel']['dont-discover']);
        self::assertEquals(Scripts::pre_install_cmd, $ComposerPackage->scripts->pre_install_cmd);
        self::assertEquals(Scripts::post_install_cmd, $ComposerPackage->scripts->post_install_cmd);
        self::assertEquals(Scripts::pre_update_cmd, $ComposerPackage->scripts->pre_update_cmd);
        self::assertEquals(Scripts::post_update_cmd, $ComposerPackage->scripts->post_update_cmd);
        self::assertEquals(Scripts::pre_status_cmd, $ComposerPackage->scripts->pre_status_cmd);
        self::assertEquals(Scripts::post_status_cmd, $ComposerPackage->scripts->post_status_cmd);
        self::assertEquals(Scripts::pre_package_install, $ComposerPackage->scripts->pre_package_install);
        self::assertEquals(Scripts::post_package_install, $ComposerPackage->scripts->post_package_install);
        self::assertEquals(Scripts::pre_package_update, $ComposerPackage->scripts->pre_package_update);
        self::assertEquals(Scripts::post_package_update, $ComposerPackage->scripts->post_package_update);
        self::assertEquals(Scripts::pre_package_uninstall, $ComposerPackage->scripts->pre_package_uninstall);
        self::assertEquals(Scripts::post_package_uninstall, $ComposerPackage->scripts->post_package_uninstall);
        self::assertEquals(Scripts::pre_autoload_dump, $ComposerPackage->scripts->pre_autoload_dump);
        self::assertEquals(Scripts::post_autoload_dump, $ComposerPackage->scripts->post_autoload_dump);
        self::assertEquals(Scripts::post_root_package_install, $ComposerPackage->scripts->post_root_package_install);
        self::assertEquals(Scripts::post_create_project_cmd, $ComposerPackage->scripts->post_create_project_cmd);
        self::assertEquals('value', $ComposerPackage->scripts_descriptions['key']);
        self::assertEquals(['key' => ['value']], $ComposerPackage->scripts_aliases[0]);
    }

    #[Test] public function licence_array(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::license => ['license1', 'license2'],
        ]);

        self::assertEquals(['license1', 'license2'], $ComposerPackage->license);
    }

    #[Test] public function abandoned_boolean(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::abandoned => true,
        ]);

        self::assertTrue($ComposerPackage->abandoned);
    }

    #[Test] public function abandoned_string(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::abandoned => 'https://other.com',
        ]);

        self::assertEquals('https://other.com', $ComposerPackage->abandoned);
    }

    #[Test] public function comment_array(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::_comment => ['comment1', 'comment2'],
        ]);

        self::assertEquals(['comment1', 'comment2'], $ComposerPackage->_comment);
    }

    #[Test] public function bin_array(): void
    {
        $ComposerPackage = ComposerPackage::from([
            ComposerPackage::bin => ['bin/file', 'bin/file2'],
        ]);

        self::assertEquals(['bin/file', 'bin/file2'], $ComposerPackage->bin);
    }

}