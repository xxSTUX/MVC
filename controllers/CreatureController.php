<?php
require_once 'models/CreatureModel.php';

class CreatureController
{
    private $creatureModel;

    public function __construct($db)
    {
        $this->creatureModel = new CreatureModel($db);
    }

    public function listCreatures()
    {
        $creatures = $this->creatureModel->getAllCreatures();
        $message = "";
        if (empty($creatures)) {
            $message = "No hay criaturas disponibles en este momento.";
        }
        include('views/creatures/list.php');
    }

    public function createCreature()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $avatar = $_POST['avatar'];
            $attackPower = $_POST['attackPower'];
            $lifeLevel = $_POST['lifeLevel'];
            $weapon = $_POST['weapon'];

            $success = $this->creatureModel->insertCreature($name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

            if ($success) {
                header('Location: index.php?action=list');
            } else {
                echo "Error al crear la criatura.";
            }
        } else {
            include('views/creatures/create.php');
        }
    }

    public function editCreature($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $avatar = $_POST['avatar'];
            $description = $_POST['description'];
            $success = $this->creatureModel->updateCreature($id, $name, $avatar, $description);

            if ($success) {
                header('Location: index.php?action=list');
                exit;
            } else {
                echo "Error al actualizar la criatura.";
            }
        } else {
            // This block is executed when the edit form is displayed
            $creature = $this->creatureModel->getCreatureById($id);

            if ($creature) {
                include('views/creatures/edit.php');
            } else {
                echo "La criatura no se encontró.";
            }
        }
    }

    public function deleteCreature($id)
    {
        $success = $this->creatureModel->deleteCreature($id);

        if ($success) {
            header('Location: index.php?action=list');
        } else {
            echo "Error al eliminar la criatura.";
        }
    }

    public function getCreatureDetails($id)
    {
        return $this->creatureModel->getCreatureById($id);
    }


}