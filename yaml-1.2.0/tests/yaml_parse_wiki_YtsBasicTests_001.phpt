--TEST--
Yaml YtsBasicTests - Simple Sequence
--DESCRIPTION--
You can specify a list in YAML by placing each
member of the list on a new line with an opening
dash. These lists are called sequences.

--CREDITS--
Bryan Davis bd808@bd808.com
# yaml.kwiki.org import/conversion
--SKIPIF--
<?php if(!extension_loaded('yaml')) die('skip yaml n/a'); ?>
--FILE--
<?php
  var_dump(yaml_parse('- apple
- banana
- carrot
'));
?>
--EXPECT--
array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "banana"
  [2]=>
  string(6) "carrot"
}
