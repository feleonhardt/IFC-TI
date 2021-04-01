        );

        var options = {
          title: '<?php echo $_POST['nm'].".json"; ?>',
          curveType: 'function',
          legend: { position: 'right' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <?php include("menu.html"); ?>
    <div class="container center">
      <form action="" method="post">
        <div class="row">
          <div class="input-field col l6 offset-l3">
            <input id="nm" name="nm" value="" required type="text">
            <label for="nm">NOME DO ARQUIVO</label>
            <button type="submit" name="" class="waves-effect waves-light black btn-large" style="color: #76ff03">GERAR GRÁFICO</button>
          </div>
        </div>
      </form>
      <div id="curve_chart" style="height: 50em"></div>
    </div>
  </body>
  <script type="text/javascript">
  	$(document).ready(function() {
  		M.updateTextFields();
  	});
  </script>
</html>
