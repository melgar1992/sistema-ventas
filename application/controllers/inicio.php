<?php
class inicio extends BaseController {
    
    function __construct(){
		parent::__construct();			
    }    

public function cargarpagina()
{
    $this->loadView('/form/dashboard');
}

}