<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfViewer extends Model
{
    protected $fillable = ['text'];

    public $timestamps = false;
}
