<?php

declare(strict_types=1);

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

class Notification extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Notification';

    public function clearUserSubscriptions(array $parameters = []): HttpResponse
    {
        return $this->get('clearUserSubscriptions', $parameters);
    }

    public function getUserSubscriptions(array $parameters = []): HttpResponse
    {
        return $this->get('getUserSubscriptions', $parameters);
    }

    public function replaceUserSubscriptions(array $parameters = []): HttpResponse
    {
        return $this->get('replaceUserSubscriptions', $parameters);
    }
}
