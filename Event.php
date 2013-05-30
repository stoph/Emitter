<?php

class Emitter
{
    private $events;
	
    public function __construct()
	{
		$this->events	= array();
	}
	
	public function on($event, $action)
	{
		$this->events[$event][]	= $action;
	}
	
	public function emit($event, array $args)
	{
		if (isset($this->events[$event])) {
			foreach ($this->events[$event] as $event) {
				call_user_func($event, $args);
			}
		}
	}
	
}
