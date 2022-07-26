<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->timestamps();
            $table->softDeletes();
            $table->string('group_id', 32);
            $table->string('name');
            $table->text('address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('profile_picture');

            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
