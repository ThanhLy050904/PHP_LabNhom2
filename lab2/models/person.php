<?php
class Person
{
    private $name;
    private $age;
    private $address;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getInfo()
    {
        return "Name: " . $this->name . ",<br>
         Age: " . $this->age . ", <br>
         Address: " . $this->address;
    }
    public function canVote()
    {
        return $this->age >= 18;

    }
}
    $person1 = new Person();
    $person1->setName("chithanhne");
    $person1->setAge(19);
    $person1->setAddress("123 Main St");

    echo $person1->getInfo();
    echo "\n";
    if ($person1->canVote()) {
        echo "được đi thi";
    } else {
        echo "không được đi thi";
    }

?>