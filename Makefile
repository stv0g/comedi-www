


htmlfiles = documentation.html download.html hardware.html \
	index.html links.html mailinglist.html applications.html

all: $(htmlfiles)

%.html: %.xml comedi.xsl
	xsltproc $< -o $@

push:
	rsync -a --files-from=files . \
	  wendolyne:/home/www/comedi.org



