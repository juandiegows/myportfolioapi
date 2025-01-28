<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Event",
 *     title="Event",
 *     description="Event object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         format="int64",
 *         description="Event ID"
 *     ),
 *     @OA\Property(
 *         property="date",
 *         type="string",
 *         format="date",
 *         description="Event date"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         description="Event title in English"
 *     ),
 *     @OA\Property(
 *         property="spanish_title",
 *         type="string",
 *         description="Event title in Spanish"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Event description in English"
 *     ),
 *     @OA\Property(
 *         property="spanish_description",
 *         type="string",
 *         description="Event description in Spanish"
 *     ),
 *     @OA\Property(
 *         property="url",
 *         type="string",
 *         description="URL associated with the event (image or link)"
 *     ),
 *     @OA\Property(
 *         property="type",
 *         type="string",
 *         description="Type of content (e.g., image, video)"
 *     ),
 *     @OA\Property(
 *         property="is_initial",
 *         type="boolean",
 *         description="Indicates whether the event is initial"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Date and time when the event was created"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Date and time when the event was last updated"
 *     ),
 *     @OA\Property(
 *         property="url_full",
 *         type="string",
 *         description="Complete URL generated from the base URL and the event's URL"
 *     )
 * )
 */
class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'title', 'spanish_title', 'description', 'spanish_description', 'url', 'type', 'is_initial'
    ];

    protected $appends = ['url_full'];
    public function getUrlFullAttribute()
    {
        $urlbase = url('/');

        if (preg_match('/^https?:\/\//', $this->url)) {
            return $this->url;
        }

        return $urlbase . '/' . ltrim($this->url, '/');
    }
}
