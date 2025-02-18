<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/composer-package
 */
class Support
{
    use DataModel;

    /**
     * Email address for support.
     *
     * @see  $email
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const email = 'email';
    /**
     * URL to the issue tracker.
     *
     * @see  $issues
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const issues = 'issues';
    /**
     * URL to the forum.
     *
     * @see  $forum
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const forum = 'forum';
    /**
     * URL to the wiki.
     *
     * @see  $wiki
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const wiki = 'wiki';
    /**
     * IRC channel for support, as irc://server/channel.
     *
     * @see  $irc
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const irc = 'irc';
    /**
     * URL to the support chat.
     *
     * @see  $chat
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const chat = 'chat';
    /**
     * URL to browse or download the sources.
     *
     * @see  $source
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const source = 'source';
    /**
     * URL to the documentation.
     *
     * @see  $docs
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const docs = 'docs';
    /**
     * URL to the RSS feed.
     *
     * @see  $rss
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const rss = 'rss';
    /**
     * URL to the vulnerability disclosure policy (VDP).
     *
     * @see  $security
     * @link https://github.com/zero-to-prod/composer-package
     */
    public const security = 'security';
    /**
     * Email address for support.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $email = null;
    /**
     * URL to the issue tracker.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $issues = null;
    /**
     * URL to the forum.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $forum = null;
    /**
     * URL to the wiki.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $wiki = null;
    /**
     * IRC channel for support, as irc://server/channel.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $irc = null;
    /**
     * URL to the support chat.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $chat = null;
    /**
     * URL to browse or download the sources.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $source = null;
    /**
     * URL to the documentation.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $docs = null;
    /**
     * URL to the RSS feed.
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $rss = null;
    /**
     * URL to the vulnerability disclosure policy (VDP).
     *
     * @link https://github.com/zero-to-prod/composer-package
     */
    public null|string $security = null;
}