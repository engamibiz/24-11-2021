<?php
$students=[
    ['name'=>'ahmed','result'=>64],
    ['name'=>'mohamed','result'=>77],
    ['name'=>'raghda','result'=>86]
];
function echoGrade($grade){
    if($grade >= 85){
        echo 'A';
    }elseif($grade >= 75){
        echo 'B';
    }elseif($grade >= 65){
        echo 'C';
    }elseif($grade >= 50){
        echo 'D';
    }else{
        echo 'F';
    }
}

?>
<style>
    table,th,td{
        border:1px solid #333;
    }
    table{
        width:80%;
        margin:auto;
        text-align:center;
        font-size:25px;
        border-collapse :collapse
    }
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Result</th>
        <th>Grade</th>
    </tr>
    <?php foreach($students as $student){ ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['result'] ?></td>
        <td>
        <?php echoGrade($student['result']) ?>
        </td>
    </tr>
    <?php } ?>
   
</table>

