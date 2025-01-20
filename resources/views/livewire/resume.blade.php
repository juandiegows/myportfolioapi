<div>
    <link rel="stylesheet" href="css/cv.css" />
    <div class="section-container">
        <table class="table">
            <tr class="row">
                <td class="title">
                    {{ $user->name }} {{ $user->last_name }} -
                    @if($lang =='es')
                    {{ $user->spanish_professional_title }}
                    @else
                    {{ $user->professional_title }}
                    @endif</td>
            </tr>
            <tr class="row">
                <td class="info">{{ $user->address }} | {{ $user->email }} | {{ $user->phone_number }} |

                    @foreach ($socialMedias as $socialMediasItem)
                    <a href="{{  $socialMediasItem->link }}"><img class="red" src="{{ $socialMediasItem->socialMedia->link_image }}"></a>
                    @endforeach
                </td>
            </tr>
        </table>

        <h2 class="title_CV">
            @if($lang =='es')
            Perfil Profesional
            @else
            PROFESSIONAL PROFILE
            @endif
        </h2>

        <p class="paragraph">
            @if($lang == 'es')
            {{ $user->spanish_professional_profile }}
            @else
            {{ $user->professional_profile }}
            @endif
            <a class="link" href="https://juandiegows.com/" target="_blank">juandiegows.com</a>
        </p>
    </div>
    <div class="section-container">
        <h2 class="title_CV">
            @if($lang =='es')
            EXPERIENCIA
            @else
            EXPERIENCE
            @endif
        </h2>
        @foreach ($workExperiences as $workItem)
        <div style="margin-bottom: 1.5rem;">
            <table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                <tr>
                    <td style="width: 60%; text-align: left;">
                        <h3 style="margin: 0; font-size: 1.1rem;">
                            {{ $workItem->business }} |
                            @if($lang == 'es')
                            {{ $workItem->profession->name_spanish }}
                            @else
                            {{ $workItem->profession->name }}
                            @endif
                        </h3>
                    </td>
                    <td style="width: 40%; text-align: right; font-size: 0.9rem; color: #555;">
                        <p style="margin: 0; font-size: 1.1rem;">
                            {!! $this->getFormattedDurationTextForWorkExperience($workItem) !!}
                        </p>
                    </td>
                </tr>
            </table>

            <p class="paragraph">
                @if($lang == 'es')
                {!! $workItem->spanish_description !!}
                @else
                {!! $workItem->description !!}
                @endif
            </p>
        </div>
        @endforeach
    </div>

    <div class="section-container">
        <h2 class="title_CV">
            @if($lang =='es')
            OTRAS EXPERIENCIAS
            @else
            OTHER EXPERIENCES
            @endif
        </h2>

        @foreach ($workExperiencesSecundary as $workItem)
        <div>
            <table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                <tr>
                    <td style="width: 75%; text-align: left;">
                        <p class="other_experience">
                            {{ $workItem->business }} |
                            @if($lang == 'es')
                            {{ $workItem->profession->name_spanish }}
                            @else
                            {{ $workItem->profession->name }}
                            @endif
                        </p>
                    </td>
                    <td style="width: 25%; text-align: right; font-size: 0.9rem; color: #555;">
                        <p class="other_experience">
                            {{ \Carbon\Carbon::parse($workItem->start_date)->translatedFormat('M Y') }} -
                            {{ \Carbon\Carbon::parse($workItem->end_date ?? now())->translatedFormat('M Y') }}
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>


</div>
