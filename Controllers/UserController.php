<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UserController extends Controller
{
    public function index()
    {
        //Instancie le modele correspondant à la table 'User'
        $usersmodel = new UsersModel;

        // Chercher toutes les annonces
        $users = $usersmodel->findAll();

        // on génère la vue
        $this->render('user/index', ['users' => $users]);
    }


    /**
     * affiche 1 utilisateur
     * @param int $id
     * @return void
     */
    public function lire(int $id)
    {

        // On instancie le modéle
        $usersmodel = new UsersModel;

        // chercher l'utilisateur
        $user = $usersmodel->find($id);

        // on génère la vue
        $this->render('user/lire', compact('user'));
    }
}
