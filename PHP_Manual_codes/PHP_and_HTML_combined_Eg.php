<!-- http://php.net/manual/en/language.basic-syntax.phpmode.php -->

<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif;

echo '<br />';
?>

<?php echo 'if you want to serve PHP code in XHTML or XML documents
use these tags<br />'; ?>
<?php echo '<br />'; ?>
<?= 'print this string'; ?>

<? echo 'this code is within short tags, but will only work '.'if short_open_tag is enabled<br />'; ?>

<!-- NOTES-->

<?php for ($i = 0; $i < 5; ++$i): ?>
Hello, there!
<?php endfor; ?>
