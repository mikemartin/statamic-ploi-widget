<?php

namespace App\Http\Controllers;

use Statamic\Http\Controllers\Controller;
use Spatie\WebhookServer\WebhookCall;

class PloiController extends Controller
{
    public function deploy()
    {
        WebhookCall::create()
            ->url('replace-me')
            ->doNotSign()
            ->dispatch();

        return 'Production deployment dispatched.';
    }
}