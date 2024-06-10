<?php
class MyCar{
    // public static $nombre = 0;
    private $marque;
    private $modele;
    private $annee;

    public function __construct($marque, $modele, $annee){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        // MyCar::$nombre++;
    }

    // public function __destruct(){MyCar::$nombre--;
    // }

    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($marque){
        $this->marque = $marque;
    }

    public function getModele(){
        return $this->modele;
    }
    public function setModele($modele){
        $this->modele = $modele;
    }

    public function getAnnee(){
        return $this->annee;
    }
    public function setAnnee($annee){
        $this->annee = $annee;
    }

    public function detail_auto(){
        echo "Cette voiture de marque " .$this->marque . ", de modèle " .$this->modele ." est sortie en " .$this->annee . "<br>";
        if ($this->marque == 'Opel'){
            echo "Elle est en panne..." ."<br>";
        }
        else{
            echo "Tout va bien."."<br>";
        }
        if ($this->marque == 'Fiat'){
            echo "DiCaprio approuve" ."<br>";
        }
    }

}

$voit1 = new MyCar('Opel', 'Meriva', 2011);
$voit1->detail_auto();
$voit2 = new MyCar('Citroen', 'C3', 2012);
$voit2->detail_auto();
// echo $voit2->getModele();
var_dump($voit1);
$voit3 = new MyCar('Fiat', '500', 2015);
$voit3->detail_auto();

?>