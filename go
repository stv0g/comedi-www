#!/bin/bash


grep -B 99999 CONTENT frame.html | grep -v CONTENT >frame.pre
grep -A 99999 CONTENT frame.html | grep -v CONTENT >frame.post

cat frame.pre intro-x.html frame.post >intro.html
cat frame.pre documentation-x.html frame.post >documentation.html
cat frame.pre hardware-x.html frame.post >hardware.html
cat frame.pre download-x.html frame.post >download.html
cat frame.pre links-x.html frame.post >links.html
cat frame.pre mailinglist-x.html frame.post >mailinglist.html




