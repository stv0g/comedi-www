
PAGES := intro documentation hardware download links mailinglist
OTHERFILES := comedi_logo.gif

DESTDIR := /home/www/comedi.org/comedi/

all:	$(patsubst %,%.html,$(PAGES))

frame.pre:	frame.html
	grep -B 99999 CONTENT frame.html | grep -v CONTENT >frame.pre

frame.post:	frame.html
	grep -A 99999 CONTENT frame.html | grep -v CONTENT >frame.post

%.html:		frame.pre frame.post %-x.html
	cat frame.pre $(patsubst %.html,%-x.html,$@) frame.post >$@

clean:
	-rm frame.pre frame.post
	-rm $(patsubst %,%.html,$(PAGES))

install:
	-mkdir $(DESTDIR)
	cp $(patsubst %,%.html,$(PAGES)) $(DESTDIR)
	cp $(OTHERFILES) $(DESTDIR)
	cd $(DESTDIR) && ln -sf intro.html index.html
	cd $(DESTDIR) && ln -sf ~ftp/pub/comedi download

install_doc:
	install -m 644 ../comedilib/doc/html/*.html $(DESTDIR)/doc


