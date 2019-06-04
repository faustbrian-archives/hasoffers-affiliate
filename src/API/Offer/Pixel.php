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

class Pixel extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'OfferPixel';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function getAllowedTypes(array $parameters = []): HttpResponse
    {
        return $this->get('getAllowedTypes', $parameters);
    }

    public function updateField(array $parameters = []): HttpResponse
    {
        return $this->get('updateField', $parameters);
    }
}
