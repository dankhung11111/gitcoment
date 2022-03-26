<?php
  
namespace App\Http\Middleware;
  
use Closure;
  
class newtoken
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
        if($request->input('admin')=='1234')
           {
               return redirect('new');
           }
        return $next($request);
        
    }
}