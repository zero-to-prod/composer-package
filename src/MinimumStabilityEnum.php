<?php

namespace Zerotoprod\ComposerPackage;

/** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
enum MinimumStabilityEnum: string
{
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case dev = 'dev';
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case alpha = 'alpha';
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case beta = 'beta';
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case rc = 'rc';
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case RC = 'RC';
    /** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
    case stable = 'stable';
}