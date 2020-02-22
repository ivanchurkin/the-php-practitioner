<?php

class Task {

    public string $description;
    protected bool $completed = false;

    public function complete(): void
    {
        $this->completed = true;
    }

    public function isComplete(): bool  {
        return $this->completed;
    }

}