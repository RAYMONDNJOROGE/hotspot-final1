<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="hotspot">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>rayngerhotspot</title>
    
</head>

<!--Body Starts-->
<body style=" 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;">
    <div id="overlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    transition: opacity 0.3s ease;
    z-index: 999;"></div>
    <!--Header-->
    <header 
    style="
    position: fixed; 
    top: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    height: 35px;
    background-color: black;
    width: 100%;">
        <div id="h1-header" 
        style="
        font-size: 1.3em;
        font-weight: 500;
        color: white;
        padding-left: 10px;">
            RAYNGER HOTSPOT
        </div>
        <div id="link-header" 
            style="
        display: flex;
        flex-wrap: wrap;
        margin-left: auto;
        justify-content: center;
        align-items: center;
        padding-right: 10px;">
                <div>
                    <p id="link-description" 
                    style="
                    color: white;
                    font-size: 1.1em;">Active Subscription?</p>
                </div>
                <div>
                    <a id="active-link" onclick="openPopup('active-popup')" style="
                    padding-left: 5px;
                    color: blue;
                    font-size: 1.1em;
                    font-weight: 400;">Click Here</a>
                </div>
        </div>
    </header>

    <!--Intro-->
    <div id="intro1" 
     style="
    color: black;
    margin-top: 40px;
    display: block;
    text-align: center;">
        <h1 id="intro1-h1" 
        style="
    font-size: 1.6em;
    padding-bottom: 5px;">Welcome to Raynger Hotspot Services</h1>
        <h2 id="intro1-h2" 
        style="
    font-size: 1.4em;"><u>Instructions:</u></h2>
    </div>
    
    <div id="intro2" 
        style="
    width: 90%;
    display: block;
    color: black;
    font-size: 1.2em;
    padding-bottom: 20px;">
        <ul>
            <li>Decide on your Prefered Subscription Package and Click on the 'connect' Button and Follow the given Instructions to Pay.</li>
            <li>Wait for a Few Seconds as we Confrim your Payment and Connect you Automatically.</li>
            <li>If you Already have an Active Subscription and have not been Automatically Reconnected once Back, Kindly Click on Link at the Top Right Section of the Page and Follow the given Instructions to Reconnect.</li>
        </ul>
        <p><strong>Note:</strong> A Subscription Package is Linked to a Single Device/Mac Address and Expires After the Period Stated.</p>
        <p><strong>Incase of any Difficulties, </strong><a onclick="openPopup('contacts-popup')" id="contacts-link" style="color: blue;">Click Here</a><strong> to Contact us.</strong></p>
        <p><strong>Paid but Haven't been Connected?, Kindly Contact us or </strong><a onclick="openPopup('no-con-popup')" id="no-con-link" style="color: blue;">Click Here</a> <strong>to Enter your Voucher Code.</strong></p>
    </div>

        <!--Main Box Con-->
        <div id="main-container" 
        style="
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 15px;">

        <!--First box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">1-Hour Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 10</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 10);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>

        <!--Second box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">3-Hour Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 20</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 20);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>
        
        <!--Third box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">8-Hour Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 30</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 30);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>
        
        <!--Fourth box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">24-Hour Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 50</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 50);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>
    
        <!--Fifth box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">2-Day Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 80</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 80);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>
        
        <!--Sixth box-->
        <div class="boxes" 
            style="
        text-align: center;
        width: 230px;
        height: 190px;
        background-color: black;
        color: white;
        border-radius: 20px;">
            <h1 class="h1-box" 
                style="
            font-size: 2em;
            padding-top: 10px;">1-Week Vybz</h1>
            <h2 class="h2-box"
                style="
            padding-top: 20px;
            font-size: 1.8em;
            font-weight: 400;">@Ksh. 200</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 200);"
                style="
            height: 30px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: rgb(4, 4, 140);
            width: 80px;
            font-size: 1.2em;
            font-weight: 400;">connect</button>

        </div>


    <!--Active Popup-->
    <div id="active-popup" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 200px;
    border: 3px black solid;
    border-radius: 5px;
    z-index: 1000;">
        <form type="submit" autocomplete="off" onsubmit="return checkActive(event)">

            <div id="h1-div" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text"
                    style="
                font-size: 1.4em;
                font-weight: 400;
                margin-top: 5px;
                margin-bottom: 5px;">Kindly Input the Phone Number you Paid with Including your Country Code e.g 254...</h1>
            </div>

                <label for="active-input" id="label-rec" style="font-size: 1.4em;">Phone Number:</label><br>
                <input type="number" placeholder="e.g 254123456789" id="active-input" required 
                    style="
                text-align: center;
                width: 300px;
                height: 35px;
                font-size: 1.4em;
                border: 2px solid black;">
         
                <div>
                    <button id="recon-button" type="submit" 
                        style="
                    background-color: rgb(4, 140, 4);
                    border-radius: 5px;
                    border: none;
                    height: 35px;
                    width: 80px;
                    font-size: 1em;
                    font-weight: 500;
                    color: white;
                    margin-top: 15px;">reconnect</button>
                    <button id="res-cancel-button" type="button" onclick="closePopup('active-popup')" 
                        style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: absolute;
                    top: 0;
                    right: 0;
                    background-color: rgb(140, 4, 4);
                    border: none;
                    font-weight: 500;
                    height: 20px;
                    width: 25px;
                    font-size: 1em;
                    color: white;">x</button>
                </div>

        </form>
    </div>
    <!--Stk Error Popup-->
    <div id="stk-error-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 140px;
    border: 3px rgb(140, 4, 4) solid;
    color: rgb(220, 4, 4);
    border-radius: 5px;
    z-index: 1000;">
            <div id="h1-stk-error-con" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-stk-error-con" 
                    style="
                font-size: 1.6em;
                font-weight: 400;
                margin-top: 5px;
                margin-bottom: 5px;">Error.<br>❌STK Push Failed❌!!!<br>Please Try Again.</h1>
            </div>
    </div>
    <!--Stk Okay Popup-->
    <div id="stk-okay-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 200px;
    border: 3px rgb(4, 4, 140) solid;
    color: rgb(4, 4, 140);
    border-radius: 5px;
    z-index: 1000;">
            <div id="h1-stk-okay" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-stk-okay" 
                    style="
                font-size: 1.7em;
                font-weight: 400;
                margin-top: 5px;
                padding-left: 5px;
                padding-right: 5px;"><p style="padding-bottom: 20px; font-size: 1.5em;">✅</p>Kindly Check your Phone and Input your M-PESA Pin.</h1>

            </div>
    </div>

    <!--Pay Timeout Popup-->
    <div id="pay-timeout-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 180px;
    border: 3px rgb(140, 4, 4) solid;
    color: rgb(220, 4, 4);
    border-radius: 5px;
    z-index: 1000;">
            <div id="timeout-h1" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="timeout-h1-text" 
                    style="
                font-size: 2em;
                font-weight: 500;
                margin-top: 5px;
                margin-bottom: 5px;">Request Timeout.<br>❌No Action from User❌!!!<br>Please Try Again.</h1>
            </div>
    </div>
    <!--Sub-popup-->
    <div id="sub-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 210px;
    border: 3px black solid;
    border-radius: 5px;
    z-index: 1000;">
        <form type="submit" autocomplete="off" onsubmit="return handlePaymentSubmit(event)">

            <div id="h1-div-con" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-con" 
                    style="
                font-size: 1.4em;
                font-weight: 400;
                margin-top: 5px;
                margin-bottom: 5px;">Kindly Input your Phone Number (Including your Country Code e.g 254...) to Pay</h1>
            </div>

                <label for="con-input" id="label-con" style="font-size: 1.5em;">Phone Number:</label><br>
                <input type="number" placeholder="e.g 254123456789" id="con-input" required 
                    style="
                text-align: center;
                width: 300px;
                height: 35px;
                font-size: 1.4em;
                border: 2px solid black;">
         
                <div>
                    <button id="con-button" type="submit" 
                        style="
                    background-color: rgb(4, 140, 4);
                    border-radius: 5px;
                    border: none;
                    height: 35px;
                    width: 50px;
                    font-size: 1em;
                    font-weight: 500;
                    color: white;
                    margin-top: 15px;">pay</button>
                    <script>
 
                    </script>
                    <button id="con-cancel-button" type="button" onclick="closePopup('sub-pop')" 
                        style="
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: absolute;
                    top: 0;
                    right: 0;
                    background-color: rgb(140, 4, 4);
                    border: none;
                    font-weight: 500;
                    height: 20px;
                    width: 25px;
                    font-size: 1em;
                    color: white;">x</button>
                </div>

        </form>
    </div>
    <!--Num-format Error-->
    <div id="num-error-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 380px;
    height: 150px;
    border: 3px rgb(140, 4, 4) solid;
    color: rgb(220, 4, 4);
    border-radius: 5px;
    z-index: 1000;">
            <div id="h1-num-error-con" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-num-error-con" 
                    style="
                font-size: 2em;
                font-weight: 400;
                margin-top: 10px;
                margin-bottom: 5px;">Error.<br>❌Invalid Number❌!!!</h1>
            </div>
    </div>

    <!--Num-format Okay-->
    <div id="num-okay-pop" 
        style="    
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 230px;
    border: 3px rgb(4, 4, 140) solid;
    color: rgb(4, 4, 140);
    border-radius: 5px;
    z-index: 1000;">
            <div class="spinner" 
                style="
            margin: 10px auto;
            margin-top: 20px;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(0, 4, 250, 0.2);
            border-top-color: rgb(4, 4, 100);
            border-radius: 50%;
            animation: spin 1s linear infinite;"></div>
            <div id="h1-num-okay-con" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-num-okay-con" 
                    style="
                font-size: 1.5em;
                font-weight: 400;
                margin-top: 5px;
                padding-right: 10px;
                padding-left: 10px;">Submitted!<br>Kindly Wait as we Check your Phone Number and Send an STK Push to your Phone</h1>
            </div>
    </div>
     <!--Pay Okay-->
     <div id="pay-accepted-pop" 
        style="    
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 200px;
    border: 3px rgb(4, 140, 4) solid;
    color: rgb(4, 140, 4);
    border-radius: 5px;
    z-index: 1000;">
            <div id="h1-pay-okay" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-pay-okay" 
                    style="
                font-size: 1.9em;
                font-weight: 400;
                margin-top: 5px;
                padding-right: 10px;
                padding-left: 10px;">✅<br>Payment Received Successfully!<br>Kindly Wait as we Connect you Automatically.</h1>
            </div>
    </div>

    <!--Pay Error-->
     <div id="pay-cancel-pop" 
        style="    
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 160px;
    border: 3px rgb(250, 4, 4) solid;
    color: rgb(250, 4, 4);
    border-radius: 5px;
    z-index: 1000;">
            <div id="h1-pay-cancel" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-pay-cancel" 
                    style="
                font-size: 2.1em;
                font-weight: 400;
                margin-top: 15px;
                padding-right: 10px;
                padding-left: 10px;">Payment Cancelled By User!<br>Please Try Again.</h1>
            </div>
    </div>
    <!--Num-format Okay recon-->
    <div id="num-okay-recon-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 240px;
    border: 3px rgb(4, 4, 140) solid;
    color: rgb(4, 4, 140);
    border-radius: 5px;
    z-index: 1000;">
            <div class="spinner" 
                style="
            margin: 10px auto;
            margin-top: 20px;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(0, 4, 250, 0.2);
            border-top-color: rgb(4, 4, 100);
            border-radius: 50%;
            animation: spin 1s linear infinite;"></div>
            <div id="h1-num-okay-recon" 
                style="
            padding-top: 10px;
            padding-bottom: 5px;">
                <h1 id="h1-text-num-okay-recon"
                    style="
                font-size: 1.7em;
                font-weight: 400;
                padding-right: 10px;
                padding-left: 10px;">Submitted!<br>Kindly Wait as we Confirm your Subscription Against our Database and Automatically Reconnect you</h1>
            </div>
    </div>
    
    <!--Contacts-->
    <div id="contacts-popup" 
        style="
    display: none;
    background-color: white;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 130px;
    border: 3px black solid;
    border-radius: 5px;
    padding-left: 10px;
    z-index: 1000;">
        <h1 id="contacts-h1" 
            style="
        font-size: 1.7em;
        padding-top: 5px;
        padding-bottom: 10px;"><u>Contacts:</u></h1>
        <li class="contacts" style="font-size: 1.4em;">Phone Number: <a href="">(254)717888783</a></li>
        <li class="contacts" style="font-size: 1.4em;">Email: <a href="mailto:rayngernetworks@gmail.com" onclick="closePopup('contacts-popup')">rayngernetworks@gmail.com</a></li>
        <div><button id="contacts-button" type="button" onclick="closePopup('contacts-popup')" 
                style="
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            right: 0;
            background-color: rgb(140, 4, 4);
            border: none;
            font-weight: 500;
            height: 20px;
            width: 25px;
            font-size: 1em;
            color: white;">x</button>
        </div>
    </div>

    <!--No Conn-->
    <div id="no-con-popup" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 200px;
    border: 3px black solid;
    border-radius: 5px;
    z-index: 1000;">
        <form type="submit" autocomplete="off" onsubmit="return checkVoucher(event)">

            <div id="h1-no-con" 
                style="
            padding-top: 5px;
            padding-bottom: 2px;">
                <h1 id="h1-no-con-text" 
                    style="
                font-size: 1.4em;
                font-weight: 400;
                margin-top: 20px;
                margin-bottom: 5px;">Kindly Input the Voucher Code Provided by the Administrator</h1>
            </div>

                <label for="no-con-input" id="no-con-label" 
                    style="
                  font-size: 1.2em;">Voucher Code:</label><br>
                <input type="text" placeholder="e.g EDFK25" id="no-con-input" required    
                    style=" 
                text-align: center;
                width: 200px;
                height: 30px;
                font-size: 1.4em;
                border: 2px solid black;">
         
                <div>
                    <button id="no-con-button" type="submit" 
                        style="
                    background-color: rgb(4, 140, 4);
                    border-radius: 5px;
                    border: none;
                    height: 30px;
                    width: 80px;
                    font-size: 1em;
                    font-weight: 500;
                    color: white;
                    margin-top: 15px;">connect</button>
                    <script>
                    async function checkVoucher(event) {
                        event.preventDefault();
                        closePopup('no-con-popup');
                    
                         const voucher = document.getElementById("no-con-input").value.trim();
                    
            if (!/^abc\d{6}/.test(voucher)) {
            openPopup('voucher-num-error-pop');
            return;
                        }
                    
                        openPopup('validate-vou-popup');
                    }</script>
                    <button id="no-con-cancel-button" type="button" onclick="closePopup('no-con-popup')" 
                        style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: absolute;
                    top: 0;
                    right: 0;
                    background-color: rgb(140, 4, 4);
                    border: none;
                    font-weight: 500;
                    height: 20px;
                    width: 25px;
                    font-size: 1em;
                    color: white;">x</button>
                </div>

        </form>
    </div>

    <!--Voucher Check-->
    <div id="validate-vou-popup" 
        style=" 
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 210px;
    border: 3px rgb(4, 140, 4) solid;
    color: rgb(4, 140, 4);
    border-radius: 5px;
    z-index: 1000;">
        <div class="spinner"></div>
        <div id="h1-validate-vou" 
            style="
        padding-top: 10px;
        padding-bottom: 5px;">
            <h1 id="h1-text-validate-vou" 
                style="
            font-size: 1.5em;
            font-weight: 400;
            padding-right: 10px;
            padding-left: 10px;">Submitted!<br>Kindly Wait as we Validate your Voucher Code Against our Database and Automatically Connect you</h1>
        </div>
    </div>

    <!--Voucher Num Error-->
    <div id="voucher-num-error-pop" 
        style="
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    height: 150px;
    border: 3px rgb(140, 4, 4) solid;
    color: rgb(220, 4, 4);
    border-radius: 5px;
    z-index: 1000;">
        <div id="h1-num-error-voucher" 
            style="
        padding-top: 10px;
        padding-bottom: 5px;">
            <h1 id="h1-text-num-error-voucher" 
                style="
            font-size: 2em;
            font-weight: 400;
            margin-top: 5px;
            margin-bottom: 5px;">Error.<br>Invalid Voucher!!!</h1>
        </div>

            <div>
                <button id="num-error-button-voucher" type="button" onclick="closePopup('voucher-num-error-pop')" 
                    style="
                background-color: rgb(160, 4, 4);
                border-radius: 5px;
                border: none;
                height: 35px;
                width: 60px;
                font-size: 1em;
                font-weight: 500;
                color: white;
                margin-top: 5px;">Ok</button>
            </div>
