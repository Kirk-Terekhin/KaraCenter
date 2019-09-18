<?php
$u1_1 = $this->countModules('user1_1');
$u1_2 = $this->countModules('user1_2');
$u1_3 = $this->countModules('user1_3');
$u1_4 = $this->countModules('user1_4');

$u2_1 = $this->countModules('user2_1');
$u2_2 = $this->countModules('user2_2');
$u2_3 = $this->countModules('user2_3');
$u2_4 = $this->countModules('user2_4');

$u3_1 = $this->countModules('user3_1');
$u3_2 = $this->countModules('user3_2');
$u3_3 = $this->countModules('user3_3');
$u3_4 = $this->countModules('user3_4');

$u4_1 = $this->countModules('user4_1');
$u4_2 = $this->countModules('user4_2');
$u4_3 = $this->countModules('user4_3');
$u4_4 = $this->countModules('user4_4');

$u5_1 = $this->countModules('user5_1');
$u5_2 = $this->countModules('user5_2');
$u5_3 = $this->countModules('user5_3');
$u5_4 = $this->countModules('user5_4');

$u6_1 = $this->countModules('user6_1');
$u6_2 = $this->countModules('user6_2');
$u6_3 = $this->countModules('user6_3');
$u6_4 = $this->countModules('user6_4');

$footer1 = $this->countModules('footer1');
$footer2 = $this->countModules('footer2');
$footer3 = $this->countModules('footer3');
$footer4 = $this->countModules('footer4');

if ($u1_1 == 0 && $u1_2 == 0 && $u1_3 == 0 && $u1_4 == 0) {$sectionUser1 = 'hidden';}
if ($u2_1 == 0 && $u2_2 == 0 && $u2_3 == 0 && $u2_4 == 0) {$sectionUser2 = 'hidden';}
if ($u3_1 == 0 && $u3_2 == 0 && $u3_3 == 0 && $u3_4 == 0) {$sectionUser3 = 'hidden';}
if ($u4_1 == 0 && $u4_2 == 0 && $u4_3 == 0 && $u4_4 == 0) {$sectionUser4 = 'hidden';}
if ($u5_1 == 0 && $u5_2 == 0 && $u5_3 == 0 && $u5_4 == 0) {$sectionUser5 = 'hidden';}
if ($u6_1 == 0 && $u6_2 == 0 && $u6_3 == 0 && $u6_4 == 0) {$sectionUser6 = 'hidden';}



if($u1_1 == 0 && $u1_2 == 0 && $u1_3 == 0 || $u1_1 == 0 && $u1_2 == 0 && $u1_4 == 0 || $u1_1 == 0 && $u1_4 == 0 && $u1_3 == 0 || $u1_4 == 0 && $u1_2 == 0 && $u1_3 == 0) {
        $userCol1 = 'col-sm-12';
    }else if($u1_1 == 0 && $u1_2 == 0 || $u1_1 == 0 && $u1_3 == 0 || $u1_1 == 0 && $u1_4 == 0 || $u1_2 == 0 && $u1_3 == 0 || $u1_2 == 0 && $u1_4 == 0 || $u1_3 == 0 && $u1_4 == 0) {
        $userCol1 = 'col-sm-6';
    }else if($u1_1 == 0 || $u1_2 == 0 || $u1_3 == 0 || $u1_4 == 0) {
        $userCol1 = 'col-sm-4';
    }else {
        $userCol1 = 'col-sm-3';}

if ($u1_1 == 0) {$user1_1 = ' hidden';}
if ($u1_2 == 0) {$user1_2 = ' hidden';}
if ($u1_3 == 0) {$user1_3 = ' hidden';}
if ($u1_4 == 0) {$user1_4 = ' hidden';}  



if($u2_1 == 0 && $u2_2 == 0 && $u2_3 == 0 || $u2_1 == 0 && $u2_2 == 0 && $u2_4 == 0 || $u2_1 == 0 && $u2_4 == 0 && $u2_3 == 0 || $u2_4 == 0 && $u2_2 == 0 && $u2_3 == 0) {
        $userCol2 = 'col-sm-12';
    }else if($u2_1 == 0 && $u2_2 == 0 || $u2_1 == 0 && $u2_3 == 0 || $u2_1 == 0 && $u2_4 == 0 || $u2_2 == 0 && $u2_3 == 0 || $u2_2 == 0 && $u2_4 == 0 || $u2_3 == 0 && $u2_4 == 0) {
        $userCol2 = 'col-sm-6';
    }else if($u2_1 == 0 || $u2_2 == 0 || $u2_3 == 0 || $u2_4 == 0) {
        $userCol2 = 'col-sm-4';
    }else {
        $userCol2 = 'col-sm-3';}

if ($u2_1 == 0) {$user2_1 = ' hidden';}
if ($u2_2 == 0) {$user2_2 = ' hidden';}
if ($u2_3 == 0) {$user2_3 = ' hidden';}
if ($u2_4 == 0) {$user2_4 = ' hidden';} 


if($u3_1 == 0 && $u3_2 == 0 && $u3_3 == 0 || $u3_1 == 0 && $u3_2 == 0 && $u3_4 == 0 || $u3_1 == 0 && $u3_4 == 0 && $u3_3 == 0 || $u3_4 == 0 && $u3_2 == 0 && $u3_3 == 0) {
        $userCol3 = 'col-sm-12';
    }else if($u3_1 == 0 && $u3_2 == 0 || $u3_1 == 0 && $u3_3 == 0 || $u3_1 == 0 && $u3_4 == 0 || $u3_2 == 0 && $u3_3 == 0 || $u3_2 == 0 && $u3_4 == 0 || $u3_3 == 0 && $u3_4 == 0) {
        $userCol3 = 'col-sm-6';
    }else if($u3_1 == 0 || $u3_2 == 0 || $u3_3 == 0 || $u3_4 == 0) {
        $userCol3 = 'col-sm-4';
    }else {
        $userCol3 = 'col-sm-3';}

