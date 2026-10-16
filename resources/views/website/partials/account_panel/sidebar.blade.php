<div class="account__left--sidebar">
    <h2 class="account__content--title h3 mb-20">{{ __('sidebar.myprofile') }}</h2>
    <ul class="account__menu">
        <li class="account__menu--list"><a href="{{ route('user.account_panel', config('app.locale')) }}">{{ __('sidebar.dashboard') }}</a></li>
        <li class="account__menu--list"><a href="{{ route('my_addresses', config('app.locale')) }}">{{ __('sidebar.address') }}</a></li>
        <li class="account__menu--list"><a href="{{ route('shipments.get_create', config('app.locale')) }}">{{ __('sidebar.newship') }}</a></li>
        <li class="account__menu--list"><a href="{{ route('user.logout' , config('app.locale')) }}">{{ __('sidebar.logout') }}</a></li>
    </ul>
</div>
