<?php

$jobs = [
    [
      'title' => 'PHP Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'Python Deb',
      'description' => '',
      'visible' => false,
      'months' => 14
    ],
    [
      'title' => 'Devops',
      'description' => '',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Node Dev',
      'description' => '',
      'visible' => true,
      'months' => 24
    ],
    [
      'title' => 'Frontend Dev',
      'description' => '',
      'visible' => true,
      'months' => 3
    ]
];

function getDuration($months) {
$years = floor ($months / 12);
$extraMonts = $months % 12;

if ($years > 0 && $extraMonts > 0) {
    return "$years years $extraMonts months";
} if ($years == 0) {
    return "$extraMonts months";
} else {
    return "$years years";
}
}

function printJob($job){
if ($job['visible'] == false) {
    return;
}

echo '<li class="work-position">';
echo '<h5>' . $job['title'] . '</h5>';
echo '<p>' . $job['description'] . '</p>';
echo '<p>' . getDuration($job['months']) . '</p>';
echo '<strong>Achievements:</strong>';
echo '<ul>';
echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
echo '</ul>';
echo '</li>';
}