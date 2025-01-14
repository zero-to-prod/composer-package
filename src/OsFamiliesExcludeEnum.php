<?php

namespace Zerotoprod\ComposerPackage;

/** The name of the OS family to exclude. */
enum OsFamiliesExcludeEnum: string
{
    case windows = 'windows';
    case bsd = 'bsd';
    case darwin = 'darwin';
    case solaris = 'solaris';
    case linux = 'linux';
    case unknown = 'unknown';
}