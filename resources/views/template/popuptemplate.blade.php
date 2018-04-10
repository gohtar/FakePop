<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/app.css" rel="stylesheet" type="text/css">

        <title>{{ $title }}</title>
        <style>
            @yield('style')
        </style>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </head>    
    <body>
        <div class="container">
            @yield('popup')
        </div>

        <div id="educationalModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">WARNING</h5>                        
                    </div>
                    <div class="modal-body">
                        <p>
                            <span class="font-weight-bold" style="color:red;">WARNING:</span> This is not a real security warning, this is meant for educational and baiting purposes only.
                        </p>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK Got It</button>
                    </div>
                </div>
            </div>
        </div>

        @yield('jscripts')

        <script>
            $(document).ready(function(){                
                $('#educationalModal').modal('show');

                $('#educationalModal').on('hidden.bs.modal', function(e){
                    if (typeof startScripts === 'function') {                        
                        startScripts();
                    }
                });                
            });

            window.onbeforeunload = function() {
                return false;
            }
        </script>
    </body>
</html>