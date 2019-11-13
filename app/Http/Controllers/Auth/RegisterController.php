<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\Enseignant;
use App\Http\Controllers\Controller;
use App\Models\DirecteurProv;
use App\Models\DirecteurReg;
use App\Models\Etudiant;
use App\Models\GestSalle;
use App\Models\InspecteurReg;
use App\Models\ParentTuteur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:enseignant');
        $this->middleware('guest:etudiant');
        $this->middleware('guest:directeur_reg');
        $this->middleware('guest:directeur_prov');
        $this->middleware('guest:gestionnaire_salle');
        $this->middleware('guest:parent_tuteur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Pour admin
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    } 

    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'nom_admin' => ['required', 'string', 'max:255'],
            'prenom_admin' => ['required', 'string', 'max:255'],
            'email_admin' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'telephone_admin' => ['required', 'string', 'max:255'],
            'adresse_admin' => ['required', 'string', 'max:255'],
            //'photo_admin' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function createAdmin(Request $request)
    {
        // dd($request->all());
        $this->adminValidator($request->all())->validate();
        $admin = Admin::create([
            'nom_admin' => $request['nom_admin'],
            'prenom_admin' => $request['prenom_admin'],
            'email_admin' => $request['email_admin'],
            'telephone_admin' => $request['telephone_admin'],
            'adresse_admin' => $request['adresse_admin'],
            //'photo_admin' => $request['photo_admin'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }


    // Pour enseignants
    public function showEnseignantRegisterForm()
    {
        return view('auth.register.enseignant', ['enseignant' => 'enseignant']);
    }

    protected function enseignantValidator(array $data)
    {
        return Validator::make($data, [
            'nom_enseignant' => ['required', 'string', 'max:255'], 
            'prenom_enseignant' => ['required', 'string', 'max:255'],
            'email_enseignant' => ['required', 'string', 'email', 'max:255', 'unique:enseignants'],
            'tele_enseignant' => ['required', 'string', 'max:255'], 
            'adresse_enseignant' => ['required', 'string', 'max:255'],
            'photo_enseignant' => ['required', 'string', 'max:255'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createEnseignant(Request $request)
    {
        // dd($request->all());
        $this->enseignantValidator($request->all())->validate();
        $admin = Enseignant::create([
            'nom_enseignant' => $request['nom_enseignant'],
            'prenom_enseignant' => $request['prenom_enseignant'],
            'email_enseignant' => $request['email_enseignant'],
            'tele_enseignant' => $request['tele_enseignant'],
            'nom_enseignant' => $request['nom_enseignant'],
            'adresse_enseignant' => $request['adresse_enseignant'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/enseignant');
    }

    // Pour Etudiants
    public function showEtudiantRegisterForm()
    {
        return view('auth.register.etudiant', ['etudiant' => 'etudiant']);
    }

    protected function etudiantValidator(array $data)
    {
        return Validator::make($data, [
            'nom_etudiant' => ['required', 'string', 'max:255'],
            'prenom_etudiant' => ['required', 'string', 'max:255'],   
            'sexe_etudiant' => ['required', 'string', 'max:255'],
            'ville_etudiant' => ['required', 'string', 'max:255'],
            'date_naissance' => ['required', 'string', 'max:255'],
            'ville_origine' => ['required', 'string', 'max:255'],
            'code_massar' => ['required', 'string', 'max:255'],
            'adresse_etudient' => ['required', 'string', 'max:255'],
            'email_etudiant' => ['required', 'string', 'email', 'max:255', 'unique:etudiants'],
            'telephone_etudient' => ['required', 'string', 'max:255'],
            'photo_etudient' => ['required', 'string', 'max:255'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createEtudiant(Request $request)
    {
        $this->etudiantValidator($request->all())->validate();
        $admin = Etudiant::create([
            'nom_etudiant' => $request['nom_etudiant'],
            'prenom_etudiant' => $request['prenom_etudiant'],
            'sexe_etudiant' => $request['sexe_etudiant'],
            'ville_etudiant' => $request['ville_etudiant'],
            'date_naissance' => $request['date_naissance'],
            'ville_origine' => $request['ville_origine'],
            'code_massar' => $request['code_massar'],
            'adresse_etudient' => $request['adresse_etudient'],
            'telephone_etudient' => $request['telephone_etudient'],
            'photo_etudient' => $request['photo_etudient'],
            'email_etudiant' => $request['email_etudiant'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/etudiant');
    }


    // Pour Directeur Régional
    public function showDirecteur_regRegisterForm()
    {
        return view('auth.register.directeur_reg', ['dr' => 'Directeur régional']);
    }

    protected function directeurRegValidator(array $data)
    {
        return Validator::make($data, [
            'nom_directeurregional' => ['required', 'string', 'max:255'],
            'prenom_directeurregional' => ['required', 'string', 'max:255'],
            'telephone_directeurregional' => ['required', 'string', 'max:255'],
            'photo_directeurregional' => ['required', 'string', 'max:255'],
            'adresse_directeurregional' => ['required', 'string', 'max:255'],
            'email_directeurregional' => ['required', 'string', 'email', 'max:255', 'unique:directeur_regs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createDir_reg(Request $request)
    {
        // dd($request->all());
        $this->directeurRegValidator($request->all())->validate();
        $admin = DirecteurReg::create([
            'nom_directeurregional' => $request['nom_directeurregional'],
            'prenom_directeurregional' => $request['prenom_directeurregional'],
            'telephone_directeurregional' => $request['telephone_directeurregional'],
            'photo_directeurregional' => $request['photo_directeurregional'],
            'adresse_directeurregional' => $request['adresse_directeurregional'],
            'email_directeurregional' => $request['email_directeurregional'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/directeur_reg');
    }

    // Pour Directeur Provinciale
    public function showDirecteur_provRegisterForm()
    {
        return view('auth.register.directeur_prov', ['drProv' => 'Directeur Provincial']);
    }

    protected function directeurProvValidator(array $data)
    {
        return Validator::make($data, [
            'nom_directeurprovinciale' => ['required', 'string', 'max:255'],
            'prenom_directeurprovinciale' => ['required', 'string', 'max:255'], 
            'telephone_directeurprovinciale' => ['required', 'string', 'max:255'],
            'photo_directeurprovinciale' => ['required', 'string', 'max:255'],
            'email_directeurprovinciale' => ['required', 'string', 'email', 'max:255', 'unique:directeur_provs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createDir_prov(Request $request)
    {
        // dd($request->all());
        $this->directeurProvValidator($request->all())->validate();
        $admin = DirecteurProv::create([
            'nom_directeurprovinciale' => $request['nom_directeurprovinciale'],
            'prenom_directeurprovinciale' => $request['prenom_directeurprovinciale'],
            'telephone_directeurprovinciale' => $request['telephone_directeurprovinciale'],
            'photo_directeurprovinciale' => $request['photo_directeurprovinciale'], 
            'email_directeurprovinciale' => $request['email_directeurprovinciale'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/directeur_prov');
    }


    // Pour Directeur Provinciale
    public function showInspecteurRegisterForm()
    {
        return view('auth.register.inspecteur', ['inspect' => 'Inspecteur Régional']);
    }

    protected function inspecteurValidator(array $data)
    {
        return Validator::make($data, [
            'nom_inspecteur' => ['required', 'string', 'max:255'],
            'prenom_inspecteur' => ['required', 'string', 'max:255'],
            'adresse_inspecteur' => ['required', 'string', 'max:255'],
            'telephone_inspecteur' => ['required', 'string', 'max:255'], 
            'email_inspecteur' => ['required', 'string', 'email', 'max:255', 'unique:inspecteur_regs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createInspecteur(Request $request)
    {
        // dd($request->all());
        $this->inspecteurValidator($request->all())->validate();
        $admin = InspecteurReg::create([
            'nom_inspecteur' => $request['nom_inspecteur'],
            'prenom_inspecteur' => $request['prenom_inspecteur'],
            'adresse_inspecteur' => $request['adresse_inspecteur'],
            'telephone_inspecteur' => $request['telephone_inspecteur'],
            'email_inspecteur' => $request['email_inspecteur'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/inspecteur');
    }


    // Pour Directeur Provinciale
    public function showGestionnaireRegisterForm()
    {
        return view('auth.register.gestionnaire', ['gest' => 'Gestionnaire de salle']);
    }

    protected function gestionnnaireValidator(array $data)
    {
        return Validator::make($data, [
            'nom_gestionsalle' => ['required', 'string', 'max:255'],
            'prenom_gestionsalle' => ['required', 'string', 'max:255'],
            'adresse_gestionsalle' => ['required', 'string', 'max:255'],
            'photo_gestionsalle' => ['required', 'string', 'max:255'],
            'email_gestionsalle' => ['required', 'string', 'email', 'max:255', 'unique:gest_salles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createGestionnaire(Request $request)
    {
        // dd($request->all());
        $this->gestionnnaireValidator($request->all())->validate();
        $admin = GestSalle::create([
            'nom_gestionsalle' => $request['nom_gestionsalle'],
            'prenom_gestionsalle' => $request['prenom_gestionsalle'],
            'adresse_gestionsalle' => $request['adresse_gestionsalle'],
            'photo_gestionsalle' => $request['photo_gestionsalle'],
            'email_gestionsalle' => $request['email_gestionsalle'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/gestionnaire');
    }


    // Pour Parent ou Tuteur
    public function showParentRegisterForm()
    {
        return view('auth.register.parent_tut', ['tuteur' => 'Parent ou Tuteur']);
    }

    protected function parentValidator(array $data)
    {
        return Validator::make($data, [
            'nom_parent' => ['required', 'string', 'max:255'],
            'prenom_parent' => ['required', 'string', 'max:255'],
            'telephone_parent' => ['required', 'string', 'max:255'],
            'adresse_parent' => ['required', 'string', 'max:255'],
            'photo_parent' => ['required', 'string', 'max:255'],
            'email_parent' => ['required', 'string', 'email', 'max:255', 'unique:parent_tuteurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createParent(Request $request)
    {
        // dd($request->all());
        $this->parentValidator($request->all())->validate();
        $admin = ParentTuteur::create([
            'nom_parent' => $request['nom_parent'],
            'prenom_parent' => $request['prenom_parent'],
            'telephone_parent' => $request['telephone_parent'],
            'adresse_parent' => $request['prenom_parent'],
            'photo_parent' => $request['photo_parent'],
            'email_parent' => $request['email_parent'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/parent_tut');
    }
}
