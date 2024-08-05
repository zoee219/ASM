<?php

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
       //  Schema::table('users', function(Blueprint $table){
      //       $table->enum('role', ['1', '2'])->default('2')->comment('1: Admin, 2: User');// sửa trường dữ liệu đã có sẵn
        //     $table->string('votes', 20); //tạo mới thêm 1 trường dữ liệu 
        //     $table->dropColumn(['view']);
        //     // $table->renameColumn('price', 'product_price'); // sửa dữ liệu cột đã có sặn cụ thể là tên cột
       //  });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::table('users', function(Blueprint $table){
          //  $table->dropColumn('role', ['1', '2'])
        // Schema::table('products', function(Blueprint $table){
        //     $table->string('name', 250)->change(); //sửa lại thành 250 số
        //     $table->dropColumn(['votes']); // xóa cột
        //     $table->integer('view');
        //     // $table->renameColumn('product_price', 'price'); // đổi lại tên
        // });
    }
};
