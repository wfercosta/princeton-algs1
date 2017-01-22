<?php

namespace Algorithms\UnionFind;

class QuickUnion extends UnionFindAbstract
{


    /**
     * Constructor.
     * @param int $n
     *  Number of the sites.
     */
    public function __construct(int $n)
    {
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

        $this->ids[$rootP] = $rootQ;
        $this->count --;
    }

    /**
     * {@inheritdoc}
     */
    public function find(int $p): int
    {
        while($p != $this->ids[$p]) {
            $p = $this->ids[$p];
        }
        return $p;
    }

    /**
     * {@inheritdoc}
     */
    public function connected(int $p, int $q): bool
    {
        return $this->find($p) === $this->find($p);
    }
}