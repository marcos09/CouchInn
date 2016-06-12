<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>Borrar Tipo</title>

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
</head>

<body>
    <div class="modal fade hide modal-creator" id="myModal" style="display: none;" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Borrar Tipo de Hospedaje</h3>
        </div>
        <div class="modal-body">

            <?php
                echo "Está a punto de borrar el Tipo: " . $data->nombre;
                echo form_open('url'); ?>

        <div class="row">
            <div class="span5">
                <?php print_r($galleryName); ?>
                <div class="control-group">
                    <?php
                        $galleryName = array(
                            'id'            => 'galleryName',
                            'name'          => 'galleryName',
                            'placeholder'   => 'Gallery Name',
                            'required'      => 'required',
                        );
                        echo form_label('Gallery Name:', 'galleryName');
                        echo form_input($galleryName);
                    ?>
                </div><!-- /control-group -->
           </div><!--/span5-->
       </div><!--/row-->
    </div><!-- /modal-body -->

    <div class="modal-footer">
        <!-- <p class="span3 resize">The following images are sized incorrectly. Click to edit</p> -->
        <a href="javascript:;" class="btn" data-dismiss="modal">Close</a>
        <a href="javascript:;" class="btn btn-primary">Next</a>
    </div>


    <!-- jQuery -->
    <script src="../../dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>
</html>