<?php


class StackDataStructure{

    private array $stack;



    public function setStack($data):array
    {
       return $this->stack = $data;
    }

    public function getStack():array
    {
        return $this->stack;
    }

    public function push($element)
    {
        $this->stack[] = $element;
        return $this->stack;
    }

    private function countElements()
    {
        $i=0;
        foreach ($this->stack as $item){
            $i++;
        }
        return $i;
    }

    private function removeLastElement(){
        $newStack = [];
        $j=0;
        while ($j < $this->countElements()-1 )
        {
               $newStack[] = $this->stack[$j];
                $j++;


        }
        $this->stack = $newStack;
        return $this->stack;

    }

    public function pop():array
    {
      return  $this->removeLastElement();
    }

    public function peek(){
        $count = $this->countElements();
        return $this->stack[$count-1];
    }

    private function getSmallest()
    {
        $lower = $this->stack[0];
        foreach ($this->stack as $item){
           if ($lower > $item){
               $lower = $item;
           }
        }
        return $lower;
    }

    public function min(){
        return $this->getSmallest();
    }

}


$newStackObject = new StackDataStructure();
$newStackObject->setStack([1,2,3]);
print_r($newStackObject->push(4));
print_r($newStackObject->pop());
print_r($newStackObject->peek());
print_r($newStackObject->min());


