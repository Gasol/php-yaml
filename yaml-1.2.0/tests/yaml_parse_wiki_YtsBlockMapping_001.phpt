--TEST--
Yaml YtsBlockMapping - One Element Mapping
--DESCRIPTION--
A mapping with one key/value pair

--CREDITS--
Bryan Davis bd808@bd808.com
# yaml.kwiki.org import/conversion
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--FILE--
<?php
  var_dump(yaml_parse('---
foo: bar
'));
?>
--EXPECT--
array(1) {
  ["foo"]=>
  string(3) "bar"
}
