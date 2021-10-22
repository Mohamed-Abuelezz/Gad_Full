<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Local
    {
      /**
       * Handle an incoming request.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \Closure  $next
       * @return mixed
       */
       public function handle($request, Closure $next)
       {

         $raw_locale = $request->session()->get('locale');

         $locale = Config::get('app.locale');
        
      //   dd($raw_locale);

  if($raw_locale != null){
    if (in_array($raw_locale, ['en', 'ar'])) {
        $locale = $raw_locale;
      };
  }


           App::setLocale($locale);

           return $next($request);
       }


     }
