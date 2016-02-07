<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    protected $fillable = ['uf','Cidade','Bairro','Rua','Numero'];
    public $timestamps = false;



}