</div>

    <!--Footer-->
    <footer 
        style="
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    height: 25px;
    color: white;
    font-size: 1.2em;
    background-color: black;
    width: 100%;
    margin-top: 10px;">
        <p>Software Provided by Raynger Developers © 2025 &#124; All Rights Reserved.</p>
    </footer>
</body>
<!--Body Ends-->
<!--Style Starts-->
<style>
*{
    font-family: 'roboto', sans-serif;
    margin: 0;
    padding: 0;
}
.no-scroll {
    overflow: hidden;
}
#active-link:hover{
    cursor: pointer;
    color: red;
}
#active-link:active{
    color: red;
}
#active-input::placeholder{
    padding-left: 10px;
    font-size: 1em;
}
#recon-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#recon-button:active{
    background-color: rgb(4, 4, 60);
}
#res-cancel-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#res-cancel-button:active{
    background-color: rgb(4, 60, 4);
}
#con-input::placeholder{
    padding-left: 10px;
    font-size: 1em;
}
#con-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#con-button:active{
    background-color: rgb(4, 4, 60);
}
#con-cancel-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#con-cancel-button:active{
    background-color: rgb(4, 60, 4);
}
#num-error-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#num-error-button:active{
    background-color: rgb(4, 60, 4);
}@keyframes spin {
    to {
      transform: rotate(360deg);
    }
}
.box-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
.box-button:active{
    background-color: rgb(4, 140, 4);
}
#contacts-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#contacts-button:active{
    background-color: rgb(4, 60, 4);
}
#contacts-link:hover{
    cursor: pointer;
}
#contacts-link:active{
    color: red;
}
#no-con-link:hover{
    cursor: pointer;
}
#no-con-link:active{
    color: red;
}
#no-con-input::placeholder{
    padding-left: 10px;
    font-size: 1em;
}
#no-con-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#no-con-button:active{
    background-color: rgb(4, 4, 60);
}
#no-con-cancel-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#no-con-cancel-button:active{
    background-color: rgb(4, 60, 4);
}
#num-error-button-voucher:hover{
    cursor: pointer;
    opacity: 0.7;
}
#num-error-button-voucher:active{
    background-color: rgb(4, 60, 4);
}
.stk-error-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
.stk-error-button:active{
    background-color: rgb(4, 60, 4);
}</style>
<!--Style Ends-->

