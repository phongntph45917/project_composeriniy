<div class="row bm frmtitle">
            <h1>Biểu đồ thống kê</h1>
        </div>
        <div class="row">
            <form action="" method="post">
                <div class="row frmcontent">
                <div
                  id="myChart" style="width:100%; max-width:800px; height:800px;">
                </div>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        const data = google.visualization.arrayToDataTable([

          ['Contry', 'Mhl'],

          <?php
          $tongdm=count($list_thongke);
          $i=1;
          foreach ($list_thongke as $tk) {
            extract($tk);
            if($i==$tongdm) $dauphay=""; else $dauphay=",";
            echo "['".$tk['tendm']."',".$tk['countsp']."]".$dauphay;
            $i+=1;
          }
          ?>
         
        ]);

      const options = {
        title:'Biểu đồ thống kê sản phẩm theo danh mục'
      };

      const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);
      }
        </script>
                </div>
                    
            </form>
        </div>

        