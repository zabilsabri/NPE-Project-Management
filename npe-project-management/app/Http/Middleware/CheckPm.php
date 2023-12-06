<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Models\Project;

class CheckPm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $pm_id = Project::find($request->route('id'))->pm_id;
        if(Auth::user()->id == $pm_id){
            return $next($request);
        }

        return redirect()->back();
    }
}
