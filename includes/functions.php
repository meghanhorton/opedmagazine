<?php 

function create_modal($id,$info){

  $modal = '
  <!-- MODALS -->
  <div class="modal fade" id="' . $id . '">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Commentary</h4>
        </div>
        <div class="modal-body">
        ' . $info . '
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->';

  return $modal;

}

function add_navigation($page){
  switch ($page){
    case 1: $sides = 2; break;
    case 2: $sides = 1; break;
    case 3: $sides = 4; break;
    case 4: $sides = 3; break;
    case 5: $sides = 6; break;
    case 6: $sides = 5; break;
  }; 

  $celeb = rand(3,4);
  $ent   = rand(1,2);
  $sport = rand(5,6);

  $nav = '
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbartop">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-plus"></span>
      </button>
      <a class="navbar-brand" href="?s=0">OpEd Magazine</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbartop">
      <ul class="nav navbar-nav">
        <li>
          <a onclick="_gaq.push([\'_trackEvent\', \'Nav\', \''.$page.' to home\']);" href="?s=0"><i class="glyphicon glyphicon-th"></i>Back to menu</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-random"></i>Topic</a>
            <ul class="dropdown-menu">
              <li><a onclick="_gaq.push([\'_trackEvent\', \'Switch Topic\', \''.$page.' to Celebrity\']);" href="?s='.$celeb.'">Celebrity</a></li>
              <li><a onclick="_gaq.push([\'_trackEvent\', \'Switch Topic\', \''.$page.' to Entertainment\']);" href="?s='.$ent.'">Entertainment</a></li>
              <li><a onclick="_gaq.push([\'_trackEvent\', \'Switch Topic\', \''.$page.' to Sports\']);"  href="?s='.$sport.'">Sports</a></li>
            </ul>
        </li>
        <li class="topic'.$sides.'"><a onclick="_gaq.push([\'_trackEvent\', \'Nav\', \''.$page.' to ' .$sides .'\']);" href="?s='.$sides.'"><i class="glyphicon glyphicon-share-alt"></i>Read the opposition</a></li>
        <li class="btn-wrong"><a onclick="_gaq.push([\'_trackEvent\', \'Wrong\', \''.$page.'\']);" id="showme"><i class="glyphicon glyphicon-remove"></i> Show commentary</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';

  echo $nav;
}


