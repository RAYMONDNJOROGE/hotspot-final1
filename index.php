<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rayngerhotspot</title>
</head>

<!--Style Starts-->
<style>
*{
    margin: 0;
    padding: 0;
}
header{
    position: fixed;
    box-shadow: 2px 2px 2px blue;
    top: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
    height: 30px;
    background-color: black;
    width: 100%;
}
#h1-header{
    font-size: 1.3em;
    font-weight: 500;
    color: white;
    padding-left: 10px;
}
#link-header{
    display: flex;
    flex-wrap: wrap;
    margin-left: auto;
    justify-content: center;
    align-items: center;
    padding-right: 10px;
}
#link-description{
    color: white;
    font-size: 1.1em;
}
.no-scroll {
    overflow: hidden;
}
#active-link{
    padding-left: 5px;
    color: blue;
    font-size: 1.1em;
}
#active-link:hover{
    cursor: pointer;
}
#active-link:active{
    color: red;
}
#intro1{
    color: black;
    margin-top: 38px;
    display: block;
    text-align: center
}
#intro1-h1{
    font-size: 1.8em;
    padding-bottom: 5px;
}
#intro1-h2{
    font-size: 1.5em;
}
#intro2{
    width: 90%;
    display: block;
    color: black;
    font-size: 1.3em;
    padding-bottom: 20px;
}
#contacts-link{
    color: blue;
}
#contacts-link:hover{
    cursor: pointer;
}
#contacts-link:active{
    color: red;
}
#main-container{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 15px;
}
.boxes{
    text-align: center;
    width: 230px;
    height: 190px;
    background-color: black;
    box-shadow: 2px 2px 2px blue;
    color: white;
}
.h1-box{
    font-size: 2em;
    padding-top: 10px;
}
.h2-box{
    padding-top: 20px;
    font-size: 1.8em;
    font-weight: 400;
}
.box-button{
    height: 30px;
    margin-top: 30px;
    border-radius: 5px;
    border: none;
    color: white;
    background-color: rgb(4, 140, 4);
    box-shadow: 2px 2px 2px blue;
    width: 80px;
    font-size: 1.2em;
    font-weight: 400;
}
#active-input::placeholder{
    padding-left: 10px;
    font-size: 1em;
}
#active-popup{
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
    z-index: 1000;
}
#h1-div-active-pop{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-active-pop{
    font-size: 1.4em;
    font-weight: 400;
    margin-top: 5px;
    margin-bottom: 5px;
}
#label-rec{
    font-size: 1.4em;
}
#active-input{
    text-align: center;
    width: 300px;
    height: 35px;
    font-size: 1.4em;
    border: 2px solid black;
}
#recon-button{
    background-color: rgb(4, 140, 4);
    box-shadow: 2px 2px 2px black;
    border-radius: 5px;
    border: none;
    height: 35px;
    width: 80px;
    font-size: 1em;
    font-weight: 500;
    color: white;
    margin-top: 15px;
}
#recon-cancel-button{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    right: 0;
    background-color: rgb(140, 4, 4);
    box-shadow: 2px 2px 2px black;
    border: none;
    font-weight: 500;
    height: 20px;
    width: 25px;
    font-size: 1em;
    color: white;
}
#recon-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#recon-button:active{
    background-color: red;
}
#recon-cancel-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#recon-cancel-button:active{
    background-color: green;
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
    background-color: red;
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
}
#stk-error-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 200px;
    border: 3px red solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-stk-error-con{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-stk-error-con{
    font-weight: 400;
    margin-bottom: 5px;
}
#p1-stk-error{
    color: red; 
    font-size: 1.5em; 
}
#p2-stk-error{
    color: black;
    font-size: 1.1em;
}
#stk-okay-pop{
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
    z-index: 1000;
}
#h1-stk-okay{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-stk-okay{
    font-weight: 400;
    margin-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
