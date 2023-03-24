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
        //session()->put('voiture', $voiture);  //la voiture cliqué à la sesion afin de la recupérer
        session(['voiture' =>$voiture]); //via global session

        //$request->session()->put('voiture',$voiture);//via request
        return view('location.create')
       ->with('voiture', $voiture);
                                            
    }

    /**
     * Recuperer la liste des locations en session utlisateur == les locations dans le panier
     */

        public function cart()
        {
            $locations = $request->session()->get('locations');

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
    public function store(Request $request)
    {
        $location = new Location();  
        
        $message = "";

        $voiture = $request->session()->get('voiture'); // get voiture from session
        echo 'Voiture ..........................'.$voiture;
        print($voiture);

        if ($voiture->EstDisponible == 'true')
        {
            echo "oui";
            $location->Date_location = $request->input('Date_location');
            $location->Fin_location = $request->input('Fin_location');
            $location->voiture_id = $voiture->id;
            $location->user_id = auth()->user()->id;
            $location->statut = "EN COURS";

            $location->save();
            
            $locations = $request->session()->get('locations') ;
            $locations.push($location);
            $locations = $request->session()->put('locations') ;

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


/*
$todos = LeNomDeVotreTableEnBase::all();

// Ou pour l’enregistrement avec l’identifiant « 42 »
$todo = LeNomDeVotreTableEnBase::find(42);

// Obtenir, mais filtrer et ordonné et avec une limite
$todos = LeNomDeVotreTableEnBase::where('temine', 1)->orderBy('id', 'desc')->take(10)->get();

// Ou avec un where
$users = User::where('votes', '>', 100)->get();


https://cours.brosseau.ovh/cheatsheets/laravel/
 */
