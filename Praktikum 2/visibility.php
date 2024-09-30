<!--visibility.php-->
<?php

class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanProperty(){
        echo "ini diakses didalam kelas <br>";
        echo "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
}