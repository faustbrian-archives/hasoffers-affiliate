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

namespace BrianFaust\HasOffers\Affiliate\API\Brand;

use BrianFaust\HasOffers\Affiliate\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Information extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'BrandInformation';

    public function getBrandInformation(array $parameters = []): HttpResponse
    {
        return $this->get('getBrandInformation', $parameters);
    }
}
