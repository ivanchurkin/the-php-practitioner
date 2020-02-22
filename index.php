<?php

require 'functions.php';

class Task {

    public string $description;
    protected bool $completed = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function complete(): void
    {
        $this->completed = true;
    }

    public function isComplete(): bool  {
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish watch video'),
    new Task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';