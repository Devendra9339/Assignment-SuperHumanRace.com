
<?php
//php class or super class for sorting array in asending order
class sort_array_assignment
{
    //Access modifier protected variable can used in child class and within the super class
    protected $sortAsending;
    //magic function in oops
    public function __construct(array $sortAsending)
     {
        $this->sortAsending = $sortAsending;
     }

    public function sortArrayAssinment()
     {
        $sortArray = $this->sortAsending;
        //sort() pre define php function 
        sort($sortArray);
        return $sortArray;
      }
}

//object of super class
$sortArrayOrder = new sort_array_assignment(array(11, -2, 4, 35, 0, 8, -9));
//pre tag for formating array view.
echo"<pre>";
 print_r($sortArrayOrder->sortArrayAssinment());
 echo"</pre>";
?>