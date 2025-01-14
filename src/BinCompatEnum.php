<?php

namespace Zerotoprod\ComposerPackage;

/** The compatibility of the binaries, defaults to "auto" (automatically guessed), can be "full" (compatible with both Windows and Unix-based systems) and "proxy" (only bash-style proxy). */
enum BinCompatEnum: string
{
    case auto = 'auto';
    case full = 'full';
    case proxy = 'proxy';
    case symlink = 'symlink';
}