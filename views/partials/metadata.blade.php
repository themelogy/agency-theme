{!! seo_helper()->render() !!}

<link rel="stylesheet" href="{{ mix('/themes/agency/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ mix('/themes/agency/css/animations.css') }}">
<link rel="stylesheet" href="{{ mix('/themes/agency/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ mix('/themes/agency/css/main.css') }}">
{!! Theme::script('js/vendor/modernizr-2.6.2.min.js') !!}

<!--[if lt IE 9]>
{!! Theme::script('js/vendor/html5shiv.min.js') !!}
{!! Theme::script('js/vendor/respond.min.js') !!}
{!! Theme::script('js/vendor/jquery-1.12.4.min.js') !!}
<![endif]-->