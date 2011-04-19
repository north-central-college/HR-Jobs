<?php
// $Id: webform-mail.tpl.php,v 1.1.2.5 2009/11/06 00:59:47 quicksketch Exp $

/**
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $form_values: The values submitted by the user.
 * - $node: The node object for this webform.
 * - $user: The current user submitting the form.
 * - $ip_address: The IP address of the user submitting the form.
 * - $sid: The unique submission ID of this submission.
 * - $cid: The component for which this e-mail is being sent.
 *
 * The $cid can be used to send different e-mails to different users, such as
 * generating a reciept-type e-mail to send to the user that filled out the
 * form. Each form element in a webform is assigned a CID, by doing special
 * logic on CIDs you can customize various e-mails.
 */
?>
<?php print '
<style type="text/css">
span {
  color:#222277;
  display:block;
}
.submitInfo {
  color:#333333;
  font-size:10px;
  font-family: verdana;
}
</style>
'; ?>
<?php print '<b>A Website Form Submission</b><hr>';?>
<?php print '<div class="submitInfo"> Sent From : '. check_plain($_SERVER['REQUEST_URI']) . '</div>'; ?>
<?php print '<div class="submitInfo"> Browser Information: '. check_plain($_SERVER['HTTP_USER_AGENT']) . '</div>'; ?>
<?php print t('<div class="submitInfo"> Submitted on @date </div>', array('@date' => format_date(time(), 'small'))) ?>

<?php if ($user->uid): ?>
<?php print t('<div class="submitInfo"> Submitted by user: @username [@ip_address]</div>', array('@username' => $user->name, '@ip_address' => $ip_address)) ?>
<?php else: ?>
<?php print t('<div class="submitInfo"> Submitted by anonymous user: [@ip_address]</div>', array('@ip_address' => $ip_address)) ?>
<?php endif; ?>
<?php print "<hr>";?>

<?php print t('<b>Submitted values are</b><pre>') ?>

<?php
  // Print out all the Webform fields. This is purposely a theme function call
  // so that you may remove items from the submitted tree if you so choose.
  // unset($form_values['submitted_tree']['element_key']);
  print theme('webform_mail_fields', 0, $form_values['submitted_tree'], $node);
?>
<?php print '</pre><br /><hr><div class="submitInfo">'?>
<?php print t('The results of this submission may be viewed at : ') ?>
<?php print '<a href="'.url('node/'. $node->nid .'/submission/'. $sid, array('absolute' => TRUE)).'">'?>
<?php print url('node/'. $node->nid .'/submission/'. $sid, array('absolute' => TRUE)) ?>
<?php print '</a></div>';?>
