<?php

class pokemonView{

    private $smarty;
    
    function __construct(){
        $this->smarty = new Smarty();
    }

    function showPokemones($pokemones){
        $this->smarty->assign('pokemones',$pokemones);
        $this->smarty->display('./templates/showPokemones.tpl');
    }
}