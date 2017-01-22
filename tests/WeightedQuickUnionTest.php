<?php

use PHPUnit\Framework\TestCase;
use Algorithms\UnionFind\WeightedQuickUnion;
use Utils\FileReader;

class WeightedQuickUnionTest extends TestCase
{

    /**
     * Performs the test for Tiny file data mass.
     */
    public function testTiny() {
        $uf = $this->getTestSetup('tinyUF.txt');
        $this->assertEquals($uf->find(7), $uf->find(2));
        $this->assertTrue($uf->connected(7, 2));
        $this->assertTrue($uf->connected(7, 0));
    }

    /**
     * Performs the test for Medium file data mass.
     */
    public function testMedium() {
        $uf = $this->getTestSetup('mediumUF.txt');
        $this->assertEquals($uf->find(204), $uf->find(229));
        $this->assertTrue($uf->connected(204, 229));
        $this->assertTrue($uf->connected(229, 230));
    }

    /**
     * Performs the test for Medium file data mass.
     */
    public function testLarge() {
        $uf = $this->getTestSetup('largeUF.txt');
        $this->assertEquals($uf->find(7), $uf->find(2));
        $this->assertTrue($uf->connected(7, 2));
        $this->assertTrue($uf->connected(7, 0));
    }

    /**
     * @return QuickFind|null
     */
    protected function getTestSetup(string $filename) {

        $uf = null;

        $reader = new FileReader(__DIR__ . '/../resources/' . $filename);

        foreach ($reader->lines() as $line) {
            if (empty($uf)) {
                $n = intval($line);
                $uf = new WeightedQuickUnion($n);
            } else {
                $values = explode(" ", $line);
                $p = intval($values[0]);
                $q = intval($values[1]);
                $uf->union($p, $q);
            }
        }

        $uf->__toString();
        echo "\n";

        return $uf;
    }

}
