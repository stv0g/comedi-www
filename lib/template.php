<?php
 
 $local_prefix = '';

 function get_header($title, $prefix) {
  global $local_prefix, $clean;
  $local_prefix = $prefix; // this is a hack so i don't have to pass prefix to get_footer
  
  if ($clean==1)
    return "<html><head><title>$title</title></head><body>\n";
  
  $ret = <<<EOF
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="GENERATOR" content="Mozilla/4.7 [en] (X11; I; Linux 2.3.50 i686) [Netscape]">
   <title>Comedi - The Linux Control and Measurement Interface</title>
</head>
<body bgcolor="#000000">


<table border=0 width="99%" align=center cellpadding=2 cellspacing=2
	bgcolor="#ffffff">
<tr valign=top>
<td valign=top rowspan=5><nobr>
<font size=8 face="arial,helvetica"><b>
<center>
<img src="images/comedi_logo.png" alt="Comedi - The Linux Control and Measurement Interface">
</center>
</font></b>
</td>
</tr>
</table>

<center>
<table border=0 width="99%" align=center cellpadding=2 cellspacing=2
	bgcolor="#ffffff">
<tr valign=top>
<td valign=top rowspan=5><nobr>
<font size=4><b>
Index
</b></font>
<font size=2><b>
<br><a href="index.php">Introduction</a>
<br><a href="download.php">Download</a>
<br><a href="https://cvs.comedi.org/cgi-bin/viewcvs.cgi/">CVS</a>
<br><a href="documentation.php">Documentation</a>
<br><a href="mailinglist.php">Mailing list</a>
<br><a href="hardware.php">Supported<br>hardware</a>
<br><a href="links.php">Manufacturers</a>
<br>
</b></font>
<br>
<br>
<font size=4><b>
Links
</b></font>
<font size=2><b>
<br><a href="http://www.linux.org/">Linux</a>
<br><a href="http://www.debian.org/">Debian</a>
<br><a href="http://www.rtai.org/">RTAI</a>
<br><a href="http://www.schleef.org/~ds/">David Schleef</a>
</b></font>

</nobr>
</td>
<td valign=top align=left>
EOF;
  return $ret;
 }

 function get_footer() {
  global $local_prefix, $clean;
  $prefix = $local_prefix;
  
  if ($clean==1)
    return "</body></html>\n";
  
  $ret = <<<EOF
</td>
</tr>
</table>
</body>
</html>
EOF;
  return $ret;
 }

?>
