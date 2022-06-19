<?php

namespace Project\Middleware;

interface Middleware
{
    function before(): void;
}