<!--Script Starts-->
<script>
    //Open Popups
    function openPopup(popupId) {
        const popup = document.getElementById(popupId);
        const overlay = document.getElementById('overlay');
        const body = document.body;
    
        popup.style.display = 'block';
        overlay.style.display = 'block';
    
        body.classList.add('no-scroll');
        const phoneInput = document.getElementById("con-input");
        if (phoneInput) phoneInput.value = "";
        const phoneInput2 = document.getElementById("active-input");
        if (phoneInput2) phoneInput2.value = "";
        const voucherInput = document.getElementById("no-con-input");
        if (voucherInput) voucherInput.value = "";
    }
    function closePopup(popupId) {
        const popup = document.getElementById(popupId);
        const overlay = document.getElementById('overlay');
        const body = document.body;
        popup.style.display = 'none';
        overlay.style.display = 'none';
        body.classList.remove('no-scroll');
    }

    //Handle Payment
    let selectedAmount = 0;

    function handlePayment(event, amount) {
    event.preventDefault();
    selectedAmount = amount;
    openPopup('sub-pop');
    }
    //Handle Payment Submit                    
            async function handlePaymentSubmit(event) {
            event.preventDefault();
            closePopup('sub-pop');

    const phone = document.getElementById("con-input").value.trim();
    if (!/^254\d{9}$/.test(phone)) {
        openPopup('num-error-pop');
        setTimeout(() => closePopup('num-error-pop'), 3000);
        return;
    }

    openPopup('num-okay-pop');

    try {
        const res = await fetch("pay.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({ phone, amount: selectedAmount, submit: 1 })
        });

        const { ResponseCode, CheckoutRequestID } = await res.json();

        closePopup('num-okay-pop');

        if ((ResponseCode === 0 || ResponseCode === "0") && CheckoutRequestID) {
            openPopup('stk-okay-pop'); // STK push successful

            // Start polling real-time STK push status
            pollRealTimeSTKStatus(CheckoutRequestID);
        } else {
            openPopup('stk-error-pop'); // STK push failed
            setTimeout(() => closePopup('stk-error-pop'), 3000);
        }
        } catch (error) {
        closePopup('num-okay-pop');
        closePopup("stk-okay-pop");
        openPopup('stk-error-pop');
        setTimeout(() => closePopup('stk-error-pop'), 3000);
        }
}

