<?php
class Pagination
{
   function getPagerData($np, $range, $page, $offset)
   {
	   $np  = (int) $np;
	   $offset = max(0,(($page - 1) * $offset));
	   $lrange = max(1,$page -(($range-1)/2));
	   $rrange = min($np, $page + (($range-1)/2));
	   if(($rrange - $lrange) < ($range -1))
		{
			if($lrange==1)
		 {
			 $rrange = min($np, $lrange + ($range - 1));
		 }
		 else
		 {
			$lrange = max($rrange - ($range - 1) , 0);
		 }
	   }
	   $ret = new Pagination();
	   $ret->lrange = round($lrange);
	   $ret->rrange = round($rrange); 
	   $ret->np = $np;
	   $ret->page = $page;
	   $ret->offset = $offset;
	   return $ret;
   }
	function create($total_records, $pagelimit, $page){
		$total_pages = ceil($total_records / $pagelimit);
		$pagLink = "<div class='pagination'>";
		    echo "<ul class='pagination'>";
		if($page>1){
		    echo "<li class='page-item'><a href='index.php?page=".($page-1)."' class='page-link'>Previous</a></li>"; 
		}else{
		    echo "<li class='page-item disabled'><a href='#' class='page-link'>Previous</a></li>"; 
		}

		for ($i=1; $i<=$total_pages; $i++) {
			if($page==$i){
				$active = ' active';
			}else{
				$active = '';
			}
		    echo "<li class='page-item ".$active."'><a href='index.php?page=".$i."' class='page-link'>".$i."</a></li>";
		}
		if($page<$total_pages){
		    echo "<li class='page-item'><a href='index.php?page=".($page+1)."' class='page-link'>NEXT</a></li>";
		}else{
		    echo "<li class='page-item disabled'><a href='#' class='page-link'>NEXT</a></li>";
		}
		    echo"</ul>";
		echo $pagLink . "</div>";
	}
}
function printTag($conn, $tags){
	// print_r($tags);
	$query = "SELECT id, title FROM tbl_tag WHERE id IN($tags) AND valid=1 AND deleted=0";
	$stmt = $conn->prepare($query); 
   $stmt->execute();
   return $result = $stmt->get_result();
   $num_rows = mysqli_num_rows($result);
}
?>