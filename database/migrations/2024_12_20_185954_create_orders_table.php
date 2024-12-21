<?php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_kh')->nullable();
        $table->string('hoten');
        $table->string('email');
        $table->string('sdt');
        $table->string('diachi');
        $table->text('note')->nullable();
        $table->string('phuongthucthanhtoan');
        $table->integer('tongtien');
        $table->timestamps();
    });
}
