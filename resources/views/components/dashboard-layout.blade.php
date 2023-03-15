<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre ?? "Festival AutoPalooza 2023" }}</title>
    <link rel="icon" type="image/png" href="/storage/logo.png"/>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/dashboard/assets/plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard/assets/plugins/pace/pace-theme-big-counter.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard/assets/css/main-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard/assets/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

    {{ $slot }}

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('css/dashboard/assets/plugins/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/plugins/pace/pace.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/scripts/siminta.js') }}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{ asset('css/dashboard/assets/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('css/dashboard/assets/scripts/dashboard-demo.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js') }}"></script>
    <script type="text/javascript">

         $('.show_confirm').click(function(event) {
              var form =  $(this).closest("form");
              var name = $(this).data("name");
              event.preventDefault();
              swal({
                  title: `Are you sure you want to delete this record?`,
                  text: "If you delete this, it will be gone forever.",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  form.submit();
                }
              });
          });

    </script>
</body>
</html>
