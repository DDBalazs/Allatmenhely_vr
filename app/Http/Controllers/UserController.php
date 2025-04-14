<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Foglalt;


class UserController extends Controller
{
    public function Sign(){
        if(!Auth::check()){
            return view('auth.sign');
        } else {
            return redirect('/mypage')->with('loggederror', 'Már be vagy jelentkezve');
        }
    }
    public function Login(Request $req){
            // Login
            $req->validate([
                'email'                 =>  'required',
                'password'              =>  'required'
            ],[
                'email.required'        =>  'Nem adta meg az email címet!',
                'password.required'     =>  'Nem adtad meg a jelszót!'
            ]);

            if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
                return redirect('/mypage')->with('logsuccess', 'Sikeresen beléptél!');
            }
            else
            {
                return redirect('/sign')->with('logerror', 'Sikertelen belépés!');
            }
    }

    public function Register(Request $req)
{
    try {
        // Regisztráció - automatikusan kezeli a hibákat
        $validatedData = $req->validate([
            'nev' => 'required',
            'email' => 'required|email|unique:onkentes,email',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->mixedCase()
            ],
            'password_confirmation' => 'required'
        ], [
            'nev.required' => 'A nevet kötelező megadni!',
            'email.required' => 'Az emailt kötelező megadni!',
            'email.email' => 'Létező email címet adjon meg!',
            'email.unique' => 'Ezzel az emaillal már regisztráltak!',
            'password.required' => 'A jelszót kötelező megadni!',
            'password.confirmed' => 'A két jelszó nem egyezik!',
            'password.min' => 'A jelszónak legalább 8 karakter hosszúságúnak kell lennie!',
            'password.numbers' => 'A jelszónak tartalmazni kell számot!',
            'password.letters' => 'A jelszónak tartalmazni kell betűket!',
            'password.mixed' => 'A jelszónak tartalmazni kell kis és nagy betűt!',
            'password.symbols' => 'A jelszónak tartalmazni kell speciális karaktert!',
            'password_confirmation.required' => 'A jelszó ismétlést kötelező megadni!'
        ]);

        // Ha ide eljut, akkor a validáció sikeres
        $data = new User;
        $data->nev = $req->nev;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);

        if ($data->save()) {
            return redirect('/sign')->with('regsuccess', 'Sikeres regisztráció!');
        }

        return back()->with('regerror', 'Hiba történt a mentés során!')->withInput();

    } catch (\Illuminate\Validation\ValidationException $e) {
        // A validate() metódus automatikusan dob ValidationException-t hibák esetén
        return back()->withErrors($e->validator)->withInput();
    }
}


    public function MyPage(Request $req){
        if(Auth::check()){
            return view('auth.mypage', [
                'foglalasaim'   =>  Foglalt::select('foglalt.foglalt_id', 'foglalt.allat_id', 'foglalt.datumido', 'foglalt.onkentes_id', 'foglalt.elfogadas', 'foglalt.teljesitve', 'allat.allat_id' ,'allat.nev', 'onkentes.onkentes_id')
                                            ->Join('allat', 'foglalt.allat_id', 'allat.allat_id')
                                            ->Join('onkentes', 'foglalt.onkentes_id', 'onkentes.onkentes_id')
                                            ->Where('foglalt.onkentes_id', Auth::user()->onkentes_id)
                                            ->get()
            ]);
        } else {
            return redirect('/sign')->with('unloggederror', 'Kérlek előbb jelentkezz be!');
        }
    }

    public function DelFog(Request $req, $id){
        $fog = Foglalt::where('foglalt_id', $id)
                        ->where('onkentes_id', Auth::id())
                        ->first();

        $fog->delete();

        return back()->with('delfog', 'A foglalást sikeresen törölted!');
    }

    public function Tel(Request $req){
        $req->validate([
            'tel'   =>  'required|max_digits:9|numeric'
        ],[
            'tel.required'      =>  "A telefonszámot nem töltötte ki!",
            'tel.max_digits'    =>  "A telefonszám maximum 9 karakter hosszú lehet",
            'tel.numeric'       =>  "A telefonszám csak számokat tartalmazhat"

        ]);
        $data   = User::find(Auth::user()->onkentes_id);
        $data->tel  =  $req->tel;
        if($data->Save()){
            return redirect('/mypage')->with('telsucc', 'Sikeresen módosítottad a telefonszámod!');
        }
    }

    public function DelTel(Request $request){
        $user = Auth::user();
        $user->tel = null;
        $user->save();

        return redirect()->back()->with('deltel', 'Telefonszám sikeresen törölve!');
    }

    public function Logout(){
        Auth::logout();
        return redirect('/')->with('logout', 'Sikeresen kijelentkeztél!');
    }

    public function Newpass(){
        if(Auth::check()){
            return view('auth.newpass');
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
            return view('auth.newpass')->with('newpasserror', 'Nem sikerült a jelszó módosítás.');
        }
    }



}










