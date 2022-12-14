<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Municipio;

class CreateUsersTable extends Migration
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
            $table->string('correo', 45)->unique();
            $table->string('password', 45);
            $table->string('nombre', 45);
            $table->string('apellido1', 45);
            $table->string('apellido2', 45)->nullable();
            $table->boolean('estatus');
            $table->foreignIdFor(Municipio::class);
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
}
