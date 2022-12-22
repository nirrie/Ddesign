<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo 'No data in the session';
        }
    }

    /**
     * Store the session data.
     *
     * @param  Request  $request
     * @return string
     */
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name');
        echo 'Data has been added to session';
    }

    /**
     * Delete the session data.
     *
     * @param  Request  $requests
     */
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo 'Data has been removed from session.';
    }
}
