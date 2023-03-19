<?php

namespace App\Http\Controllers;
use App\Models\Manage_car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ManageCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info=Manage_car::all();
        return view('gestion', compact('info'));
    }
    public function accueil()
    {
        $infos=Manage_car::all();
        return view('index', compact('infos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        
            return view('create');
         
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

               // $image = $request->file('image')->get();
               // $imagePath = $request->file('image')->store('public/images');
               // $imageName = basename($imagePath);
                $model = new Manage_car();
              //  $model->image = $image;
                $image = $request->file('image');
                $path = Storage::disk('public')->put('images', $image);
                $model->image = $image->getClientOriginalName();
                $model->image = $path;

                $model->Nom_voiture = $request->Nom_voiture ;
                $model->EstDisponible = $request->EstDisponible ;
                $model->prix = $request->prix;
                $model->etat = $request->etat;
                $model->save();
            
          /*  $store=request()->validate([
                'Nom_voiture'=>'required',
                'EstDisponible'=>'required',
                'prix'=>'required',
                'etat'=>'required',
                ]);
    
                Manage_car::create($store);*/
    
                return redirect()->route('location.index');
         
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         
        $voiture = Manage_car::find($id);
     //   return response(Storage::disk('public')->get($voiture->image))
       //->header('Content-Type', 'image/jpeg');
        return view('show',compact('voiture'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        

            

           
                $offre=Manage_car::findorfail($id);
                return view('edite', compact('offre'));
           
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
            dd('hoooooooooooooooooooooooo');
           

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Manage_car::destroy($id);
       return redirect()->back();
    }
}