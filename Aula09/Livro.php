<?php

require_once './Pessoa.php';
require_once './Publicacao.php';
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
    private function getTitulo() {
        return $this->titulo;
    }

    private function getAutor() {
        return $this->autor;
    }

    private function getTotPaginas() {
        return $this->totPaginas;
    }

    private function getPagAtual() {
        return $this->pagAtual;
    }

    private function getAberto() {
        return $this->aberto;
    }

    private function getLeitor() {
        return $this->leitor;
    }

    private function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    private function setAutor($autor): void {
        $this->autor = $autor;
    }

    private function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    private function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    private function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    private function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }        
    
    public function detalhes(){
        echo"<p>Livro:  ".$this->getTitulo().", autor:  ".
                $this->getAutor().", total de páginas: ".$this->getTotPaginas().".</p>";
        echo"<p>Leitor: ".$this->leitor->getNome()." Idade: ".$this->leitor->getIdade()." anos, sexo: ".$this->leitor->getSexo()."</p>";
        echo"<p>Página Atual: ".$this->getPagAtual();
    }

    public function abrir() {
        if($this->getAberto()){
            echo "O livro já está aberto";
           
        }else{
           $this->setAberto(true);
           $this->setPagAtual($this->getPagAtual() + 1);
           echo "<p>Abrindo o livro...</p>";
        }
        
    }
    
    public function fechar() {
        if($this->getAberto()){
            $this->setAberto(false);
            $this->setPagAtual(0);
            echo "Fechando o livro...";
        }else{
            echo "<p>O livro já está fechado</p>";
        }
        
    }
    
    public function folhear($pagina) {
        if($this->getAberto() && ($pagina > 0) && ($pagina <= $this->getTotPaginas())){
          $this->setPagAtual($pagina);
          echo "<p>Folheando o livro...</p>";
          echo"<p>Página atual: ".$this->getPagAtual()."</p>";
        }else{
           echo"<p>Lirvo fechado</p>";
        }
            
        
    }
      public function avancarPag() {
        if($this->getAberto() && $this->getPagAtual() > 0){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "<p>Avançando uma página...</p>";
            echo"<p>Página atual: ".$this->getPagAtual()."</p>";
        }else{
            echo"<p>Livro fechado</p>";
        }
    }
    
    public function voltarPag() {
        if($this->getAberto() && $this->getpagAtual() >=2){
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "<p>Voltando uma página...</p>";
            echo"<p>Página atual: ".$this->getPagAtual()."</p>";
        }elseif($this->getAberto() && ($this->getPagAtual() === 1)){
            echo "<p>Página de número: ".$this->getPagAtual()." não dá pra voltar mais uma página, só fechando o livro.</p>";
        }else{
            echo"<p>Livro fechado</p>";
        }
    }

}
