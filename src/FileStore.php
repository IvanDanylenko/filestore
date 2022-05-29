<?php

namespace IvanDanylenko\FileStore;

class FileStore implements \Iterator

{
    private $file;
    private $line;

    public function __construct(string $filePath)
    {
        $this->file = fopen($filePath, 'r');
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    public function current(): mixed
    {
        return fgets($this->file);
    }

    public function next(): void
    {
        $this->line++;
    }

    public function key(): mixed
    {
        return $this->line;
    }

    public function valid(): bool
    {
        if (feof($this->file)) {
            return false;
        }
        return true;
    }

    public function rewind(): void
    {
        rewind($this->file);
        $this->line = 1;
    }
}
