<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::all();
        return view('backsite/backadmin', compact('admins'));
    }
    // public function show($id){
    //     $Admins = Admin::all()->where('id_user',$id);
    //     $user = User::find($id);
    //     return view('backsite/showAdmin',compact('Admins','user'));

    //}
    public function create(){
        $admins = new Admin();
        return view('create/creadmin', compact('admins'));
    }
    
    public function store(Request $request){

             $request->validate([
            'nom' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'age' => 'required|max:2',
             'img' => 'image',
             'motdepasse' => 'required|max:15',
             'url' => 'required',
            ]);

        $image=Storage::disk('public')->put('',$request->file('img'));
        $admin = new Admin();
        $admin->nom = $request->input('nom');
        $admin->email = $request->input('email');
        $admin->age = $request->input('age');
        $admin->img = $image;
        $admin->motdepasse = Hash::make('motdepasse');
        $newNameGenerate = time() . substr($request->img, strrpos($request->img, '/') + 1);
        $contents = file_get_contents($request->img);
       $imgs = file_put_contents('storage/' . $newNameGenerate, $contents);
       Storage::disk('public')->url($newNameGenerate, $imgs);
       $admin->url = $newNameGenerate;
        $admin->save();

        return redirect()->route('intro');
    }
    public function edit($id){  
        $admin = Admin::find($id);
        return view('edit/editadmin', compact('admin'));
    }
    public function update(Request $request, $id){
        // dd($request->file('img'));
        $image=Storage::disk('public')->put('',$request->file('img'));
        $admin = Admin::find($id);
        if ($request) {
          $admin->nom = $request->input('nom');
        $admin->email = $request->input('email');
        $admin->age = $request->input('age');  
        }
        
        else
        $admin->img = $image;
        $admin->motdepasse = $request->input('motdepasse');

        $admin->save();

        return redirect()->route('intro');  
    }
    public function destroy($id){
        $admin = Admin::find($id);
        Storage::disk('public')->delete($admin->img);
        $admin->delete();
        return redirect()->route('intro');
    }
}
