<div class="grid-navigation-desktop is-desktop-up">
    <a class="navigation neu-effect {{ (request()->is('survey/forms')) ? 'nav-active' : '' }}" href="{{ route('forms.index') }}">
        <span>Forms</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/family-information')) ? 'nav-active' : '' }}" href="{{ route('form.family-info') }}">
        <span>Family Information</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/family-members')) ? 'nav-active' : '' }}" href="{{ route('form.family-members') }}">
        <span>Family Members Information</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/health-information')) ? 'nav-active' : '' }}" href="{{ route('form.health-info') }}">
        <span>Health Information</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/environment-sanitation')) ? 'nav-active' : '' }}" href="{{ route('form.environment-sanitation') }}">
        <span>Environment and Sanitation</span>        
    </a>
</div>

<div class="grid-navigation-mobile is-mobile-only">
    <a class="navigation neu-effect {{ (request()->is('survey/forms/family-information')) ? 'nav-active' : '' }}" href="{{ route('forms.index') }}">
        <span>Forms</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/family-information')) ? 'nav-active' : '' }}" href="{{ route('form.family-info') }}">
        <span>Family Information</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/ffamily-members')) ? 'nav-active' : '' }}" href="{{ route('form.family-members') }}">
        <span>Family Members Information</span>
    </a>
    <a class="navigation neu-effect {{ (request()->is('survey/forms/health-information')) ? 'nav-active' : '' }}" href="{{ route('form.health-info') }}">
        <span>Health Information</span>
    </a>
    <a class="navigation neu-effect nav-1 {{ (request()->is('survey/forms/environment-sanitation')) ? 'nav-active' : '' }}" href="{{ route('form.environment-sanitation') }}">
        <span>Environment and Sanitation</span>        
    </a>
</div>