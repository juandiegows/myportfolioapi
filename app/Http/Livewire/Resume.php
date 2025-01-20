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

        // Calcular la diferencia en meses
        $months = $startDate->diffInMonths($endDate);

                                                          // Ajustar si el día del final está cerca del final del mes
        if ($endDate->day >= $endDate->daysInMonth - 5) { // Ajustar el umbral si es necesario
            $months++;
        }

        // Calcular años y meses restantes
        $years           = intdiv($months, 12);
        $remainingMonths = $months % 12;

        // Formato de las fechas
        $formattedStartDate = $startDate->translatedFormat('M Y');
                                                                           // Determinar la traducción de "Actual" según el idioma
        $actualLabel = $this->lang == 'es' ? __('Actual') : __('Current'); // Ajusta según las traducciones en tu aplicación

        // Si la fecha final es hoy, la muestra como 'Actual' o 'Current' dependiendo del idioma
        $formattedEndDate = $endDate->isToday() ? $actualLabel : $endDate->translatedFormat('M Y');

        // Determinar las traducciones según el idioma
        $yearLabel  = $this->lang == 'es' ? __('año') : __('year');
        $monthLabel = $this->lang == 'es' ? __('mes') : __('month');

        // Formatear la duración con traducción
        $duration = [];
        if ($years > 0) {
            $duration[] = $years . ' ' . $yearLabel . ($years > 1 ? 's' : '');
        }
        if ($remainingMonths > 0) {
            $duration[] = $remainingMonths . ' ' . $monthLabel . ($remainingMonths > 1 ? ($this->lang == 'es' ? __('es') : __('s')) : '');
        }

        return "{$formattedStartDate} - {$formattedEndDate} (" . implode(' ', $duration) . ")";
    }
}
