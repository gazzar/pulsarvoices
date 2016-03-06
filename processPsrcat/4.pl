#!/usr/bin/perl


$DEBUG = 0;


open IN, 'psrcat.db';

open OUT, ">psrcatSparseSchool.csv";
print OUT "label,ra,dec,theta,p0,kPc\n";

%me = ();
%use = ();
while ($line = <IN>) {
  #print $line;
  next if $line =~ /^\#/;
  $line =~ s/\s*$//;

  if ($line =~ /^\@/) {
     if (! exists $me{RAJ}) {
       print "FAILED <$me{PSRJ}>\n" if $DEBUG;
       next;
     }

     if (! exists $me{P0}) {
       print "NO P0 <$me{PSRJ}>\n" if $DEBUG;
       #next;
     }

     if (! exists $me{DIST_DM}) {
       print "NO DIST_DM <$me{PSRJ}>\n" if $DEBUG;
       #next;
     }

    $label = $me{PSRJ};
    $ra = $me{RAJ};
    $dec = $me{DECJ};

    $keep{$label} = 1;
     # yes, we've seen this before
     if (! exists $me{P0}) {
       delete $keep{$label};
     }
     if (! exists $me{DIST_DM}) {
       delete $keep{$label};
     }


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

    print OUT "$label,$decimalRA,$decimalDec,$decimalTheta,$me{P0},$me{DIST_DM}\n";
    $print = "$label,$decimalRA,$decimalDec,$decimalTheta,$me{P0},$me{DIST_DM}\n";
    $use{$label} = $print;
    #exit;

    %me = ();
    next;
  }



  ($key, $value) = split /\s+/, $line;
  print "($key,$value)\n" if $DEBUG;
  $me{$key} = $value;

}

close OUT;
close IN;



if ($DEBUG) {
  foreach $key (keys %keep) {
    print "\t$key\n";
  }
}



open IN, 'school.txt';
open OUT, '>schoolPossible.txt';
open FULL, '>schoolPossible.csv';
print FULL "label,ra,dec,theta,p0,kPc\n";
while ($line = <IN>) {
  $line =~ s/\s*$//;
  if (exists $keep{$line}) {
    print OUT "$line\n";
    print FULL "$use{$line}";
  }
}
close FULL;
close OUT;
close IN;
