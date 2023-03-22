<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicRoutingController extends Controller
{
    public function handleGetRequest(Request $request)
    {
        $csrfToken = csrf_token(); //manually copy this value in POST Request header X-CSRF-TOKEN
        $url = $request->url();
        $host = $request->getHttpHost(); //or getHost();
        $agent = $request->header('User-Agent'); //or $request->userAgent();
        $response = response()->json([
                    'csrfToken' => $csrfToken,
                    'url' => $url,
                    'agent-string' => $agent,
                    'host' => $host
                ]);
        return $response;
    }

    public function handlePostRequest(Request $request)
    {
        $data = $request->all();
        $url = $request->url();
        $host = $request->getHttpHost(); //or getHost();
        $agent = $request->header('User-Agent'); //or $request->userAgent();
        $response = response()->json([
                        'url' => $url,
                        'agent-string' => $agent,
                        'host' => $host,
                        'body' => $data
                    ]);
        return $response;
    }
}
