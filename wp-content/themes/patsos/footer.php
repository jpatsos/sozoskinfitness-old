<?php /* <footer>
    <div class="row">
        <div class="cell well well--l">
            <div class="footer-content">
                <a href="/" class="footer-logo">
                    <img alt="Sozo Skin Fitness" width="120" src="/img/logo-white.svg">
                </a>
                <div class="footer-contact">
                    <p>
                        <strong>Write Us:</strong>
                        <a id="footer-email" href="mailto:sheri@sozoskinfitness.com?Subject=Hey,%20Sheri!">sheri@sozoskinfitness.com</a>
                        <br>
                        <strong>Call Us:</strong>
                        <a id="footer-phone" href="tel:+14079065470">(407) 906-5470</a>
                        <br>
                        <strong>See Us:</strong>
                        <a id="footer-phone" href="https://www.google.com/maps/place/249+FL-436,+Altamonte+Springs,+FL+32714/@28.6632104,-81.394641,17z/data=!3m1!4b1!4m2!3m1!1s0x88e77171a15153bf:0x1b6d0902fdd65d49">249 West SR 436 Altamonte Springs, FL 32714 #1069</a>
                    </p>
                    <div class="footer-social">
                        <ul>
                            <li>
                                <a id="footer-facebook" href="https://facebook.com/sozoskinfitness" onclick="ga('send', 'event', 'Footer', 'Click', 'Facebook');"><i class="icon-facebook"></i> <span class="srt">Sozo on Facebook</span> </a>
                            </li>
                            <li>
                                <a id="footer-twitter" href="https://twitter.com/sozoskinfitness" onclick="ga('send', 'event', 'Footer', 'Click', 'Twitter');"><i class="icon-twitter"></i> <span class="srt">Sozo on Twitter</span> </a>
                            </li>
                            <li>
                                <a id="footer-instagram" href="https://www.instagram.com/sozoskinfitness/" onclick="ga('send', 'event', 'Footer', 'Click', 'Instagram');"><i class="icon-instagram"></i> <span class="srt">Sozo on Instagram</span> </a>
                            </li>
                            <li>
                                <a id="footer-pinterest" href="https://www.pinterest.com/sozoskinfitness" onclick="ga('send', 'event', 'Footer', 'Click', 'Pinterest');"><i class="icon-pinterest"></i> <span class="srt">Sozo on Pinterest</span> </a>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
*/ ?>
<footer itemtype="http://schema.org/WPFooter" itemscope>
    <div class="cell cell--base well">
        <a href="/" class="logo" onclick="ga('send', 'event', 'Footer', 'Click', 'Skips Logo');">
            <img src="/wp-content/themes/patsos/img/logo-white.svg" alt="Sozo Skin Fitness">
        </a>
        <div class="g">
            <div class="g-b g-b--m--1of2">
                <!-- <div class="title">We Care</div> -->
                 <ul>
                    <li>
                        <a href="/women/" onclick="ga('send', 'event', 'Footer', 'Click', 'women');">Women</a>
                    </li>
                    <li>
                        <a href="/men/" onclick="ga('send', 'event', 'Footer', 'Click', 'men');">Men</a>
                    </li>
                    <li>
                        <a href="/acne/" onclick="ga('send', 'event', 'Footer', 'Click', 'acne');">Acne</a>
                    </li>
                    <li>
                        <a href="/blog/" onclick="ga('send', 'event', 'Footer', 'Click', 'blog');">Blog</a>
                    </li>
                </ul>
            </div>
            <?php /* 
            <div class="g-b g-b--m--1of2">
                <div class="title">Legal</div>
                <ul>
                    <li>
                        <a href="/privacy/" onclick="ga('send', 'event', 'Footer', 'Click', 'Skipsboots/Women');">Privacy</a>
                    </li>
                    <li>
                        <a href="/men/" onclick="ga('send', 'event', 'Footer', 'Click', 'Skipsboots/Men');">FAQ</a>
                    </li>
                    <li>
                        <a href="/men/" onclick="ga('send', 'event', 'Footer', 'Click', 'Skipsboots/Men');">About</a>
                    </li>
                    <li>
                        <a href="/men/" onclick="ga('send', 'event', 'Footer', 'Click', 'Skipsboots/Men');">Contact</a>
                    </li>
                </ul>
            </div>
            */ ?>
            <div class="g-b g-b--m--1of2">
                <div class="title">Tags</div>
                <?php
                  // Select all the post tag IDs
                    $the_tags = $wpdb->get_col("SELECT term_id
                    FROM $wpdb->term_taxonomy WHERE taxonomy = 'post_tag'" );

                    // Loop over each ID, and grab associated data
                    foreach($the_tags as $tag_id) {
                    // Get information on the post tag
                    $post_tag = get_term( $tag_id, 'post_tag' );
                    $tag_link = get_tag_link( $tag_id );
                    // Print the tag name and count (how many posts have this tag)
                    echo "<a href='{$tag_link}' title='{$post_tag->name} Tag' class='tag' onclick='ga(\"send\", \"event\", \"Footer Tag\", \"Click\", \"{$post_tag->name} Tag\");'>" . $post_tag->name.' ('.$post_tag->count.')</a>';
                    // Unset the data when it's not needed
                    unset($post_tag);
                    }
                ?>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="/wp-content/themes/patsos/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/patsos/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/wp-content/themes/patsos/js/cbpFWTabs.js"></script>
<script type="text/javascript" src="/wp-content/themes/patsos/js/scrollTrigger.js"></script>
<script type="text/javascript" src="/wp-content/themes/patsos/js/init.js"></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '431418767069122',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70360415-1', 'auto');
  ga('send', 'pageview');

</script>




<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('5350-548-10-9650');/*]]>*/</script><noscript><a href="https://www.olark.com/site/5350-548-10-9650/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->




<?php wp_footer(); ?>

</body>
</html>
