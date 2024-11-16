<?php include_once "check.php" ;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Simulator</title>
        <script src="script/junction_3_set.js"></script>
        <script src="script/junction_5_cal.js"></script>

         <script src="Chart.js-2.7.2/dist/Chart.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <script src="script/save.js"></script>


        <!-- generel link-->

        <!-- Theme style -->
        <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
        <div class="container-fluid">
		   <!--input sun consentartion-->
       <table>

      <tr>

        <td>
           <div tabindex="-1" class="modal fade" id="exampleModalsun" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
			  <div class="col-lg-2"> </div>
               <div class="form-group col-lg-8">
			   <form >
                            <label class="control-label" for="formInput128">Sun concentration(Minimum)
                              </label>
                            <input type="number" required class="form-control" min="1" id="c_min" placeholder="Minimum 1">
							   <label class="control-label" for="formInput128">Sun concentration(Maximum)
                              </label>
                            <input type="number" required class="form-control" max="1000" id="c_max" placeholder="Maximum 1000">
							<a onclick="sun_ef()" class="btn btn-success" data-target="#exampleModalsungraph" data-toggle="modal">show</a>

			   </form>
			   </div>
               <div class="col-lg-2"> </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
            <!--sun consentration-->
            <!--I-V Curve junction 1-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">X</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-j1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_j1()"><a  id="link1" download="ChartPng.png">Save as png</a></button>

                    <button type="button" class="btn btn-success" data-target="#exampleModaldatatable" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end junction 1-->

            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data(plotData){
              var xy=plotData;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end


            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable')" value="Export as PDF"/>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->


            <!--I-V Curve junction 2-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal2" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-j2"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
								        <button type="button" class="btn btn-primary" onclick="download_j2()"><a  id="link2" download="ChartPng.png">Save as png</a></button>

                          <button type="button" class="btn btn-success" data-target="#exampleModaldatatable2" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end-->

            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data2(plotData2){
              var xy=plotData2;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable2");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end


            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable2" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable2">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable2">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable2')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable2')" value="Export as PDF"/>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->

            <!--I-V Curve junction 3-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal3" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-j3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_j3()"><a  id="link3" download="ChartPng.png">Save as png</a></button>

                    <button type="button" class="btn btn-success" data-target="#exampleModaldatatable3" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end-->

            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data3(plotData3){
              var xy=plotData3;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable3");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end


            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable3" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable3">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable3">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable3')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable3')" value="Export as PDF"/>



                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->


			 <!--I-V Curve junction 4-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal4" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-j4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_j4()"><a  id="link4" download="ChartPng.png">Save as png</a></button>

                    <button type="button" class="btn btn-success" data-target="#exampleModaldatatable4" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end-->

            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data4(plotData4){
              var xy=plotData4;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable4");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end


            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable4" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable4">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable4">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable4')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable4')" value="Export as PDF"/>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->

			<!--I-V Curve junction 5-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal5" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-j5"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_j5()"><a  id="link5" download="ChartPng.png">Save as png</a></button>

                    <button type="button" class="btn btn-success" data-target="#exampleModaldatatable5" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end-->
            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data5(plotData5){
              var xy=plotData5;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable5");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end

            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable5" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable5">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable5">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable5')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable5')" value="Export as PDF"/>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->
			            <!--I-V Curve junction -->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModalall" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-all"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_all()"><a  id="link6" download="ChartPng.png">Save as png</a></button>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--I-V Curve end-->
			<!--sun vs efficiency-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModalsungraph" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    I-V Curve </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <canvas id="line-chart-sunvseff"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
									<button type="button" class="btn btn-primary" onclick="download_sunvseff()"><a  id="link7" download="ChartPng.png">Save as png</a></button>

                    <button type="button" class="btn btn-success" data-target="#exampleModaldatatable6" data-toggle="modal">Data</button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--sun vs efficincy-->
            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data6(plotData6){
              var xy=plotData6;

              console.log("from table");
              console.log(xy.length);

              var tb1=document.getElementById("myTable6");


             for(var i=0;i<xy.length;i++){
               var row= tb1.insertRow();
               var cell1=row.insertCell();
               var cell2=row.insertCell();

               cell1.innerHTML=xy[i].x;
               cell2.innerHTML=xy[i].y;
             }

            }
            ///create table end
            ///create pdf from table start
                       function printDiv(divName){
              var mywindow = window.open('', 'PRINT', 'height=1000,width=1000');
                       mywindow.document.write(document.getElementById(divName).innerHTML);

                      mywindow.document.close(); // necessary for IE >= 10
                      mywindow.focus(); // necessary for IE >= 10*/

                      mywindow.print();
                      mywindow.close();

                      return true;
  }

            ///create pdf from table end

            function exportToExcel(tableID){
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>";
            var textRange; var j=0;
            tab = document.getElementById(tableID); // id of table
            for(j = 0 ; j < tab.rows.length ; j++)
            {
            tab_text=tab_text;
            tab_text=tab_text+tab.rows[j].innerHTML.toUpperCase()+"</tr>";
            //tab_text=tab_text+"</tr>";
            }
            tab_text= tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); //remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); //remove input params
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write( 'sep=,\r\n' + tab_text);
            txtArea1.document.close();
            txtArea1.focus();
            sa=txtArea1.document.execCommand("SaveAs",true,"sudhir123.txt");
            }
            else {
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));
            }

            return (sa);
            }

            </script>
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModaldatatable6" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-2"> </div>
                                    <div class="form-group col-lg-8" id="mytable6">
                                      <table style="margin-top:5px"class="table"  border=1 id="myTable6">
                                        <tr class="info">
                                          <th>VOC(X)</th>
                                          <th>JSC(Y)</th>

                                        </tr>
                                      </table>
                                    </div>
                                    <div class="col-lg-2"> </div>
                                    <div class="modal-footer">
                                      <input style="margin-bottom:5px" class="btn btn-info" type="button" value="Export as excel" onclick="exportToExcel('myTable6')" />
                                    <input style="margin-bottom:5px" TYPE="button" class="btn btn-info" onclick="printDiv('mytable6')" value="Export as PDF"/>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--X AND Y VALUE-->

            <!--junction 1-->
            <div class="row">

                <div class="row">
                    <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">
					<nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">


                                        <li>
                                            <a href="index.php">Simulator</a>
                                        </li>


                                    </ul>



                                    <ul class="nav navbar-nav navbar-right">
                                      <li>
                                        <a target="_blank" href="manual.pdf">Manual</a>

                                    </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Important info<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                  <li>
                                                    <a title="Reference: ASTM G173-03, Standard Tables for Reference Solar Spectral Irradiances: Direct Normal and Hemispherical on 37° Tilted Surface, ASTM International, West Conshohocken, PA, 2003, www.astm.org" target="_blank" href="ASTMG173.xls">I( irradiance ) list </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="materials.docx">Doc file</a>
                                                </li>

                                                <li>
                                                    <a target="_blank" href="materials.pdf">pdf file</a>
                                                </li>





                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">new configuration <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="calculation2.php">No of Junction TWO</a>
                                                </li>

                                                <li>
                                                    <a href="calculation3.php">No of Junction THREE</a>
                                                </li>

                                                <li>
                                                    <a href="calculation4.php">No of Junction FOUR</a>
                                                </li>



                                                <li>
                                                    <a href="calculation5.php">No of Junction FIVE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo   $_SESSION['user_name']; ?><b class="caret"></b></a>
                                           <ul class="dropdown-menu">
                                               <li>
                                                   <a href="logout.php">Log out</a>
                                               </li>
                                           </ul>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>       </div>
                </div>


            </div>
            <!--junction 1 end-->
            <script>
					//junction-1 I-V Curve start
					function set(dataset,xaxis){
					plot=dataset;
					  console.log(plot);

					  	new Chart(document.getElementById("line-chart-j1"), {
					  type: 'line',
					  data: {
						labels: xaxis,
						datasets: [{
							data: dataset ,
							label: "Junction-1",
							borderColor: "#3e95cd",
							fill: false,

						  }
						]
					  },
            options: {

              scales: {
                yAxes: [{
                  scaleLabel: {
                    display: true,
                    labelString: 'Short circuit current density (Jsc)',
                      fontSize:22
                  }
                }],
                xAxes: [{
                  scaleLabel: {
                    display: true,
                    labelString: 'Open circuit voltage (Voc)',
                    fontSize:22
                  }
                }]
              }  ,


            }
					});
					}


					//junction-1 end

                   	//junction-2 I-V Curve start
					function set2(dataset,xaxis){
						plot=dataset;
						  console.log(plot);

							new Chart(document.getElementById("line-chart-j2"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "junction-2",
								borderColor: "#f46e42",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Short circuit current density (Jsc)',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Open circuit voltage (Voc)',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}
					//junction-2 I-V Curve end

					       	//junction-3 I-V Curve start
					function set3(dataset,xaxis){
						plot=dataset;
						  console.log(plot);

							new Chart(document.getElementById("line-chart-j3"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "junction-3",
								borderColor: "#f44441",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Short circuit current density (Jsc)',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Open circuit voltage (Voc)',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}
					//junction-3 I-V Curve end


					       	//junction-4 I-V Curve start
					function set4(dataset,xaxis){
						plot=dataset;
						  console.log(plot);

							new Chart(document.getElementById("line-chart-j4"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "junction-4",
								borderColor: "#42f44e",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Short circuit current density (Jsc)',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Open circuit voltage (Voc)',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}

					     	//junction-5 I-V Curve start
					function set5(dataset,xaxis){
						plot=dataset;
						  console.log(plot);

							new Chart(document.getElementById("line-chart-j5"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "junction-5",
								borderColor: "#f48942",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Short circuit current density (Jsc)',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Open circuit voltage (Voc)',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}
					//junction-5 I-V Curve end



						       	//junction-all I-V Curve start
					function setall(dataset1,dataset2,dataset3,dataset4,dataset5,xaxis){

							new Chart(document.getElementById("line-chart-all"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset1 ,
								label: "junction-1",
								borderColor: "#f44441",
								fill: false,

							  },{
								data: dataset2 ,
								label: "junction-2",
								borderColor: "#8e5ea2",
								fill: false,

							  },{
								data: dataset3 ,
								label: "junction-3",
								borderColor: "#3cba9f",
								fill: false,

							  }
							  ,{
								data: dataset4 ,
								label: "junction-4",
								borderColor: "#42f44e",
								fill: false,

							  }
							  ,{
								data: dataset5 ,
								label: "junction-5",
								borderColor: "#1d00ff",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Short circuit current density (Jsc)',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Open circuit voltage (Voc)',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}
					//junction-all I-V Curve end

					        	//sun vs efficiency I-V Curve start
					function sun_eff_graph(dataset,xaxis){
						plot=dataset;
						  console.log(plot);

							new Chart(document.getElementById("line-chart-sunvseff"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "sun vs efficiency",
								borderColor: "#f46e42",
								fill: false,

							  }
							]
						  },
              options: {

                scales: {
                  yAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Efficiency',
                        fontSize:22
                    }
                  }],
                  xAxes: [{
                    scaleLabel: {
                      display: true,
                      labelString: 'Sun concentration',
                      fontSize:22
                    }
                  }]
                }  ,


              }
						});
					}
					//sun vs efficiency I-V Curve end

					</script>
        </div>
        <div class="">


                    <div class="row">
                       <div class="col-md-1">
                       <h2 class="page-header">Select and calculate</h2>
                       </div>
                      <div class="col-md-10 col-sm-12 col-sx-12 span12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Junction 1</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Junction 2</a></li>
                            <li><a href="#tab_3" data-toggle="tab">Junction 3</a></li>
                            <li><a href="#tab_4" data-toggle="tab">Junction 4</a></li>
                            <li><a href="#tab_5" data-toggle="tab">Junction 5</a></li>

                            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                              <div class="row">
                              <div class="row">
                                  <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-1 █▓▒░</div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <div class="form-group">
                                                  <label class="control-label" for="formInput146">Material</label>
                                                  <select id="mySelect" onchange="myFunction()" class="form-control">
                                                    <option value="">Select one </option>
                                                      <option value="GaInP2">GaInP2 </option>

                                                      <option value="GaAs">GaAs</option>

                                                      <option value="ge">Ge</option>
<option value="AlAs">AlAs</option>

                                                      <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                                      <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                                      <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                                      <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                                      <option value="Si.5714Ge.428">Si.5714Ge.428</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
              						    <div class="col-md-6">
                                          <div class="form-group">
                                              <div class="form-group">
                                                  <label class="control-label" for="formInput146">Name (if new material)</label>
                                                <input type="text" class="form-control"  required placeholder="Name">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-sm-12 col-sx-12 ">
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">M
                                              <sub style="font-weight:bold;font-size:15px">c</sub>&nbsp;(No of equivalent minima in the conduction
                                              band)
                                          </label>
                                          <input type="n" class="form-control" id="mc" required placeholder="No of equivalent minima in the conduction band">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">M
                                              <sub style="font-weight:bold;font-size:15px">v</sub>&nbsp;(No of equivalent minima in the valence band)
                                          </label>
                                          <input type="text" class="form-control" id="mv" required placeholder="No of equivalent minima in the valence band">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">&mu;
                                              <sub style="font-weight:bold;font-size:15px">e</sub>&nbsp;(Electron Mobility)[m2/Vs]
                                          </label>
                                          <input type="text" class="form-control" id="mue" required placeholder="Electron Mobility ">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">&mu;
                                              <sub style="font-weight:bold;font-size:15px">h</sub>&nbsp;(Hole mobility)[m2/Vs]
                                          </label>
                                          <input type="text" class="form-control" id="muh" placeholder="Hole mobility">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">&lambda;
                                              <sub style="font-weight:bold;font-size:15px"></sub>&nbsp;(Wavelength)[m]
                                          </label>
                                          <input type="text" class="form-control" id="lamda" placeholder="Wavelength">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">Eg (Bandgap)[eV]
              </label>
                                          <input type="text" class="form-control" id="eg" placeholder="Bandgap">
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-sm-12 col-sx-12">
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">M
                                              <sub style="font-weight:bold;font-size:15px">e</sub>*&nbsp;(Elective mass of electron)
                                          </label>
                                          <input type="text" class="form-control" id="me" placeholder="Me*">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">M
                                              <sub style="font-weight:bold;font-size:15px">h</sub>*&nbsp;(Elective mass of hole)
                                          </label>
                                          <input type="text" class="form-control" id="mh" placeholder="Mh*">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">T
                                              <sub style="font-weight:bold;font-size:15px">SRH</sub>&nbsp;(Shockley-Read-Hall lifetime)[s]
                                          </label>
                                          <input type="text" class="form-control" id="srh" placeholder="Shockley-Read-Hall lifetime">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">B (Direct band-band recombination coefficient)
                                              [S

                                              <sup>1</sup>M
                                              <sup>3</sup>]
                                          </label>
                                          <input type="text" class="form-control" id="b" placeholder="Direct band-band recombination coefficient">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">C (Sun concentration)</label>
                                          <input type="number" class="form-control" id="C" placeholder="sun concentration">
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-sm-12 col-sx-12">
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">N
                                              <sub style="font-weight:bold;font-size:15px">A</sub>&nbsp;(Acceptor concentration)[M
                                              <sup>-3</sup>]
                                          </label>
                                          <input type="text" class="form-control" id="na" placeholder="Acceptor concentration ">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">N
                                              <sub style="font-weight:bold;font-size:15px">D</sub>&nbsp;(Donor concentration)[M
                                              <sup>-3</sup>]
                                          </label>
                                          <input type="text" class="form-control" id="nd" placeholder="Donor concentration ">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">X
                                              <sub style="font-weight:bold;font-size:15px">n</sub>&nbsp;(Thickness of n-layer)[m]
                                          </label>
                                          <input type="text" class="form-control" id="xn" placeholder="Donor concentration">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">X
                                              <sub style="font-weight:bold;font-size:15px">p</sub>&nbsp;(Thickness of p-layer)[m]
                                          </label>
                                          <input type="text" class="form-control" id="xp" placeholder="Thickness of p- layer">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput128">I (Irradiance)
              </label>
                                          <input type="number" step="0.01" class="form-control" id="I" placeholder="irradiance">
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                                      <h4>result (Junction-1)</h4>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput39">Short circuit current density (Jsc)
              </label>
                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc1" placeholder="Placeholder text">
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label" for="formInput27">Open circuit voltage (Voc) </label>
                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc1" placeholder="Placeholder text">
                                      </div>
                                  </div>
                                  <button type="button" onclick="calculate_lay1()" class="btn btn-success">save</button>
                                  <button type="button" class="btn btn-success" data-target="#exampleModal1" data-toggle="modal">I-V Curve</button>
                                </div>
                              </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                  <div class="row">
                                      <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-2 █▓▒░</div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Material</label>
                                                      <select id="mySelect2" onchange="myFunction2()" class="form-control">
                                                        <option value="">Select one </option>
                                                          <option value="GaInP2">GaInP2 </option>

                                                          <option value="GaAs">GaAs</option>

                                                          <option value="ge">Ge</option>
<option value="AlAs">AlAs</option>

                                                          <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                                          <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                                          <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                                          <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                                          <option value="Si.5714Ge.428">Si.5714Ge.428</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                  						    <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Name (if new material)</label>
                                                    <input type="text" class="form-control"  required placeholder="Name">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12 ">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">c</sub>&nbsp;(No of equivalent minima in the conduction
                                                  band)
                                              </label>
                                              <input type="n" class="form-control" id="mc2" required placeholder="No of equivalent minima in the conduction band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">v</sub>&nbsp;(No of equivalent minima in the valence band)
                                              </label>
                                              <input type="text" class="form-control" id="mv2" required placeholder="No of equivalent minima in the valence band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>&nbsp;(Electron Mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="mue2" required placeholder="Electron Mobility ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>&nbsp;(Hole mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="muh2" placeholder="Hole mobility">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&lambda;
                                                  <sub style="font-weight:bold;font-size:15px"></sub>&nbsp;(Wavelength)[m]
                                              </label>
                                              <input type="text" class="form-control" id="lamda2" placeholder="Wavelength">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">Eg (Bandgap)[eV]
                  </label>
                                              <input type="text" class="form-control" id="eg2" placeholder="Bandgap">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>*&nbsp;(Elective mass of electron)
                                              </label>
                                              <input type="text" class="form-control" id="me2" placeholder="Me*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>*&nbsp;(Elective mass of hole)
                                              </label>
                                              <input type="text" class="form-control" id="mh2" placeholder="Mh*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">T
                                                  <sub style="font-weight:bold;font-size:15px">SRH</sub>&nbsp;(Shockley-Read-Hall lifetime)[s]
                                              </label>
                                              <input type="text" class="form-control" id="srh2" placeholder="Shockley-Read-Hall lifetime">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">B (Direct band-band recombination coefficient)
                                                  [S

                                                  <sup>1</sup>M
                                                  <sup>3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="b2" placeholder="Direct band-band recombination coefficient">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">C (Sun concentration)</label>
                                              <input type="number" class="form-control" id="C2" placeholder="sun concentration">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">A</sub>&nbsp;(Acceptor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="na2" placeholder="Acceptor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">D</sub>&nbsp;(Donor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="nd2" placeholder="Donor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">n</sub>&nbsp;(Thickness of n-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xn2" placeholder="Donor concentration">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">p</sub>&nbsp;(Thickness of p-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xp2" placeholder="Thickness of p- layer">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">I (Irradiance)
                  </label>
                                              <input type="number" step="0.01" class="form-control" id="I2" placeholder="irradiance">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                                          <h4>result (Junction-2)</h4>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput39">Short circuit current density (Jsc)
                  </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc2" placeholder="Placeholder text">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput27">Open circuit voltage (Voc) </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc2" placeholder="Placeholder text">
                                          </div>
                                      </div>
                                      <button type="button" onclick="calculate_lay2()" class="btn btn-success">save</button>
                                      <button type="button" class="btn btn-success" data-target="#exampleModal2" data-toggle="modal">I-V Curve</button>
                                  </div>
                              </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                              <div class="row">
                                  <div class="row">
                                      <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-3 █▓▒░</div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Material</label>
                                                      <select id="mySelect3" onchange="myFunction3()" class="form-control">
                                                        <option value="">Select one </option>
                                                          <option value="GaInP2">GaInP2 </option>

                                                          <option value="GaAs">GaAs</option>

                                                          <option value="ge">Ge</option>
<option value="AlAs">AlAs</option>

                                                          <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                                          <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                                          <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                                          <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                                          <option value="Si.5714Ge.428">Si.5714Ge.428</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                  						    <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Name (if new material)</label>
                                                    <input type="text" class="form-control"  required placeholder="Name">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12 ">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">c</sub>&nbsp;(No of equivalent minima in the conduction
                                                  band)
                                              </label>
                                              <input type="n" class="form-control" id="mc3" required placeholder="No of equivalent minima in the conduction band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">v</sub>&nbsp;(No of equivalent minima in the valence band)
                                              </label>
                                              <input type="text" class="form-control" id="mv3" required placeholder="No of equivalent minima in the valence band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>&nbsp;(Electron Mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="mue3" required placeholder="Electron Mobility ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>&nbsp;(Hole mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="muh3" placeholder="Hole mobility">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&lambda;
                                                  <sub style="font-weight:bold;font-size:15px"></sub>&nbsp;(Wavelength)[m]
                                              </label>
                                              <input type="text" class="form-control" id="lamda3" placeholder="Wavelength">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">Eg (Bandgap)[eV]
                  </label>
                                              <input type="text" class="form-control" id="eg3" placeholder="Bandgap">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>*&nbsp;(Elective mass of electron)
                                              </label>
                                              <input type="text" class="form-control" id="me3" placeholder="Me*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>*&nbsp;(Elective mass of hole)
                                              </label>
                                              <input type="text" class="form-control" id="mh3" placeholder="Mh*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">T
                                                  <sub style="font-weight:bold;font-size:15px">SRH</sub>&nbsp;(Shockley-Read-Hall lifetime)[s]
                                              </label>
                                              <input type="text" class="form-control" id="srh3" placeholder="Shockley-Read-Hall lifetime">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">B (Direct band-band recombination coefficient)
                                                  [S

                                                  <sup>1</sup>M
                                                  <sup>3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="b3" placeholder="Direct band-band recombination coefficient">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">C (Sun concentration)</label>
                                              <input type="number" class="form-control" id="C3" placeholder="sun concentration">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">A</sub>&nbsp;(Acceptor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="na3" placeholder="Acceptor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">D</sub>&nbsp;(Donor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="nd3" placeholder="Donor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">n</sub>&nbsp;(Thickness of n-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xn3" placeholder="Donor concentration">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">p</sub>&nbsp;(Thickness of p-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xp3" placeholder="Thickness of p- layer">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">I (Irradiance)
                  </label>
                                              <input type="number" step="0.01" class="form-control" id="I3" placeholder="irradiance">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                                          <h4>result (Junction-3)</h4>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput39">Short circuit current density (Jsc)
                  </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc3" placeholder="Placeholder text">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput27">Open circuit voltage (Voc) </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc3" placeholder="Placeholder text">
                                          </div>
                                      </div>
                                      <button type="button" onclick="calculate_lay3()" class="btn btn-success">save</button>
                                      <button type="button" class="btn btn-success" data-target="#exampleModal3" data-toggle="modal">I-V Curve</button>
                                  </div>
                              </div>
                            </div>

                            <div class="tab-pane" id="tab_4">
                              <div class="row">
                                  <div class="row">
                                      <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-4 █▓▒░</div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Material</label>
                                                      <select id="mySelect4" onchange="myFunction4()" class="form-control">
                                                        <option value="">Select one </option>
                                                          <option value="GaInP2">GaInP2 </option>

                                                          <option value="GaAs">GaAs</option>

                                                          <option value="ge">Ge</option>
<option value="AlAs">AlAs</option>

                                                          <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                                          <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                                          <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                                          <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                                          <option value="Si.5714Ge.428">Si.5714Ge.428</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                  						    <div class="col-md-6">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <label class="control-label" for="formInput146">Name (if new material)</label>
                                                    <input type="text" class="form-control"  required placeholder="Name">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12 ">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">c</sub>&nbsp;(No of equivalent minima in the conduction
                                                  band)
                                              </label>
                                              <input type="n" class="form-control" id="mc4" required placeholder="No of equivalent minima in the conduction band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">v</sub>&nbsp;(No of equivalent minima in the valence band)
                                              </label>
                                              <input type="text" class="form-control" id="mv4" required placeholder="No of equivalent minima in the valence band">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>&nbsp;(Electron Mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="mue4" required placeholder="Electron Mobility ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&mu;
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>&nbsp;(Hole mobility)[m2/Vs]
                                              </label>
                                              <input type="text" class="form-control" id="muh4" placeholder="Hole mobility">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">&lambda;
                                                  <sub style="font-weight:bold;font-size:15px"></sub>&nbsp;(Wavelength)[m]
                                              </label>
                                              <input type="text" class="form-control" id="lamda4" placeholder="Wavelength">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">Eg (Bandgap)[eV]
                  </label>
                                              <input type="text" class="form-control" id="eg4" placeholder="Bandgap">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">e</sub>*&nbsp;(Elective mass of electron)
                                              </label>
                                              <input type="text" class="form-control" id="me4" placeholder="Me*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">M
                                                  <sub style="font-weight:bold;font-size:15px">h</sub>*&nbsp;(Elective mass of hole)
                                              </label>
                                              <input type="text" class="form-control" id="mh4" placeholder="Mh*">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">T
                                                  <sub style="font-weight:bold;font-size:15px">SRH</sub>&nbsp;(Shockley-Read-Hall lifetime)[s]
                                              </label>
                                              <input type="text" class="form-control" id="srh4" placeholder="Shockley-Read-Hall lifetime">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">B (Direct band-band recombination coefficient)
                                                  [S

                                                  <sup>1</sup>M
                                                  <sup>3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="b4" placeholder="Direct band-band recombination coefficient">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">C (Sun concentration)</label>
                                              <input type="number" class="form-control" id="C4" placeholder="sun concentration">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-sm-12 col-sx-12">
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">A</sub>&nbsp;(Acceptor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="na4" placeholder="Acceptor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">N
                                                  <sub style="font-weight:bold;font-size:15px">D</sub>&nbsp;(Donor concentration)[M
                                                  <sup>-3</sup>]
                                              </label>
                                              <input type="text" class="form-control" id="nd4" placeholder="Donor concentration ">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">n</sub>&nbsp;(Thickness of n-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xn4" placeholder="Donor concentration">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">X
                                                  <sub style="font-weight:bold;font-size:15px">p</sub>&nbsp;(Thickness of p-layer)[m]
                                              </label>
                                              <input type="text" class="form-control" id="xp4" placeholder="Thickness of p- layer">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput128">I (Irradiance)
                  </label>
                                              <input type="number" step="0.01" class="form-control" id="I4" placeholder="irradiance">
                                          </div>
                                      </div>
                                      <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                                          <h4>result(Junction-4)</h4>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput39">Short circuit current density (Jsc)
                  </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc4" placeholder="Placeholder text">
                                          </div>
                                          <div class="form-group">
                                              <label class="control-label" for="formInput27">Open circuit voltage (Voc) </label>
                                              <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc4" placeholder="Placeholder text">
                                          </div>
                                      </div>
                                      <button type="button" onclick="calculate_lay4()" class="btn btn-success">save</button>
                                      <button type="button" class="btn btn-success" data-target="#exampleModal4" data-toggle="modal">I-V Curve</button>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="tab_5">
                              <div class="row">
                                              <div class="row">
                                                  <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-5 █▓▒░</div>
                                              </div>
                                              <div class="col-md-12 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <div class="form-group">
                                                                  <label class="control-label" for="formInput146">Material</label>
                                                                  <select id="mySelect5" onchange="myFunction5()" class="form-control">
                                                                    <option value="">Select one </option>
                                                                      <option value="GaInP2">GaInP2 </option>

                                                                      <option value="GaAs">GaAs</option>

                                                                      <option value="ge">Ge</option>
<option value="AlAs">AlAs</option>

                                                                      <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                                                      <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                                                      <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                                                      <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                                                      <option value="Si.5714Ge.428">Si.5714Ge.428</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </div>
                              						    <div class="col-md-6">
                                                          <div class="form-group">
                                                              <div class="form-group">
                                                                  <label class="control-label" for="formInput146">Name (if new material)</label>
                                                                <input type="text" class="form-control"  required placeholder="Name">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3 col-sm-12 col-sx-12 ">
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">M
                                                              <sub style="font-weight:bold;font-size:15px">c</sub>&nbsp;(No of equivalent minima in the conduction
                                                              band)
                                                          </label>
                                                          <input type="n" class="form-control" id="mc5" required placeholder="No of equivalent minima in the conduction band">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">M
                                                              <sub style="font-weight:bold;font-size:15px">v</sub>&nbsp;(No of equivalent minima in the valence band)
                                                          </label>
                                                          <input type="text" class="form-control" id="mv5" required placeholder="No of equivalent minima in the valence band">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">&mu;
                                                              <sub style="font-weight:bold;font-size:15px">e</sub>&nbsp;(Electron Mobility)[m2/Vs]
                                                          </label>
                                                          <input type="text" class="form-control" id="mue5" required placeholder="Electron Mobility ">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">&mu;
                                                              <sub style="font-weight:bold;font-size:15px">h</sub>&nbsp;(Hole mobility)[m2/Vs]
                                                          </label>
                                                          <input type="text" class="form-control" id="muh5" placeholder="Hole mobility">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">&lambda;
                                                              <sub style="font-weight:bold;font-size:15px"></sub>&nbsp;(Wavelength)[m]
                                                          </label>
                                                          <input type="text" class="form-control" id="lamda5" placeholder="Wavelength">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">Eg (Bandgap)[eV]
                              </label>
                                                          <input type="text" class="form-control" id="eg5" placeholder="Bandgap">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3 col-sm-12 col-sx-12">
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">M
                                                              <sub style="font-weight:bold;font-size:15px">e</sub>*&nbsp;(Elective mass of electron)
                                                          </label>
                                                          <input type="text" class="form-control" id="me5" placeholder="Me*">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">M
                                                              <sub style="font-weight:bold;font-size:15px">h</sub>*&nbsp;(Elective mass of hole)
                                                          </label>
                                                          <input type="text" class="form-control" id="mh5" placeholder="Mh*">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">T
                                                              <sub style="font-weight:bold;font-size:15px">SRH</sub>&nbsp;(Shockley-Read-Hall lifetime)[s]
                                                          </label>
                                                          <input type="text" class="form-control" id="srh5" placeholder="Shockley-Read-Hall lifetime">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">B (Direct band-band recombination coefficient)
                                                              [S

                                                              <sup>1</sup>M
                                                              <sup>3</sup>]
                                                          </label>
                                                          <input type="text" class="form-control" id="b5" placeholder="Direct band-band recombination coefficient">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">C (Sun concentration)</label>
                                                          <input type="number" class="form-control" id="C5" placeholder="sun concentration">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3 col-sm-12 col-sx-12">
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">N
                                                              <sub style="font-weight:bold;font-size:15px">A</sub>&nbsp;(Acceptor concentration)[M
                                                              <sup>-3</sup>]
                                                          </label>
                                                          <input type="text" class="form-control" id="na5" placeholder="Acceptor concentration ">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">N
                                                              <sub style="font-weight:bold;font-size:15px">D</sub>&nbsp;(Donor concentration)[M
                                                              <sup>-3</sup>]
                                                          </label>
                                                          <input type="text" class="form-control" id="nd5" placeholder="Donor concentration ">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">X
                                                              <sub style="font-weight:bold;font-size:15px">n</sub>&nbsp;(Thickness of n-layer)[m]
                                                          </label>
                                                          <input type="text" class="form-control" id="xn5" placeholder="Donor concentration">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">X
                                                              <sub style="font-weight:bold;font-size:15px">p</sub>&nbsp;(Thickness of p-layer)[m]
                                                          </label>
                                                          <input type="text" class="form-control" id="xp5" placeholder="Thickness of p- layer">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput128">I (Irradiance)
                              </label>
                                                          <input type="number" step="0.01" class="form-control" id="I5" placeholder="irradiance">
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                                                      <h4>result (Junction-5)</h4>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput39">Short circuit current density (Jsc)
                              </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc5" placeholder="Placeholder text">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput27">Open circuit voltage (Voc) </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc5" placeholder="Placeholder text">
                                                      </div>
                                                  </div>
                                                  <button type="button" onclick="calculate_lay5()" class="btn btn-success">save</button>
                                                  <button type="button" class="btn btn-success" data-target="#exampleModal5" data-toggle="modal">I-V Curve</button>
                                                  <div class="btn-group" style="margin-bottom:5px">
                                                      <button type="button"  class="btn btn-danger btn-default dropdown-toggle" data-toggle="dropdown">    ALL GRAPH
                                                          <span class="caret"></span>
                                                      </button>

                                                      <ul class="dropdown-menu" role="menu">
                                                          <li>
                                                              <a href="#" class="btn btn-danger btn-default"  style="color:white;background:green" onclick="calall()" data-target="#exampleModalall" style data-toggle="modal">voc vs jsc</a>
                                                          </li>

                                                          <li>
                                                              <a class="btn btn-info" style="color:white;background:red" data-target="#exampleModalsun" data-toggle="modal" >Sun Concentration vs Efficiency</a>
                                                          </li>


                                                      </ul>
                                                  </div>
                              					<button type="button" target="_blank" onclick="window.print()" class="btn btn-success" title="save efficiency for sun consentration 1 to 1000">Print all info</button>
                              					      <div class="col-md-3 col-lg-3" style="border: 2px solid #f4ad42; margin-top:5px;">
                                                      <h6>TOTAL CELL PARAMETERS FOR CONFIGURATION 1 FOR 1 SUN CONCENTRATION </h6>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput39">Current Density,Jsc
                              </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc" placeholder="Current Density,Jsc ">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput27">Total open circuit voltage,Voc</label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc" placeholder="Total open circuit voltage">
                                                      </div>
                                                       <div class="form-group">
                                                          <label class="control-label" for="formInput27">Maximum Voltage (Vm) </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="vm" placeholder="Maximum Voltage">
                                                      </div>
                                                       <div class="form-group">
                                                          <label class="control-label" for="formInput27">Maximum Current Density </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jm" placeholder="Maximum Current Density">
                                                      </div>
                                                       <div class="form-group">
                                                          <label class="control-label" for="formInput27">Fill factor  </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="ff" placeholder="Placeholder text">
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="control-label" for="formInput39">Air Mass selector
                                                          </label>

                                                          <select id="air_mass" onchange="air_mass_selector()" class="form-control">
                                                            <option  value="AM1.5G">AM 1.5G</option>
                                                            <option value="AM1.5D">AM 1.5D</option>
                                                            <option value="AM0">AM 0</option>
                                                          </select>



                                                                <script type="text/javascript">
                                                                ////////////////////////////////////////////////////////////////////////important calculation (v-max) ////////////////////////////////////////////
                                                                function air_mass_selector() {
                                                                  var air_mass_indicator = document.getElementById("air_mass").value;
                                                                  if(air_mass_indicator=="AM1.5D"){
                                                                console.log("am1.5d called");
                                                                    efficiency_AM15D();

                                                                  }else if(air_mass_indicator=="AM0"){
                                                                    console.log("am1.5g called");
                                                                    efficiency_AM0();
                                                                  }else{
                                                                    efficiency();
                                                                   console.log("am1.5g called");
                                                                  }
                                                                }
                                                                </script>

                                                       </div>
                                                       <div class="form-group">
                                                          <label class="control-label" for="formInput27">Efficiency, ? </label>
                                                          <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="ef" placeholder="Efficiency">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                            </div>
                            <!-- /.tab-pane -->
                          </div>
                          <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                      </div>
                      <!-- /.col -->


                    </div>
                    </div>
<script type="text/javascript">


		</script>
            <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
          <!--generel script -->
          <!-- jQuery 3 -->
<script src="../admin/bower_components/jquery/dist/jquery.min.js"></script>
    </body>
</html>
