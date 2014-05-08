<?php


$obj = null;
if ($obj instanceof Circle) {
    print '$obj is a Circle';
}


// The final keyword allows you to mark methods so that an inheriting class cannot overload them:
class MyClass01 {
    final function getBaseClassName() {
    return __CLASS__;
    }
}

// After declaring a class as final, it cannot be inherited.
final class FinalClass {}


class MyClass02 {
    const SUCCESS = "Success";
    const FAILURE = "Failure";
}
print MyClass02::SUCCESS;

// You can now define methods as static by allowing them to be called from
// non-object context. Static methods do not define the $this variable
// because they are not bound to any specific object:
class MyClass03 {
    static function helloWorld() {
        print "<br>Hello, world";
    }
}
MyClass03::helloWorld();


// foreach with references
// iterate through an array and modify its values
// & (reference) sign, which makes any values you change affect the array
// over which you are iterating
$array = array("uno", "due");
foreach ($array as &$value) {
    if ($value === "NULL") {
        $value = NULL;
    }
}
print_r("\n");

// Magic constants
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__


// default parameter with default value
function my_func($arg = null) {
	if ($arg === NULL) {
		print '$arg is empty';
	}
}
my_func();
print_r("\n");


// special array
$pippo = 'pippo';
print_r($GLOBALS);


// Indirect References to Variables
// usi come nome di variabile il contenuto di un'altra variabile
print_r("================\n");
$uno = "due";
print_r($uno."\n");
$$uno = 2;
// creo la variabile $due dinamicamente (dal contenuto della variabile $uno)
print_r($due."\n");


// isset() determines whether a certain variable has already
// been declared by PHP. It returns a boolean value true
// if the variable has already been set, and false
// otherwise, or if the variable is set to the value NULL
print(isset($pluto)."\n"); // false
$pluto = null;
print(isset($pluto)."\n"); // false
$pluto = "";
print(isset($pluto)."\n"); // true
// isset() accepts an arbitrary amount of parameters.
// It only returns true
// if all the variables have been defined; otherwise, it returns false
// isset($var1, $var2, $var3, ...);

// unset() "undeclares" a previously set variable, and frees
// any memory that was used by it if no other variable references its value. A call
// to isset() on a variable that has been unset() returns false.


// Superglobals
// $_ENV[]
// $_POST[]
// $_COOKIE[]
// $_ENV[]
// $_SERVER[]


print_r("======================\n");
$personaggio = "pippo";
$frase = "io e $personaggio facciamo una gita";
print_r($frase);

print_r("======================\n");
// string offset
$stringa = "pluto";
$stringa{10} = "e";
print_r($stringa);





