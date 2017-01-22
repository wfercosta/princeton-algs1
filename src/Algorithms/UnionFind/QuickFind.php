<?php

namespace Algorithms\UnionFind;

class QuickFind extends UnionFindAbstract
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
        $idp = $this->ids[$p];
        $idq = $this->ids[$q];

        if ($idp === $idq)
            return;

        for ($i = 0; $i < count($this->ids); $i++) {
            if ($this->ids[$i] === $idp)
                $this->ids[$i] = $idq;
        }

        $this->count --;
    }

    /**
     * {@inheritdoc}
     */
    public function find(int $p): int
    {
        return $this->ids[$p];
    }

    /**
     * {@inheritdoc}
     */
    public function connected(int $p, int $q): bool
    {
        if ($this->ids[$p] === $this->ids[$q])
            return true;
        return false;
    }

}