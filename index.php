<!DOCTYPE html>
<?php
session_start();
  
// logged in user shouldn't access this page
if(isset($_SESSION['uid'])) {
    header('Location: profile.php');
}
?>
 
 <div id="loginContainer">
    <button href='#' onClick='login(event);'>Sign in with Linkedin</button>
</div>
 
<style>
button {
    height: 50px;
    background: #0A66C3;
    outline: none;
    border: none;
    border-radius: 30px;
    color: #fff;
    font-size: 1rem;
    font-weight: bolder;
    text-align: center;
    margin-left:45%;
    margin-top:20%;
    width:15%
}
</style>
 
<script>
var client_id = "86i353po59dwmz";
var redirect_uri = "http://localhost/linkedin/index.php"; // pass redirect_uri here
var scope = "r_liteprofile r_emailaddress"; // permissions required by end-user
var win;
 
function login(e) {
    e.preventDefault();
 
    if(!sessionStorage.inState) {
        sessionStorage.inState = inState = Math.floor(Math.random()*90000) + 10000;
    } else {
        inState = sessionStorage.inState;
    }
    var url = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id="+client_id+"&redirect_uri="+redirect_uri+"&scope="+scope+"&state="+inState;
 
    win = window.open(encodeURI(url), "LinkedIn Login", 'width=800, height=600, left=300, top=100');
    checkConnect = setInterval(function() {
        if (!win || !win.closed) return;
        clearInterval(checkConnect);        
        // redirect to profile page
        location.href = 'http://localhost/linkedin/profile.php';
    }, 100);
}

var cur_url = new URL(window.location.href);
console.log(cur_url)
var urlParams = new URLSearchParams(cur_url.search);

 
if(urlParams.has('state') && (sessionStorage.inState == urlParams.get('state'))) {
 
    if(urlParams.has('code')) {
        document.getElementById("loginContainer").innerHTML = "Logging you in...";
 
        var code = urlParams.get('code');
         console.log(code)
        // send ajax request
        var xhttp = new XMLHttpRequest();
        console.log("step1")
        xhttp.onreadystatechange = function() {
            console.log("step2")
            if (this.readyState == 4 && this.status == 200) {
                console.log("step3 "+ this.responseText)
                if(this.responseText) {
                   
                    console.log("succesfully logged")
                    // close window
                    parent.close();
                    //header('Location: http://localhost/linkedin/index.php')
                }
            }
        };
        xhttp.open("POST", "save-user.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("code=" + code);
    } else if(urlParams.has('error') && urlParams.has('error_description')) {
        // close window
        parent.close();
    }
}

</script>