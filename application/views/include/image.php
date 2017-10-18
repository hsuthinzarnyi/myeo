<!DOCTYPE html>
<html>
<head>
  
  <title></title>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
</head>
<body>
<image id="image" src="image/3.jpg" style="display:none">
<button id="show">Show</button>
<style type="text/css">
  td {
    color: green;
  }
</style>
<script type="text/javascript">

  $(document).ready(function(){
    $("#show").click(function(){
      $("#image").show();
      $("#show").html("<td>hide</td>");
      $("#show").click(function(){
        $("#image").hide();
        $("#show").text("show1");
      });
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#opp").click(function(){
      $("#opp1").show();
    });
  });
</script>
 <h5  id="opp"><font style="color:#CCC">Opportinities<b class="caret"></b></font></h5>
                <ul id="opp1" style="display: none">
                    
                         <?php foreach ($oppo as $row) { ?>
                        <a href="<?php echo base_url();?>Opportunity/oppdetail/<?=$row->opp_id?>" style="text-decoration:none;">
                        <?= $row->type?></a><Br>
                        <?php } ?>
                    
                </ul>
</body>
</html>