<?php

class ofertaController extends Controller
{
	
	public function __construct($lang, $url) 
    {
        parent::__construct($lang, $url);
    }
    public function index($idPagina = 1){
    	$this->validarUrlIdioma();
    }
}
?>