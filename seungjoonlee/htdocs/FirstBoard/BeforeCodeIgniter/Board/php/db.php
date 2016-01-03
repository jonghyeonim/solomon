<?php
function db_init($host, $duser, $dpw, $dname){
  $conn = mysqli_connect($host, $duser, $dpw);
  mysqli_select_db($conn, $dname);
  return $conn;
}

function getBoardData($result) {
	$coount = 0;
	while($row=mysqli_fetch_assoc($result)) {
		if($count%3==0) { echo '<div class="row">'; }
		echo '<div class="col-lg-4">';
		echo '<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">';
		echo '<h2>'.$row["title"].'</h2>';
		echo '<p>'.$row["description"].'</p>';
		echo '<p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  View details &raquo;
</button></p>';

		echo '</div>';
		if($count%3==2) { echo '</div>'; }
		if($count==5) {
			echo '<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
			return;
		}
		$count++;
	}
}
?>