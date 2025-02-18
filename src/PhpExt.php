<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/**
 * Settings for PHP extension packages.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
class PhpExt
{
    use DataModel;
    use DataModelHelper;

    /**
     * If specified, this will be used as the name of the extension, where needed by tooling. If this is not specified, the extension name will be derived from the Composer package name (e.g. `vendor/name` would become `ext-name`). The extension name may be specified with or without the `ext-` prefix, and tools that use this must normalise this appropriately.
     *
     * @see  $extension_name
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const extension_name = 'extension-name';
    /**
     * This is used to add a prefix to the INI file, e.g. `90-xdebug.ini` which affects the loading order. The priority is a number in the range 10-99 inclusive, with 10 being the highest priority (i.e. will be processed first), and 99 being the lowest priority (i.e. will be processed last). There are two digits so that the files sort correctly on any platform, whether the sorting is natural or not.
     *
     * @see  $priority
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const priority = 'priority';
    /**
     * Does this package support Zend Thread Safety
     *
     * @see  $support_zts
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const support_zts = 'support-zts';
    /**
     * Does this package support non-Thread Safe mode
     *
     * @see  $support_nts
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const support_nts = 'support-nts';
    /**
     * If specified, this is the subdirectory that will be used to build the extension instead of the root of the project.
     *
     * @see  $build_path
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const build_path = 'build-path';
    /**
     * An array of OS families to mark as compatible with the extension. Specifying this property will mean this package is not installable with PIE on any OS family not listed here. Must not be specified alongside os-families-exclude.
     *
     * @see  $os_families
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const os_families = 'os-families';
    /**
     * An array of OS families to mark as incompatible with the extension. Specifying this property will mean this package is installable on any OS family except those listed here. Must not be specified alongside os-families.
     *
     * @see  $os_families_exclude
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const os_families_exclude = 'os-families-exclude';
    /**
     * These configure options make up the flags that can be passed to ./configure when installing the extension.
     *
     * @see  $configure_options
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const configure_options = 'configure-options';
    /**
     * If specified, this will be used as the name of the extension, where needed by tooling. If this is not specified, the extension name will be derived from the Composer package name (e.g. `vendor/name` would become `ext-name`). The extension name may be specified with or without the `ext-` prefix, and tools that use this must normalise this appropriately.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::extension_name])]
    public null|string $extension_name = null;
    /**
     * This is used to add a prefix to the INI file, e.g. `90-xdebug.ini` which affects the loading order. The priority is a number in the range 10-99 inclusive, with 10 being the highest priority (i.e. will be processed first), and 99 being the lowest priority (i.e. will be processed last). There are two digits so that the files sort correctly on any platform, whether the sorting is natural or not.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|int $priority = null;
    /**
     * Does this package support Zend Thread Safety
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::support_zts])]
    public null|bool $support_zts = null;
    /**
     * Does this package support non-Thread Safe mode
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::support_nts])]
    public null|bool $support_nts = null;
    /**
     * If specified, this is the subdirectory that will be used to build the extension instead of the root of the project.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::build_path])]
    public null|string $build_path = null;
    /**
     * An array of OS families to mark as compatible with the extension. Specifying this property will mean this package is not installable with PIE on any OS family not listed here. Must not be specified alongside os-families-exclude.
     *
     * @var OsFamiliesEnum[]
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::os_families, 'cast' => [self::class, 'mapOf'], 'type' => OsFamiliesEnum::class])]
    public array $os_families = [];
    /**
     * An array of OS families to mark as incompatible with the extension. Specifying this property will mean this package is installable on any OS family except those listed here. Must not be specified alongside os-families.
     *
     * @var OsFamiliesExcludeEnum[]
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::os_families_exclude, 'cast' => [self::class, 'mapOf'], 'type' => OsFamiliesExcludeEnum::class])]
    public array $os_families_exclude = [];
    /**
     * These configure options make up the flags that can be passed to ./configure when installing the extension.
     *
     * @var array<int, ConfigureOptionsItem>
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::configure_options, 'cast' => [self::class, 'mapOf'], 'type' => ConfigureOptionsItem::class])]
    public array $configure_options = [];
}