<?php
class FizzBuzz
{
    /**
     * Imprimir números del 1 al n.
     * Cuando n es divisible por 3, mostrar 'fizz'.
     * Cuando n es divisible por 5, mostrar 'buzz'.
     * Cuando n es divisible por ambos (3 y 5), mostrar 'fizzbuzz'.
     *
     * @method static void print(int $n)
     * @example FizzBuzz::print(15) ->  1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz'
     */

    public static function print($n): void
    {
        for ($i = 1; $i <= $n; ++$i) {

            if ($i % 15 == 0) {
                echo "fizzbuzz";
                echo "<br>";
            } else if ($i % 3 == 0) {
                echo "fizz";
                echo "<br>";
            } else if ($i % 5 == 0) {
                echo "buzz";
                echo "<br>";
            } else
                echo "{$i} <br>";
        }
    }
}
