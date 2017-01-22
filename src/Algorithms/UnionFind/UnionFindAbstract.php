<?php

namespace Algorithms\UnionFind;

/**
 * Created by PhpStorm.
 * User: wfer
 * Date: 22/01/17
 * Time: 12:19
 */
abstract class UnionFindAbstract
{

    /**
     * UnionFindAbstract constructor.
     * @param int $n
     *  Number of site to initialize.
     */
    public function __construct(int $n) {

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
    public abstract function connected(int $p, int $q): boolean;


}