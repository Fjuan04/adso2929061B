<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet; 

use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PetsExport;
// use App\Imports\PetsImport;
class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::paginate(5);
        return view('pets.index')->with('pets', $pets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation =$request->validate([
                'name'        => ['required', 'string', 'max:100'],
                'kind'        => ['required', 'string', 'max:50'], 
                'weight'      => ['required', 'numeric', 'between:0.1,200'],
                'age'         => ['required', 'integer', 'min:0', 'max:50'], 
                'breed'       => ['nullable', 'string', 'max:100'], 
                'location'    => ['required', 'string', 'max:150'],
                'description' => ['nullable', 'string', 'max:255'],
                'status'      => ['required', 'in:0,1'], 
            ]);

        if($validation){
            // dd($request->all());
            if($request->hasFile('image')){
                $photo =  time().'.'. $request->image->extension();
                $request->image->move(public_path('images'), $photo);
            }

            
            
            if(Pet::create($validation)){
                return redirect('pets')->with('message', 'The pet: '.$request->name.' was successfully added');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show')->with('pet', $pet);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit')->with('pet', $pet);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validation = $request->validate([
                'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
                'name'        => 'required|string|max:100',
                'kind'        => 'required|string|max:50',
                'weight'      => 'required|numeric|min:0',
                'age'         => 'required|integer|min:0',
                'breed'       => 'nullable|string|max:100',
                'location'    => 'required|string|max:150',
                'description' => 'nullable|string|max:500',
                'active'      => 'required|in:0,1',
                'status'      => 'required|in:0,1',
            ]);



        if($validation){
            // dd($request->all());
           if($request->hasFile('image')){
                $photo =  time().'.'. $request->image->extension();
                $request->image->move(public_path('images'), $photo);
                $validation["image"] = $photo;

                if($request->originphoto != 'no-image.webp'){
                    unlink(public_path('images/').$request->originphoto);
                }
            } else {
                // si no se subió imagen, mantener la que ya tenía
                $validation["image"] = $request->originphoto;
            }

            
            if($pet->update($validation)){
                return redirect('pets')->with('message', 'The pet: '. $request->name .' was successfully updated');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        if($pet->delete()){
            return redirect('pets')
                ->with('message', 'The pet: '. $pet->name. ' was successfully deleted');
        }
    }

    public function search(Request $request){
        // return "Searching...............". $request->q;
        dd($request);
        $pets = Pet::names($request->q)->paginate(5);
        return view('pets.search')->with('pets', $pets);
    }

    public function pdf(){
        $pets = Pet::all();
        $pdf = PDF::loadview('pets.pdf', compact('pets'));
        return $pdf->download('allpets.pdf');

    }


    
    public function excel(){
        return Excel::download(new PetsExport, 'allpets.xlsx');
    }

    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new PetsImport, $file);
        return redirect()->back()->with('message','Pets imported successful');

    }
}

