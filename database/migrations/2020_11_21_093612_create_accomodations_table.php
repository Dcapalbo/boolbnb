<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id');

            $table->string('title',300);
            $table->string('description',800);
            $table->string('cover_image');
            $table->string('slug',300)->unique();
            $table->string('country',100);
            $table->string('region',100);
            $table->string('city',100);
            $table->string('address',100);
            $table->string('zip_code',15);

            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('toilets');
            $table->unsignedSmallInteger('square_meters');

            $table->unsignedDecimal('price',6,2);

            $table->float('latitude',9,5);
            $table->float('longitude',9,5);

            $table->boolean('visible')->default(true);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('accomodation_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
