<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/** Description of additional autoload rules for development purpose (eg. a test suite). */
class AutoloadDev
{
    use DataModel;

    /**
     * This is an object of namespaces (keys) and the directories they can be found into (values, can be arrays of paths) by the autoloader.
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
     * This is an object of namespaces (keys) and the directories they can be found into (values, can be arrays of paths) by the autoloader.
     *
     * @var null|array
     */
    #[Describe(['from' => self::psr_0])]
    public null|array $psr_0 = null;
    /**
     * This is an object of namespaces (keys) and the PSR-4 directories they can map to (values, can be arrays of paths) by the autoloader.
     *
     * @var null|array
     */
    #[Describe(['from' => self::psr_4])]
    public null|array $psr_4 = null;
    /**
     * This is an array of paths that contain classes to be included in the class-map generation process.
     *
     * @var null|array
     */
    public null|array $classmap = null;
    /**
     * This is an array of files that are always required on every request.
     *
     * @var null|array
     */
    public null|array $files = null;
}