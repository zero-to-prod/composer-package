<?php

namespace Vendor\Package;

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

    /** The consumer_key used for HTTP Basic authentication */
    #[Describe(['from' => self::consumer_key])]
    public string $consumer_key;
}