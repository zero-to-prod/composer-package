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
    public null|string $email = null;
    /** URL to the issue tracker. */
    public null|string $issues = null;
    /** URL to the forum. */
    public null|string $forum = null;
    /** URL to the wiki. */
    public null|string $wiki = null;
    /** IRC channel for support, as irc://server/channel. */
    public null|string $irc = null;
    /** URL to the support chat. */
    public null|string $chat = null;
    /** URL to browse or download the sources. */
    public null|string $source = null;
    /** URL to the documentation. */
    public null|string $docs = null;
    /** URL to the RSS feed. */
    public null|string $rss = null;
    /** URL to the vulnerability disclosure policy (VDP). */
    public null|string $security = null;
}