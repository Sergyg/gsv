<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\Kontrahenty
 *
 * @property int $id
 * @property numeric $nip
 * @property int $reg
 * @property string $nazwa
 * @property string $czyvat
 * @property string $ulica
 * @property int $numdom
 * @property int $nummeszk
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereCzyvat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereNazwa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereNip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereNumdom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereNummeszk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereReg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereUlica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kontrahenty whereUpdatedAt($value)
 * @mixin \Eloquent
 */


class Kontrahenty extends Model
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'nip',
        'reg',
        'nazwa',
        'czyvat',
        'ulica',
        'numdom',
        'nummeszk',
    ];

}
