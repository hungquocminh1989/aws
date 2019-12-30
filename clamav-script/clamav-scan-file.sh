#!/usr/bin/env bash
# $1 = file or folder need scan
# $2 = file log scan
clamscan -r $1 > $2