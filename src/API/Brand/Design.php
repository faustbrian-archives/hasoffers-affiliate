<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Affiliate\API\Brand;

use BrianFaust\Http\HttpResponse;
use BrianFaust\HasOffers\Affiliate\API\AbstractAPI;

class Design extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'BrandDesign';

    public function getTermsAndConditions(array $parameters = []): HttpResponse
    {
        return $this->get('getTermsAndConditions', $parameters);
    }
}
