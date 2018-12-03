<?php

namespace Looker\LookML;

/**
 * LookML Model.
 */
class Model extends Base {

  function explore($name) {
    $explore = new Explore($name);
    $this->add($explore);
    return $explore;
  }

}
