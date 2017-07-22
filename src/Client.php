<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Affiliate;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $key;

    /**
     * Create a new client instance.
     *
     * @param string $networkId
     * @param string $key
     */
    public function __construct(string $networkId, string $key)
    {
        $this->networkId = $networkId;
        $this->key       = $key;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\HasOffers\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://api.hasoffers.com/APIv3/json');

        $class = "BrianFaust\\HasOffers\\API\\{$name}";

        return new $class($client);
    }
}
