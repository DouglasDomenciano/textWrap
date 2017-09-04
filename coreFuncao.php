<?php

/**
 * Created by : Douglas Domenciano
 * Date: 01/09/17
 * Time: 13:38
 */

require_once("quebraDeLinha.php");

$string = "Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.";

//Quantiade limite de caracteres para realizar a quebra de linha
$qtdchar = 10;

// Realizando uma instancia da classe quebraDeLinha advinda da classe abstrata da interface.
$linha = new quebraDeLinha();

// Executando a função textWrap passando os parametro para que seja feita o calculo ea quebra das linhas.
$resultado = $linha->textWrap($string,$qtdchar);

//Laço de repetição para a impressão do resultado retornado da linha superior.
for ($x=0;$x < count($resultado);$x++){
    echo $resultado[$x];
}
