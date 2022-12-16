<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

   class SessionController extends Controller {
        public function accessSessionData(Request $request) {
           if($request->session()->has('ip_address'))
              echo $request->session()->get('ip_address');
           else
              echo 'No data in the session';
        }
        public function storeSessionData(Request $request) {
           $request->session()->put('ip_address');
           echo "Data has been added to session";
        }
        public function deleteSessionData(Request $request) {
           $request->session()->forget('ip_address');
           echo "Data has been removed from session.";
        }
     }

