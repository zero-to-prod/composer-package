<?php

namespace Zerotoprod\ComposerPackage;

/** The name of the OS family to mark as compatible. */
enum OsFamiliesEnum: string
{
    /** The name of the OS family to mark as compatible. */
    case windows = 'windows';
    /** The name of the OS family to mark as compatible. */
    case bsd = 'bsd';
    /** The name of the OS family to mark as compatible. */
    case darwin = 'darwin';
    /** The name of the OS family to mark as compatible. */
    case solaris = 'solaris';
    /** The name of the OS family to mark as compatible. */
    case linux = 'linux';
    /** The name of the OS family to mark as compatible. */
    case unknown = 'unknown';
}