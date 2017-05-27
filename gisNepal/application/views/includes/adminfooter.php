
    <!-- javascripts -->
     <!-- custom form validation script for this page-->


    <script src="<?=base_url()?>js/niceadmin/form-validation-script.js"></script>

        <script type="text/javascript" src="<?=base_url()?>js/niceadmin/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>js/niceadmin/jquery.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery-ui-1.10.4.min.js"></script>
    <script src="<?=base_url()?>js/niceadmin/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/niceadmin/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url()?>js/niceadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url()?>js/niceadmin/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>js/niceadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?=base_url()?>assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?=base_url()?>js/niceadmin/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url()?>js/niceadmin/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?=base_url()?>js/niceadmin/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?=base_url()?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url()?>js/niceadmin/calendar-custom.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?=base_url()?>js/niceadmin/jquery.customSelect.min.js" ></script>
	<script src="<?=base_url()?>assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?=base_url()?>js/niceadmin/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?=base_url()?>js/niceadmin/sparkline-chart.js"></script>
    <script src="<?=base_url()?>js/niceadmin/easy-pie-chart.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url()?>js/niceadmin/xcharts.min.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery.autosize.min.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery.placeholder.min.js"></script>
	<script src="<?=base_url()?>js/niceadmin/gdp-data.js"></script>	
	<script src="<?=base_url()?>js/niceadmin/morris.min.js"></script>
	<script src="<?=base_url()?>js/niceadmin/sparklines.js"></script>	
	<script src="<?=base_url()?>js/niceadmin/charts.js"></script>
	<script src="<?=base_url()?>js/niceadmin/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
