
<footer class="footer">
      <div class="container-fluid">
          <nav class="pull-left">
          </nav>
          <div class="copyright pull-right">
              &copy; <script>document.write(new Date().getFullYear())</script>, por <a href="http://www.cyberiavirtual.net">Cyberia Virtual</a>
          </div>
      </div>
</footer>
<?php
$url = explode("/",$this->request->url);
if($url[0] != ''){
  $method = $url[1];
  switch ($method)
  {
    case 'monitor-casillas':
    case 'MonitorCasillas':
    ?>
        <script>
        $(document).ready(function () {
          function getMonitorCasillas()
          {
              $.ajax({
                  url:'/XmfCasillas/monitorCasillas',
                  type: 'POST',
                  dataType: "html",
                  evalScripts:true,

                  success:function (data, textStatus) {
                      $("#divMonitorCasillas").html(data);
                  }
              });
          }
          setInterval(getMonitorCasillas, 30000);
        });
        </script>
    <?php
    break;
  }
}
  ?>
