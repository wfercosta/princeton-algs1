<?php

namespace Algorithms\UnionFind;

use Utils\Generator;

class WeightedQuickUnion extends QuickUnion
{

    protected $size = array();

    /**
     * Constructor.
     * @param int $n
     *  Number of the sites.
     */
    public function __construct(int $n)
    {

        foreach (Generator::range(0, $n) as $value) {
            $this->size[$value] = 1;
        }

        parent::__construct($n);
    }

    /**
     * {@inheritdoc}
     */
    public function union(int $p, int $q)
    {
        $rootP = $this->find($p);
        $rootQ = $this->find($q);

        if ($rootP === $rootQ)
            return;

        if ($this->size[$rootP] < $this->size[$rootQ]) {
            $this->ids[$rootP] = $rootQ;
            $this->size[$rootQ] += $this->size[$rootP];
        } else {
            $this->ids[$rootQ] = $rootP;
            $this->size[$rootP] += $this->size[$rootQ];
        }

        $this->count --;
    }

}