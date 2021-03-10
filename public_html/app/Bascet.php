<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bascet extends Model
{
    protected $fillable = [
        'p_name', 'p_id', 'b_quantity', 'p_price', 'b_sum', 'c_id', 'status_id', 'r_id', 'unit_id',
    ];

    protected $guarded = ['id'];

    //public function create_project($data)
    //{
       //  $p_name = $data['p_name'];
       //  $p_id = $data['p_id'];
      //  $b_quantity = $data['b_quantity'];
      //  $p_price = $data['p_price'];
      //  $b_sum = $data['b_sum'];
      //  $c_id = $data['c_id'];
      //  $status_id = $data['status_id'];
       // $r_id = $data['r_id'];
      //  $unit_id = $data['unit_id'];

     //   return DB::insert('insert into products (p_name, p_id, b_quantity, p_price, b_sum, c_id, status_id, r_id, unit_id) values (?, ?, ?, ?, ?, ?,?,?,?)', [$p_name, $p_id, $b_quantity, $p_price, $b_sum, $c_id, $status_id, $r_id, $unit_id]);
  //  }



}
