<?php
/**
 * Created by PhpStorm.
 * User: eneas
 * Date: 16/10/2017
 * Time: 23:25
 */

namespace eneas\Specification;

use eneas\Specification\Rules\AbstractRule;

class PriorityRulesQueue implements \Iterator
{
    /** @var \SplPriorityQueue  */
    private $priorityRulesQueue;

    public function __construct(AbstractRule ...$rules)
    {
        $this->priorityRulesQueue = new \SplPriorityQueue();

        foreach ($rules as $rule) {
            $this->insert($rule);
        }
    }

    public function insert(AbstractRule $rule)
    {
        $this->priorityRulesQueue->insert($rule, $rule->getPriority());
    }

    public function current()
    {
        return $this->priorityRulesQueue->current();
    }

    public function next()
    {
        $this->priorityRulesQueue->next();
    }

    public function key()
    {
        return $this->priorityRulesQueue->key();
    }

    public function valid()
    {
        return $this->priorityRulesQueue->valid();
    }

    public function rewind()
    {
        $this->priorityRulesQueue->rewind();
    }

    public function __clone()
    {
        $this->priorityRulesQueue = clone $this->priorityRulesQueue;
    }
}
