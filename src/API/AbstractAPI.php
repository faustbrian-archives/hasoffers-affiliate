<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Affiliate\API;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    public function get(string $method, array $parameters): HttpResponse
    {
        return $this
            ->client
            ->get('/', [
                'NetworkId' => $this->client->networkId,
                'Target'    => "{$this->endpointType}_{$this->endpointName}",
                'Method'    => $method,
                'api_key'   => $this->client->key,
            ] + $parameters);
    }
}
