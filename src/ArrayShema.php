<?php

namespace Hexlet\Validator;

namespace Hexlet\Validator;

class ArraySchema extends Schema
{
    protected array $rules = [];

    public function required(): self
    {
        $this->validators['required'] = fn($value) => is_array($value);
        return $this;
    }

    public function sizeof(int $length): self
    {
        $this->validators['sizeof'] = fn($value) => count($value) === $length;
        return $this;
    }
}