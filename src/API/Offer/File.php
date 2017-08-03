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

namespace BrianFaust\HasOffers\Affiliate\API\Offer;

use BrianFaust\Http\HttpResponse;
use BrianFaust\HasOffers\Affiliate\API\AbstractAPI;

class File extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'OfferFile';

    public function create(array $parameters = []): HttpResponse
    {
        return $this->get('create', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getCreativeCode(array $parameters = []): HttpResponse
    {
        return $this->get('getCreativeCode', $parameters);
    }
}
