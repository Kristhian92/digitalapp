<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Admin\Controllers\ProductController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the ProductController exists.
     */
    public function test_product_controller_exists(): void
    {
        $this->assertTrue(class_exists(ProductController::class));
    }
}
