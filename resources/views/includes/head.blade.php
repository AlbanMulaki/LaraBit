<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf_token" content="{!! csrf_token() !!}" >
    <title> </title> <!-- Do Dynamic -->
    @yield('js-localization.head')

    <script>
      document.title = "{{ $title }}"
              ;
    </script>
    @include('includes.stylesheets')
</head>