<?php
//7.1
class MiClase{
    const constante = 'valor constante';
    function mostrarConstante() {
        echo self::constante . "\n";
    }
}

?>

<?php
//7.2
abstract class ClaseAbstracta{
    //Se fuerza la herencias de la clase para definir estos métodos
    abstract protected function tomarValor();
    abstract protected function PrefixValor($prefix);
    //Sétodo común
    public function printOut(){
        print $this->tomarValor() . "<br>";
    }
}
?>

<?php
class ClaseConcreta1 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta1";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcreta1";
    }
}
?>
<?php
class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor()
    {
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcreta2";
    }
}
?>

<?php
//7.3
interface iTemplate{
    public function ponerVariable($nombre,$var);
    public function verHtml($template);
}
?>
<?php
class Template implements iTemplate{
    private $vars = array();
    public function ponerVariable($nombre, $var){
        $this->vars[$nombre] = $var;
    }
    public function verHtml($template){
        foreach($this->vars as $nombre => $value){
            
            $template = str_replace('{' . $nombre . '}', $value, $template);
        }
        return $template;
    }
}
?>

<?php
//7.5
//Clonacion de Objetos
Class SubObject{
    static $instances = 0;
    public $instance;
    public function __construct(){
        $this->instance = ++self::$instances;
    }
    public function __clone(){
        $this->instance = ++self::$instances;
    }
}
?>

<?php
class MyCloneable{
    public $object1;
    public $object2;
    function __clone()
    {
        //Forzar una copia de this->object
        $this->object1 = clone $this->object1;
    }
}
?>

<?php
//7.6
class Cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;

    function __construct($d,$a){
        $this->diametro = $d;
        $this->altura = $a;
        $this->pi = 3.141593;
        $this->radio = $d/2;
    }
    function obtener_radio(){
        return $this->radio;
    }
    function calc_volumen(){
        return $this->pi*$this->radio*$this->radio*$this->altura;
    }
    function calc_area(){
        return 2*$this->pi*$this->radio*($this->radio+$this->altura);
    }
}
?>