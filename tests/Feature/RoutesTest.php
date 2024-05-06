<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\File;

class RoutesTest extends TestCase
{
    /**
     * Test if the routes file exists.
     */
    public function test_routes_file_exists(): void
    {
        $this->assertTrue(File::exists(app_path('Admin/routes.php')));
    }
}
