<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@if(!empty($meta_title)){{ $meta_title }} @else Veggi Mart @endif </title>

        @if(!empty($meta_description)) <meta name="description" content="{{ $meta_title }} | All in One Grocery"> 
        @else <meta name="description" content="Veggi Mart | buy grocery online"> @endif

        @if(!empty($meta_keywords))<meta name="keywords" content="{{ $meta_keywords }} | Grocery Shop"> 
        @else <meta name="keywords" content="Veggi Mart | buy grocery online"> @endif        
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/frontend_images/favicon.png') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/select2-bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/datatables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/owl.theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/demo.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/passtrength.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/easyzoom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend_css/hover.css') }}">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    </head>
    <body class="p-0">

        @include('layouts/frontLayout/front_header')

        @yield('content')

        @include('layouts/frontLayout/front_footer')

        <script src="{{ asset('js/frontend_js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/frontend_js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/frontend_js/select2.min.js') }}"></script>
        <script src="{{ asset('js/frontend_js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/frontend_js/custom.js') }}"></script>
        <script src="{{ asset('js/frontend_js/datatables.min.js') }}"></script>
        
        <script src="{{ asset('js/frontend_js/passtrength.js') }}"></script>
        <script src="{{ asset('js/frontend_js/main.js') }}"></script>
        <script src="{{ asset('js/frontend_js/easyzoom.js') }}"></script>
        <script src="{{ asset('js/frontend_js/hc-offcanvas-nav.js') }}"></script>
        <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script> -->
        <script>
            $(document).ready(function() {
                $('.datatabel').DataTable();
            } );
        </script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3d5ca6307b1073"></script>
        
        <script>
          (function($) {
            var $main_nav = $('#main-nav');
            var $toggle = $('.toggle');

            var defaultOptions = {
              disableAt: false,
              customToggle: $toggle,
              levelSpacing: 40,
              navTitle: 'All Categories',
              levelTitles: true,
              levelTitleAsBack: true,
              pushContent: '#container',
              insertClose: 2
            };

            // call our plugin
            var Nav = $main_nav.hcOffcanvasNav(defaultOptions);

            // add new items to original nav
            $main_nav.find('li.add').children('a').on('click', function() {
              var $this = $(this);
              var $li = $this.parent();
              var items = eval('(' + $this.attr('data-add') + ')');

              $li.before('<li class="new"><a href="#">'+items[0]+'</a></li>');

              items.shift();

              if (!items.length) {
                $li.remove();
              }
              else {
                $this.attr('data-add', JSON.stringify(items));
              }

              Nav.update(true);
            });

            // demo settings update

            const update = (settings) => {
              if (Nav.isOpen()) {
                Nav.on('close.once', function() {
                  Nav.update(settings);
                  Nav.open();
                });

                Nav.close();
              }
              else {
                Nav.update(settings);
              }
            };

            $('.actions').find('a').on('click', function(e) {
              e.preventDefault();

              var $this = $(this).addClass('active');
              var $siblings = $this.parent().siblings().children('a').removeClass('active');
              var settings = eval('(' + $this.data('demo') + ')');

              update(settings);
            });

            $('.actions').find('input').on('change', function() {
              var $this = $(this);
              var settings = eval('(' + $this.data('demo') + ')');

              if ($this.is(':checked')) {
                update(settings);
              }
              else {
                var removeData = {};
                $.each(settings, function(index, value) {
                  removeData[index] = false;
                });

                update(removeData);
              }
            });
          })(jQuery);
        </script>
    </body>
</html>