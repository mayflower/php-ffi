--TEST--
FFI 030: bool type
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
var_dump(FFI::sizeof(FFI::new("bool[2]")));
$p = FFI::new("bool[2]");
var_dump($p);
$p[1] = true;
var_dump($p[0]);
var_dump($p[1]);
?>
--EXPECTF--
int(2)
object(FFI\CData)#%d (2) {
  [0]=>
  bool(false)
  [1]=>
  bool(false)
}
bool(false)
bool(true)
