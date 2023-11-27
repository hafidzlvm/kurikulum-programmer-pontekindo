<?php 

class Programmer{
    public string $name ;
    public function __construct(string $name){
        $this -> name = $name ;
    }
}


class BackendProgrammer extends Programmer {}
class FrontendProgrammer extends Programmer {}




class Company {
    var Programmer $programmer;
}




$company = new Company();
$company -> programmer = new Programmer('hafidz1');
$company -> programmer = new BackendProgrammer('hafidz2');
$company -> programmer = new FrontendProgrammer('hafidz3');
var_dump($company);



// function sayHello (programmer $programmer){
//     echo "Hello $programmer->name".PHP_EOL;
// }
// sayHello(new Programmer('hafidz1'));
// sayHello(new BackendProgrammer('hafidz2'));
// sayHello(new FrontendProgrammer('hafidz3'));
// hi nama umur sekolah skill

?>