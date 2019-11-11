<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class GenerateMenus
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
        $menu = \Menu::make('leftMenu', function ($menu) {
            $menu->add('Workspace', 'workspace');
            $menu->get('workspace')->add('Create', ['route' => 'workspace.create']);

//            $menu->add('About', 'about');
//            $menu->add('Services', 'services');
//            $menu->add('Contact', 'contact');
        });

        return $next($request);
    }
}
