<?php

namespace Imones;

class Validation {
    static public function newCompany($formData) {
        $klaidos = [];

        if(empty($formData['name'])) {
            $klaidos['name'] = "Prasome uzpildity pavadinima";
        }
        else if(strlen($formData['name']) <3) {
            $klaidos['name'] = "Pavadinimas negali buti trumpesnis nei 3 raides";
        }
        if(empty($formData['code'])) {
            $klaidos['code'] = "Prasome uzpildity koda";
        }
        if(empty($formData['tax_code'])) {
            $klaidos['tax_code'] = "Prasome uzpildity PVM koda";
        }
        if(empty($formData['adress'])) {
            $klaidos['adress'] = "Prasome uzpildity adresa";
        }
        if(empty($formData['phone'])) {
            $klaidos['phone'] = "Prasome uzpildity telefono Nr";
        } else {
            $sanitized_phone = filter_var($formData['phone'], FILTER_SANITIZE_NUMBER_INT);
            if(strlen($sanitized_phone) < 9 || strlen($sanitized_phone) > 12) {
                $klaidos['phone'] = "tel. nr. turi buti tinkamas";
            }
        }
        if(empty($formData['email'])) {
            $klaidos['email'] = "Prasome uzpildity el. pasta";
         }
         else if(!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)){
             $klaidos['email'] = "El. pastas turi buti tinkamas";
         }
        if(empty($formData['action'])) {
            $klaidos['action'] = "Prasome uzpildity veikla";
        }
        if(empty($formData['boss'])) {
            $klaidos['boss'] = "Prasome uzpildity savininka";
        }
        

        if(!empty($klaidos)) {
            return $klaidos;
        }
        return 'Klaidu nerasta';
    }
}