<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Thehouseofel\Kalion\Core\Infrastructure\Http\Controllers\Controller;

final class TestController extends Controller
{
    public function logoutWeb(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return 'des logueado';
    }

    public function logoutApi(Request $request)
    {
        Auth::guard('api')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return 'des logueado';
    }

    public function loginWeb(int $id = 2)
    {
        $u = Auth::guard('web')->loginUsingId($id);
        return 'logueado';
    }

    public function loginApi(int $id = 1)
    {
        $u = Auth::guard('api')->loginUsingId($id);
        return 'logueado';
    }

    public function testWeb()
    {
//        dump(Auth::guard('web')->check());
//        dd('fin');

//        dump(config('kalion_user'));
//        dd(config('auth'));
        //dd(user_entity());
//        dd(session()->id());
//        dd(session()->setId());
        TestJob::dispatch(session()->id());

        /*dd(
            auth()->user()?->toArray(),
            auth('api')->user()?->toArray(),
            session()->all(),
        );*/
    }
    public function testApi()
    {
        dump(Auth::guard('api')->check());

        dd(
            auth()->user()?->toArray(),
            auth('api')->user()?->toArray(),
            session()->all(),
        );
    }
}
