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
use BrianFaust\Http\HttpResponse;

class Report extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Report';

    public function getAffiliateCommissions(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    public function getAffiliateReferrals(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateReferrals', $parameters);
    }

    public function getConversions(array $parameters = []): HttpResponse
    {
        return $this->get('getConversions', $parameters);
    }

    public function getStats(array $parameters = []): HttpResponse
    {
        return $this->get('getStats', $parameters);
    }
}
