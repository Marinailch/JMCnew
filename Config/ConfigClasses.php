<?php
return array(
    $price = new Price($db),
    $doctors = new Doctors($db),
    $request = new ActionGET($db),
    $directions = new Directions($db),
    $usi = new FunctionalDiagnostic($db),
    $laboratory = new Laboratory($db),
    $form = new Form(),
    $blog = new Blog($db),
    $nurses = new Nurses($db),
    $administrators = new Administrators($db),
);