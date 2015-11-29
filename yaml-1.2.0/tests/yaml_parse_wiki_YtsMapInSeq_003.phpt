--TEST--
Yaml YtsMapInSeq - Strange keys
--DESCRIPTION--
Test a map with "line noise" keys.

--CREDITS--
Bryan Davis bd808@bd808.com
# yaml.kwiki.org import/conversion
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--FILE--
<?php
  var_dump(yaml_parse('---
- "!@#$" : foo
  -+!@ :   bar
'));
?>
--EXPECT--
array(1) {
  [0]=>
  array(2) {
    ["!@#$"]=>
    string(3) "foo"
    ["-+!@"]=>
    string(3) "bar"
  }
}
