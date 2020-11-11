<?php

namespace themes\App;

class Web{
    
    public function home($data){
        echo "<h1>Pinto homezinho</h1>";
        var_dump($data);
    }
    public function login($data){
        echo "<h1>Pinto De Log</h1>";
        var_dump($data);
    }
    public function error($data){
        echo "<h1>alo eae </h1>";
        var_dump($data);
    }
    
}


?>