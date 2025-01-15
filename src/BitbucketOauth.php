<?php

namespace Zerotoprod\ComposerPackage;

use Zerotoprod\DataModel\DataModel;
use Zerotoprod\DataModel\Describe;

class BitbucketOauth
{
    use DataModel;

    /**
     * The consumer-key used for OAuth authentication
     *
     * @see $consumer_key
     */
    public const consumer_key = 'consumer-key';

    /**
     * The consumer-secret used for OAuth authentication
     *
     * @see $consumer_secret
     */
    public const consumer_secret = 'consumer-secret';

    /**
     * The OAuth token retrieved from Bitbucket's API, this is written by Composer and you should not set it nor modify it.
     *
     * @see $access_token
     */
    public const access_token = 'access-token';

    /**
     * The generated token's expiration timestamp, this is written by Composer and you should not set it nor modify it.
     *
     * @see $access_token_expiration
     */
    public const access_token_expiration = 'access-token-expiration';

    /** The consumer-key used for OAuth authentication */
    #[Describe(['from' => self::consumer_key])]
    public string $consumer_key;

    /** The consumer-secret used for OAuth authentication */
    #[Describe(['from' => self::consumer_secret])]
    public string $consumer_secret;

    /** The OAuth token retrieved from Bitbucket's API, this is written by Composer and you should not set it nor modify it. */
    #[Describe(['from' => self::access_token])]
    public string $access_token;

    /** The generated token's expiration timestamp, this is written by Composer and you should not set it nor modify it. */
    #[Describe(['from' => self::access_token_expiration])]
    public string $access_token_expiration;
}