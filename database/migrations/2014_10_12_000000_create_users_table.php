<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name' => "Kis Mária",'email' => 'kismari@huhu.com', "password"=> "kismarika1111"]);
        User::create(['name' => "Tóth Tibor",'email' => 'tothtibi@huhu.com', "password"=> "totht1b1"]);
        User::create(['name' => "Vértes Pista",'email' => 'v.pista@huhu.com', "password"=> "vertespityu21"]);
        User::create(['name' => "Vörös Dominik",'email' => 'vorosdoma@huhu.com', "password"=> "vorosdoma12121212"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
