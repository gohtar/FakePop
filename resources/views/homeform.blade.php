<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fake Popup Maker</title>       

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .title {
                font-size: 3em;
            }

            .popup-setting
            {
                display:none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            
                <div class="row">
                    <div class="col-sm title text-center">
                        Display a Fake Tech Scammer Popup
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <form action="/" id="createPopupForm" method="post" target="_blank">
                            @csrf

                            <div class="form-group">
                                <label for="popupOptions">Popup Type</label>
                                <select class="form-control" id="popupOptions" name="popup_id" required>
                                @foreach($popup_options as $id => $option_text)
                                    <option value="{{$id}}">{{$option_text}}</option>
                                @endforeach
                                </select>                                
                            </div>
                            <hr>
                            <fieldset>
                                <label class="font-weight-bold">Common Settings</label>
                                
                                <div class="form-group">
                                    <label for="popupTitleInput">Popup Title (title of tab or window)</label>
                                    <input type="text" class="form-control" id="popupTitleInput" name="popupTitle" value="">
                                </div>

                                <div class="form-group">
                                    <label for="calledPhoneNumberInput">Called Phone Number (Type it exactly how you want it to appear)</label>
                                    <input type="text" class="form-control" id="calledPhoneNumberInput" name="scammernumber">
                                </div>

                            </fieldset>
                            <hr>
                            <fieldset>
                                <label class="font-weight-bold">Popup Specific Settings</label>

                                <div class="form-group popup-setting" id="errorCodeInputGroup">
                                    <label for="errorCodeTextInput">Error Code</label>
                                    <input type="text" class="form-control" id="errorCodeTextInput" name="errorcode">
                                </div>
                            </fieldset>                            
                            <hr>
                            <button type="submit" class="btn btn-primary">show popup</button>

                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <span class="font-weight-bold">Make sure to delete this page from your internet history.</span>
                    </div>
                </div>                

            </div>
        </div>
        <script src="/js/app.js"></script>        
    </body>
</html>