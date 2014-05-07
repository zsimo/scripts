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
over which you are iterating
foreach ($array as &$value) {
    if ($value === "NULL") {
        $value = NULL;
    }
}

// Magic constants
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__
