<?php
$con=pg_connect("host-sbazy user=s172903 dbname=s172903 password=95052600000l");
$q="select  *  from_studenci";
$r=pg_exec($con,$q);
$lw=pg_numer($r);
$lk=pg_numfields($r);

for ($j=0; $i<$
for ($i=0; $i<$lk; $++)

print pg_resul($r, 2, $i);
?>