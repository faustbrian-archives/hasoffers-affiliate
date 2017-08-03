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

class UserPreferences extends AbstractAPI
{
    protected $endpointType = 'Affiliate';
    protected $endpointName = 'UserPreferences';

    public function setValue(array $parameters = []): HttpResponse
    {
        return $this->get('setValue', $parameters);
    }
}
