<?php

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class DeclareDeclare extends Node\Stmt
{
    /** @var Node\Identifier Key */
    public $key;
    /** @var Node\Expr Value */
    public $value;

    /**
     * Constructs a declare key=>value pair node.
     *
     * @param string|Node\Identifier $key        Key
     * @param Node\Expr              $value      Value
     * @param array                  $attributes Additional attributes
     */
    public function __construct($key, Node\Expr $value, array $attributes = array()) {
        parent::__construct($attributes);
        $this->key = \is_string($key) ? new Node\Identifier($key) : $key;
        $this->value = $value;
    }

    public function getSubNodeNames() {
        return array('key', 'value');
    }
}
