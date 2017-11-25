<?php

class Node
{
    public $data, $next;

    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}

function push($head, $data)
{
    return new Node($data, $head);
}

function build_one_two_three()
{
    $chained = push(null, 3);
    $chained = push($chained, 2);

    return push($chained, 1);
}