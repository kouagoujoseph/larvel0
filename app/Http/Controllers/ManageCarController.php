<?php

namespace App\Http\Controllers;
use App\Models\Voiture;
use App\Models\User;
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
        $info=Voiture::all();
        return view('gestion', compact('info'));
    }
    public function accueil()
    {
        $infos=Voiture::all();
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

            $model = new Voiture();

            $image = "";
            if($request->file('image'))
            {
                $file= $request->file('image');

                $image= date('YmdHi').$file->getClientOriginalName();
                
                $file-> move(public_path('public/images'), $image);

            }

           
                //$image = $request->file('image');
                //$path = Storage::disk('public')->put('images', $image);
               // $model->image = $image->getClientOriginalName();
                $model->image = $image;
                $model->Nom_voiture = $request->Nom_voiture ;
                $model->marque_voiture = $request->marque_voiture;
                $model->numero_matricule = $request->numero_matricule;
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
    
                Voiture::create($store);*/
    
              return redirect()->route('location.index');
         
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         
        $voiture = Voiture::find($id);
     //   return response(Storage::disk('public')->get($voiture->image))
       //->header('Content-Type', 'image/jpeg');
        return view('show',compact('voiture'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
                $offre=Voiture::findorfail($id);
                return view('edite', compact('offre'));
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cru=Voiture::findorfail($id);
        $cru->update([
        'Nom_voiture'=>$request->Nom_voiture,
        'marque_voiture'=>$request->marque_voiture,
        'numero_matricule'=>$request->numero_matricule,
        'EstDisponible'=>$request->EstDisponible,
        'prix'=>$request->prix,
        'etat'=>$request->etat,
        'image'=>$request->image,
       ]);
       return redirect()->route('location.index');
               
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        
        
    
            Voiture::destroy($id);
            return redirect()->back();

      
                
    }


    public function voiture_louée()
    {
               return view('voiture_louée');     
    }

    
    public function louer()
    {
        $infos=Voiture::all();
               return view('louer_voiture', compact('infos'));     
    }

    public function rendre()
    {
               return view('rendre_voiture');     
    }

    public function contacter()
    {
               return view('contact');     
    }

    public function logout(Request $request)
    {
       //methode qui gere la deconnexion 
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('home_dashbord');
    }

    public function default()
    {
               return view('location_par_defaut');     
    }
}