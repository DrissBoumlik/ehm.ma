<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Session;
use Auth;

class LanguageMiddlware
{
    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['fr', 'en', 'ar'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Session::has('locale'))
        {
            \App::setlocale(\Session::get('locale'));
        }
        return $next($request);
    }
}
