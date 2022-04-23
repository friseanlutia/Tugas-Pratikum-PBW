<?php
class Book
{
    private $code_book;
    private $name;
    private $qty;

    private function setQtyCode($code_book, $name, $qty)
    {
        $this->code_book = $code_book;
        $this->name = $name;
        $this->qty = $qty;
    }

    public function __construct($code_book, $name, $qty)
    {
        $this->setQtyCode($code_book, $name, $qty);
    }

    public function getQtyCode()
    {
        if(preg_match("/^[A-Z]{2}[0-9]{2}$/", $this->code_book) ){
            if($this->qty < 1){
            return "ERROR";
            }
            return $this->code_book . $this->name . $this->qty ;
        }
        else
        {
            return "ERROR";
        }
    }
}

$book_one = new Book('BB15', 'Pemprograman Berbasis WEB', 454);

echo $book_one->getQtyCode();

echo "<br>";

?>