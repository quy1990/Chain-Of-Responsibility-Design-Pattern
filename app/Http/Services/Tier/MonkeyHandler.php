<?php

namespace App\Http\Services\Tier;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        }

        return parent::handle($request);
    }
}
