<!--to top-->
<div id="toTop">
   <button>
      <img src="{{ asset('front/images/icons/up.svg') }}" alt="">
   </button>
</div>
<!--to top-->
<footer>
    <div class="container">
       <div class="content">
          <div class="footer-logo">
            <a href="/">
               <img class="light img-fluid" src="{{ asset(settings()->inline_logo) }}" alt="alt">
               <img class="dark img-fluid" src="{{ asset(settings()->inline_logo_dark) }}" alt="alt">
            </a>
             <p>{{ aboutme()->description }}</p>
          </div>
          <div class="footer-links"><a href="{{ route('portfolio') }}">portfolio </a><a href="{{ route('about') }}">about me&contacts</a></div>
          <div class="social-media">
             <a href="{{ settings()->behance }}"><i class="fa-brands fa-behance"> </i></a>
             <a href="mailto:{{ settings()->email1 }}"><i class="fa-solid fa-envelope"> </i></a>
             <a href="{{ settings()->facebook }}"><i class="fa-brands fa-facebook"> </i></a>
             <a href="{{ settings()->instagram }}"><i class="fa-brands fa-instagram"> </i></a>
             <a href="https://wa.me/{{ settings()->whatsapp }}"><i class="fa-brands fa-whatsapp"> </i></a>
          </div>
          <div class="copyrights">
             <p>copyrights &copy; 2022 abdallahdesigns</p>
          </div>
       </div>
    </div>
 </footer>
 </div>
 <!--scripts-->
 <script src="{{ asset('front/js/plugins.js') }}"></script>
 <script src="{{ asset('front/js/script.js') }}"></script>
 </body>

 </html>
