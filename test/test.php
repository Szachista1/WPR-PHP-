<?php
class real
{
  public $name;
  public $number;
  function Realname(){
      echo $this->name." thanku you ".$this->number." game";
  }

}
$p=new real;
$p->name="karim";
$p->number=9;
$p->Realname();
?>
<HTML>
<form method="POST">
    numer:<input type="text" name="realm">
</form>
</HTML>