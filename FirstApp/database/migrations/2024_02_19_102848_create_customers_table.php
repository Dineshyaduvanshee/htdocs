<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('customers', function (Blueprint $table) {
    //         $table->id('cuatomer_id');//cuatomer id
    //         $table->string('name',60);
    //         $table->string('email',100);
    //         $table->enum('gender',["M","F","O"]);
    //         $table->text('address');
    //         $table->date('dob')->nullable();
    //         $tabe->string('password');
    //         $table->boolean('status')->default(1);
    //         $table->integer('points')->default(0);
    //         $table->timestamps();//create at or update at

    //     });
    // }

    // ...
public function up()
{
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email', 100);
        $table->enum('gender', ["M", "F", "O"]);
        $table->text('address');
        $table->date('dob');
        $table->string('password');
        $table->boolean('status')->default(1);
        $table->integer('points')->default(0);
        $table->timestamps(); // created_at and updated_at
    });
}
// ...

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
