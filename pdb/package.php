<?
$title = "Package Database - Package ";
$cvs_author = '$Author: benh57 $';
$cvs_date = '$Date: 2002/12/08 21:41:05 $';

$uses_pathinfo = 1;
include "header.inc";
$package = $pispec;

include "releases.inc";
?>


<?
if ($package == "-") {
?>
<p><b>No package specified.</b></p>
<?
} else { /* if (no package) */
?>

<h1>Package <? print $package ?></h1>

<?

$q = "SELECT * FROM package WHERE name='$package' ORDER BY latest DESC";
$rs = mysql_query($q, $dbh);
if (!$rs) {
  print '<p><b>error during query:</b> '.mysql_error().'</p>';
} else {
  $firstrow = $row = mysql_fetch_array($rs);
  $rmap = array();
  while ($row) {
    $rmap[$row[release]] = $row[version]."-".$row[revision];
    $row = mysql_fetch_array($rs);
  }
  $row = $firstrow;

  it_start();

  for ($i = sizeof($releases); $i > 0; $i--) {
    $cr = $releases[$i - 1];
    if(ereg("^0.4.1",$cr))
      it_item("<nobr>In $cr:</nobr>", $rmap[$cr] ? "Version ".$rmap[$cr]." (10.1 only)" : "not present");
    else
      it_item("<nobr>In $cr:</nobr>", $rmap[$cr] ? "Version ".$rmap[$cr] : "not present");
  }

  it_item("Description:", $row[desclong]);
  it_item("Section:", '<a href="'.$pdbroot.'section.php/'.$row[section].'">'.$row[section].'</a>');

  // Get the maintainer field, and try to parse out the email address
  if ($row[maintainer]) {
    $maintainer = $row[maintainer];
	preg_match("/^(.+?)\s*<(\S+)>/", $maintainer, $matches);
    $maintainer = $matches[1];
    $email = $matches[2];
  } else {
    $maintainer = "unknown";
  }
  // If there was an email specified, make the maintainer field a mailto: link
  if ($email) {
    $email = str_replace(array("@","."), array("AT","DOT"), $email);
    it_item("Maintainer:", $maintainer.' &lt;'.$email.'&gt;');
#    it_item("Maintainer:", '<a href="mailto:'.$email.'">'.$maintainer.'</a>');
  } else {
    it_item("Maintainer:", $maintainer);
  }
  if ($row[homepage]) {
    it_item("Website:", '<a href="'.$row[homepage].'">'.$row[homepage].'</a>');
  }

  it_end();
?>



<?
} /* if (SQL error) */
} /* if (no package) */
?>

<p><a href="<? print $pdbroot ?>sections.php">Section list</a> -
<a href="<? print $pdbroot ?>list.php">Flat package list</a></p>


<?
include "footer.inc";
?>
