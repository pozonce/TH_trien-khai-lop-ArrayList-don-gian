<?php
class ArrayList {
    private $items = [];
    public function add($item) {
        $this->items[] = $item;
    }
    public function get($index) {
        if (isset($this->items[$index])) {
            return $this->items[$index];
        }
        return null;
    }
    public function size() {
        return count($this->items);
    }
    public function remove($index) {
        if (isset($this->items[$index])) {
            array_splice($this->items, $index, 1);
        }
    }
}
$myList = new ArrayList();
$myList->add('Ronaldo');
$myList->add('Salah');
$myList->add('NU NA NU NONG');
$myList->add('Gakpo');
echo $myList->get(1);
$myList->remove(0);
echo $myList->size();