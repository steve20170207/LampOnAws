<?php
 use PHPUnit\Framework\TestCase;
 require 'welcome.php';
class testphp extends TestCase {
protected function setUp(){
$this->welcome = new welcome();
}
protected function tearDown(){
$this->welcome=NULL;
}

public function testGreet() {
$result=$this->welcome->greeting();
echo "the real result is ";
#echo $result;
$this->assertEquals("welcome to DevOps2",$result);

}
}
?>
