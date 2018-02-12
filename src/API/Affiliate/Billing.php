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

namespace BrianFaust\HasOffers\Affiliate\API\Affiliate;

use BrianFaust\HasOffers\Affiliate\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Billing extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'AffiliateBilling';

    public function findAllInvoices(array $parameters = []): HttpResponse
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllReceipts(array $parameters = []): HttpResponse
    {
        return $this->get('findAllReceipts', $parameters);
    }

    public function findInvoiceById(array $parameters = []): HttpResponse
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findReceiptById(array $parameters = []): HttpResponse
    {
        return $this->get('findReceiptById', $parameters);
    }

    public function getAccountBalance(array $parameters = []): HttpResponse
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getPayoutTotals(array $parameters = []): HttpResponse
    {
        return $this->get('getPayoutTotals', $parameters);
    }

    public function updateTaxId(array $parameters = []): HttpResponse
    {
        return $this->get('updateTaxId', $parameters);
    }
}
