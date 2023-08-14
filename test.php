<?php
$object = new Person;
print_r($object);
echo "<br>";

$object->name     = "Joe";
$object->password = "mypass";
print_r($object);
echo "<br>";

$object->save_user();
echo $object->get_password();
echo "<br>";

$object           = new Person;
$object->password = "booty";

echo $object->get_password();
echo "<br>";

$object           = new Subscriber;
$object->name     = "Fred";
$object->password = "pword";
$object->phone    = "012 345 6789";
$object->email    = "fred@bloggs.com";
$object->display();

$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser']  = "Laser Printer";
$paper['photo']  = "Photographic Printer";

print_r($paper);
echo "<br>";

echo $paper['laser'];

$p2 = array(
    'copier' => "Copier and Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser'  => "Laser Printer",
    'photo'  => "Photo Printer"
);

echo "p2 element: " . $p2['inkjet'] . "<br>";

foreach ($paper as $item => $description) {
    echo "$item: $description<br>";
}

// multidimensional arrays
$products = array(
    'paper' => array(
        'copier' => "Copier Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser'  => "Laser Printer",
        'photo'  => "Photo Printer"
    ),

    'pens' => array(
        'ball'   => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"
    ),

    'misc' => array(
        'tape'  => "Sticky Tape",
        'glue'  => "Adhesives",
        'clips' => "Paperclips"
    )
);

echo "<pre>";

foreach ($products as $section => $items)
    foreach ($items as $key => $value)
        echo "$section:\t$key\t($value)<br>";

echo "</pre>";

echo time();


class Person
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }

    function get_password()
    {
        return $this->password;
    }
}

class Subscriber extends Person
{
    public $phone, $email;

    function display()
    {
        echo "Name:  "  . $this->name     . "<br>";
        echo "Pass:  "  . $this->password . "<br>";
        echo "Phone: "  . $this->phone    . "<br>";
        echo "Email: "  . $this->email    . "<br>";
    }
}
