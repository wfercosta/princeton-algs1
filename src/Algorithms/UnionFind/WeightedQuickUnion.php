<?php

namespace Algorithms\UnionFind;

class WeightedQuickUnion extends UnionFindAbstract
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
        // TODO: Implement union() method.
    }

    /**
     * {@inheritdoc}
     */
    public function find(int $p): int
    {
        // TODO: Implement find() method.
    }

    /**
     * {@inheritdoc}
     */
    public function connected(int $p, int $q): bool
    {
        // TODO: Implement connected() method.
    }

}