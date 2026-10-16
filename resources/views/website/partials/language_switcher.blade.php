<div class="language__currency d-none d-lg-block">
    <ul class="d-flex align-items-center">
        <li class="language__currency--list">
            <a class="language__switcher text-white" href="#">
                <img class="language__switcher--icon__img" src="{{ asset('img/icon/language-icon.png') }}" alt="currency" style="display: none;">
                @foreach($available_locales as $locale_name => $available_locale)
                        @if($available_locale === $current_locale)
                        <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>

                        @endif
                @endforeach

                <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                    <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                </svg>
            </a>
            <div class="dropdown__language">
                <ul>

                    @foreach($available_locales as $locale_name => $available_locale)
                    <li class="language_items"><a class="language_text" href="{{ url('/') }}/language/{{ $available_locale }}">{{ $locale_name }}</a></li>
                    @endforeach

                </ul>
            </div>
        </li>
        <li class="language__currency--list">


                <span>{{ __('nav.language') }}</span>



        </li>
    </ul>
</div>
