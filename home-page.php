<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/minty/bootstrap.min.css">
    <link rel="stylesheet" href="./tree-view-nested-list/dist/listree.min.css"/>
    <link rel="stylesheet" href="./tree-view-nested-list/stickyy.css"/>
    <title>Bareos Frontpage</title>
    <style>
        body { background-color: #fafafa; }
        .container {
          margin: 170px auto;
          max-width: 740px;
          margin-left:40px;}
    </style>
  </head>
  <body><div id="css-script-menu">
  <div class="css-script-center">
    <ul>
      <li><a href="https://docs.bareos.org/">Offizielle Bareos-Dokumentation</a></li>
      <li><a href="https://www.cssscript.com/">Interne Bareos-Dokumentation</a></li>
    </ul>
    <div class="css-script-ads"><div id="carbon-block"></div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- CSSScript Demo Page -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-2783044520727903"
     data-ad-slot="3025259193"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
    <div class="css-script-clear"></div>
  </div>
</div>
    <div class="container">
        <h1>BAREOS TREE</h1>
    <ul class="listree">

      <!-- DIRECTOR -->
      <li>

      <div class="listree-submenu-heading">DIRECTOR</div>
      <ul class="listree-submenu-items">

        <!-- Client (server side) -->
        <li>
          <div class="listree-submenu-heading">Client</div>
          <ul class="listree-submenu-items">
          <li>
            <a href ='#' onclick="window.location.href='bareos-dir-ressources/job-ressources/create-job.php'">Client erstellen (Server side)</a>
          </li>
          </ul>
        </li>

        <!-- File Set -->
        <li>
          <div class="listree-submenu-heading">File Set</div>
          <ul class="listree-submenu-items">
          <li>
            <a href="">File Set erstellen</a>
          </li>
          </ul>
        </li>

        <!-- Schedule -->
        <li>
          <div class="listree-submenu-heading">Schedule</div>
          <ul class="listree-submenu-items">
          <li>
            <a href="">Schedule erstellen</a>
          </li>
          </ul>
        </li>

        <!-- Pool -->
        <li>
          <div class="listree-submenu-heading">Pool</div>
          <ul class="listree-submenu-items">

            <!-- Always Incremental Pool -->
            <li>
              <div class="listree-submenu-heading">Always Incremental</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">AI-Pool erstellen</a>
              </li>
              </ul>
            </li>

            <!--Consolidate-Pool -->
            <li>
              <div class="listree-submenu-heading">Consolidate</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">Cons-Pool erstellen</a>
              </li>
              </ul>
            </li>

            <!-- Long Term Pool -->
            <li>
              <div class="listree-submenu-heading">Long Term</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">LT-Pool erstellen</a>
              </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- Job -->
        <li>
          <div class="listree-submenu-heading">Job</div>
          <ul class="listree-submenu-items">

            <!-- Classic Job -->
            <li>
              <div class="listree-submenu-heading">Classic</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">Classic-Job erstellen</a>
              </li>
              </ul>
            </li>

            <!-- Always Incremental Job -->
            <li>
              <div class="listree-submenu-heading">Always Incremental</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">AI-Job erstellen</a>
              </li>
              </ul>
            </li>

            <!--Consolidate Job -->
            <li>
              <div class="listree-submenu-heading">Consolidate</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">Cons-Job erstellen</a>
              </li>
              </ul>
            </li>

            <!-- Long Term Job -->
            <li>
              <div class="listree-submenu-heading">Long Term</div>
              <ul class="listree-submenu-items">

              <li>
                <div class="listree-submenu-heading">Copy Job</div>
                <ul class="listree-submenu-items">
                <li>
                  <a href="">Copy-Job erstellen</a>
                </li>
                </ul>
              </li>

              <li>
                <div class="listree-submenu-heading">Virtual Full</div>
                <ul class="listree-submenu-items">
                <li>
                  <a href="">VF-Job erstellen</a>
                </li>
                </ul>
              </li>

              </ul>
            </li>

          </ul>
        </li>

        <!-- Storage -->
        <li>
          <div class="listree-submenu-heading">Storage</div>
          <ul class="listree-submenu-items">
          <li>
            <a href="">Storage erstellen</a>
          </li>
          </ul>
        </li>

      </ul>
      </li>

     <!-- FILE DAEMON -->
        <li>
            <div class="listree-submenu-heading">FILE DAEMON (Client Side)</div>
            <ul class="listree-submenu-items">

            <li>
              <div class="listree-submenu-heading">Client</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">Client erstellen</a>
              </li>
              </ul>
            </li>
            </ul>

        </li>

     <!-- STORAGE DAEMON -->
        <li>
          <div class="listree-submenu-heading">STORAGE DAEMON (Server Side)</div>
          <ul  class="listree-submenu-items">

            <li>
              <div class="listree-submenu-heading">Classic Storage</div>
              <ul class="listree-submenu-items">
              <li>
                <a href="">Classic Storage erstellen</a>
              </li>
              </ul>
            </li>

            <li>
              <div class="listree-submenu-heading">Tape Storage</div>
              <ul class="listree-submenu-items">

                <li>
                  <div class="listree-submenu-heading">Tape Library</div>
                  <ul class="listree-submenu-items">
                  <li>
                    <a href="">Tape Library konfigurieren</a>
                  </li>
                  </ul>
                </li>

                <li>
                  <div class="listree-submenu-heading">Autochanger</div>
                  <ul class="listree-submenu-items">
                  <li>
                    <a href="">Autochanger konfigurieren</a>
                  </li>
                  </ul>
                </li>


              </ul>
            </li>

          </ul>
        </li>

    </ul>
</div>


    <script src="./tree-view-nested-list/dist/listree.umd.min.js"></script>
    <script>
        listree();
    </script>
    <script>


try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
  </body>
</html>
