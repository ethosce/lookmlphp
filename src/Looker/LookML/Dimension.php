<?php

namespace Looker\LookML;

/**
 * LookML dimension. This is a directive of type "dimension".
 */
class Dimension extends Directive {

  public function __construct($name) {
    parent::__construct('dimension', $name);
  }

}
