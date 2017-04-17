<?php
return array(
    $price = new Price($db),
    $doctors = new Doctors($db),
    $request = new ActionGET($db),
    $directions = new Directions($db),
    $usi = new FunctionalDiagnostic($db),
);