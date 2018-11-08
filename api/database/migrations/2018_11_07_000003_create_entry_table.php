<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'entry';

    /**
     * Run the migrations.
     * @table entry
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('categories_id');
            $table->integer('users_id');
            $table->string('description', 128)->nullable();
            $table->float('price')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('monthly_entry')->nullable();

            $table->index(["categories_id"], 'fk_entry_categories_expenses_idx');

            $table->index(["users_id"], 'fk_entry_users1_idx');
            $table->nullableTimestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
