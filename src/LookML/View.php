<?php

namespace LookML;

/**
 * LookML view.
 */
class View extends Directive {

  public function __construct($name) {
    parent::__construct('view', $name);
  }

  public function dimension($name) {
    $dimension = new Directive('dimension', $name);
    $this->add($dimension);
    return $dimension;
  }

  public function dimension_group($name) {
    $dimension_group = new Directive('dimension_group', $name);
    $this->add($dimension_group);
    return $dimension_group;
  }

}
