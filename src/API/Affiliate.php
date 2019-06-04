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

class Affiliate extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'Affiliate';

    public function findById(array $parameters = []): HttpResponse
    {
        return $this->get('findById', $parameters);
    }

    public function getAccountBalance(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getAccountManager(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountManager', $parameters);
    }

    public function getPayoneerSignupUrl(array $parameters = []): HttpResponse
    {
        return $this->get('getPayoneerSignupUrl', $parameters);
    }

    public function getReferralCommission(array $parameters = []): HttpResponse
    {
        return $this->get('getReferralCommission', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->get('update', $parameters);
    }

    public function updatePaymentMethodCheck(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodCheck', $parameters);
    }

    public function updatePaymentMethodDirectDeposit(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodDirectDeposit', $parameters);
    }

    public function updatePaymentMethodOther(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodOther', $parameters);
    }

    public function updatePaymentMethodPaypal(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodPaypal', $parameters);
    }

    public function updatePaymentMethodPayQuicker(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodPayQuicker', $parameters);
    }

    public function updatePaymentMethodWire(array $parameters = []): HttpResponse
    {
        return $this->get('updatePaymentMethodWire', $parameters);
    }
}
