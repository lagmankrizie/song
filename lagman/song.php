<?php
$title = 'Anaheim';
$artist = "NIKI";
$mood = 'yearning';
$verseCount = 2;
$repeatChorus = 2;
$prechorusCount = 2;
$totalSections = $verseCount + $prechorusCount + $repeatChorus;
$sectionSummary = "This song has " . $totalSections . " sections in total.";

/*Array of nouns from lyrics*/
$nouns = ['moment','home','answers','world','city','hero','days','laughs','melody','myself','bed','promises','soul','time','Anaheim','sun','mind','roads','crimes','truth','sight','divide','story','baby','route'];

/*Array of verbs from lyrics */
$verbs = ["could","freeze","make","want","know","tell","mean","kiss","kill","love","do","live","hurt","Say","see","lying","let","have ","learn","be","burn","keep","give","stop","drive","teach","put","wanna be","let up","recognize","am","spend","studying","cant live","die","ask","sleep","unearth","swear","hate","find","Commit","lose sight","threatening","undo","dont think","memorize"];
$verbIs =' is ';

$verse1 = ["If I ", ", I'd ", " this ", ", make it my ",
"You're all I ", " to want to ",
"I can ", ", you ", " it when you ", " me slow",
"But please, don't ask me, ", "the ", " no",
"In a perfect ", ", I'd ", " to ", " you the loudest",
"But all I ", " to ", " you soundless",
", " , " You ", " I'm ", ", babe" ," and ", " this go",
"I can never promise you tomorrow",];

$prechorus1 = ["'Cause I ", " yet to ",
    "How not to ", " his",
    "This ", " will surely ",
    "If we ", " this as it "];

$chorus1 = ["But I'd ", " anything to ", " ",
    "And ", " around ", " at sundown",
    "To ", " my "," to ", " you first",
    "Here you are, a ", "",
    "You ", " my new ",
    "But ",", ", " I won't ever ", " these ",
    "'Cause I ", " lost, but not in you",
    "Yes, I ", " lost, but not in you"];

$verse2 = ["I ", " my ", " ", " your "," ",
    "And I ", " with ", " 'cause I ", " you'd ", " for me",
    "Oh, all I ", " of you is please don't ", "",
    "On this ", " of ", " I can't ",];
    
$prechorus2 = ["'Cause I ", " yet to ", "",
    "How to ", " mine",
    "You can try to ", " this ", "",
    "I ", " you'll ", " what you ",
    "(Oh-oh-oh-oh, oh-ooh-oh)",
    "(Oh-oh-oh-oh, oh-ooh-oh)",
    "(Oh-oh-oh-oh, oh-ooh-oh)",];

$chorus2 = ["But I'd ", " anything to ", " ",
    " ", " to you and not ", " against the ",
    "And ", " of every ", " ", " to ", " this ",
    "But ", ", I'm so sorry",
    "I ", " that I'll ever ", " this ",
    "'Cause I ", " lost, but not in you",
    "Yes, I ", " lost, but not in you",
    "(Oh-oh, oh-oh-ooh-oh-oh, oh-oh)",];
?>

