<?
$utm_term = $_GET["utm_term"];
quotemeta($utm_term);
$utm_source = $_GET["utm_source"];
quotemeta($utm_source);
$utm_medium = $_GET["utm_medium"];
quotemeta($utm_medium);
$utm_campaign = $_GET["utm_campaign"];
quotemeta($utm_campaign);
$utm_content = $_GET["utm_content"];
quotemeta($utm_content);
echo '
    <script>
        $("input[name=utm_term]").val("'.$utm_term.'");
        $("input[name=utm_source]").val("'.$utm_source.'");
        $("input[name=utm_medium]").val("'.$utm_medium.'");
        $("input[name=utm_campaign]").val("'.$utm_campaign.'");
        $("input[name=utm_content]").val("'.$utm_content.'");
    </script>
    ';
?>
<!-- Yandex.Metrika counter --><script type="text/javascript" >    (function (d, w, c) {        (w[c] = w[c] || []).push(function() {            try {                w.yaCounter46056327 = new Ya.Metrika({                    id:46056327,                    clickmap:true,                    trackLinks:true,                    accurateTrackBounce:true,                    webvisor:true                });            } catch(e) { }        });        var n = d.getElementsByTagName("script")[0],            s = d.createElement("script"),            f = function () { n.parentNode.insertBefore(s, n); };        s.type = "text/javascript";        s.async = true;        s.src = "https://mc.yandex.ru/metrika/watch.js";        if (w.opera == "[object Opera]") {            d.addEventListener("DOMContentLoaded", f, false);        } else { f(); }    })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/46056327" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
<script type="text/javascript" src="js/js-form.js"></script>
<script type="text/javascript" src="js/scriptNew.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/js/form-mask.js"></script>
<script type="text/javascript" src="/js/jquery.animate-colors-min.js"></script>
</html>