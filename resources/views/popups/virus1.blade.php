@extends('template.popuptemplate')

@section('style')
body {background-color:red;}
@endsection

@section('popup')
    <div class="row bg-white">
        <div class="col-sm text-center mb-3">

            <div>Microsoft Help and Support provides support for Microsoft Products</div>

            <div style="margin-top:2em;">                                
                <h5 class="font-weight-bold"><img src="images/uac.png" width="32px">(<span style="color:red;">1</span>) System Virus Warning:</h5>
            </div>

            <div class="text-danger">
                <h1 class="font-weight-bold"><img src="images/handstop.png" width="48px">Your Computer May Have A VIRUS!</img></h1>
            </div>

            <div class="row">
                <div class="col-sm text-center">
                    <b>Your Location:</b>
                    <br>
                    <span class="font-weight-bold" style="color:red;">Compromised</span>
                </div>

                <div class="col-sm text-center">
                    <b>Your IP Address:</b>
                    <br>
                    <span class="font-weight-bold" style="color:red;">Compromised</span>
                </div>

                <div class="col-sm text-center">
                    <b>Date:</b>
                    <br>
                    {{ date('l, F d, Y') }}
                </div>
            </div>
        </div>        
    </div>
    <div class="row" style="margin-top: .5em;">
        <div class="col-sm bg-white mr-1" style="padding:2em;">
            <h1>What to do:</h1>
            <p>
                <span style="font-size:2em;">Call <span style="background-color:yellow;">{{ $phonenumber }}</span> immediately (toll-free)</span> for assistance on how to remove malicious pop-ups and <span>VIRUSES</span>. This call is prioritized and 100% free.
            </p>
            <h1>About the threat:</h1>
            <p>
                Seeing these pop-up means that you may have MALWARE / adware on your computer which puts the security of your personal data at a serious risk.
                We strongly advise you call <span style="background-color:yellow;">{{ $phonenumber }}</span> (toll-free) immediately and get your computer fixed
                before you continue using the internet, especially for watching movies and shows.
            </p>            
        </div>
        <div class="col-sm ml-1" style="background-color:#FAA; padding:2em;">
            <p style="text-align:center;" class="font-weight-bold">
                Possible network damages from potential threats: <span style="font-size:2em; color:red;">UNKNOWN</span>
            </p>
            <p>
                <h2>Data exposed to risk:</h2>
            </p>
            <p>
                <ol class="font-weight-bold">
                    <li>Your credit card details and banking information</li>
                    <li>Your e-mail passwords and other account passwords</li>
                    <li>Your Facebook, Skype, AIM, ICQ, and other chat logs</li>
                    <li>Your private photos, family photos and other sensitive files</li>
                    <li>Your webcam could be accessed remotely by stalkers with a VPN file</li>
                </ol>
            </p>
            <p class="text-center">
                <span class="font-weight-bold" style="background-color:yellow;">Call {{ $phonenumber }} Now!</span>
            </p>
        </div>
    </div>
@endsection

@section('jscripts')
<script>    
    function startScripts()
    {
        setTimeout(warning,3000);
    }
    
    function warning()
    {
        var text = "Microsoft Detected Security Error, Due to Suspicious Activity Found On Your Computer.  Contact Microsoft Certified Live Technicians {{ $phonenumber }} (Toll Free)";
        alert(text);
        warning();
    }
</script>
@endsection