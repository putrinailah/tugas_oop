<?php 
// parent class
class laptop {
    public $nama;
    protected $folder;
    private $password;

    function __construct($folder, $password) {
        $this->folder = $folder;
        $this->password = $password;
        
    }

    public function __destruct() {
        echo "ini adalah laptop";
    }


    public function setnama($nama) {
        $this->nama = $nainai;
    }

    public function getnama() {
        return $this->nama;
    }

    public function setfolder($nainai) {
        $this->folder = $nainai;
    }

    public function getfolder() {
        return $this->folder;
    }

    public function setpassword($abcdefg) {
        $this->password = $abcdefg;
    }

    public function getpassword() {
        return $this->password;
    }


    public function laptop() {
        echo "objek ini adalah laptop.";
    }
}


class HP extends laptop {    
    public function __construct($nainai, $nai, $abcdefg) {
        parent::__construct($nainai, $nai, $abcdefg);
        echo "ini adalah laptop HP";
    }
    
    public function __destruct(){
        laptop::__destruct();
        echo "ini sudah terhapus";
    }


    public function HP() {
        echo "ini adalah laptop HP.";
    }
}

$laptop = new laptop("nainai", "nai", "abcdefg");
$HP = new HP("nainai", "nai", "abcdefg");

$HP->nama = "nainai";
$HP->setfolder("nai");
$HP->setpassword("abcdefg");

?>
