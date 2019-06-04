<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\HasOffers\Affiliate\API;

use Plients\Http\HttpResponse;
use Plients\Http\HttpResponse;

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
