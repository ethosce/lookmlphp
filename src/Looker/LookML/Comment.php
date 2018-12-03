<?php

namespace Looker\LookML;

/**
 * LookML comments.
 *
 * # This is a comment
 */
class Comment extends Base {

  public function __construct($comment) {
    $this->comment = $comment;
  }

  public function __toString() {
    return '# ' . $this->comment;
  }

}
