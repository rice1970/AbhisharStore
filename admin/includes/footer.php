                                                                                                                                                                                      <script>
  function updateSize() {
    var sizeString = "";
    for (var i = 1; i <= 12; i++) {
      if (jQuery("#size"+i).val() != "") {
        sizeString += jQuery("#size"+i).val() + ":" + jQuery("#Quantity"+i).val() + ",";
      }
    }
    jQuery("#size").val(sizeString.substring(0, sizeString.length - 1));
  }
</script>
<?php ob_end_flush(); ?>
