<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Closure, Redirect;

class VerifyCsrfToken extends BaseVerifier
{

	// public function handle($request, Closure $next)
	// {
	//   if ($request->server->get('REQUEST_METHOD') == 'POST') {
	//   	if (substr($request->server->get('REQUEST_URI'), -5) == '.html') {
	//     	return Redirect::secure($request->server->get('REQUEST_URI'));
	//    	}
	//   }
	//   if ($request->server->get('REQUEST_URI') == '/home' ) 
	//   {
	//   	return $next($request);
	//   }
	  
	//   return parent::handle($request, $next);
	// }

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}

// $request->server->get('REQUEST_URI') == '/payment/process/notify' || 
// $request->server->get('REQUEST_URI') == '/payment/process/redirect'  ||
// $request->server->get('REQUEST_URI') == '/payment/paypal/callback'  ||
// $request->server->get('REQUEST_URI') == '/account/is-bookmarked'  ||
// $request->server->get('REQUEST_URI') == '/api/dot/pin'  ||
// $request->server->get('REQUEST_URI') == '/api/dot/subscription'  ||