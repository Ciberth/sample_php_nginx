<?php
class Example {
  public function test() {
  	$text = file_get_contents("http://example2.org:8080/test");
    return $text;
  }
}
?>
