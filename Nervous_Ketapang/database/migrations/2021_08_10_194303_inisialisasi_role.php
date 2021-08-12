<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use App\Models\Permission;

class InisialisasiRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'add product | edit product | delete product', // optional
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin Administrator', // optional
            'description' => 'Menambahkan product | edit product ', // optional
        ]);

        $user = Role::create([
            'name' => 'user',
            'display_name' => 'User Administrator', // optional
            'description' => 'Order Product', // optional
        ]);
            
        $deleteProduct = Permission::create([
                'name' => 'delete-product',
                'display_name' => 'Delete Product', // optional
                'description' => 'delete existing product for sale', // optional
            ]);
        $editProduct = Permission::create([
                'name' => 'edit-product',
                'display_name' => 'Edit Product', // optional
                'description' => 'edit existing product for sale', // optional
            ]);
        $createProduct = Permission::create([
                'name' => 'craete-product',
                'display_name' => 'Add Product', // optional
                'description' => 'add new Product for sale', // optional
            ]);
        $orderProduct = Permission::create([
                'name' => 'order-product',
                'display_name' => 'Order Product', // optional
                'description' => 'order existing product for sale', // optional
            ]);
        $createPost = Permission::create([
                'name' => 'create-post',
                'display_name' => 'Create Post', // optional
                'description' => 'Create post | artikel', // optional
            ]);

            $owner->attachPermissions([$deleteProduct, $editProduct, $createProduct]);
            $admin->attachPermissions([$createProduct, $editProduct]);
            $user->attachPermissions([$orderProduct, $createPost]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