#p1-stk-okay{
    font-size: 1.3em;
}
#pin-error-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 200px;
    border: 3px red solid;
    border-radius: 5px;
    z-index: 1000;
}
#pin-error-h1{
    padding-top: 10px;
    padding-bottom: 5px;
}
#pin-error-h1-text{
    font-weight: 400;
    margin-top: 5px;
    margin-bottom: 5px;
}
#p1-pin-error{
    color: red; 
    font-size: 1.5em; 
}
#p2-pin-error{
    color: black;
    font-size: 1.1em;
}
#stk-expired-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 3px red solid;
    width: 450px;
    height: 200px;
    border-radius: 5px;
    z-index: 1000;
}
#stk-expired-h1{
    padding-top: 10px;
    padding-bottom: 5px;
}
#stk-expired-h1-text{
    font-weight: 400;
    margin-top: 5px;
    margin-bottom: 5px;
}
#p1-stk-expired{
    color: red; 
    font-size: 1.5em; 
}
#p2-stk-expired{
    color: black;
    font-size: 1.1em;
    margin-top: 20px;
}
#pay-popup{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 550px;
    height: 220px;
    border: 3px black solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-div-pay{
    padding-top: 5px;
    padding-bottom: 5px;
}
#h1-text-pay{
    font-size: 1.7em;
    font-weight: 400;
    margin-top: 10px;
    margin-bottom: 5px;
}
#label-pay{
    font-size: 1.6em;
}
#pay-input{
    text-align: center;
    width: 350px;
    height: 40px;
    font-size: 1.7em;
    border: 2px solid black;
}
#pay-button{
    background-color: rgb(4, 140, 4);
    border-radius: 5px;
    border: none;
    height: 35px;
    width: 50px;
    font-size: 1.3em;
    box-shadow: 2px 2px 2px black;
    font-weight: 500;
    color: white;
    margin-top: 15px;
}
#pay-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#pay-button:active{
    background-color: red;
}
#pay-cancel-button{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    right: 0;
    background-color: rgb(140, 4, 4);
    box-shadow: 2px 2px 2px black;
    border: none;
    font-weight: 500;
    height: 20px;
    width: 25px;
    font-size: 1em;
    color: white;
}
#pay-cancel-button:hover{
    opacity: 0.7;
    cursor: pointer;
}
#pay-cancel-button:active{
    background-color: green;
}
#num-okay-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 220px;
    border: 3px blue solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-num-okay-con{
    padding-bottom: 5px;
}
#h1-text-num-okay-con{
    font-weight: 400;
    margin-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
}
#p1-num-okay{
    font-size: 1.5em; 
    color: blue;
}
#p2-num-okay{
    color: black; 
    font-size: 1.1em;
}
#pay-accepted-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 220px;
    border: 3px green solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-pay-accepted{
    padding-bottom: 5px;
}
#h1-text-pay-accepted{
    font-weight: 400;
    margin-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
}
#p1-pay-accepted{
    font-size: 1.5em; 
    color: green;
}
#p2-pay-accepted{
    color: black; 
    font-size: 1.1em;
}
#pay-cancel-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 200px;
    border: 3px red solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-pay-cancel{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-pay-cancel{
    font-weight: 400;
    margin-bottom: 5px;
}
#p1-pay-cancel{
    color: red; 
    font-size: 1.5em; 
}
#p2-pay-cancel{
    color: black;
    font-size: 1.1em;
}
#pay-less-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 200px;
    border: 3px red solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-pay-less{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-pay-less{
    font-weight: 400;
    margin-bottom: 5px;
}
#p1-pay-less{
    color: red; 
    font-size: 1.5em; 
}
#p2-pay-less{
    color: black;
    font-size: 1.1em;
}
#num-okay-recon-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 220px;
    border: 3px blue solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-num-okay-recon{
    padding-bottom: 5px;
}
#h1-text-num-okay-recon{
    font-weight: 400;
    margin-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
}
#p1-num-okay-recon{
    font-size: 1.5em; 
    color: blue;
}
#p2-num-okay-recon{
    color: black; 
    font-size: 1.1em;
}
#contacts-popup{
     display: none;
    background-color: white;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 200px;
    border: 3px black solid;
    border-radius: 5px;
    padding-left: 10px;
    z-index: 1000;
}
#contacts-h1{
    font-size: 2em;
    padding-top: 5px;
    padding-bottom: 10px;
}
.list2{
    font-size: 1.7em;
}
#contacts-button{
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    right: 0;
    background-color: rgb(140, 4, 4);
    box-shadow: 2px 2px 2px black;
    border: none;
    font-weight: 500;
    height: 20px;
    width: 25px;
    font-size: 1em;
    color: white;
}
@keyframes spin {
    to {
      transform: rotate(360deg);
    }
}
.spinner{
    margin: 10px auto;
    margin-top: 10px;
    width: 40px;
    height: 40px;
    border: 2px solid rgba(0, 0, 255, 0.2);
    border-top-color: blue;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}
