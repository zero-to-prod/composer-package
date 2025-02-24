<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/**
 * Description of how the package can be autoloaded.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
class Autoload
{
    use DataModel;

    /**
     * This is an object of namespaces (keys) and the directories they can be found in (values, can be arrays of paths) by the autoloader.
     *
     * @see  $psr_0
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const psr_0 = 'psr-0';
    /**
     * This is an object of namespaces (keys) and the PSR-4 directories they can map to (values, can be arrays of paths) by the autoloader.
     *
     * @see  $psr_4
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const psr_4 = 'psr-4';
    /**
     * This is an array of paths that contain classes to be included in the class-map generation process.
     *
     * @see  $classmap
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const classmap = 'classmap';
    /**
     * This is an array of files that are always required on every request.
     *
     * @see  $files
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const files = 'files';
    /**
     * This is an array of patterns to exclude from autoload classmap generation. (e.g. "exclude-from-classmap": ["/test/", "/tests/", "/Tests/"]
     *
     * @see  $exclude_from_classmap
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const exclude_from_classmap = 'exclude-from-classmap';
    /**
     * This is an object of namespaces (keys) and the directories they can be found in (values, can be arrays of paths) by the autoloader.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::psr_0])]
    public null|array $psr_0 = null;
    /**
     * This is an object of namespaces (keys) and the PSR-4 directories they can map to (values, can be arrays of paths) by the autoloader.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::psr_4])]
    public null|array $psr_4 = null;
    /**
     * This is an array of paths that contain classes to be included in the class-map generation process.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $classmap = null;
    /**
     * This is an array of files that are always required on every request.
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|array $files = null;
    /**
     * This is an array of patterns to exclude from autoload classmap generation. (e.g. "exclude-from-classmap": ["/test/", "/tests/", "/Tests/"]
     *
     * @var null|array
     * @link https://github.com/zero-to-prod/composer-package
     */
    #[Describe(['from' => self::exclude_from_classmap])]
    public null|array $exclude_from_classmap = null;
}