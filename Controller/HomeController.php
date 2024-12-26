<?php
namespace Controller;

use Model\Group;

class HomeController
{
public function index()
{
// Récupérer les groupes depuis le modèle
$groups = Group::getAll();

// Inclure la vue correspondante
include __DIR__ . '/../views/home.php'; // Correction du chemin

}
}
?>

