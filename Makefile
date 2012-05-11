


htmlfiles = documentation.html download.html hardware.html \
	index.html links.html mailinglist.html applications.html

all: $(htmlfiles)

%.html: %.xml comedi.xsl
	xsltproc --xinclude $< -o $@

push:
	rsync -rcuv --files-from=files . \
	  www.comedi.org:/srv/comedi.org/www

hardware.html: devices.xml

devices.xml: devices.txt
	perl make_device_table.pl < devices.txt > devices.xml

clean:
	rm -f $(htmlfiles) devices.xml
