--TEST--
Yaml YtsBasicTests - Deeply Nested Sequences
--DESCRIPTION--
Sequences can be nested even deeper, with each
level of indentation representing a level of
depth.

--CREDITS--
Bryan Davis bd808@bd808.com
# yaml.kwiki.org import/conversion
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--FILE--
<?php
  var_dump(yaml_parse('-
 -
  - uno
  - dos
'));
?>
--EXPECT--
array(1) {
  [0]=>
  array(1) {
    [0]=>
    array(2) {
      [0]=>
      string(3) "uno"
      [1]=>
      string(3) "dos"
    }
  }
}
