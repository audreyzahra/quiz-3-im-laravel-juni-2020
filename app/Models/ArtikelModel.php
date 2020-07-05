<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        unset($data["_token"]);
        $insert_pertanyaan = DB::table('pertanyaan')->insert($data);

        return $insert_pertanyaan;
    }
}

?>
