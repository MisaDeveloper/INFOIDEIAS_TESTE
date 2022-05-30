<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {

        return ceil($ano / 100);
        
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {

        function ifIsPrime($num) {
            if($num == 1) {
                return false;
            }
            for ($i = 2; $i <= $num/2; $i++) {
                if ($num % $i == 0)
                    return false;
            } 
            return true; 
        }

        for($testeNum = $numero-1; $testeNum >= 2; $testeNum--) {
            if(ifIsPrime($testeNum)) {
                return $testeNum;
                break;
            }
        }
        
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {

        $numbersArray = [];

        foreach($arr as $indArray) {
            foreach($indArray as $value) {
                array_push($numbersArray, $value);
            }
        }

        $biggestNumber = max($numbersArray);

        while(max($numbersArray) === $biggestNumber) {

            unset($numbersArray[array_search($biggestNumber, $numbersArray)]);

        }

        return max($numbersArray);
        
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false -------
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true
    

     * */
    
	public function SequenciaCrescente(array $arr): bool { /*Foi modificado de boolean para bool, pois é a maneira correta*/ 

        function verificaSeECrescente(array $array) {

            if(count($array) == 1) {
                return true;
            }

            for($i = 1; $i < count($array); $i++) {
                if($array[$i-1] >= $array[$i]) {
                    return false;
                }
            }

            return true;
        }

        for($i = 0; $i < count($arr); $i++) {
            $arrayTest = $arr;
            unset($arrayTest[$i]);
            $arrayTest = array_values($arrayTest);

            if(verificaSeECrescente($arrayTest)) {
                return true;
            }
        }

        return false;

    }
}
