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

class Alert extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Alert';

    public function dismissAffiliateUserAlert(array $parameters = []): HttpResponse
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getAffiliateUserAlerts(array $parameters = []): HttpResponse
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }
}
