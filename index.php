<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <?php
// interable
function getIterable():iterable{
  return["Florist Madam`", "<hr>"];
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;

}

//class
class Pot{
  // Properties
  public $nama;
  public $harga;

  // construktor
  function __construct($nama, $harga) {
    $this->nama = $nama;
    $this->harga = $harga;
  }
  // destruktor
  function __destruct() {
    echo "Nama : {$this->nama} | Harga : Rp. {$this->harga}";
    echo "<br>";
  }
}

// inheritance
class Bibit extends Pot {
}

// interface 
interface Produk{
  public function jenis();
}

class Mawar implements Produk{
  public function jenis() {
    echo "Bibit Mawar diskon 5%","<br>";
  }
}

// Static Property
class Terjual {
  public static $satu = 1000, $dua = 3000;
}
// Static Methods
class Stok{
  public static function staticMethod() {
      echo "<hr>";
      echo "Stok Bibit = 1000 <br> Stok Pot = 5000";
      echo "<hr>";
  }
}

// objek
$pothitam = new Pot("Pot Hitam", "30000/kg");
$potbata = new Pot("Pot Bata", "25000/kg");
$produk = new Mawar();
$produk -> jenis();
Stok::staticMethod();
echo "Bibit yang terjual : " . Terjual::$satu;
echo "<br> Pot yang terjual : " . Terjual::$dua;
echo "<hr>";
?>
    </form>
</body>
</html>