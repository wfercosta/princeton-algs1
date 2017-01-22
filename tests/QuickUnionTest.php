<?php

use Algorithms\UnionFind\QuickUnion;
use Utils\FileReader;
use PHPUnit\Framework\TestCase;

class QuickUnionTest extends TestCase
{

    public function testTiny() {


        $uf = null;
        $reader = new FileReader(__DIR__ . '/../resources/tinyUF.txt');

        foreach ($reader->lines() as $line) {
            if (empty($uf)) {
                $n = intval($line);
                $uf = new QuickUnion($n);
            } else {
                $values = explode(" ", $line);
                $p = intval($values[0]);
                $q = intval($values[1]);
                $uf->union($p, $q);
            }
        }

    }

}