//Poll Stk Status
        async function pollRealTimeSTKStatus(checkoutID, retries = 20) {
        if (retries <= 0) {
        return;
        }

        try {
        const statusRes = await fetch("query_stk_status.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({ CheckoutRequestID: checkoutID })
        });

        const { ResultCode } = await statusRes.json();

        //Denoting Response Codes
        switch (String(ResultCode)) {
            case "0":
                closePopup('stk-okay-pop');
                openPopup('pay-accepted-pop');
                return; // Stop polling
            case "1032":
                closePopup('stk-okay-pop');
                openPopup('pay-cancel-pop');
                setTimeout(() => closePopup('pay-cancel-pop'), 3000);
                return; // Stop polling
            case "1":
                closePopup('stk-okay-pop');
                openPopup('pay-timeout-pop');
                setTimeout(() => closePopup('pay-timeout-pop'), 3000);
                return; // Stop polling
        }
    } catch (error) {
        console.error("Error fetching STK status:", error);
    }

        // Retry after 1 second
        setTimeout(() => pollRealTimeSTKStatus(checkoutID, retries - 1), 1000);
}

                        async function checkActive(event) {
                        event.preventDefault();
                        closePopup('active-popup');

                        const phone = document.getElementById("active-input").value.trim();

                        if (!/^254\d{9}$/.test(phone)) {
                        openPopup('num-error-pop');
                        setTimeout(() => closePopup('num-error-pop'), 3000);
                        return;
                    }
                    openPopup('num-okay-recon-pop');
                    }
</script>
<!--Script Ends-->

</html>
