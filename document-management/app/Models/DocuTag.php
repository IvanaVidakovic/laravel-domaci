<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\EloquentCompositeKey\HasCompositePrimaryKey;

class DocuTag extends Model
{
    use HasFactory,HasComositePrimaryKey;

    protected $primaryKey = ['docId_fk', 'tagId_fk'];
    
    public function document(){
        return $this->belongsTo(Document::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
