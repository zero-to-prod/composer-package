<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

/** Script listeners that will be executed before/after some events. */
class Scripts
{
    use DataModel;

    /**
     * Occurs before the install command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_install_cmd
     */
    public const pre_install_cmd = 'pre-install-cmd';
    /**
     * Occurs after the install command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_install_cmd
     */
    public const post_install_cmd = 'post-install-cmd';
    /**
     * Occurs before the update command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_update_cmd
     */
    public const pre_update_cmd = 'pre-update-cmd';
    /**
     * Occurs after the update command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_update_cmd
     */
    public const post_update_cmd = 'post-update-cmd';
    /**
     * Occurs before the status command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_status_cmd
     */
    public const pre_status_cmd = 'pre-status-cmd';
    /**
     * Occurs after the status command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_status_cmd
     */
    public const post_status_cmd = 'post-status-cmd';
    /**
     * Occurs before a package is installed, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_package_install
     */
    public const pre_package_install = 'pre-package-install';
    /**
     * Occurs after a package is installed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_package_install
     */
    public const post_package_install = 'post-package-install';
    /**
     * Occurs before a package is updated, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_package_update
     */
    public const pre_package_update = 'pre-package-update';
    /**
     * Occurs after a package is updated, contains one or more Class::method callables or shell commands.
     *
     * @see $post_package_update
     */
    public const post_package_update = 'post-package-update';
    /**
     * Occurs before a package has been uninstalled, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_package_uninstall
     */
    public const pre_package_uninstall = 'pre-package-uninstall';
    /**
     * Occurs after a package has been uninstalled, contains one or more Class::method callables or shell commands.
     *
     * @see $post_package_uninstall
     */
    public const post_package_uninstall = 'post-package-uninstall';
    /**
     * Occurs before the autoloader is dumped, contains one or more Class::method callables or shell commands.
     *
     * @see $pre_autoload_dump
     */
    public const pre_autoload_dump = 'pre-autoload-dump';
    /**
     * Occurs after the autoloader is dumped, contains one or more Class::method callables or shell commands.
     *
     * @see $post_autoload_dump
     */
    public const post_autoload_dump = 'post-autoload-dump';
    /**
     * Occurs after the root-package is installed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_root_package_install
     */
    public const post_root_package_install = 'post-root-package-install';
    /**
     * Occurs after the create-project command is executed, contains one or more Class::method callables or shell commands.
     *
     * @see $post_create_project_cmd
     */
    public const post_create_project_cmd = 'post-create-project-cmd';
    /** Occurs before the install command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_install_cmd])]
    public array|string $pre_install_cmd;
    /** Occurs after the install command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_install_cmd])]
    public array|string $post_install_cmd;
    /** Occurs before the update command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_update_cmd])]
    public array|string $pre_update_cmd;
    /** Occurs after the update command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_update_cmd])]
    public array|string $post_update_cmd;
    /** Occurs before the status command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_status_cmd])]
    public array|string $pre_status_cmd;
    /** Occurs after the status command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_status_cmd])]
    public array|string $post_status_cmd;
    /** Occurs before a package is installed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_package_install])]
    public array|string $pre_package_install;
    /** Occurs after a package is installed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_package_install])]
    public array|string $post_package_install;
    /** Occurs before a package is updated, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_package_update])]
    public array|string $pre_package_update;
    /** Occurs after a package is updated, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_package_update])]
    public array|string $post_package_update;
    /** Occurs before a package has been uninstalled, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_package_uninstall])]
    public array|string $pre_package_uninstall;
    /** Occurs after a package has been uninstalled, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_package_uninstall])]
    public array|string $post_package_uninstall;
    /** Occurs before the autoloader is dumped, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::pre_autoload_dump])]
    public array|string $pre_autoload_dump;
    /** Occurs after the autoloader is dumped, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_autoload_dump])]
    public array|string $post_autoload_dump;
    /** Occurs after the root-package is installed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_root_package_install])]
    public array|string $post_root_package_install;
    /** Occurs after the create-project command is executed, contains one or more Class::method callables or shell commands. */
    #[Describe(['from' => self::post_create_project_cmd])]
    public array|string $post_create_project_cmd;
}