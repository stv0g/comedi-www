<?php
 include('lib/template.php');
 echo get_header('comedi', '.');
?>

<h1>Introduction</h1>

<p>
The Comedi project develops open-source drivers, tools, and libraries
for data acquisition.

<p>
<b>Comedi</b> is a collection of drivers for a variety of common
data acquisition plug-in boards.  The drivers are implemented as
a core Linux kernel module providing common functionality and
individual low-level driver modules.

<p>
<b>Comedilib</b> is a user-space library that provides a
developer-friendly interface to Comedi devices.  Included in the
Comedilib distribution is documentation, configuration and
calibration utilities, and demonstration programs.

<p>
<b>Kcomedilib</b> is a Linux kernel module (distributed with Comedi)
that provides the same interface as Comedilib in kernel space,
suitable for real-time tasks.  It is effectively a "kernel library"
for using Comedi from real-time tasks.


<h1>Features</h1>

<ul>
<li>Integrated real-time support for most hardware
<li>High-level library (comedilib)
<li>Application-level device independence
<li>Works with Linux 2.0, 2.2, and 2.4 kernels
</ul>


<h1>Latest version</h1>

<p>
(probably not accurate!)

<ul>
<li>comedi-0.7.69
<li>comedilib-0.7.22
</ul>

<p>
Comedi and Comedilib are being actively developed, and because of this,
new versions are sometimes buggy.  However, reported bugs are usually
quickly fixed.


<h1>Maintainers</h1>

<p>
David Schleef <address>ds@schleef.org</address>
<p>
Frank Mori Hess <address>fmhess@users.sourceforge.net</address>

<p>
Much of Comedi has been developed by others, suggesting the need for
a contributors list.

<?php
 echo get_footer();
?>
