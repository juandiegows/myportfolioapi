<?php
namespace App\Http\Livewire;

use App\Models\User;
use App\Models\WorkExperience;
use Carbon\Carbon;
use Livewire\Component;

class Resume extends Component
{
    public User $user;
    public $lang;
    public $socialMedias;
    public $workExperiences;
    public $workExperiencesSecundary;
    public $topics;
    public $educations;
    public function mount(User $user, $lang)
    {
        $this->user            = $user;
        $this->lang            = $lang;
        $this->workExperiences = $user->works
            ->sortByDesc(function ($workItem) {
                $latestChild = $workItem->workExperience()->orderByDesc('end_date')->first();
                return $latestChild ? $latestChild->end_date : ($workItem->end_date ?? now());
            })
            ->where('is_secundary', false)
            ->whereNull('parent');

        $this->workExperiencesSecundary = $user->works->where('is_secundary', true)->sortByDesc('start_date');
        $this->socialMedias             = $user->social_medias()->where('is_principal', true)->get();
        $this->topics                   = $user->skills;
        $this->educations               = $user->educations->where('is_higher_education', true)->sortByDesc('start_date');
    }

    public function render()
    {
        return view('livewire.resume', [
            'user' => $this->user,
            'lang' => $this->lang,
        ]);
    }

    public function getFormattedDurationTextForWorkExperience(WorkExperience $workExperience)
    {
        $text  = $this->getFormattedDurationText($workExperience->start_date, $workExperience->end_date);
        $works = $workExperience->workExperience;
        if (count($works) > 0) {
            foreach ($works as $work) {
                $text .= "<br>" . $this->getFormattedDurationText($work->start_date, $work->end_date);
            }
        }

        return $text;
    }
    public function getFormattedDurationText($startDate, $endDate = null)
    {
        $startDate = Carbon::parse($startDate);
        $endDate   = $endDate ? Carbon::parse($endDate) : now();

        // Obtener total de días entre las fechas
        $totalDays = $startDate->diffInDays($endDate);

        // Convertir días a años, meses y días restantes
        $years         = floor($totalDays / 365);
        $remainingDays = $totalDays % 365;
        $months        = floor($remainingDays / 30);

        // Determinar traducciones según el idioma
        $yearLabel  = $this->lang == 'es' ? 'Años' : 'Years';
        $monthLabel = $this->lang == 'es' ? 'Meses' : 'Months';

        // Formatear fechas
        $formattedStartDate = $startDate->translatedFormat('M Y');
        $formattedEndDate   = $endDate->isToday()
        ? ($this->lang == 'es' ? 'Actual' : 'Present')
        : $endDate->translatedFormat('M Y');

        // Construir texto de duración
        $duration = [];
        if ($years > 0) {
            $duration[] = "$years $yearLabel";
        }
        if ($months > 0) {
            $duration[] = "$months $monthLabel";
        }

        return "{$formattedStartDate} - {$formattedEndDate} (" . implode(' ', $duration) . ")";
    }

}
