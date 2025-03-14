{!! get_metas() !!}
<meta name="csrf-token" content="{{ csrf_token() }}">
@if (trim($favicon = $this->theme->favicon, '/'))
    <link href="{{ uploads_url($favicon) }}" rel="shortcut icon" type="image/ico">
@else
    {!! get_favicon() !!}
@endif
<title>{{ sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')) }}</title>
@if ($this->page->description)<meta name="description" content="{{ $this->page->description }}">@endif
@if ($this->page->keywords)<meta name="keywords" content="{{ $this->page->keywords }}">@endif
@styles
@if (!empty($this->theme->custom_css))
    <style type="text/css" id="custom-css">{!! $this->theme->custom_css !!}</style>
@endif
