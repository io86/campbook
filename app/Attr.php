<?php


namespace App;


class Attr
{
    private $areas;
    private $colAttr;

    public function getAreasEn(): array
    {
        $this->areas = ['aegean-islands' => 'Aegean Islands', 'attica' => 'Attica', 'central-greece' => 'Central Greece', 'crete' => 'Crete', 'cyclades-islands' => 'Cyclades Islands', 'dodecanese-islands' => 'Dodecanese Islands', 'epirus' => 'Epirus', 'ionian-islands' => 'Ionian Islands', 'macedonia' => 'Macedonia', 'peloponnese' => 'Peloponnese', 'sporades-islands' => 'Sporades Islands', 'thessaly' => 'Thessaly', 'thrace' => 'Thrace'];
        return $this->areas;
    }

    public function getAreasKeysDB(): array
    {
        $this->areas = ['aegean-islands' => 1, 'attica' => 2, 'central-greece' => 3, 'crete' => 12, 'cyclades-islands' => 4, 'dodecanese-islands' => 5, 'epirus' => 13, 'ionian-islands' => 6, 'macedonia' => 7, 'peloponnese' => 8, 'sporades-islands' => 9, 'thessaly' => 10, 'thrace' => 11];
        return $this->areas;
    }

    public function getAreasGr(): array
    {
        $this->areas = ['aegean-islands' => 'Νησιά Β. Αιγαίου', 'attica' => 'Αττική', 'central-greece' => 'Κεντρική Ελλάδα', 'crete' => 'Κρήτη', 'cyclades-islands' => 'Κυκλάδες', 'dodecanese-islands' => 'Δωδεκάνησα', 'epirus' => 'Ηπειρος', 'ionian-islands' => 'Ιόνια νησιά', 'macedonia' => 'Μακεδονία', 'peloponnese' => 'Πελοπόννησος', 'sporades-islands' => 'Σποράδες', 'thessaly' => 'Θεσσαλία', 'thrace' => 'Θράκη'];
        return $this->areas;
    }

    /*public function getTitleForAttrColTablesInDashboard(): array
    {
        $this->colAttr = [
            'id_user' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'created_at' => 'Created at',
            'email_camping' => 'Email Camping',
            'website' => 'Website',
            'tel' => 'Τηλέφωνο',
            'postcode' => 'TK',
            'area_gr' => 'Περιοχή',
            'area_en' => 'Area',
            'name_gr' => 'Όνομα Κάμπινγκ',
            'address_gr' => 'Διεύθυνση',
            'city_gr' => 'Πόλη / Νησί',
            'name_en' => 'Name Camping',
            'address_en' => 'Address',
            'city_en' => 'City / Island',
            'distance_sea' => 'Απόσταση από τη θάλασσα (σε m)',
            'places' => 'Αρ. Θέσεων',
            'area_sq' => 'Έκταση (σε τμ)',
            'room' => 'Δωμάτια',
            'restaurant' => 'Εστιατόριο',
            'market' => 'Market',
            'bar' => 'Bar',
            'cooking_facil' => 'Κοινόχρηστη Κουζίνα',
            'ironic_facil' => 'Κοινόχρηστο Σίδερο',
            'hanticapped_people' => 'Τουαλέτες για άτομα με ειδ. ανάγκες',
            'mobil_home' => 'Τροχόσπιτα',
            'beach_volley' => 'Beach Volley',
            'tennis' => 'Tennis',
            'football_5x5' => 'Football 5x5',
            'ping_pong' => 'Ping-Pong',
            'basket' => 'Μπάσκετ',
            'pool' => 'Πισίνα',
            'description_en' => ' Description',
            'description_gr' => 'Περιγραφή',
            'visa' => 'Visa',
            'master' => 'Master',
            'other_card' => 'Other Cards'
        ];

        return $this->colAttr;
    }*/

    public function getAllAttrDB(): array
    {
        $this->colAttr = [
            'id_user',
            'username',
            'password',
            'email',
            'created_at',
            'updated_at',
            'id_role',
            'role',
            'email_camping',
            'website',
            'tel',
            'postcode',
            'name_en',
            'address_en',
            'city_en',
            'area_en',
            'name_gr',
            'address_gr',
            'city_gr',
            'area_gr',
            'distance_sea',
            'places',
            'area_sq',
            'room',
            'restaurant',
            'market',
            'bar',
            'cooking_facil',
            'ironic_facil',
            'hanticapped_people',
            'mobil_home',
            'beach_volley',
            'tennis',
            'football_5x5',
            'ping_pong',
            'basket',
            'pool',
            'description_en',
            'description_gr',
            'visa',
            'master',
            'other_card',
            'img1',
            'img2',
            'img3',
            'img4',
            'img5',
            'img6',
            'img7',
            'img8',
            'img9',
            'img10',
            'img11',
            'img12',
            'img13',
            'img14',
            'img15',
            'img16',
        ];

        return $this->colAttr;
    }
}
