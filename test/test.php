 <?php class real {
public $name;
public $number;



public function Realname() {
echo $this->name . " thank you " . $this->number . " game";
}

 }

$p = new real();
$p->name="Mariano";
$p->number=15;
$p->Realname();
?>
