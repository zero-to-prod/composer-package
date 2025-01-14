<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;
use Zerotoprod\DataModelHelper\DataModelHelper;

/** Settings for PHP extension packages. */
class PhpExt
{
    use DataModel;

    /**
     * If specified, this will be used as the name of the extension, where needed by tooling. If this is not specified, the extension name will be derived from the Composer package name (e.g. `vendor/name` would become `ext-name`). The extension name may be specified with or without the `ext-` prefix, and tools that use this must normalise this appropriately.
     *
     * @see $extension_name
     */
    public const extension_name = 'extension-name';
    /**
     * This is used to add a prefix to the INI file, e.g. `90-xdebug.ini` which affects the loading order. The priority is a number in the range 10-99 inclusive, with 10 being the highest priority (i.e. will be processed first), and 99 being the lowest priority (i.e. will be processed last). There are two digits so that the files sort correctly on any platform, whether the sorting is natural or not.
     *
     * @see $priority
     */
    public const priority = 'priority';
    /**
     * Does this package support Zend Thread Safety
     *
     * @see $support_zts
     */
    public const support_zts = 'support-zts';
    /**
     * Does this package support non-Thread Safe mode
     *
     * @see $support_nts
     */
    public const support_nts = 'support-nts';
    /**
     * If specified, this is the subdirectory that will be used to build the extension instead of the root of the project.
     *
     * @see $build_path
     */
    public const build_path = 'build-path';
    /**
     * An array of OS families to mark as compatible with the extension. Specifying this property will mean this package is not installable with PIE on any OS family not listed here. Must not be specified alongside os-families-exclude.
     *
     * @see $os_families
     */
    public const os_families = 'os-families';
    /**
     * An array of OS families to mark as incompatible with the extension. Specifying this property will mean this package is installable on any OS family except those listed here. Must not be specified alongside os-families.
     *
     * @see $os_families_exclude
     */
    public const os_families_exclude = 'os-families-exclude';
    /**
     * These configure options make up the flags that can be passed to ./configure when installing the extension.
     *
     * @see $configure_options
     */
    public const configure_options = 'configure-options';
    /** If specified, this will be used as the name of the extension, where needed by tooling. If this is not specified, the extension name will be derived from the Composer package name (e.g. `vendor/name` would become `ext-name`). The extension name may be specified with or without the `ext-` prefix, and tools that use this must normalise this appropriately. */
    #[Describe(['from' => self::extension_name])]
    public string $extension_name;
    /** This is used to add a prefix to the INI file, e.g. `90-xdebug.ini` which affects the loading order. The priority is a number in the range 10-99 inclusive, with 10 being the highest priority (i.e. will be processed first), and 99 being the lowest priority (i.e. will be processed last). There are two digits so that the files sort correctly on any platform, whether the sorting is natural or not. */
    public int $priority;
    /** Does this package support Zend Thread Safety */
    #[Describe(['from' => self::support_zts])]
    public bool $support_zts;
    /** Does this package support non-Thread Safe mode */
    #[Describe(['from' => self::support_nts])]
    public bool $support_nts;
    /** If specified, this is the subdirectory that will be used to build the extension instead of the root of the project. */
    #[Describe(['from' => self::build_path])]
    public string|null $build_path;
    /**
     * An array of OS families to mark as compatible with the extension. Specifying this property will mean this package is not installable with PIE on any OS family not listed here. Must not be specified alongside os-families-exclude.
     *
     * @var OsFamiliesEnum[]
     */
    #[Describe(['from' => self::os_families, 'cast' => [DataModelHelper::class, 'mapOf'], 'type' => OsFamiliesEnum::class])]
    public array $os_families;
    /**
     * An array of OS families to mark as incompatible with the extension. Specifying this property will mean this package is installable on any OS family except those listed here. Must not be specified alongside os-families.
     *
     * @var OsFamiliesExcludeEnum[]
     */
    #[Describe(['from' => self::os_families_exclude, 'cast' => [DataModelHelper::class, 'mapOf'], 'type' => OsFamiliesExcludeEnum::class])]
    public array $os_families_exclude;
    /**
     * These configure options make up the flags that can be passed to ./configure when installing the extension.
     *
     * @var array<int, ConfigureOptionsItem>
     */
    #[Describe(['from' => self::configure_options, 'cast' => [DataModelHelper::class, 'mapOf'], 'type' => ConfigureOptionsItem::class])]
    public array $configure_options;
}