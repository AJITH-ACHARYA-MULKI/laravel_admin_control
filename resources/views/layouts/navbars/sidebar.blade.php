<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <!-- <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a> -->
            <b class="simple-text logo-normal">{{ __('Dashboard') }}</b>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-bank"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                       <!--  <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li> -->
                    
            <li @if ($pageSlug == 'chat') class="active " @endif>
                <a href="/Chat">
                    <i class="tim-icons icon-chat-33"></i>
                    <p>{{ __('Chat') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'mypost') class="active " @endif>
                <a href="/Post">
                    <i class="tim-icons icon-image-02"></i>
                    <p>{{ __('My post') }}</p>
                </a>
            </li>


        </ul>
    </div>
</div>
