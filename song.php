<?php
$title = 'Anaheim';
$artist = "NIKI";
$mood = 'Sad';
$verseCount = 2;
$repeatChorus = 2;
$nouns = ['moment','home','answer','world','city','hero','days','laugh','melody','myself','bed','promises','soul','time','Anaheim','sun','mind','roads','crimes','truth','sight','divide','story','baby','route',];
$verbs = ["could","freeze","make","want","know","tell","mean","kiss",
"kill",
"love",
"do",
"live",
"hurt",
"say",
"see",
"lying",
"let",
"have yet",
"learn",
"be",
"burn",
"keep",
"give",
"stop",
"drive",
"teach",
"put",
"wanna be",
"let up",
"recognize",
"am",
"spend",
"studying",
"cant live",
"die",
"ask",
"sleep",
"unearth",
"swear",
"hate",
"find",
"commit",
"lose sight",
"threatening",
"undo",
"dont think",
"memorize",];
$verbIs ='is';
$verse1 = ["If I ",", Id " ," this " ," it my ",
"Youre all I " ," to want to ",
"I can",", you" ,"it when you" ,"me slow",
"But please," ,"me," ,"the" ,"no",
"In a perfect",", Id" ,"to", "you the loudest",
"But all I" ,"is" ,"to", "you soundless",
"You", "Im" ,",babe" ,"and" ,"this go",
"I can never promise you tomorrow",];
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Anaheim</h1>
        <h2>by <?php echo $artist;?></h2>
        <h3>[Verse 1]</h3>
        <p><?php echo $verse1[0].$verbs[0].$verse1[1].$verbs[1].$verse1[2].$nouns[0].$verbs[2].$verse1[3].$nouns[1]?></p>
        <p><?php echo $verse1[4].$verbs[3].$verse1[5].$verbs[4]?></p>
        <p><?php echo $verse1[6].$verbs[5].$verse1[7].$verbs[6]. $verse[8]?></p>
    </body>
</html>