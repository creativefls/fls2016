<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jQuery-2.1.3.min.jss"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src='<?php echo $this->config->item("app_cdn"); ?>assets/js/fastclick.min.js'></script>

<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/app.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jquery.chosen.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/datepicker.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item("app_cdn"); ?>assets/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.datatable').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
<script type="text/javascript">
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
    
    var config = {
      '.chosen-select': { allow_single_deselect: true },
      '.chosen-small' : {disable_search_threshold:10}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }

    $('body').on('shown.bs.modal', '.modal', function () {
        $('.chosen-select', this).chosen();
        $('#datepicker').destroy();
        $('#datepicker').datepicker();
        $('#datepicker2').datepicker();
    });
    $('#datepicker').datepicker();
    $('#datepicker2').datepicker();

</script>