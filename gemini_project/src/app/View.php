<?php

declare(strict_types=1);

namespace  App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(private string $path, private array $arguments = [])
    {
    }

    public static function make(string $path, array $arguments = []): static
    {
        return new static($path, $arguments);
    }

    public function render(): string
    {
        $viewPath = VIEWS . $this->path . ".php";
        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }
        ob_start();
        require $viewPath;
        return ob_get_clean() ?: "";
    }

    public function __toString(): string
    {
        return $this->render();
    }
}
