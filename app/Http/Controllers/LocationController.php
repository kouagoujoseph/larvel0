<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Voiture;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* Je veux retourner les locations effectués par le client connecté */
     
        $user = auth()->user();

        $locations= $user->location();
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.ss
     */
    public function create(Voiture $voiture)
    {
        print("VOiture==================".$voiture);
        session()->put('voitures', $voiture);  //la voiture cliqué à la sesion afin de la recupérer

        return view('location.create')
        ->with('voiture', $voiture);
                                            

    }

    /**
     * Recuperer la liste des locations en session utlisateur == les locations dans le panier
     */

        public function cart()
        {
            $locations = session()->get('locations', []);

        //Calculer le prix total de location 
        $somme_prix = 0;
        foreach($locations as $location)
        {
            foreach($location->voiture() as $voitue)
            {
                $somme_prix += $voitue->prix;
                
            }
        }
            return view('location.panier', compact('locations','somme_prix'));
        }

        /**Add location to session */

       /* public function addLocationToSession(Request $request)
        {
            $location = $request->input('car_id');
        
            $locations = session()->get('locations', []);
            $locations[] = $location;
        
            session()->put('locations', $locations);
        
            return redirect()->route('location.index');
        }
*/
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Voiture $voiture)
    {
        $location = new Location();  
        //$voiture_id = $request->input('voiture_id');  
        //$voiture = Voiture::find($voiture_id); 
            #$voiture = session()->get('voitures');
        //Verifons si la voiture est libre
        $message = "";

        if ($voiture->EstDisponible == 'true')
        {
            $location->Date_location = $request->input('Date_location');
            $location->Fin_location = $request->input('Fin_location');
            $location->voiture_id = $voiture->id;
            #$location->user_id = $request->input('user_id');
            $location->user_id = auth()->user()->id;
            $location->statut = "EN COURS";

            $location->save();

            $locations = session()->get('locations');
            $locations[] = $location;
            session()->put('locations', $locations);

         //changons la disponibilité de la voiture 
        $voiture->EstDisponible = 'false';
        $voiture->save();

        $message= 'La location a été enregistrée avec succès !';



        }
        else 
        {
            $message= 'Cette voiture est déjà en cours de location !';

        }  

        return back()->with('message', $message);

    }
 

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
           return view('location.show',compact('location'));           
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('location.edit',compact('location'));           

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {       
        
        $location->update(
            [
                'Date_location'=>$request->Date_location,
                'Fin_location' => $request->Fin_location,
                'voiture_id' =>$request->voiture_id,
                'user_id' => $request->user_id,
                #"statut" => $request->statut

            ]
            );
      
       return redirect()->route('location.index')
       ->with('success', 'La location a été mise à jour avec succès !');
          
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)#store, update, edite, delete, show
    {
        $location->delete();
        return redirect()->route('location.index')
        ->with('success', 'La location a été supprimée avec succès !');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function rendre_voiture(Location $location)
    {

        $voiture_id = $location->voiture_id;
        $voiture = Voiture::find($voiture_id); 
    
        //Verifons si la voiture est libre
        $message = "";

        if ($voiture->EstDisponible == 'false')
        {
            
         //changons la disponibilité de la voiture 
        $voiture->EstDisponible = 'true';
        $voiture->save();

        $location->statut = "TERMINE";


        $message= 'La location a été rendue avec succès !';
        }
        else 
        {
            $message= 'Cette voiture n\'est pas en cours de location !';

        }  

        return redirect()->route('location.index')
        ->with('message', $message);

    }
}
