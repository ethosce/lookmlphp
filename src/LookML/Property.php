<?php

namespace LookML;

/**
 * A LookML property.
 *
 * Looks like this:
 * param: "property_value"
 * escaped_param: ${something} ;;
 */
class Property {

  public function __construct($key, $value) {
    $this->key = $key;
    $this->value = $value;
  }

  public function __toString() {
    $out = '';
    if (is_array($this->value)) {
      $value = implode(',', $this->value);
      $out .= "{$this->key}: [{$value}]";
    }
    else {
      if (strpos($this->value, '$') !== FALSE || strpos($this->value, '{') !== FALSE) {
        // Escaped values.
        $out .= "{$this->key}: {$this->value} ;;";
      }
      else if (in_array($this->value, ['yes', 'no'])) {
        // Do not escape booleans.
        $out .= "{$this->key}: {$this->value}";
      }
      else {
        $out .= "{$this->key}: \"{$this->value}\"";
      }
    }

    return $out;
  }

}
