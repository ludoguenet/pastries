<?php

declare(strict_types=1);

namespace App\Responses\Pastry;

use App\Models\Pastry;
use Illuminate\Contracts\Support\Responsable;
use Symfony\Component\HttpFoundation\Response;

class PastryRefundResponse implements Responsable
{
    public function __construct(
        private Pastry $pastry,
    ) {
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return new Response('Remboursement de pâtisserie ID :'.$this->pastry->id);
    }
}
