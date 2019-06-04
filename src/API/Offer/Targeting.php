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

namespace Plients\HasOffers\Affiliate\API\Offer;

use Plients\HasOffers\Affiliate\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Targeting extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'OfferTargeting';

    public function getRuleTargetingForOffer(array $parameters = []): HttpResponse
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}
