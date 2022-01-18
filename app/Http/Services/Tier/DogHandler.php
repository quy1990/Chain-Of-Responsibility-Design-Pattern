<?php

namespace App\Http\Services\Tier;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        }

        return parent::handle($request);
    }
}
