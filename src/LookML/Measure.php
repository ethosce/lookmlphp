<?php

namespace LookML;

/**
 * LookML measure.
 */
class Measure extends Directive {

  public function __construct($name) {
    parent::__construct('measure', $name);
  }

}
