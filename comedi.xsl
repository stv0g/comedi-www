<?xml version='1.0'?>
<!DOCTYPE xsl:stylesheet
[
  <!ENTITY site "file:///home/ds/cvs/comedi-www/src">
  <!-- <!ENTITY site "http://www.comedi.org"> -->
]>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.0">

  <xsl:output method="html" encoding="UTF-8" version="4.01" />

<xsl:template match="page">
<xsl:param name="title" select="Big_Kitten_LLC" />
<xsl:param name="content" />

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <meta name="GENERATOR" content="Mozilla/4.7 [en] (X11; I; Linux 2.3.50 i686) [Netscape]" />
   <title><xsl:copy-of select="title/node()" /></title>
</head>
<body bgcolor="#000000">


<table border="0" width="99%" align="center" cellpadding="2" cellspacing="2"
	bgcolor="#ffffff">
<tr valign="top">
<td valign="top" rowspan="5">
<center>
<font size="8" face="arial,helvetica"><b>
<img src="images/comedi_logo.png" alt="Comedi - The Linux Control and Measurement Interface" />
</b></font>
</center>
</td>
</tr>
</table>

<table border="0" width="99%" align="center" cellpadding="2" cellspacing="2"
	bgcolor="#ffffff">
<tr valign="top">
<td valign="top" rowspan="5">
<font size="4"><b>
Index
</b></font>
<font size="2"><b>
<br/><a href="index.html">Introduction</a>
<br/><a href="download.html">Download</a>
<br/><a href="documentation.html">Documentation</a>
<br/><a href="mailinglist.html">Mailing list</a>
<br/><a href="hardware.html">Supported<br/>hardware</a>
<br/><a href="links.html">Manufacturers</a>
<br/><a href="applications.html">Applications</a>
<br/><a href="https://cvs.comedi.org/cgi-bin/bugzilla/query.cgi">Bug Tracking</a>
<br/>
</b></font>
<br/>
<br/>
<font size="4"><b>
Links
</b></font>
<font size="2"><b>
<br/><a href="http://www.linux.org/">Linux</a>
<br/><a href="http://www.debian.org/">Debian</a>
<br/><a href="http://www.rtai.org/">RTAI</a>
<br/><a href="http://www.schleef.org/">David Schleef</a>
</b></font>


</td>
<td valign="top" align="left">
<xsl:copy-of select="body/node()" />
</td>
</tr>
</table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>

