<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="OutstandingAchievement",
 *     title="Outstanding Achievement",
 *     description="Outstanding Achievement object representing achievements earned by a user",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         format="int64",
 *         description="Unique identifier for the achievement"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="The name of the outstanding achievement"
 *     ),
 *     @OA\Property(
 *         property="spanish_name",
 *         type="string",
 *         description="The name of the outstanding achievement in Spanish"
 *     ),
 *     @OA\Property(
 *         property="link",
 *         type="string",
 *         description="URL link related to the achievement"
 *     ),
 *     @OA\Property(
 *         property="date",
 *         type="string",
 *         format="date",
 *         description="The date when the achievement was earned"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the achievement record was created"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Timestamp when the achievement record was last updated"
 *     ),
 * )
 */
class OutstandingAchievement extends Model
{
    protected $table = 'outstanding_achievements';  
    use HasFactory;
}
