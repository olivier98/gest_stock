<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>

    <body>
        <div id="wrapper">
            @include('layouts.partials.menu')


            @yield('content')



            </div>
            <div class="footer" style="margin-bottom: 0px">
                <div class="pull-right">
                    Web design by <strong>Olivier KAMENI</strong>
                </div>
                <div>
                    <strong>Copyright</strong> BBF &copy; 2020-{{date('Y')}}
                </div>
            </div>
        </div>

        {{-- @include('layouts.partials.footerScript') --}}
    </body>
</html>
