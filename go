#!/bin/bash


grep -B 99999 CONTENT frame.html | grep -v CONTENT >frame.pre
grep -A 99999 CONTENT frame.html | grep -v CONTENT >frame.post

cat frame.pre intro-x.html frame.post >intro.html
cat frame.pre techniques-x.html frame.post >techniques.html
cat frame.pre results-x.html frame.post >results.html
cat frame.pre literature-x.html frame.post >literature.html



