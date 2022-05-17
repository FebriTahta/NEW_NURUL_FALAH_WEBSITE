<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
    <link href="{{asset('maintenance/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('maintenance/js/jquery-1.6.1.js')}}" type="text/javascript"></script>
    <script src="{{asset('maintenance/js/jquery.jcountdown1.3.1.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('maintenance/js/cufon/cufon.js')}}"></script>
    <script type="text/javascript" src="{{asset('maintenance/js/cufon/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{asset('maintenance/js/cufon/Bebas_Neue_400.font.js')}}"></script>  
    <script type="text/javascript" src="{{asset('maintenance/js/cufon/Note_this_400.font.js')}}"></script>    
    <script type="text/javascript" src="{{asset('maintenance/js/custom.js')}}"></script>    
</head>
<body>
    <!-- Wrapper START -->
    <div id="wrapper">
        <!-- Logo -->
        <img src="{{asset('nf_logo.png')}}" style="max-width: 300px" class="logo" alt="Logo" />
        <!-- Main Title -->
        <h1 class="maintitle">Website "nurulfalah.org" akan segera kembali </h1>
        <p class="titlemessage">Mohon untuk menunggu </p>
        <!-- Countdown Timer START -->
        {{-- <div id="countdown">
            <div id="time" class="time"></div>
            <div class="days" id="days"></div>
            <div class="hours" id="hours"></div>
            <div class="minutes" id="mins"></div>
            <div class="seconds" id="secs"></div>
            <div class="clear" id=""></div>
        </div> --}}
        <!-- Countdown Timer END -->
        <!-- About us -->
        <div class="aboutus">
            <h3 class="aboutustitle">Pemberitahuan </h3>
            <p class="description">
                Mohon maaf kunjungan anda ke website ini nurulfalah.org terganggu, karena sedang dilakukan perbaikan sistem oleh pusat.
                Apabila ada pertanyaan dapat menghubungi Admin IT terkait : 081329146514
            </p>
        </div>
       
        <!-- Subscribe -->
        {{-- <div class="subscribe">
            <h3 class="subscribetitle">Subscribe to our newsletter</h3>
            <!-- Form -->
            <div id="subscribeform">
                <form method="post" action="">
                    <div>
                        <input type="text" class="email"/>
                        <button name="Subscribe" type="submit" id="Subscribe" class="btn">Subscribe</button>
                    </div>
                </form>
            </div>
            <div id="socials">
                <a href="#"><img src="images/facebook.png" alt="Facebook" /></a>
                <a href="#"><img src="images/linkedin.png" alt="Linkedin" /></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter"  /></a>
                <a href="#"><img src="images/msn.png" alt="MSN"  /></a>
                <a href="#"><img src="images/myspace.png" alt="MySpace"  /></a>
                <a href="#"><img src="images/skype.png" alt="Skype" /></a>
                <a href="#"><img src="images/wordpress.png" alt="Wordpress" /></a>
                <a href="#"><img src="images/youtube.png" alt="Youtube" /></a>
            </div>
          
        </div> --}}
         <div class="clear"></div>
    </div>
   
    <!-- Footer -->
    <div id="footer"></div>
    <script>
        // The data/time we want to countdown to
        var countDownDate = new Date("May 20, 2022 16:37:52").getTime();
    
        // Run myfunc every second
        var myfunc = setInterval(function() {
    
        var now = new Date().getTime();
        var timeleft = countDownDate - now;
            
        // Calculating the days, hours, minutes and seconds left
        var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
            
        // Result is output to the specific element
        document.getElementById("days").innerHTML = days + "d "
        document.getElementById("hours").innerHTML = hours + "h " 
        document.getElementById("mins").innerHTML = minutes + "m " 
        document.getElementById("secs").innerHTML = seconds + "s " 
            
        // Display the message when countdown is over
        if (timeleft < 0) {
            clearInterval(myfunc);
            document.getElementById("days").innerHTML = ""
            document.getElementById("hours").innerHTML = "" 
            document.getElementById("mins").innerHTML = ""
            document.getElementById("secs").innerHTML = ""
            document.getElementById("end").innerHTML = "TIME UP!!";
        }
        }, 1000);
        </script>
</body>
</html>