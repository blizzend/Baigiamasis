<?php

namespace Imones;

use PDO;
use PDOException;

class imone {
    protected $pdo;
    private $name;
    private $code;
    private $tax_code;
    private $adress;
    private $phone;
    private $email;
    private $action;
    private $boss;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function createCompany($company) {
        $this->name = $company['name'];
        $this->code = $company['code'];
        $this->tax_code = $company['tax_code'];
        $this->adress = $company['adress'];
        $this->phone = $company['phone'];
        $this->email = $company['email'];
        $this->action = $company['action'];
        $this->boss = $company['boss'];

        $this->insertCompany();
    }

    public function insertCompany(){
        try {
            $query = "INSERT INTO `imones` (`pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, `elpastas`, `veikla`, `vadovas` ) VALUES (:name, :code, :tax_code, :adress, :phone, :email, :action, :boss)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':code', $this->code, PDO::PARAM_STR);
            $stmt->bindParam(':tax_code', $this->tax_code, PDO::PARAM_STR);
            $stmt->bindParam(':adress', $this->adress, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':action', $this->action, PDO::PARAM_STR);
            $stmt->bindParam(':boss', $this->boss, PDO::PARAM_STR);

            $stmt->execute();

            header('Location: /');
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function allCompanies($page){
        $stmt = $this->pdo->prepare(' SELECT * FROM imones LIMIT 6 OFFSET ' . ($page - 1) * 6);

        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function viewCompany($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function deleteCompany($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM imones WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header('Location:/');
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function searchCompany($searchString){
        try {
            $search = '%'.$searchString['search']. '%';
            $stmt = $this->pdo->prepare("SELECT * FROM imones WHERE `pavadinimas` LIKE :searchString OR `kodas` LIKE :searchString");
            $stmt->bindValue(":searchString", $search, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result == []) {
                echo "Rezultatu nera";
            } else {
                header('Location:/imone/'.$result['id']);
            }
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function editCompany($id, $formData) {
        try {
            $query = "UPDATE `imones` SET `pavadinimas` = :name, `kodas` = :code, `pvm_kodas` = :tax_code, `adresas` = :adress, `telefonas` = :phone, `elpastas` = :email, `veikla` = :action, `vadovas` = :boss WHERE `id` = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $formData['name'], PDO::PARAM_STR);
            $stmt->bindParam(':code', $formData['code'], PDO::PARAM_STR);
            $stmt->bindParam(':tax_code', $formData['tax_code'], PDO::PARAM_STR);
            $stmt->bindParam(':adress', $formData['adress'], PDO::PARAM_STR);
            $stmt->bindParam(':phone', $formData['phone'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $formData['email'], PDO::PARAM_STR);
            $stmt->bindParam(':action', $formData['action'], PDO::PARAM_STR);
            $stmt->bindParam(':boss', $formData['boss'], PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}