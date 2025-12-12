<?php
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
