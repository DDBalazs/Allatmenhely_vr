<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
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
                    return redirect('/mypage')->with('success', 'Sikeresen beléptél!');
                }
                else if(Auth::attempt(['email' => $req->candicate, 'password' => $req->password])){
                    return redirect('/mypage')->with('success', 'Sikeresen beléptél!');
                }
                else
                {
                    return redirect('/sign')->with('error', 'Sikertelen belépés!');
                }
    }

    public function Register(Request $req){
            // Regiszter
            $req->validate([
                'nev'                               =>  'required',
                'email'                             =>  'required|email',
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
                'password.required'                 =>  'A jelszót kötelező megadni!',
                'password.confirmed'                =>  'A két jelszó nem egyezik!',
                'password.min'                      =>  'A jelszónak legalább 8 karakter hosszúságúnak kell lennie!',
                'password.number'                   =>  'A jelszónak tartalmazni kell számot!',
                'password.letters'                  =>  'A jelszónak tartalmazni kell betűket!',
                'password.mixedCase'                =>  'A jelszónak tartalmazni kell kis és nagy betűt!',
                'password.symbols'                  =>  'A jelszünak tartalmazni kell speciális karaktert!',
                'password_confirmation.required'    =>  'A jelszó ismétlést kötelező megadni!'
            ]);
            $data               = new User;
            $data->nev          = $req->nev;
            $data->email        = $req->email;
            $data->password     = Hash::make($req->password);

            if($data->Save()){
                return view('sign');
            }
            else{
                return redirect('/sign')->with('Error', 'Sikertelen regisztráció');
            }
    }

    public function Modositas(Request $req){

    }

    public function MyPage(){
        if(Auth::check()){
            return view('mypage');
        } else {
            return redirect('/login')->with('error', 'Kérlek előbb jelentkezz be!');
        }
    }

    public function Logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Sikeresen kijelentkeztél!');
    }

    public function Newpass(){
        if(Auth::check()){
            return view('newpass');
        } else {
            return redirect('/')->with('error','Kérlek előbb jelentkezz be!');
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
            'oldpassword.required'                  => 'KÖTELEZŐ MEGADNI A RÉGI JELSZÓT!',
            'newpassword.required'                  => 'KÖTELEZŐ MEGADNI AZ ÚJ JELSZÓT!',
            'newpassword.confirmed'                 => 'NEM EGGYEZNEK A JELSZAVAK!',
            'newpassword.confirmed.required'        => 'KÖTELEZŐ MEGADNI!',
            'newpassword_confirmation.required'     => 'KÖTELEZP MEGADNI!',
            'newpassword.min'                       => 'MINIMUM 8 KARAKTER HOSSZÚSÁGÚ LEGYEN!',
            'newpassword.mixed'                     => 'TARTALMAZNI KELL KIS ÉS NAGY BETŰT IS!',
            'newpassword.symbols'                   =>  'A jelszónak tartalmazni kell speciális karakter!',
            'newpassword.numbers'                   => 'TARTALMAZNIA KELL SZÁMOKAT!',
            'newpassword.letters'                   => 'TARTALMAZNI KELL BETŰKET!',
        ]);
        if(Hash::check($req->oldpassword, Auth::user()->password)){
            $data           = User::find(Auth::user()->onkentes_id);
            $data->password = Hash::make($req->newpassword);
            $data->Save();
            return view('mypage');
        } else {
            return redirect('/newpass')->with('error', 'Nem sikerült a jelszó módosítás.');
        }
    }
}










