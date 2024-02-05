
<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="65ac9db11febf13351b88500" data-wf-site="65870aa8e22b9fb1eeeb61fd">
  <head>
    <meta charset="utf-8" />
    <title>home</title>
    <meta content="home" property="og:title" />
    <meta content="home" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700", "Inter:200,300,regular,500,600,700,800", "Roboto:300,regular,500,700"]
        }
      });
    </script>
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link href="" rel="shortcut icon" type="image/x-icon" />
    <link href="" rel="apple-touch-icon" />
  </head>
  <body class="body-4">
    @include('frontend.body.header')
    @yield('frontend_body')
    @include('frontend.body.footer')



    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65870aa8e22b9fb1eeeb61fd" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}" type="text/javascript"></script>
  </body>
</html>