if ($u3_1 == 0) {$user3_1 = ' hidden';}
if ($u3_2 == 0) {$user3_2 = ' hidden';}
if ($u3_3 == 0) {$user3_3 = ' hidden';}
if ($u3_4 == 0) {$user3_4 = ' hidden';}


if($u4_1 == 0 && $u4_2 == 0 && $u4_3 == 0 || $u4_1 == 0 && $u4_2 == 0 && $u4_4 == 0 || $u4_1 == 0 && $u4_4 == 0 && $u4_3 == 0 || $u4_4 == 0 && $u4_2 == 0 && $u4_3 == 0) {
        $userCol4 = 'col-sm-12';
    }else if($u4_1 == 0 && $u4_2 == 0 || $u4_1 == 0 && $u4_3 == 0 || $u4_1 == 0 && $u4_4 == 0 || $u4_2 == 0 && $u4_3 == 0 || $u4_2 == 0 && $u4_4 == 0 || $u4_3 == 0 && $u4_4 == 0) {
        $userCol4 = 'col-sm-6';
    }else if($u4_1 == 0 || $u4_2 == 0 || $u4_3 == 0 || $u4_4 == 0) {
        $userCol4 = 'col-sm-4';
    }else {
        $userCol4 = 'col-sm-3';}

if ($u4_1 == 0) {$user4_1 = ' hidden';}
if ($u4_2 == 0) {$user4_2 = ' hidden';}
if ($u4_3 == 0) {$user4_3 = ' hidden';}
if ($u4_4 == 0) {$user4_4 = ' hidden';}  



if($u5_1 == 0 && $u5_2 == 0 && $u5_3 == 0 || $u5_1 == 0 && $u5_2 == 0 && $u5_4 == 0 || $u5_1 == 0 && $u5_4 == 0 && $u5_3 == 0 || $u5_4 == 0 && $u5_2 == 0 && $u5_3 == 0) {
        $userCol5 = 'col-sm-12';
    }else if($u5_1 == 0 && $u5_2 == 0 || $u5_1 == 0 && $u5_3 == 0 || $u5_1 == 0 && $u5_4 == 0 || $u5_2 == 0 && $u5_3 == 0 || $u5_2 == 0 && $u5_4 == 0 || $u5_3 == 0 && $u5_4 == 0) {
        $userCol5 = 'col-sm-6';
    }else if($u5_1 == 0 || $u5_2 == 0 || $u5_3 == 0 || $u5_4 == 0) {
        $userCol5 = 'col-sm-4';
    }else {
        $userCol5 = 'col-sm-3';}

if ($u5_1 == 0) {$user5_1 = ' hidden';}
if ($u5_2 == 0) {$user5_2 = ' hidden';}
if ($u5_3 == 0) {$user5_3 = ' hidden';}
if ($u5_4 == 0) {$user5_4 = ' hidden';} 


if($u6_1 == 0 && $u6_2 == 0 && $u6_3 == 0 || $u6_1 == 0 && $u6_2 == 0 && $u6_4 == 0 || $u6_1 == 0 && $u6_4 == 0 && $u6_3 == 0 || $u6_4 == 0 && $u6_2 == 0 && $u6_3 == 0) {
        $userCol6 = 'col-sm-12';
    }else if($u6_1 == 0 && $u6_2 == 0 || $u6_1 == 0 && $u6_3 == 0 || $u6_1 == 0 && $u6_4 == 0 || $u6_2 == 0 && $u6_3 == 0 || $u6_2 == 0 && $u6_4 == 0 || $u6_3 == 0 && $u6_4 == 0) {
        $userCol6 = 'col-sm-6';
    }else if($u6_1 == 0 || $u6_2 == 0 || $u6_3 == 0 || $u6_4 == 0) {
        $userCol6 = 'col-sm-4';
    }else {
        $userCol6 = 'col-sm-3';}

if ($u6_1 == 0) {$user6_1 = ' hidden';}
if ($u6_2 == 0) {$user6_2 = ' hidden';}
if ($u6_3 == 0) {$user6_3 = ' hidden';}
if ($u6_4 == 0) {$user6_4 = ' hidden';}


if($footer1 == 0 && $footer2 == 0 && $footer3 == 0 || $footer1 == 0 && $footer2 == 0 && $footer4 == 0 || $footer1 == 0 && $footer4 == 0 && $footer3 == 0 || $footer4 == 0 && $footer2 == 0 && $footer3 == 0) {
        $userColF = 'col-sm-12';
    }else if($footer1 == 0 && $footer2 == 0 || $footer1 == 0 && $footer3 == 0 || $footer1 == 0 && $footer4 == 0 || $footer2 == 0 && $footer3 == 0 || $footer2 == 0 && $footer4 == 0 || $footer3 == 0 && $footer4 == 0) {
        $userColF = 'col-sm-6';
    }else if($footer1 == 0 || $footer2 == 0 || $footer3 == 0 || $footer4 == 0) {
        $userColF = 'col-sm-4';
    }else {
        $userColF = 'col-sm-3';}

if ($footer1 == 0) {$userF1 = ' hidden';}
if ($footer2 == 0) {$userF2 = ' hidden';}
if ($footer3 == 0) {$userF3 = ' hidden';}
if ($footer4 == 0) {$userF4 = ' hidden';}
?>