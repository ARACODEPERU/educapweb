<?php

namespace Modules\Academic\Entities;

use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AcaStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_code',
        'person_id',
        'new_student'
    ];

    protected static function newFactory()
    {
        return \Modules\Academic\Database\factories\AcaStudentFactory::new();
    }

    public function person(): HasOne
    {
        return $this->hasOne(Person::class, 'id', 'person_id');
    }
    public function registrations()
    {
        return $this->hasMany(AcaCapRegistration::class, 'student_id');
    }
}
