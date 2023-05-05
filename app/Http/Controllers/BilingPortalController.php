<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BilingPortalController extends Controller
{
    public function __invoke(Request $request)
    {
        return $request->user()->redirectToBillingPortal(route('/'));
    }
}
https://billing.stripe.com/p/login/test_cN202p3r79pVdnW144
