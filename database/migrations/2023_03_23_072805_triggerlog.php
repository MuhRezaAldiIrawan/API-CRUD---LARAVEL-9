<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER update_stock AFTER UPDATE ON `barangs` FOR EACH ROW

        BEGIN

           INSERT INTO `logbarang` (`waktu`,`nama_barang`,`harga`,`jumlah`) VALUES (now(),new.nama_barang,new.harga,new.stock);

        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `update_stock`');
    }
};
