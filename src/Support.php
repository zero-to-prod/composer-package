<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

class Support
{
    use DataModel;

    /**
     * Email address for support.
     *
     * @see $email
     */
    public const email = 'email';
    /**
     * URL to the issue tracker.
     *
     * @see $issues
     */
    public const issues = 'issues';
    /**
     * URL to the forum.
     *
     * @see $forum
     */
    public const forum = 'forum';
    /**
     * URL to the wiki.
     *
     * @see $wiki
     */
    public const wiki = 'wiki';
    /**
     * IRC channel for support, as irc://server/channel.
     *
     * @see $irc
     */
    public const irc = 'irc';
    /**
     * URL to the support chat.
     *
     * @see $chat
     */
    public const chat = 'chat';
    /**
     * URL to browse or download the sources.
     *
     * @see $source
     */
    public const source = 'source';
    /**
     * URL to the documentation.
     *
     * @see $docs
     */
    public const docs = 'docs';
    /**
     * URL to the RSS feed.
     *
     * @see $rss
     */
    public const rss = 'rss';
    /**
     * URL to the vulnerability disclosure policy (VDP).
     *
     * @see $security
     */
    public const security = 'security';
    /** Email address for support. */
    public string $email;
    /** URL to the issue tracker. */
    public string $issues;
    /** URL to the forum. */
    public string $forum;
    /** URL to the wiki. */
    public string $wiki;
    /** IRC channel for support, as irc://server/channel. */
    public string $irc;
    /** URL to the support chat. */
    public string $chat;
    /** URL to browse or download the sources. */
    public string $source;
    /** URL to the documentation. */
    public string $docs;
    /** URL to the RSS feed. */
    public string $rss;
    /** URL to the vulnerability disclosure policy (VDP). */
    public string $security;
}