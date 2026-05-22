<?php
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getInfo() {
        return "Tên: " . $this->name .
               "<br>Tuổi: " . $this->age .
               "<br>Địa chỉ: " . $this->address;
    }


    public function canVote() {
        return $this->age >= 18;
    }
}


$person1 = new Person("Khang Huỳnh", 20, "Cà Mau");

echo $person1->getInfo();
echo "<br>";

if ($person1->canVote()) {
    echo "Đủ tuổi bỏ phiếu";
} else {
    echo "Chưa đủ tuổi bỏ phiếu";
}
?>