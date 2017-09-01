<?php

namespace Galoa\exercicios;

/**
 * Define uma interface para o exercício de quebra de linha.
 */
interface TextWrapExerciseInterface {

    /**
     * Quebra uma string em diversas strings com tamanho passado por parâmetro.
     *
     * Suponha que você tenha uma string com um texto bastante longo. Você quer
     * imprimir na tela todo o texto, mas garantir um limite máximo de N
     * caracteres por linha.
     *
     * @param string $text
     *   O texto que será utilizado como entrada.
     * @param int $length
     *   Em quantos caracteres a linha deverá ser quebrada.
     *
     * @return array
     *   Um array de strings equivalente ao texto recebido por parâmetro porém
     *   respeitando o comprimento de linha e as regras especificadas acima.
     */
    public static function textWrap(string $text, int $length): array;

}

