<?php

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *   $tweet->time_ago
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>

<?php if (is_array($tweets)): ?>
  <?php foreach ($tweets as $tweet_key => $tweet): ?>
    <div class="tweet col-lg-4 col-md-12 col-sm-12">
      <p><?php print twitter_pull_add_links($tweet->text); ?></p>
      <time datetime="<?= date('Y-m-j', $tweet->timestamp) ?>"><?= date('F j, Y', $tweet->timestamp) ?></time>
    </div>
  <?php endforeach; ?>
<?php endif; ?>