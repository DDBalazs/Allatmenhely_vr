<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function Sign(){
        if(!Auth::check()){
            return view('sign');
        } else {
            return redirect('/mypage')->with('loggederror', 'Már be vagy jelentkezve');
        }
    }
    public function Login(Request $req){
            // Login
            $req->validate([
                'candicate'             =>  'required',
                'password'              =>  'required'
            ],[
                'candicate.required'    =>  'Nem adta meg a nevet vagy az email címet!',
                'password.required'     =>  'Nem adtad meg a jelszót!'
            ]);

            if(Auth::attempt(['nev' => $req->candicate, 'password' => $req->password])){
                return redirect('/mypage')->with('logsuccess', 'Sikeresen beléptél!');
            }
            else if(Auth::attempt(['email' => $req->candicate, 'password' => $req->password])){
                return redirect('/mypage')->with('logsuccess', 'Sikeresen beléptél!');
            }
            else
            {
                return redirect('/sign')->with('logerror', 'Sikertelen belépés!');
            }
    }

    public function Register(Request $req){
            // Regiszter
            $req->validate([
                'nev'                               =>  'required',
                'email'                             =>  'required|email|unique:onkentes,email',
                'password'                          =>  ['required','confirmed',Password::min(8)
                                                                                        ->letters()
                                                                                        ->numbers()
                                                                                        ->symbols()
                                                                                        ->mixedCase()],
                'password_confirmation'             =>  'required'
            ],[
                'nev.required'                      =>  'A nevet kötelező megadni!',
                'email.required'                    =>  'Az emeailt kötelező megadni!',
                'email.email'                       =>  'Létező email címet adjon meg!',
                'email.unique'                      =>  'Ezzel az emaillal már regisztráltak!',
                'password.required'                 =>  'A jelszót kötelező megadni!',
                'password.confirmed'                =>  'A két jelszó nem egyezik!',
                'password.min'                      =>  'A jelszónak legalább 8 karakter hosszúságúnak kell lennie!',
                'password.numbers'                  =>  'A jelszónak tartalmazni kell számot!',
                'password.letters'                  =>  'A jelszónak tartalmazni kell betűket!',
                'password.mixed'                    =>  'A jelszónak tartalmazni kell kis és nagy betűt!',
                'password.symbols'                  =>  'A jelszónak tartalmazni kell speciális karaktert!',
                'password_confirmation.required'    =>  'A jelszó ismétlést kötelező megadni!'
            ]);
            $data               = new User;
            $data->nev          = $req->nev;
            $data->email        = $req->email;
            $data->password     = Hash::make($req->password);

            if($data->Save())
                return redirect('/sign')->with('regsuccess','Sikeres regisztráció!');

    }

    public function Modositas(Request $req){

    }

    public function MyPage(){
        if(Auth::check()){
            return view('mypage');
        } else {
            return redirect('/login')->with('unloggederror', 'Kérlek előbb jelentkezz be!');
        }
    }

    public function Logout(){
        Auth::logout();
        return redirect('/')->with('logout', 'Sikeresen kijelentkeztél!');
    }

    public function Newpass(){
        if(Auth::check()){
            return view('newpass');
        } else {
            return redirect('/sign')->with('unloggederror','Kérlek előbb jelentkezz be!');
        }
    }
    public function NewpassData(Request $req){
        $req->validate([
            'oldpassword'       => 'required',
            'newpassword'       => ['required', 'confirmed', Password::min(8)
                                                                    ->letters()
                                                                    ->numbers()
                                                                    ->symbols()
                                                                    ->mixedCase()],
            'newpassword_confirmation'  => 'required'
        ],[
            'oldpassword.required'                  => 'A régi jelszót kötelező megadni!',
            'newpassword.required'                  => 'Az új jelszót kötelező megadni!',
            'newpassword.confirmed'                 => 'Az új jelszó nem egyezik!',
            'newpassword_confirmation.required'     => 'Az új jelszó megerősítését kötelező megadni!',
            'newpassword.min'                       => 'A jelszónak minimum 8 karakter hosszúnak kell lennie!',
            'newpassword.mixedCase'                 => 'A jelszónak tartalmazni kell is és nagy betűt is!',
            'newpassword.symbols'                   => 'A jelszónak tartalmazni kell speciális karakter!',
            'newpassword.numbers'                   => 'A jelszónak tartalmazni kell számot!',
            'newpassword.letters'                   => 'A jelszónak tartalmazni kell betűket!',
        ]);
        if(Hash::check($req->oldpassword, Auth::user()->password)){
            $data           = User::find(Auth::user()->onkentes_id);
            $data->password = Hash::make($req->newpassword);
            $data->Save();
            return redirect('/mypage')->with('newpasssuccess','Sikerült a jelszó módosítás.');
        } else {
            return view('newpass')->with('newpasserror', 'Nem sikerült a jelszó módosítás.');
        }
    }
}










