<?php

namespace App\Http\Services\Tier;

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}
