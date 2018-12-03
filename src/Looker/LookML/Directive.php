<?php

namespace Looker\LookML;

/**
 * A directive looks like this:
 *
 * directive: name {
 *   param: "param"
 *   other_directive: other_name {
 *     param: "param"
 *   }
 * }
 */
class Directive extends Base {

  public function __construct($type, $name) {
    $this->type = $type;
    $this->name = $name;
  }

  public function __toString() {
    $out = '';
    $out .= "{$this->type}: {$this->name} {\n";
    $out .= parent::__toString();
    $out .= '}';
    return $out;
  }

}
