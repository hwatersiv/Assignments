<?php

class Node
{
	public $prevnode;
	public $data;
	public $nextnode;

	function __construct($para_data)
	{
		$this->prevnode = NULL;
		$this->data = $para_data;
		$this->nextnode = NULL;
	}

	function readnode()
	{
		return $this->data;
	}

}

class Linkedlist
{	
	public $head;
	public $tail;
	
	function __construct()
	{
		$this->head = NULL;
		$this->tail = NULL;
	}

	function add_node($node)
	{
		if($this->head == NULL)
		{
			$this->head = $node;
		}
		$node->prevnode = $this->tail;
		$this->tail = $node;
		$node->prevnode->nextnode = $node;

	}
}


$unit1 = new Node(1);

$the_list = new Linkedlist();

$the_list->add_node($unit1);

echo "<pre>";
var_dump($the_list);
echo "</pre>";
?>