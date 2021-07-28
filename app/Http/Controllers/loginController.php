<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;


class loginController extends Controller
{
    function loginForm()
    {   if(session()->has('data')) {return redirect()->back();}
        return view('login');
    }

    function index(Request $request)
    {
        $request->session()->put('data', $request->input());
        session()->put('tablename', 'cursus');

        $ab = DB::table('utilisateur')->where('username', '=', $request->get('user'))->where('password', '=', $request->get('pwd'))->exists();
        if ($ab == TRUE)
        {
            session()->put('user', session()->get('data')['user']);
            $q=DB::table('utilisateur')->where('username','=',session()->get('user'))->value('id_utilisateur');
            session()->put('id', $q);
            session()->put('anUniv',DB::table('anneeuniv')->where('idyear','=',1)->value('an1'));
            session()->put('des',DB::table('utilisateur')->where('id_utilisateur','=',session('id'))->value('des'));
            session()->put('maxID',DB::table('utilisateur')->max('id_utilisateur'));
            //   session()->put('id_utilisateur',DB::table('utilisateur')->where('id_utilisateur','=',session('user'))->get('id_utilisateur'));
            $a = Etudiant::where('dep', '=', session('id'))->select('sect')->distinct('sect')->count();
            session()->put('nb_sect',$a);

            session()->put('xa', Etudiant::where('dep', '=', '1')->select('sect')->distinct('sect')->count());
            session()->put('xb', Etudiant::where('dep', '=', '2')->select('sect')->distinct('sect')->count());
            session()->put('xc', Etudiant::where('dep', '=', '3')->select('sect')->distinct('sect')->count());
            session()->put('xd', Etudiant::where('dep', '=', '4')->select('sect')->distinct('sect')->count());
            session()->put('xe', Etudiant::where('dep', '=', '5')->select('sect')->distinct('sect')->count());

            // return $xa + $xb + $xc + $xd + $xe;
          //  session()->put('nbSectSpecA',DB::table());
            if(session('id')=='6') return redirect('scolarite');
            else return redirect('effectuer-classement');

        } else {
            return view('login');
        }
    }
}