<!DOCTYPE html>
<html>
<head>
   <title>Anaheim</title>
   <style>
        /* Background color for the whole page */
        body {
            background-color: #EEEEEE;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h3{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Anaheim</h1>
    <h2>by <?php echo $artist;?></h2>
    <!-- Concatenation for Verse 1 -->
    <h3>[Verse 1]</h3>
    <p><?php echo $verse1[0] . $verbs[0] . $verse1[1] . $verbs[1] . $verse1[2] . $nouns[0] . $verse1[3] . $nouns[1]; ?></p>
    <p><?php echo $verse1[4] . $verbs[3] . $verse1[5] . $verbs[4]; ?></p>
    <p><?php echo $verse1[6] . $verbs[5] . $verse1[7] . $verbs[6] . $verse1[8] . $verbs[7] . $verse1[9]; ?></p>
    <p><?php echo $verse1[10] . $verse1[11] . $nouns[2] . $verse1[12]; ?></p>
    <p><?php echo $verse1[13] . $nouns[3] . $verse1[14] . $verbs[8] . $verse1[15] . $verbs[9] . $verse1[16]; ?></p>
    <p><?php echo $verse1[17] . $verbs[10] . $verbIs . $verbs[11] . $verse1[18].$verbs[12].$verse1[19] ?></p>
    <p><?php echo $verbs[13].$verse1[20].$verse1[21].$verbs[14].$verse1[22].$verbs[15].$verse1[23].$verse1[24].$verbs[16].$verse1
    [25] ?></p>
    <p><?php echo $verse1[26] ?></p>

    <!-- Concatenation for Pre-Chorus 1 -->
    <h3>[Pre-Chorus 1]</h3>
    <p><?php echo $prechorus1[0] . $verbs[17] . $prechorus1[1] . $verbs[18]; ?></p>
    <p><?php echo $prechorus1[2] . $verbs[19] . $prechorus1[3]; ?></p>
    <p><?php echo $prechorus1[4] . $nouns[4] . $prechorus1[5] . $verbs[20]; ?></p>
    <p><?php echo $prechorus1[6] . $verbs[21] . $prechorus1[7] . $verbIs; ?></p>

    <!-- Concatenation for Chorus 1 -->
    <h3>[Chorus 1]</h3>
    <p><?php echo $chorus1[0] . $verbs[22] . $chorus1[1] . $verbs[23] . $chorus1[2] . $nouns[13]; ?></p>
    <p><?php echo $chorus1[3] . $verbs[24] . $chorus1[4] . $nouns[14] . $chorus1[5]; ?></p>
    <p><?php echo $chorus1[6] . $verbs[25] . $chorus1[7] . $nouns[16] . $chorus1[8] . $verbs[26] . $chorus1[9] ?></p>
    <p><?php echo $chorus1[10] . $chorus1[11] . $nouns[5]; ?></p>
    <p><?php echo $chorus1[12] . $verbs[27] . $chorus1[13] . $nouns[1]; ?></p>
    <p><?php echo $chorus1[14] . $nouns[23]. $chorus1[15]. $verbs[28]. $chorus1[16] . $verbs[29] . $chorus1[17] . $nouns[17]; ?></p>
    <p><?php echo $chorus1[18] . $verbs[30] . $chorus1[19]; ?></p>
    <p><?php echo $chorus1[20] . $verbs[30] . $chorus1[21]; ?></p>

    <!-- Concatenation for Verse 2 -->
    <h3>[Verse 2]</h3>
    <p><?php echo $verse2[0] . $verbs[0]. $verse2[2].$verbs[31]. $verse2[1] . $nouns[6] . $verse2[2] . $verbs[32] . $verse2[3] . $nouns[7].$verse2[4].$nouns[8]; ?></p>
    <p><?php echo $verse2[5] . $verbs[33] . $verse2[6] . $nouns[9] . $verse2[7] . $verbs[4] . $verse2[8] . $verbs[34] . $verse2[9]; ?></p>
    <p><?php echo $verse2[10] . $verbs[35] . $verse2[11] . $verbs[36] . $verse2[12]; ?></p>
    <p><?php echo $verse2[13] . $nouns[10] . $verse2[14] . $nouns[11] . $verse2[15] . $verbs[21]; ?></p>

    <!-- Concatenation for Pre-Chorus 2 -->
    <h3>[Pre-Chorus 2]</h3>
    <p><?php echo $prechorus2[0] . $verbs[17] . $prechorus2[1] . $verbs[18] . $prechorus2[2]; ?></p>
    <p><?php echo $prechorus2[3] . $verbs[19] . $prechorus2[4]; ?></p>
    <p><?php echo $prechorus2[5] . $verbs[37] . $prechorus2[6] . $nouns[12] . $prechorus2[7]; ?></p>
    <p><?php echo $prechorus2[8] . $verbs[38] . $prechorus2[9] . $verbs[39] . $prechorus2[10] . $verbs[40]; ?></p>
    <p><?php echo $prechorus2[11];?></p>
    <p><?php echo $prechorus2[12];?></p>
    <p><?php echo $prechorus2[13];?></p>

    <!-- Concatenation for Chorus 2 -->
    <h3>[Chorus 2]</h3>
    <p><?php echo $chorus2[0] . $verbs[22] . $chorus2[1] . $verbs[23] . $chorus2[2] . $nouns[13]; ?></p>
    <p><?php echo $chorus2[3] . $verbs[41] . $chorus2[4] . $nouns[18] . $chorus2[5] . $nouns[19]; ?></p>
    <p><?php echo $chorus2[6] . $verbs[42] . $chorus2[7] . $nouns[21] . $chorus2[8] . $verbs[43] . $chorus2[9] . $verbs[44] .$chorus2[10] . $nouns[22]; ?></p>
    <p><?php echo $chorus2[11] . $nouns[23] . $chorus2[12]; ?></p>
    <p><?php echo $chorus2[13] . $verbs[45] . $chorus2[14] . $verbs[46] . $chorus2[15] . $nouns[24]; ?></p>
    <p><?php echo $chorus2[16] . $verbs[30] . $chorus2[17]; ?></p>
    <p><?php echo $chorus2[18] . $verbs[30] . $chorus2[19]; ?></p>
    <p><?php echo $chorus2[20]; ?></p>
    <h2><i>Anaheim is by <?php echo $artist;?> and the mood of this song is <?php echo $mood;?>.<?php echo $sectionSummary; ?> </i></h2>
    </body>
</html>
