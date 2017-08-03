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

class AdManager extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'AdManager';

    public function addCreative(array $parameters = []): HttpResponse
    {
        return $this->get('addCreative', $parameters);
    }

    public function createCampaign(array $parameters = []): HttpResponse
    {
        return $this->get('createCampaign', $parameters);
    }

    public function findAllCampaigns(array $parameters = []): HttpResponse
    {
        return $this->get('findAllCampaigns', $parameters);
    }

    public function findAllCreatives(array $parameters = []): HttpResponse
    {
        return $this->get('findAllCreatives', $parameters);
    }

    public function findCampaignById(array $parameters = []): HttpResponse
    {
        return $this->get('findCampaignById', $parameters);
    }

    public function getCampaignCode(array $parameters = []): HttpResponse
    {
        return $this->get('getCampaignCode', $parameters);
    }

    public function getCampaignCreatives(array $parameters = []): HttpResponse
    {
        return $this->get('getCampaignCreatives', $parameters);
    }

    public function updateCampaign(array $parameters = []): HttpResponse
    {
        return $this->get('updateCampaign', $parameters);
    }

    public function updateCreativeField(array $parameters = []): HttpResponse
    {
        return $this->get('updateCreativeField', $parameters);
    }
}
