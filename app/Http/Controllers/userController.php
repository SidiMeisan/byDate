<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Models\avaliabality;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    protected $userId;

    public function __construct()
    {

        $this->middleware(function (Request $request, $next) {
            if (!\Auth::check()) {
                return redirect('/login');
            }
            $this->userId = \Auth::id(); // you can access user id here

            return $next($request);
        });
    }

    public function createUrl()
    {
        $userUrl = Auth::user()->url;
        if ($userUrl != null) {
            return redirect(url('/avaliable'));
        }
        return view('profile/urlform');
    }

    public function postUrl(Request $request)
    {
        $finduser = User::where('url', $request->url)->first();
        if ($finduser) {
            return redirect('/url');
        } else {
            $updateUser = User::find($this->userId);
            $updateUser->url = $request->url;
            $updateUser->save();

            return redirect('/avaliabality');
        }
    }

    public function avaliabality()
    {
        $findavaliabality = avaliabality::where('id_user', $this->userId)->first();
        if ($findavaliabality) {
            return 'Dashboard';
        }

        return view('profile/avaliabality');
    }

    public function postAvaliabality(Request $request)
    {
        $days = "";
        foreach ($request->Days as $item) {
            $days .= $item . ', ';
        }

        $newAvaliabality = new avaliabality;
        $newAvaliabality->id_user = $this->userId;
        $newAvaliabality->time_from = $request->hour_from;
        $newAvaliabality->time_to = $request->hour_to;
        $newAvaliabality->days = $days;
        $newAvaliabality->save();
        return redirect('dashboard');
    }
}
