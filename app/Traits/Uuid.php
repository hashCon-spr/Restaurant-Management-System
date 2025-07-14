<?php 
namespace App\Traits;

use Illuminate\Support\Str;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;
use Ramsey\Uuid\Uuid as Generator;

trait Uuid
{
    // protected static function bootUuid()
    // {
    //     static::creating(function ($model) {
    //         if (!$model->getKey()) {
    //             $model->{$model->getKeyName()} = (string) Str::uuid();
    //         }
    //     });
    // }

    // public function getIncrementing()
    // {
    //     return false;
    // }

    // public function getKeyType()
    // {
    //     return 'string';
    // }

    protected static function bootUuid()
    {

        static::creating(function ($model) {
            try {
                $model->uuid = Generator::uuid4()->toString();
            } catch (UnableToBuildUuidException $e) {
                abort(500, $e->getMessage());
            }
        });
    }

    public static function findByUuid($uuid)
    {
        return static::where('uuid', '=', $uuid)->first();
    }
}