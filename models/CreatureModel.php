<?php

class CreatureModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCreatures()
    {
        $query = "SELECT * FROM creature";
        $result = $this->db->query($query);

        $creatures = array();
        while ($row = $result->fetch()) {
            $creatures[] = $row;
        }
        return $creatures;
    }


    public function insertCreature($name, $description, $avatar, $attackPower, $lifeLevel, $weapon)
    {
        $query = "INSERT INTO creature (name, description, avatar, attackPower, lifeLevel, weapon) VALUES (:name, :description, :avatar, :attackPower, :lifeLevel, :weapon)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':avatar', $avatar);
        $stmt->bindParam(':attackPower', $attackPower);
        $stmt->bindParam(':lifeLevel', $lifeLevel);
        $stmt->bindParam(':weapon', $weapon);

        return $stmt->execute();
    }

    public function getCreatureById($id)
    {
        $query = "SELECT * FROM creature WHERE idCreature = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateCreature($id, $name, $avatar, $description)
    {
        $query = "UPDATE creature SET name = :name, avatar = :avatar, description = :description WHERE idCreature = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':avatar', $avatar);
        $stmt->bindParam(':description', $description);

        return $stmt->execute();
    }

    public function deleteCreature($id)
    {
        $query = "DELETE FROM creature WHERE idCreature = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}