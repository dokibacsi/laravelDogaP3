<?php

use App\Models\Flight;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('flight_id');
            $table->date('date');
            $table->foreignId('airline_id')->references('airline_id')->on('airlines');
            $table->integer('limit');
            $table->timestamps();
        });


        Flight::create(
            [
                "date" => "2002-08-26",
                "airline_id" => 2,
                "limit" => 50
            ]
        );
        Flight::create(
            [
                "date" => "2003-02-10",
                "airline_id" => 1,
                "limit" => 50
            ]
        );
        Flight::create(
            [
                "date" => "2003-04-17",
                "airline_id" => 3,
                "limit" => 50
            ]
        );
        Flight::create(
            [
                "date" => "2002-04-17",
                "airline_id" => 3,
                "limit" => 50
            ]
        );
        Flight::create(
            [
                "date" => "2002-03-20",
                "airline_id" => 2,
                "limit" => 50
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
