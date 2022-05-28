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
           // $table->string('name');
            $table->string('Nombre_usuario')->unique();//para que el email o el dato  sea unico
            //$table->timestamp('email_verified_at')->nullable();timestamp se utiliza para guardar fechas y verifica primero el email y si le agrega la fecha de verificacion Nullable Para que cuando el campo quede vacio no mande error
            $table->string('password');
            //tipo varchar con nombre de columna password
            //$table->rememberToken();te crea una columna tipo varchar en esta columna se va almacenar un token mienstras el usuario dejase la
            $table->timestamps();//created_at updated_at aqui crea esas dos columna de tipo timesTamp en creat_at se almacena la hora y la fecha en la que se creo ese registro y en update_at la hora y la fecha que se modifico ese registro
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
