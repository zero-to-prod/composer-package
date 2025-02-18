<?php

namespace Zerotoprod\ComposerPackage;

/**
 * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
 *
 * @link https://github.com/zero-to-prod/composer-package
 */
enum MinimumStabilityEnum: string
{
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case dev = 'dev';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case alpha = 'alpha';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case beta = 'beta';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case rc = 'rc';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case RC = 'RC';
    /**
     * The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    case stable = 'stable';
}