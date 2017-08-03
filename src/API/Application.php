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

namespace BrianFaust\HasOffers\Affiliate\API;

use BrianFaust\Http\HttpResponse;

class Application extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Application';

    public function findAllCountries(array $parameters = []): HttpResponse
    {
        return $this->get('findAllCountries', $parameters);
    }

    public function findAllHostnames(array $parameters = []): HttpResponse
    {
        return $this->get('findAllHostnames', $parameters);
    }

    public function findAllOfferCategories(array $parameters = []): HttpResponse
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    public function findAllTimezones(array $parameters = []): HttpResponse
    {
        return $this->get('findAllTimezones', $parameters);
    }
}
