<?php

namespace Zerotoprod\ComposerPackage;

/** The name of the OS family to exclude. */
enum OsFamiliesExcludeEnum: string
{
    /** The name of the OS family to exclude. */
    case windows = 'windows';
    /** The name of the OS family to exclude. */
    case bsd = 'bsd';
    /** The name of the OS family to exclude. */
    case darwin = 'darwin';
    /** The name of the OS family to exclude. */
    case solaris = 'solaris';
    /** The name of the OS family to exclude. */
    case linux = 'linux';
    /** The name of the OS family to exclude. */
    case unknown = 'unknown';
}