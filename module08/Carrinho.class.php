<?php

    require_once 'Produto.class.php';

    class Carrinho{
        
        private $itens;
        
        public function insereProduto(Produto $Item){
            $this->itens[] = $Item;
        }
        
        public function exibeLista(){
            echo "<b>Lista dos itens</b>".'<br>';
            
            foreach ($this->itens as $item) {
                echo $item->nome.'<br>';
            }
        }
        
        public function calculaTotal(){
            
            $valor_total = 0;
            
            foreach ($this->itens as $item) {
                $valor_total += $item->valor;
                
            }
            
            echo "Valor total (R$): ".number_format($valor_total, 2, ',','.');
        }
        
    }

