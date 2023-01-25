<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            
            $table->string('q1p')->default(null);
            $table->string('q2p')->default(null);
            $table->string('q3p')->default(null);
            $table->string('q4p')->default(null);
            $table->string('q5p')->default(null);
            $table->string('q6p')->default(null);
            $table->string('q7p')->default(null);
            $table->string('q8p')->default(null);

            // $table->string('q1')->default(null);
            // $table->string('q2')->default(null);
            // $table->string('q3')->default(null);
            // $table->string('q4')->default(null);
            // $table->string('q5')->default(null);
            // $table->string('q6')->default(null);
            // $table->string('q7')->default(null);
            // $table->string('q8')->default(null);
            
            $table->string('type')->default('0');
            $table->string('match_id')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
