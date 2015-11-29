--TEST--
Yaml YtsMapInSeq - Single key
--DESCRIPTION--
Test maps with just one key.

--CREDITS--
Bryan Davis bd808@bd808.com
# yaml.kwiki.org import/conversion
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--FILE--
<?php
  var_dump(yaml_parse('---
- foo: bar
- baz: bug
'));
?>
--EXPECT--
array(2) {
  [0]=>
  array(1) {
    ["foo"]=>
    string(3) "bar"
  }
  [1]=>
  array(1) {
    ["baz"]=>
    string(3) "bug"
  }
}
