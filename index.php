<?php
class MaClass {
    public static $nombre = 0;
    
    private $nom ;
    public $rue ;

    public function __construct($unNom, $uneRue){
        $this->nom = $unNom;
        $this->rue = $uneRue;
        MaClass::$nombre++;
    }
    public function __destruct() {MaClass::$nombre--;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($unNom){
        $this->nom = $unNom;
    }
    public function ma_methode(){
        echo "ma méthode fait coucou " . $this->nom . "!!! Depuis la rue " .$this->rue;
    }
}

$monInst = new MaClass('Alex', 'Saint Thomas');
$monInst->ma_methode();
$var = $monInst->rue;
echo $var;

?>
