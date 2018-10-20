<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminHasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_has_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id')->comment('管理员id');
            $table->unsignedInteger('role_id')->comment('角色管理');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_has_roles');
    }
}
