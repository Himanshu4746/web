#!/usr/bin/perl
print "content-type:text/html\n\n";
open(IN,"<count.txt");
$count=<IN>;
close(IN);
$count++;
open(OUT,">count.txt");
$count;
print OUT $count;
close(OUT);
print "<html><body bgcolor=lightgreen><center><b>";
print "Number of Vistors to this page is::$count";
print "</b></center></body></html>";
