<?php

namespace Looker\LookML;

/**
 * LookML join. This is a directive of type "join".
 */
class Join extends Directive {

  public function __construct($name) {
    parent::__construct('join', $name);
  }

}
