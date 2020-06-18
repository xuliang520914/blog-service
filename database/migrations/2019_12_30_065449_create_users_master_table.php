<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->index('uuid');
            $table->string('expired_at')->default(0)->index('expired_at')->comment('失效时间');
            $table->string('effected_at')->default(0)->index('effected_at')->comment('有效时间');
            $table->timestamps();
            # $table->datetime();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_master');
    }
}