#num-error-pop{
    display: none;
    justify-content: center;
    background-color: white;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 450px;
    height: 200px;
    border: 3px red solid;
    border-radius: 5px;
    z-index: 1000;
}
#h1-num-error-con{
    padding-top: 10px;
    padding-bottom: 5px;
}
#h1-text-num-error-con{
    font-weight: 400;
    margin-bottom: 5px;
}
#p1-num-error{
    color: red; 
    font-size: 1.5em; 
}
#p2-num-error{
    color: black;
    font-size: 1.1em;
}
.box-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
.box-button:active{
    background-color: red;
}
#contacts-button:hover{
    cursor: pointer;
    opacity: 0.7;
}
#contacts-button:active{
    background-color: green;
}
#contacts-link:hover{
    cursor: pointer;
}
#contacts-link:active{
    color: red;
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
}
footer{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    height: 25px;
    color: white;
    font-size: 1.2em;
    background-color: black;
    box-shadow: 2px 2px 2px 3px blue;
    width: 100%;
    margin-top: 10px;
}
</style>
<!--Style Ends-->

<!--Body Starts-->
<body style="
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;">
        <div id="overlay" style="
        position: fixed;
        top: 0; left: 0;
        width: 100vw; height: 100vh;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        transition: opacity 0.3s ease;
        z-index: 999;"></div>
    <!--Header-->
    <header>
        <div id="h1-header">
            RAYNGER HOTSPOT
        </div>
        <div id="link-header">
                <div>
                    <p id="link-description" >Active Subscription?</p>
                </div>
                <div>
                    <a id="active-link" onclick="openPopup('active-popup')">Click Here</a>
                </div>
        </div>
    </header>

    <!--Intro-->
    <div id="intro1" >
        <h1 id="intro1-h1">Welcome to Raynger Hotspot Services</h1>
        <h2 id="intro1-h2"><u>Instructions:</u></h2>
    </div>
    
    <div id="intro2" >
        <ul style="list-style-type:square">
            <li>Decide on your Preferred Subscription Package and Click on the 'connect' Button and Follow the given Instructions to Pay.</li>
            <li>Wait for a Few Seconds as we Confrim your Payment and CONNECT you Automatically.</li>
            <li>If you Already have an ACTIVE Subscription and have NOT been Automatically Reconnected once Back, Kindly Click on Link at the Top Right Section of the Page and Follow the given Instructions to Reconnect.</li>
        </ul>
        <p><strong>Note:</strong> A Subscription Package is Linked to a Single Device/Mac Address and Expires After the Period Stated.</p>
        <p><strong>Incase of any Difficulties, </strong><a onclick="openPopup('contacts-popup')" id="contacts-link">Click Here</a><strong> to Contact us.</strong></p>
    </div>

        <!--Main Box Con-->
        <div id="main-container">
        <!--First box-->
        <div class="boxes" >
            <h1 class="h1-box" >1-Hour Vybz</h1>
            <h2 class="h2-box">@Ksh. 10</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 10);">connect</button>

        </div>

        <!--Second box-->
        <div class="boxes">
            <h1 class="h1-box" >3-Hour Vybz</h1>
            <h2 class="h2-box">@Ksh. 20</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 20);">connect</button>

        </div>
        
        <!--Third box-->
        <div class="boxes">
            <h1 class="h1-box" >8-Hour Vybz</h1>
            <h2 class="h2-box">@Ksh. 30</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 30);">connect</button>

        </div>
        
        <!--Fourth box-->
        <div class="boxes">
            <h1 class="h1-box">24-Hour Vybz</h1>
            <h2 class="h2-box">@Ksh. 50</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 50);">connect</button>

        </div>
    
        <!--Fifth box-->
        <div class="boxes">
            <h1 class="h1-box">2-Day Vybz</h1>
            <h2 class="h2-box">@Ksh. 80</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 80);">connect</button>

        </div>
        
        <!--Sixth box-->
        <div class="boxes">
            <h1 class="h1-box">1-Week Vybz</h1>
            <h2 class="h2-box">@Ksh. 200</h2>
            <button type="button" class="box-button" onclick="handlePayment(event, 200);">connect</button>

        </div>


    <!--Active Popup-->
    <div id="active-popup" >
        <form type="submit" autocomplete="off" onsubmit="return checkActive(event)">

            <div id="h1-div-active-pop">
                <h1 id="h1-text-active-pop">Kindly Input the Phone Number you Paid with Including your Country Code e.g 254...</h1>
            </div>

                <label for="active-input" id="label-rec">Phone Number:</label><br>
                <input type="number" placeholder="e.g 254123456789" id="active-input" required>
         
                <div>
                    <button id="recon-button" type="submit">reconnect</button>
                    <button id="recon-cancel-button" type="button" onclick="closePopup('active-popup')">x</button>
                </div>

        </form>
    </div>

    <!--Stk Error Popup-->
    <div id="stk-error-pop">
            <div id="h1-stk-error-con">
                <h1 id="h1-text-stk-error-con"><p id="p1-stk-error">STK Error!</p><p id="p2-stk-error">Transaction Failed,<br>Please Try Again.</p></h1>
            </div>
    </div>

    <!--Stk Okay Popup-->
    <div id="stk-okay-pop">
            <div id="h1-stk-okay">
                <h1 id="h1-text-stk-okay"><p id="p1-stk-okay">Kindly Check your Phone and Input your M-PESA Pin.</p></h1>

            </div>
    </div>

    <!--Pin error Popup-->
    <div id="pin-error-pop" >
            <div id="pin-error-h1">
                <h1 id="pin-error-h1-text"><p id="p1-pin-error">Incorrect PIN!</p><p id="p2-pin-error">Kindly Check your PIN and<br> Try Again.</p></h1>
            </div>
    </div>

    <!--Transaction Expired Popup-->
    <div id="stk-expired-pop">
            <div id="stk-expired-h1">
                <h1 id="stk-expired-h1-text"><p id="p1-stk-expired">Transaction Expired!</p><p id="p2-stk-expired">Please Try Again.</p></h1>
            </div>
    </div>

    <!--Sub-popup-->
    <div id="pay-popup">
        <form type="submit" autocomplete="off" onsubmit="return handlePaymentSubmit(event)">

            <div id="h1-div-pay">
                <h1 id="h1-text-pay">Kindly Input your Phone Number (Including your Country Code e.g 254...) to Pay</h1>
            </div>

                <label for="pay-input" id="label-pay">Phone Number:</label><br>
                <input type="number" placeholder="e.g 254123456789" id="pay-input" required>
         
                <div>
                    <button id="pay-button" type="submit">pay</button>
                    <script>
 
                    </script>
                    <button id="pay-cancel-button" type="button" onclick="closePopup('pay-popup')">x</button>
                </div>

        </form>
    </div>

    <!--Num-format Error-->
    <div id="num-error-pop">
            <div id="h1-num-error-con">
                <h1 id="h1-text-num-error-con"><p id="p1-num-error">Format Error!</p><p id="p2-num-error">Invalid Number, <br>Please Try Again.</p></h1>
            </div>
    </div>

    <!--Num-format Okay-->
    <div id="num-okay-pop">
            <div class="spinner"></div>
            <div id="h1-num-okay-con">
                <h1 id="h1-text-num-okay-con"><p id="p1-num-okay">Submitted!</p><p id="p2-num-okay">Please Wait as we Process the Payment Request.</p></h1>
            </div>
    </div>

     <!--Pay Okay-->
     <div id="pay-accepted-pop">
            <div id="h1-pay-accepted">
                <h1 id="h1-text-pay-accepted"><p id="p1-pay-accepted">Payment Received Successfully!</p><p id="p2-pay-accepted">Kindly Wait as we Connect you Automatically.</p></h1>
            </div>
    </div>

    <!--Pay Error-->
     <div id="pay-cancel-pop">
            <div id="h1-pay-cancel">
                <h1 id="h1-text-pay-cancel"><p id="p1-pay-cancel">Payment Cancelled By User!</p><p id="p2-pay-cancel">Please Try Again.</p></h1>
            </div>
    </div>

    <!--Insufficient Funds-->
    <div id="pay-less-pop">
            <div id="h1-pay-less">
                <h1 id="h1-text-pay-less"><p id="p1-pay-less">Insufficient Funds!</p><p id="p2-pay-less">Please Recharge your<br>M-PESA Wallet<br>and Try Again.</p></h1>
            </div>
    </div>

    <!--Num-format Okay recon-->
    <div id="num-okay-recon-pop">
            <div class="spinner"></div>
            <div id="h1-num-okay-recon">
                <h1 id="h1-text-num-okay-recon"><p id="p1-num-okay-recon">Submitted!</p><p id="p2-num-okay-recon">Kindly Wait as we Confirm your Subscription.</p></h1>
            </div>
    </div>
    
    <!--Contacts-->
    <div id="contacts-popup">
        <h1 id="contacts-h1"><u>Contacts:</u></h1>
            <li class="list2">Phone Number: <a href="">(254)717888783</a></li>
            <li class="list2">Email: <a href="mailto:rayngernetworks@gmail.com" onclick="closePopup('contacts-popup')">rayngernetworks@gmail.com</a></li>
        <div><button id="contacts-button" type="button" onclick="closePopup('contacts-popup')">x</button>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <p>Software Provided by Raynger Developers © 2025 &#124; All Rights Reserved.</p>
    </footer>
</body>
<!--Body Ends-->

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
        const phoneInput = document.getElementById("pay-input");
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
    openPopup('pay-popup');
    }
    //Handle Payment Submit                    
            async function handlePaymentSubmit(event) {
            event.preventDefault();
            closePopup('pay-popup');

    const phone = document.getElementById("pay-input").value.trim();
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
        async function pollRealTimeSTKStatus(checkoutID, retries = 100) {
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
            case "2001":
                closePopup('stk-okay-pop');
                openPopup('pin-error-pop');
                setTimeout(() => closePopup('pin-error-pop'), 3000);
                return; // Stop polling
            case "1":
                closePopup('stk-okay-pop');
                openPopup('pay-less-pop');
                setTimeout(() => closePopup('pay-less-pop'), 3000);
                return; // Stop polling
            case "1019":
                closePopup('stk-okay-pop');
                openPopup('stk-expired-pop');
                setTimeout(() => closePopup('stk-expired-pop'), 3000);
                return; // Stop polling
            case "1001":
                closePopup('stk-okay-pop');
                openPopup('another-tran-pop');
                setTimeout(() => closePopup('another-tran-pop'), 3000);
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
