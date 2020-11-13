<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function diary()
    {
        return $this->hasOne(Diary::class);
    }

    public function eraser()
    {
        return $this->hasOne(Eraser::class);
    }

    public function pen()
    {
        return $this->hasOne(Pen::class);
    }

    public function getDiariesTakenAttribute()
    {
        return $this->diary->diary_taken;
    }

    public function getErasersTakenAttribute()
    {
        return $this->eraser->eraser_taken;
    }

    public function getPensTakenAttribute()
    {
        return $this->pen->pen_taken;
    }

    public function getTotalItemsTakenAttribute()
    {
        return $this->diaries_taken + $this->erasers_taken + $this->pens_taken;
    }


}
