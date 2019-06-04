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

class RingRevenue extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'RingRevenue';

    public function createAffiliateLoginUrl(array $parameters = []): HttpResponse
    {
        return $this->get('createAffiliateLoginUrl', $parameters);
    }
}
