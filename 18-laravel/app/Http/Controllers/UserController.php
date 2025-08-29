<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(5);
        //dd($users->toArray());
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'document' => ['required', 'numeric', 'unique:'.User::class],
            'fullname' => ['required', 'string'],
            'gender' => ['required'],
            'birthdate' => ['required', 'date'],
            'photo' => ['required' , 'image' ],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:'. User::class],
            'password' => ['required', 'confirmed']

        ]);

        if($validation){
            // dd($request->all());
            if($request->hasFile('photo')){
                $photo =  time().'.'. $request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }

            $user = new User;
            $user->document = $request->document;
            $user->fullname = $request->fullname;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->photo = $photo;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            
            if($user->save()){
                return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully added');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validation = $request->validate([
            'document' => ['required', 'numeric', 'unique:'. User::class . ',document,' . $user->id],
            'fullname' => ['required', 'string'],
            'gender' => ['required'],
            'birthdate' => ['required', 'date'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:'. User::class . ',email,'. $user->id],
            'active' => ['required']

        ]);

        if($validation){
            // dd($request->all());
            if($request->hasFile('photo')){
                $photo =  time().'.'. $request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
                if($request->originphoto != 'no-photo.webp'){
                    unlink(public_path('images/').$request->originphoto);
                }
            }else {
                    $photo = $request->originphoto;
            }

            $user->document = $request->document;
            $user->fullname = $request->fullname;
            $user->gender = $request->gender;
            $user->birthdate = $request->birthdate;
            $user->photo = $photo;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->active = $request->active;
            
            if($user->save()){
                return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully updated');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->delete()){
            return redirect('users')
                ->with('message', 'The user: '. $user->fullname. ' was successfully deleted');
        }
    }

    public function search(Request $request){
        // return "Searching...............". $request->q;
        $users = User::names($request->q)->paginate(5);
        return view('users.search')->with('users', $users);
    }

    public function pdf(){
        $users = User::all();
        $pdf = PDF::loadview('users.pdf', compact('users'));
        return $pdf->download('allusers.pdf');

    }

    public function excel(){
        return Excel::download(new UsersExport, 'allusers.xlsx');
    }

    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return redirect()->back()->with('message','User imported successful');

    }
}
