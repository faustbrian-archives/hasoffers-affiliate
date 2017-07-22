<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Affiliate\API\Offer;

use BrianFaust\HasOffers\Affiliate\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Targeting extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'OfferTargeting';

    public function getRuleTargetingForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}
