#!/usr/bin/perl


$DEBUG = 0;

open IN, "psrcatShort.in";


open OUT, ">psrcatShort.csv";
print OUT "label,ra,dec,theta\n";

while ($line = <IN>) {
  $line =~ s/\s*$//;
  ($PSRJ, $label, $RAJ, $ra, $DECJ, $dec) = split /\t/, $line;
  print "$label,$ra,$dec\n" if $DEBUG;
  ($h, $m, $s) = split /:/, $ra;
  foreach $bit ($h, $m, $s) {
    $bit =~ s/^0+//;
    $bit = '0' if $bit eq ''; # not needed, but play nicely with others :-)
  }
  print "($h, $m, $s) = split /:/, $ra\n" if $DEBUG;
  $decimalRA = $h + $m / 60 + $s / 3600;
  $sign = 1;
  if ($dec =~ /^-/) {
    $sign = -1;
  }
  $dec =~ s/^[-+]//;
  ($d, $m, $s) = split /:/, $dec;
  foreach $bit ($d, $m, $s) {
    $bit =~ s/^0+//;
    $bit = '0' if $bit eq ''; # not needed, but play nicely with others :-)
  }
  print "($d, $m, $s) = split /:/, $dec\n" if $DEBUG;
  $decimalDec = $d + $m / 60 + $s / 3600;
  $decimalDec *= $sign;

  $decimalTheta = $decimalRA / 24 * 360;

  print OUT "$label,$decimalRA,$decimalDec,$decimalTheta\n";
  #exit;

}

close OUT;
close IN;

