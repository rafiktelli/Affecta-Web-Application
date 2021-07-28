<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use App\Exports\EtudiantExport;
use App\Models\utilisateur;
use App\Models\optiondep;

class scolariteController extends Controller
{
    public function scolariteForm()
    {
        if (!session()->has('data')) {
            return redirect('login');
        }
        if(session('id')=='6') return view('scolarite');
        else return redirect('effectuer-classement');
    }

    public function setYear()
    {
        $conn = mysqli_connect("localhost", "root", "", "myseconnddb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST["button"])) {
            if (($_POST['an1'] < 2000) || ($_POST['an1'] != ($_POST['an2'] - 1))) {
               /* echo 'fausse date';*/
            } else {
                $sql = "UPDATE anneeuniv SET an1='" . $_POST['an1'] . "',an2='" . $_POST['an2'] . "' WHERE idyear='1'";
                $result = $conn->query($sql);
            }
        }
        $conn->close();
        return view('scolarite');
    }

    public function index() {

        if (!session()->has('data')) {
            return redirect('login');
        }
        if(session('id')=='6') {
        $utilisateurs = utilisateur::orderBy('id_utilisateur','DESC')->get();

        return view('utilisateurs',compact('utilisateurs'));
        }
        else return redirect('effectuer-classement');

    }

    public function placeForm()
    {
        if (!session()->has('data')) {
            return redirect('login');
        }
        if(session('id')=='6') return view('place');
        else return redirect('effectuer-classement');

    }


    public function getUtilisateurById($id_utilisateur){


        $utilisateur = utilisateur::find($id_utilisateur);
        return response()->json($utilisateur);

    }



    public function getOptionById($idOption){


        $option = optiondep::find($idOption);
        return response()->json($option);

    }

    public function updateOption(Request $request){

        $option = optiondep::find($request->idOption);
        $option->desOption = $request->desOption;
        $option->nbPlaceOption = $request->nbPlaceOption;
        $option->save();
        return response()->json($option);

    }


    public function deleteOption($idOption){
        $option = optiondep::find($idOption);
        $option->delete();
        return response()->json(['success'=>'La suppression est faite avec succes']);

    }

    public function ajouterUtilisateur(Request $request){
        $utilisateur = new utilisateur();
        session()->put('maxID',session('maxID')+1);
        $utilisateur->id_utilisateur = session('maxID');
        $utilisateur->des = $request->des;
        $utilisateur->username = $request->username;
        $utilisateur->password = $request->password;
        $utilisateur->save();
        return response()->json($utilisateur);
    }

    public function updateUtilisateur(Request $request){

        $utilisateur = utilisateur::find($request->id_utilisateur);

        $utilisateur->username = $request->username;
        $utilisateur->password = $request->password;

        $utilisateur->save();
        return response()->json($utilisateur);

    }


    public function deleteUtilisateur($id_utilisateur){
        $utilisateur = utilisateur::find($id_utilisateur);
        $utilisateur->delete();
        return response()->json(['success'=>'La suppression est faite avec succes']);

    }



}
