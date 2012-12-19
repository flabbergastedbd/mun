<script type="text/javascript">
      $(function() {
        var endDate = "January 25, 2013 09:00:00";
        $('.countdown-styled').countdown({
          date: endDate,
          render: function(data) {
            var el = $(this.el);
            el.empty()
              .append("<div>" + this.leadingZeros(data.days, 3) + " <span>days</span></div>")
              .append("<div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div>")
              .append("<div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div>")
              .append("<div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
          }
        });
      });
</script>
<div class="span4 widget-area">
		<div class="widget row">
			<p style="font:sans-serif; font-size: 160%;"> We Start Off in </p>
			<div class="countdown-styled clearfix"></div>
		</div>
		<hr class ="span6"/>
		<div class="row widget">
			<p><br/></p></span>
			<a class="btn btn-primary btn-medium span6" href="index.php?page=regd">APPLY AS A DELEGATE</a>
			<hr class ="span6"/>
			<a class="btn btn-primary btn-medium span6" href="index.php?page=rege">APPLY FOR EXECUTIVE BOARD</a>
		</div>
		<hr class="span6"/>
		<div class="widget row">
			<div class="span8">
				<?php if (isset($_GET['page'])){ require('updates.php'); }?>
			</div>
		</div>

</div>
