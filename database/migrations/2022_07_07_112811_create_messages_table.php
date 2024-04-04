<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
/* Run the migrations.
*
* @return void
*/
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->boolean('status')->default(0);//unread
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('conversation_id')->constrained('conversations')->cascadeOnDelete();
            $table->timestamps();
        });
    }

/* Reverse the migrations.
*
* @return void
*/
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
