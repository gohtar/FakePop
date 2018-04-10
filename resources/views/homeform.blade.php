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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 3em;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            
                <div class="row">
                    <div class="col-sm title">
                        Fake Tech Scammer Popup
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <form action="/" method="post" target="_blank">
                            @csrf
                            
                            <div class="form-group">
                                <label for="popupTitleInput">Popup Title (title of tab or window)</label>
                                <input type="text" class="form-control text-center" id="popupTitleInput" name="popupTitle" value="Windows Firewall Warning">
                            </div>
                            
                            <div class="form-group">
                                <label for="calledPhoneNumberInput">Called Phone Number (Type it exactly how you want it to appear)</label>
                                <input type="text" class="form-control text-center" id="calledPhoneNumberInput" name="scammernumber">
                            </div>

                            <div class="form-group">
                                <label for="errorCodeTextInput">Error Code (if any)</label>
                                <input type="text" class="form-control text-center" id="errorCodeTextInput" name="errorcode">
                            </div>

                            <div class="form-group">
                                <label for="popupOptions">Popup Type</label>
                                <select id="popupOptions" name="popup_id">
                                @foreach($popup_options as $id => $option_text)
                                    <option value="{{$id}}">{{$option_text}}</option>
                                @endforeach
                                </select>                                
                            </div>
                            
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
        <script src="js/js.app">
    </body>
</html>