<?php

/**
 * Created by : Douglas Domenciano
 * Date: 01/09/17
 * Time: 13:38
 */

require_once ("interface.php");

class quebraDeLinha implements \Galoa\exercicios\TextWrapExerciseInterface { // Classe que ira implementar o conteudo da classe abstrata

    public static function textWrap(string $text, int $length) : array{
    $string[] = "";
    $r=-1;
    $cont =0;
    //Laço de repetição resposavel pela verificação da quantidadede caracteres
       for($i=0;$i < strlen($text);$i++){
           //verificação se a quantidade de caracteres de corte limite foi atingida e realizando a concatenação de quebras de linhas
           if($i == ($r+$length)){
               $string[$cont] .= $text[$i] . "<br/>";
               $r=$i;
               $cont +=1;
           }else{
               //em caso contrario a condição acima o caracter corespondente a posição é adicionado ao array e concatenado aos demais anteriores.
               $string[$cont] .= $text[$i];
           }
       }
       return $string;
    }

}