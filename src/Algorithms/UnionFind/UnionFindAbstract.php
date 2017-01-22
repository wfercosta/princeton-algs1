<?php

namespace Algorithms\UnionFind;

use Utils\Generator;

/**
 * Created by PhpStorm.
 * User: wfer
 * Date: 22/01/17
 * Time: 12:19
 */
abstract class UnionFindAbstract
{

    protected $ids = array();
    protected $count;

    /**
     * UnionFindAbstract constructor.
     * @param int $n
     *  Number of site to initialize.
     */
    public function __construct(int $n) {
        $this->count = $n;
        foreach (Generator::range(0, $n) as $value) {
            $this->ids[$value] = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    function __toString()
    {
        $keys = "| ";
        $values = "| ";
        foreach ($this->ids as  $key => $value) {
            $keys .= str_pad($key, 4, '0', STR_PAD_LEFT) . " | ";
            $values .= str_pad($value, 4, '0', STR_PAD_LEFT) . " | ";
        }
        echo 'Site       : ' . $keys . "\n";
        echo 'Connection : ' . $values . "\n";
    }

    /**
     * Returns the number of sites in the vector.
     * @return int
     *  The number of the
     */
    public function count() : int {
        return $this->count;
    }

    /**
     * Adds an connecton between p and q.
     * @param int $p
     *  P site.
     *
     * @param int $q
     *  Q site.
     *
     */
    public abstract function union(int $p, int $q);


    /**
     * Find the component identifier for $p
     * @param int $p
     *  P site.
     *
     * @return int
     *  Returns the component identifier.
     */
    public abstract function find(int $p): int;

    /**
     * Checks if p and q is connected.
     *
     * @param int $p
     *  P site.
     *
     * @param int $q
     *  Q site.
     *
     * @return bool
     *  Returns true if they are connected.
     */
    public abstract function connected(int $p, int $q): bool;

}