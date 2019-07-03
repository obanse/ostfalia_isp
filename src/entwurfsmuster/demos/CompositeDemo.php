<?php

require_once '../classes/TrackPart.class.php';
require_once '../classes/StraightLine.class.php';
require_once '../classes/Track.class.php';
require_once '../classes/Turn.class.php';

$track1 = new StraightLine('East-West', 1000);
$track1->printInfo();

$track2 = new Turn('Hundredeighty-degrees', 200);
$track2->printInfo();

$track3 = new StraightLine('West-East', 1000);
$track = new Track('Test-Track', 0);
$track->addTrack($track1);
$track->addTrack($track2);
$track->addTrack($track3);
$track->printInfo();
