<?php
    $shout = $_GET["shout"];
    $shout_result = strtoupper($shout);
    $count = $_GET["count"];
    $count_result = strlen($count);
    $shuffle = $_GET["shuffle"];
    $shuffle_result = str_shuffle($shuffle);
    $find_this = $_GET["find"];
    $find_within = $_GET["within"];
    $found_index = stripos($find_within, $find_this);
?>
<html>
<head>
    <title>Twisting My Words Around</title>
</head>
<body>
    <h1>Here ya go!</h1>
    <h4>You asked us to shout: <?php echo $shout ?></h4>
    <p><?php echo $shout_result; ?></p>
    <h4>There are <em><?php echo $count_result; ?> words</em> in the following sentence you entered:</h4>
    <p><?php echo $count ?></p>
    <h4><?php echo $shuffle ?> shuffled around is: </h4>
    <p><?php echo $shuffle_result; ?> </p>
    <h4>After looking for the word "<?php echo $find_this ?>" in the following phrase: "<?php echo $find_within ?>"</h4>
    <p>The first occurence of "<?php echo $find_this ?>" was at the index of [<?php echo $found_index ?>]</p>
</body>
</html>
