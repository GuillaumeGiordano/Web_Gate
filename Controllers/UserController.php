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
        $this->render('users/index', ['users' => $users]);
    }


    /**
     * affiche 1 utilisateur
     * @param int $id
     * @return void
     */
    public function lire(int $id)
    {
        // On instancie le modéle
        $usermodel = new UsersModel;

        // chercher l'utilisateur
        $user = $usermodel->find($id);

        // on génère la vue
        $this->render('users/lire', compact('user'));
    }
}
