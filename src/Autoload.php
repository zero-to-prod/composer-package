<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/** Description of how the package can be autoloaded. */
class Autoload
{
    use DataModel;

    /**
     * This is an object of namespaces (keys) and the directories they can be found in (values, can be arrays of paths) by the autoloader.
     *
     * @see $psr_0
     */
    public const psr_0 = 'psr-0';
    /**
     * This is an object of namespaces (keys) and the PSR-4 directories they can map to (values, can be arrays of paths) by the autoloader.
     *
     * @see $psr_4
     */
    public const psr_4 = 'psr-4';
    /**
     * This is an array of paths that contain classes to be included in the class-map generation process.
     *
     * @see $classmap
     */
    public const classmap = 'classmap';
    /**
     * This is an array of files that are always required on every request.
     *
     * @see $files
     */
    public const files = 'files';
    /**
     * This is an array of patterns to exclude from autoload classmap generation. (e.g. "exclude-from-classmap": ["/test/", "/tests/", "/Tests/"]
     *
     * @see $exclude_from_classmap
     */
    public const exclude_from_classmap = 'exclude-from-classmap';
    /**
     * This is an object of namespaces (keys) and the directories they can be found in (values, can be arrays of paths) by the autoloader.
     *
     * @var array
     */
    #[Describe(['from' => self::psr_0])]
    public array $psr_0;
    /**
     * This is an object of namespaces (keys) and the PSR-4 directories they can map to (values, can be arrays of paths) by the autoloader.
     *
     * @var array
     */
    #[Describe(['from' => self::psr_4])]
    public array $psr_4;
    /**
     * This is an array of paths that contain classes to be included in the class-map generation process.
     *
     * @var array
     */
    public array $classmap;
    /**
     * This is an array of files that are always required on every request.
     *
     * @var array
     */
    public array $files;
    /**
     * This is an array of patterns to exclude from autoload classmap generation. (e.g. "exclude-from-classmap": ["/test/", "/tests/", "/Tests/"]
     *
     * @var array
     */
    #[Describe(['from' => self::exclude_from_classmap])]
    public array $exclude_from_classmap;
}