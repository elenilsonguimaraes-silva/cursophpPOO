<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Guimarães
 */
interface Publicacao {
    function abrir();
    function fechar();
    function folhear($pagina);
    function avancarPag();
    function voltarPag();
}
