
<?php
 include('lib/template.php');
 echo get_header('comedi', '.');
?>

<h1>Download</h1>

<ul>
<li><a href="ftp://ftp.comedi.org/pub/comedi">FTP:</a> ftp://ftp.comedi.org/pub/comedi
<li><a href="download">HTTP:</a> http://www.comedi.org/download
<li><a href="https://cvs.comedi.org/cgi-bin/viewcvs.cgi/comedi/comedi.tar.gz?tarball=1">Current Comedi CVS snapshot</a>
<li><a href="https://cvs.comedi.org/cgi-bin/viewcvs.cgi/comedilib/comedilib.tar.gz?tarball=1">Current Comedilib CVS snapshot</a>
</ul>

<p>Comedi and comedilib can be checked out using anonymous CVS
using the commands:<p>

<pre>
cvs -d :pserver:anonymous@cvs.comedi.org:/var/cvs login
cvs -d :pserver:anonymous@cvs.comedi.org:/var/cvs co comedi
cvs -d :pserver:anonymous@cvs.comedi.org:/var/cvs co comedilib
</pre>

<p>
When prompted for a password, hit enter.
</p>

<?php
 echo get_footer();
?>
