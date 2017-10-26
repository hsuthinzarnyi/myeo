<!-- ===========PAGE FOOTER=========== -->

<div class="page_footer col-md-12" id="pg_footer" style="background-color:#004167;height:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <label class="a">
  <img src="<?=base_url();?>/images/myeo_logo.png"  width="30px;" height="40px;" />
  </label>
  <label class="a">
  <a href="" style="text-decoration:none;"><font style="color:#fff"><span style="text-align: right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#fff"><span class="glyphicon glyphicon-copyright-mark"></span>2017</font></span></font></a>
  </label>
   <!-- <span style="text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <span style="text-align: right">
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">About</font></a></label>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Career</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Compus Chapter Program </font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">User Aggrement</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Privacy Policy</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <!-- <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Cookie Policy</font></a></label> -->
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Copyright Policy</font></a></label>

    </span>
</div> <!-- End Of Page Footer -->

<script>
    function showMyImage(fileinput){
        var files = fileinpiut.files;
        for (var i = 0; i < files.length ; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }

            var img = document.getElementById('limage');
            img.file = file ;
            var reader = new FileReader();
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }

        function showMyPdf(fileinput2){
            var files = fileinput2.files;
            for(var i = 0 ;i < files.length ; i++) {
                var file = files[i];
                var pdfType = /pdf.*/;
                if(!file.type.match(p dfType)) {
                    continue;
                }

                var pdf = document.getElementById('lpdf');
                pdf.file = file ;
                var reader = new FileReader();
                reader.onload = (function(aPdf){
                    return function(e){
                        aPdf.src = e.target.result;
                    };
                })(pdf);
                reader.readAsDataURL(file);
            }
        }

</script>
</body>
</html>