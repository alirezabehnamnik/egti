@if ($drm == "steam")
 Steam khare
@elseif ($drm == "uplay")
 Uplay khare
@elseif ($drm == "epicgames")
 Epicgames khare
@elseif ($drm == "riot")
 Riot khare
@else

@php
  dd("Error | 404 Not found");
@endphp

@endif
