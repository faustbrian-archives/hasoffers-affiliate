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

class Offer extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Offer';

    public function acceptOfferTermsAndConditions(array $parameters = []): HttpResponse
    {
        return $this->get('acceptOfferTermsAndConditions', $parameters);
    }

    public function findAll(array $parameters = []): HttpResponse
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllFeaturedOfferIds(array $parameters = []): HttpResponse
    {
        return $this->get('findAllFeaturedOfferIds', $parameters);
    }

    public function findByCreativeType(array $parameters = []): HttpResponse
    {
        return $this->get('findByCreativeType', $parameters);
    }

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function findMyOffers(array $parameters = []): HttpResponse
    {
        return $this->get('findMyOffers', $parameters);
    }

    public function generateTrackingLink(array $parameters = []): HttpResponse
    {
        return $this->get('generateTrackingLink', $parameters);
    }

    public function getApprovalQuestions(array $parameters = []): HttpResponse
    {
        return $this->get('getApprovalQuestions', $parameters);
    }

    public function getCategories(array $parameters = []): HttpResponse
    {
        return $this->get('getCategories', $parameters);
    }

    public function getPayoutDetails(array $parameters = []): HttpResponse
    {
        return $this->get('getPayoutDetails', $parameters);
    }

    public function getPixels(array $parameters = []): HttpResponse
    {
        return $this->get('getPixels', $parameters);
    }

    public function getTargetCountries(array $parameters = []): HttpResponse
    {
        return $this->get('getTargetCountries', $parameters);
    }

    public function getThumbnail(array $parameters = []): HttpResponse
    {
        return $this->get('getThumbnail', $parameters);
    }

    public function requestOfferAccess(array $parameters = []): HttpResponse
    {
        return $this->get('requestOfferAccess', $parameters);
    }
}
