<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $Name
 *  @property string $Code
 *  @property int|null $Expiration
 */
class DocumentType extends Model
{
    use HasFactory;
}
