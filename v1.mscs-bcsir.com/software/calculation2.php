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
        <script src="script/junction_2_cal.js"></script>
        <script src="Chart.js-2.7.2/dist/Chart.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <script src="script/save.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                                        <form>
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
            <!--line chart junction 1-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div style="width:70%" class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    LINE CHART </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
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
                                        <button type="button" class="btn btn-primary" onclick="download_j1()">
                                            <a id="link1" download="ChartPng.png">Save as png</a>
                                        </button>
                                        <button type="button" class="btn btn-success" data-target="#exampleModaldatatable" data-toggle="modal">Data</button>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--line chart end junction 1-->
            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data(plotData){
              var xy=plotData;

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
           ///create pdf from table start
            function printDiv(divName){
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
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
            <!--line chart junction 2-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModal3" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    LINE CHART </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
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
                                        <button type="button" class="btn btn-primary" onclick="download_j2()">
                                            <a id="link2" download="ChartPng.png">Save as png</a>
                                        </button>
                                          <button type="button" class="btn btn-success" data-target="#exampleModaldatatable2" data-toggle="modal">Data</button>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--line chart end-->
            <!--X AND Y VALUE -->


            <script type="text/javascript">
                        ///create table start
            function data2(plotData3){
              var xy=plotData3;


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
           ///create pdf from table start
            function printDiv(divName){
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
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
            <!--line chart junction 3-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModalall" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    LINE CHART </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
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
                                        <button type="button" class="btn btn-primary" onclick="download_all()">
                                            <a id="link4" download="ChartPng.png">Save as png</a>
                                        </button>

                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--line chart end-->



            <!--sun vs efficiency-->
            <table>
                <tr>
                    <td>
                        <div tabindex="-1" class="modal fade" id="exampleModalsungraph" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="exampleModalLabel">
                    LINE CHART </h2>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
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
                                        <button type="button" class="btn btn-primary" onclick="download_sunvseff()">
                                            <a id="link5" download="ChartPng.png">Save as png</a>
                                        </button>
                                         <button type="button" class="btn btn-success" data-target="#exampleModaldatatable3" data-toggle="modal">Data</button>
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
            function data3(plotDatasunef){
              var xy=plotDatasunef;

              console.log("from table");
              console.log(xy.length);
              console.log(xy[100].x);
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
           ///create pdf from table start
            function printDiv(divName){
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
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
                                         <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Important info<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
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
                        </nav>                        ░▒▓█ Junction-1 █▓▒░
                    </div>
                </div>
                <div class="col-md-1 col-sm-0 col-sx-0">
</div>
                <div class="col-md-10 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
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

                                        <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                        <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                        <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                        <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                        <!--<option value="Si.5714Ge.428">Si.5714Ge.428</option>-->
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
                                <sub style="font-weight:bold;font-size:15px">c</sub>(No of equivalent minima in the conduction
                                band)
                            </label>
                            <input type="n" class="form-control" id="mc" required placeholder="No of equivalent minima in the conduction band">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">v</sub>(No of equivalent minima in the valence band)
                            </label>
                            <input type="text" class="form-control" id="mv" required placeholder="No of equivalent minima in the valence band">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&mu;
                                <sub style="font-weight:bold;font-size:15px">e</sub>(Electron Mobility )[m2/Vs]
                            </label>
                            <input type="text" class="form-control" id="mue" required placeholder="Electron Mobility ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&mu;
                                <sub style="font-weight:bold;font-size:15px">h</sub>(Hole mobility )[m2/Vs]
                            </label>
                            <input type="text" class="form-control" id="muh" placeholder="Hole mobility">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&lambda;
                                <sub style="font-weight:bold;font-size:15px"></sub>(Wavelength)[m]
                            </label>
                            <input type="text" class="form-control" id="lamda" placeholder="Wavelength">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">Eg(Bandgap )[eV]
</label>
                            <input type="text" class="form-control" id="eg" placeholder="Bandgap">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-sx-12">
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">e</sub>*(Elective mass of electron)

                            </label>
                            <input type="text" class="form-control" id="me" placeholder="Me*">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">h</sub>*(Elective mass of hole)

                            </label>
                            <input type="text" class="form-control" id="mh" placeholder="Mh*">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">T
                                <sub style="font-weight:bold;font-size:15px">SRH</sub>(Shockley-Read-Hall lifetime )[s]
                            </label>
                            <input type="text" class="form-control" id="srh" placeholder="Shockley-Read-Hall lifetime">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">B(Direct band-band recombination coefficient )
                                [S
                                <sup>1</sup>M
                                <sup>3</sup>]
                            </label>
                            <input type="text" class="form-control" id="b" placeholder="Direct band-band recombination coefficient">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">C(sun concentration)</label>
                            <input type="number" class="form-control" id="C" placeholder="sun concentration">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-sx-12">
                        <div class="form-group">
                            <label class="control-label" for="formInput128">N
                                <sub style="font-weight:bold;font-size:15px">A</sub>(Acceptor concentration )[M
                                <sup>-3</sup>]
                            </label>
                            <input type="text" class="form-control" id="na" placeholder="Acceptor concentration ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">N
                                <sub style="font-weight:bold;font-size:15px">D</sub>(Donor concentration )[M
                                <sup>-3</sup>]
                            </label>
                            <input type="text" class="form-control" id="nd" placeholder="Donor concentration ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">X
                                <sub style="font-weight:bold;font-size:15px">n</sub>(Thickness of n- layer )[m]
                            </label>
                            <input type="text" class="form-control" id="xn" placeholder="Donor concentration">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">X
                                <sub style="font-weight:bold;font-size:15px">p</sub>(Thickness of p- layer)[m]
                            </label>
                            <input type="text" class="form-control" id="xp" placeholder="Thickness of p- layer">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">I( irradiance )
</label>
                            <input type="number" step="0.01" class="form-control" id="I" placeholder="irradiance">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                        <h4>result(Junction-1)</h4>
                        <div class="form-group">
                            <label class="control-label" for="formInput39">Short circuit current density (Jsc1)
</label>
                            <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="jsc1" placeholder="Placeholder text">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput27">Open circuit voltage (Voc1) </label>
                            <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="voc1" placeholder="Placeholder text">
                        </div>
                    </div>
                    <button type="button" onclick="calculate_lay1()" class="btn btn-success">save</button>
                    <button type="button" class="btn btn-success" data-target="#exampleModal1" data-toggle="modal">Line Graph</button>
                </div>
            </div>
            <!--junction 1 end-->
            <script>
					//junction-1 line chart start
					function set(dataset,xaxis){
					plot=dataset;
            console.log(xaxis);

					  	new Chart(document.getElementById("line-chart-j1"), {
                type: 'line',
   						  data: {
   							labels: xaxis,
   							datasets: [{
   								data: dataset ,
   								label: "junction-1",
   								borderColor: "blue",
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


					       	//junction-3 line chart start
					function set3(dataset,xaxis){
						plot=dataset;


							new Chart(document.getElementById("line-chart-j2"), {
						  type: 'line',
						  data: {
							labels: xaxis,
							datasets: [{
								data: dataset ,
								label: "junction-2",
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
					//junction-3 line chart end

						       	//junction-all line chart start
					function setall(dataset1,dataset3,xaxis){

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
								data: dataset3 ,
								label: "junction-2",
								borderColor: "#3cba9f",
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
					//junction-all line chart end

					        	//sun vs efficiency line chart start
					function sun_eff_graph(dataset,xaxis){
						plot=dataset;


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
					//sun vs efficiency line chart end

					</script>
            <!--junction 3-->
            <div class="row">
                <div class="row">
                    <div class="col-md-12" style="text-align:center;font-weight:bold;font-size:20px">░▒▓█ Junction-2 █▓▒░</div>
                </div>
                <div class="col-md-1 col-sm-0 col-sx-0">
</div>
                <div class="col-md-10 col-sm-12 col-sx-12 span12" style="border: 2px solid #4286f4;">
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

                                        <option value="GaAs.96Bi.04">GaAs.96Bi.04</option>

                                        <option value="GaAs.95Bi.05">GaAs.95Bi.05</option>

                                        <option value="GaAs.94Bi.06">GaAs.94Bi.06</option>

                                        <option value="GaAs.92Bi.08">GaAs.92Bi.08</option>
                                        <!--<option value="Si.5714Ge.428">Si.5714Ge.428</option>-->
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
                                <sub style="font-weight:bold;font-size:15px">c</sub>(No of equivalent minima in the conduction
                                band)
                            </label>
                            <input type="n" class="form-control" id="mc3" required placeholder="No of equivalent minima in the conduction band">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">v</sub>(No of equivalent minima in the valence band)
                            </label>
                            <input type="text" class="form-control" id="mv3" required placeholder="No of equivalent minima in the valence band">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&mu;
                                <sub style="font-weight:bold;font-size:15px">e</sub>(Electron Mobility )[m2/Vs]
                            </label>
                            <input type="text" class="form-control" id="mue3" required placeholder="Electron Mobility ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&mu;
                                <sub style="font-weight:bold;font-size:15px">h</sub>(Hole mobility )[m2/Vs]
                            </label>
                            <input type="text" class="form-control" id="muh3" placeholder="Hole mobility">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">&lambda;
                                <sub style="font-weight:bold;font-size:15px"></sub>(Wavelength)[m]
                            </label>
                            <input type="text" class="form-control" id="lamda3" placeholder="Wavelength">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">Eg(Bandgap )[eV]
</label>
                            <input type="text" class="form-control" id="eg3" placeholder="Bandgap">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-sx-12">
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">e</sub>*(Elective mass of electron)

                            </label>
                            <input type="text" class="form-control" id="me3" placeholder="Me*">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">M
                                <sub style="font-weight:bold;font-size:15px">h</sub>*(Elective mass of hole)

                            </label>
                            <input type="text" class="form-control" id="mh3" placeholder="Mh*">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">T
                                <sub style="font-weight:bold;font-size:15px">SRH</sub>(Shockley-Read-Hall lifetime )[s]
                            </label>
                            <input type="text" class="form-control" id="srh3" placeholder="Shockley-Read-Hall lifetime">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">B(Direct band-band recombination coefficient )
                                [S
                                <sup>1</sup>M
                                <sup>3</sup>]
                            </label>
                            <input type="text" class="form-control" id="b3" placeholder="Direct band-band recombination coefficient">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">C(sun concentration)</label>
                            <input type="number" class="form-control" id="C3" placeholder="sun concentration">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-sx-12">
                        <div class="form-group">
                            <label class="control-label" for="formInput128">N
                                <sub style="font-weight:bold;font-size:15px">A</sub>(Acceptor concentration )[M
                                <sup>-3</sup>]
                            </label>
                            <input type="text" class="form-control" id="na3" placeholder="Acceptor concentration ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">N
                                <sub style="font-weight:bold;font-size:15px">D</sub>(Donor concentration )[M
                                <sup>-3</sup>]
                            </label>
                            <input type="text" class="form-control" id="nd3" placeholder="Donor concentration ">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">X
                                <sub style="font-weight:bold;font-size:15px">n</sub>(Thickness of n- layer )[m]
                            </label>
                            <input type="text" class="form-control" id="xn3" placeholder="Donor concentration">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">X
                                <sub style="font-weight:bold;font-size:15px">p</sub>(Thickness of p- layer)[m]
                            </label>
                            <input type="text" class="form-control" id="xp3" placeholder="Thickness of p- layer">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formInput128">I( irradiance )
</label>
                            <input type="number" step="0.01" class="form-control" id="I3" placeholder="irradiance">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3" style="border: 2px solid red">
                        <h4>result(Junction-2)</h4>
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
                    <button type="button" class="btn btn-success" data-target="#exampleModal3" data-toggle="modal">Line Graph</button>
                    <div class="btn-group" style="margin-bottom:5px">
                        <button type="button" class="btn btn-danger btn-default dropdown-toggle" data-toggle="dropdown">    ALL GRAPH
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#" class="btn btn-success" onclick="calall()" data-target="#exampleModalall" data-toggle="modal">voc vs jsc</a>
                            </li>
                            <li>
                                <a class="btn btn-info" onclick="efficiency()" data-target="#exampleModalsun" data-toggle="modal">Sun Concentration vs Efficiency</a>
                            </li>

                        </ul>
                    </div>
                    <button type="button" onclick="window.print()" class="btn btn-success" title="save efficiency for sun consentration 1 to 1000">Print all info</button>
                    <div class="col-md-3 col-lg-3" style="border: 2px solid #f4ad42; margin-top:5px">
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
                            <label class="control-label" for="formInput27">Efficiency, Ƞ </label>
                            <input type="text" disabled class="form-control" style="color:red;font-weight:bold" id="ef" placeholder="Efficiency">
                        </div>
                    </div>
                </div>
            </div>
            <!--junction 3 end-->
        </div>
        <div class="row">
            <div class="col-md-1">
</div>
        </div>
        <script type="text/javascript">


		</script>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
