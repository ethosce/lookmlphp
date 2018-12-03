<?php

namespace Looker\LookML;

/**
 * LookML explores. This is a Directive with the type "explore" with some
 * convenient methods.
 */
class Explore extends Directive {

  public function __construct($name) {
    parent::__construct('explore', $name);
  }

  function join($name) {
    $join = new Directive('join', $name);
    $this->add($join);
    return $join;
  }

}
