<?php

namespace App\Http\Controllers;
use App\Models\OrderModel;
use App\Models\AVendreModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use App\Models\PublicationModel;
use Illuminate\Support\Facades\DB;

class IssatController extends Controller
{
    public function homeIssat() {
        return view('layout_issat.index_issat');
    }
    public function issatCollab() {
        return view('layout_issat.collaboration.espace_collaboration');
    }

    public function issatCollabPerso () {
        return view('layout_issat.collaboration.formationPersonnalisée');
    } 
    public function formPerso (Request $REQUEST) {
        // a remplir
    }

    public function issatCollabRech() {
        return view('layout_issat.collaboration.rechercheConjointe');
    } 
    public function formconjointe(Request $REQUEST) {
        // a remplir
    }


    public function issatCollabPromo() {
        return view('layout_issat.collaboration.promotionEntreprise');
    } 
    public function promotionEnterStore(Request $REQUEST) {
        // a remplir
    }


    public function issatEnter() {
        $publications = PublicationModel::all();
        return view('layout_issat.entreprise.espace_entreprise', compact('publications'));
    }
// ajouter un compact au return
    public function issatEnterAll() {
        return view('layout_issat.entreprise.allEnterprise');
    }

    public function issatEnterEva() {
        return view('layout_issat.entreprise.evaluationCollaboration');
    } 

    public function issatEnterOrder() {
        return view('layout_issat.entreprise.order');
    } 
    public function issatEnterOrderUpdate(Request $REQUEST,OrderModel $order) {
        // a remplir
    }

    public function issatMessage() {
        return view('layout_issat.espace_messagerie');
    }



    public  function issatMesPub() {
        $publications = PublicationModel::all();
        return view('layout_issat.publication.espace_publication', compact('publications'));
    }

    public  function pubStore(Request $request) {
          // Validation des données
          $validatedData = $request->validate([
            'content' => 'required|string',
            'media' => 'nullable|file|mimes:jpeg,png,gif,mp4|max:20480', // Maximum 20 Mo
        ]);
    
        // Traitement du média
        $mediaPath = null;
        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $mediaPath = $media->store('publications_media', 'public'); // Sauvegarde le fichier dans le répertoire "publications" du stockage Laravel
        }
    
        // Création de la publication
        $publication = new PublicationModel();
        $publication->content = $validatedData['content'];
        $publication->media = $mediaPath; // Enregistre le chemin du média dans la base de données
    
        // Obtenez l'extension du fichier
        $extension = $request->hasFile('media') ? $media->getClientOriginalExtension() : null;
    
        // Vérifiez si le média est une image ou une vidéo
        if ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png' || $extension === 'gif') {
            // C'est une image
            $publication->media_type = 'image';
        } elseif ($extension === 'mp4') {
            // C'est une vidéo
            $publication->media_type = 'video';
        } 
    
        $publication->save();
    
        // Redirection avec message de succès
        return redirect()->route('home.pub')->with('success', 'La publication a été créée avec succès.');
    }

    public function pubDelete(PublicationModel $publication){
        $publication->delete();
 
        return redirect()->route('home.pub');
    }
    public function issatAllPub() {
        return view('layout_issat.publication.allPub');
    }



    public function issatBestStudent() {
        return view('layout_issat.students.nos_meilleur_etudiants');
    }
    public function addStudent(){
        return view('layout_issat.students.create');
    }
    public function storeStudent(Request $REQUEST){
        // a remplir        
    }
    public function editStudent(Request $REQUEST,StudentModel $student){
        return view( 'students.edit',[ 'StudentModel',$student]);
    }
    public function updateStudent(Request $REQUEST,StudentModel $student){
        // a remplir
    }
    public function destroyStudent(StudentModel $student){
        $student->delete();
 
        return redirect()->route('students.create');
    }

    public function AVendre() {
        $articles = AVendreModel::all();

        return view('layout_issat.collaboration.a_vendre', compact('articles'));
    }

    public function AVendreStore(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour une image
        ]);
    
        // Téléchargement et stockage de l'image
        $imagePath = $request->file('photo')->store('assets', 'public');
    
        // Créer une nouvelle instance du modèle et attribuer les valeurs
        $avendre = new AVendreModel();
        $avendre->name = $request->input('name');
        $avendre->description = $request->input('description');
        $avendre->photo = $imagePath; // Chemin de l'image stockée
    
        // Enregistrer l'instance dans la base de données
        $avendre->save();
    
        // Redirection avec un message de réussite
        return redirect()->route('home.vendre')->with('success', 'L\'élément à vendre a été ajouté avec succès.');
    
    }
    public function AVendreDelete(AVendreModel $article) {

        $article->delete();
 
        return redirect()->route('home.vendre')->with('success', 'L\'article a été supprimé avec succès.');
    }
    


    public function issatCompta() {
        return view('layout_issat.espace_comptabilite');
    }
}
