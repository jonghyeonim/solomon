<div class="container">
<?php 
//var_dump($topics);
$count = 0;

foreach($topics as $entry) {
	if($count%3==0) {
?> 
		<div class="row">
<?php 
	}
?>
	<div class="col-lg-4">
		<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		<h2><?=$entry->title?></h2>
		<p><?=$entry->description?></p>
		<p><a href="/index.php/Board/get/<?=$entry->id?>" class="btn btn-primary btn-lg">View details &raquo;</a></p>
	</div>
<?php 
	if($count%3==2) { 
?>
		</div>
<?php 
	}
	if($count==5) {
		break;
	}	
	$count++;
}
?>

<div>
<form name="fsearch" method="get" action="/board/test/lists" onsubmit="return doSearch(this);">
	<input type="hidden" name="sca" value="" />

    <div class="clearfix">
        <select name="sfl" class="form-control input-sm auto pull-left">
            <option value="wr_subject">제목</option>
            <option value="wr_content">내용</option>
            <option value="wr_subject.wr_content">제목+내용</option>
            <option value="mb_id">회원아이디</option>
            <option value="wr_name">글쓴이</option>
        </select>
        <div class="span4 pull-left">
            <div class="input-group">
            <input name="stx" class="form-control input-sm" maxlength="15" value="" />
            <span class="input-group-btn">
            <button type="submit" class="btn btn-sm btn-primary">검색</button>
            </span>
            </div>
        </div>

        <div class="pull-right">
            <ul class="pagination"><li><a href="/board/test/lists/page/1">&laquo; 처음</a></li><li><a href="/board/test/lists/page/14">&lt;</a></li><li><a href="/board/test/lists/page/11">11</a></li><li><a href="/board/test/lists/page/12">12</a></li><li><a href="/board/test/lists/page/13">13</a></li><li><a href="/board/test/lists/page/14">14</a></li><li class="active"><a>15</a></li></ul>        </div>
    </div>
</form>
</div>
</div>	

<hr class="featurette-divider"> <!-- 수평선 태그 -->
