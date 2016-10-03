<?php
        		include('../model/config.php');
       ?>
       <html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../view/layout/styles/bootstrap.min.css">
        <script src="../view/layout/scripts/jquery-2.0.0.js"></script>
        <script src="../view/layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>statistical details</title>
    </head>
    <body>
        
        
        
        
       <div class="container">
            <h2 style="margin-bottom:20px; text-align:center;">Statistical Details</h2>
        
         <form class="form-horizontal"  method="post" action="">
        <div class="form group">
                <label for="year" class="col-sm-4 control-label">Year</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="year">
                 </div>
               
             </div><br>
    
        
        <h3><b>Research</b></h3>
        
        <div class="form-group">
            <label for="projects" class="">Projects</label>
                <input required id="projects" class="form-control" type="number" name="projects" style="width:200px">
        </div>
        <div class="form-group">
            <label for="publications" class="">Publications</label>
            <input required class="form-control" type="number" name="publications"  style="width:200px">
        </div>
             
        <div class="form-group">
            <label for="notes1">Notes</label>
            <textarea required class="form-control" id="notes1" name="notes1"></textarea>
        </div>

        
        <h3><b>Education</b></h3>
        <h4>Internal Undergraduates</h4>
        
    <table class="table">
        <tr>
        <td><div class="form-group">
            <label for="kpi_intake" class="">KPI</label>
                <input required id="kpi_intake" class="form-control" type="number" name="kpi_intake"  style="width:200px"></div></td>
            
        <td><div class="form-group">
            <label for="kpi_graduates" class="">KPI</label>
                <input required id="kpi_graduates" class="form-control" type="number" name="kpi_graduates"  style="width:200px">
        </div>
            </td>
        </tr>
        <tr>
        <td><div class="form-group">
            <label for="intake" class="">Intake CS and IS degrees</label>
            <input required class="form-control" type="number" name="intake"  style="width:200px">
        </div></td>
            
        <td><div class="form-group">
            <label for="graduates" class="">Graduates(CS and IS)</label>
            <input required class="form-control" type="number" name="graduates"  style="width:200px">
        </div></td>
        </tr>
        </table>
        <div class="form-group">
            <label for="notes2">Notes</label>
            <textarea required class="form-control" id="notes2" name="notes2"></textarea>
        </div>
        
        <table class="table">
  <thead>
    <tr>
      <th></th>
      <th>KPI</th>
      <th>Internal CS undergraduates</th>
      <th>Internal IS undergraduates</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Year 1- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year1_reg"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year1_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year1_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 2- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year2_reg"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year2_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year2_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 3- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year3_reg"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year3_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year3_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 3- Graduates</th>
      <td><input required class="form-control" type="number" name="kpi_year3_grad"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year3_grad"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year3_grad"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 4- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year4_reg"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year4_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year4_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 4- Graduates</th>
      <td><input required class="form-control" type="number" name="kpi_year4_grad"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year4_grad"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="is_year4_grad"  style="width:200px"></td>
    </tr>
  </tbody>
</table>
        
    <h4>Inter Faculty Undergraduates</h4>
        
        <div class="form-group">
            <label for="kpi_interfaculty" class="">KPI</label>
                <input required id="kpi_interfaculty" class="form-control" type="number" name="kpi_interfaculty"  style="width:200px">
        </div>
        <div class="form-group">
            <label for="Bsc" class="">Bsc- Faculty of Science</label>
            <input required class="form-control" type="number" name="Bsc"  style="width:200px">
        </div>
             
        <div class="form-group">
            <label for="notes3">Notes</label>
            <textarea required class="form-control" id="notes3" name="notes3"></textarea>
        </div>
        <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>  
 </form>
</div> 
</body>
</html>