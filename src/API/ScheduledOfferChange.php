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

class ScheduledOfferChange extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'ScheduledOfferChange';

    public function findSchedules(array $parameters = []): HttpResponse
    {
        return $this->get('findSchedules', $parameters);
    }
}
