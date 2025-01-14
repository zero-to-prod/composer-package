<?php

namespace Zerotoprod\ComposerPackage;

enum VcsRepositoryTypeEnum: string
{
    case vcs = "vcs";
    case github = "github";
    case git = "git";
    case gitlab = "gitlab";
    case bitbucket = "bitbucket";
    case git_bitbucket = "git-bitbucket";
    case hg = "hg";
    case fossil = "fossil";
    case perforce = "perforce";
    case svn = "svn";
}