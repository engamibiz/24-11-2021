<?php
$messages=[
    'green'=>'Its Ok to go',
    'yellow'=>'Get Ready',
    'red'=>'Stop! It is danger'
];

$traffic=['green','red','yellow'];
foreach ($traffic as $light){ ?>
<h1>Light is <?= $light ?> then : 
<span style="color:<?= $light ?>"><?= $messages[$light]; ?></span>
</h1>

<!-- <h1>Light is green then : <span style="color:green">Its Ok to go</span></h1> -->
<?php } 



foreach ($traffic as $light){ ?>
    <h1><?= $messages[$light]; ?></h1>
    
    <!-- <h1>Light is green then : <span style="color:green">Its Ok to go</span></h1> -->
    <?php } 









// foreach($traffic as $light){
//     echo '<h1>';
//     echo $messages[$light];
//     echo '</h1>';
// }

// if($traffic == 'red'){
//     echo $messages['red'];
// }else if ($traffic == 'yellow'){
//     echo $messages['yellow'];
// }else{
//     echo $messages['green'];
// }