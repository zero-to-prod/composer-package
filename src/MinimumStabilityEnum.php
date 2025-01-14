<?php

namespace Zerotoprod\ComposerPackage;

/** The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable. */
enum MinimumStabilityEnum: string
{
    case dev = 'dev';
    case alpha = 'alpha';
    case beta = 'beta';
    case rc = 'rc';
    case RC = 'RC';
    case stable = 'stable';
}