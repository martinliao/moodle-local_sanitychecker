<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * The MIT License
 *
 * Copyright 2012 Eric VILLARD <dev@eviweb.fr>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @package     local_sanitychecker
 * @author      Eric VILLARD <dev@eviweb.fr>
 * @copyright	(c) 2013 Eric VILLARD <dev@eviweb.fr>
 * @license     http://opensource.org/licenses/MIT MIT License
 */

$string['pluginname'] = 'Sanity checker utility';
$string['local_sanitychecker_menu'] = 'Sanity checker';
$string['local_sanitychecker_disclaimer'] = 'IMPORTANT NOTE<br />Be aware that
    these fixes modify directly database records.<br /><b>It is highly recommended 
    to perform a backup of your database before using them.</b><br />No revert 
    is possible at this time !';
$string['local_sanitychecker_table_head_name'] = 'Sanity checker name';
$string['local_sanitychecker_table_head_information'] = 'Information';
$string['local_sanitychecker_action_check'] = 'Run test';
$string['local_sanitychecker_action_resolve'] = 'Resolve issue';
$string['local_sanitychecker_action_confirm'] = 'Do you really want to continue ?';
$string['local_sanitychecker_check_succeed'] = 'All is correct';
$string['local_sanitychecker_action_resolve_invit'] = 
    'Click on the action "<i>Resolve issue</i>" to solve the problem';

// Sanity checkers
// QuizSanityChecker
$string['local_sanitychecker_impl_quiz'] = 'Quiz Sanity Checker';
$string['local_sanitychecker_impl_quiz_description'] =
    'Look for database inconsistencies related to the quiz module<br />
     Read more about this issue on the on Moodle Issue Tracker at
     <a href="https://tracker.moodle.org/browse/MDL-32791" target="_blank">MDL-32791</a>';
$string['local_sanitychecker_impl_quiz_notification_nonvalidqqi'] =
    'The following quiz question instances are non valid : ';
$string['local_sanitychecker_impl_quiz_notification_quiz'] = 'Quiz ID : ';
$string['local_sanitychecker_impl_quiz_notification_instances'] =
    'Question Instance IDs : ';

// ImageLinkSanityChecker
$string['local_sanitychecker_impl_legacyfilelink'] = 'Legacy File Link Sanity Checker';
$string['local_sanitychecker_impl_legacyfilelink_description'] =
    'Look for legacy file link inconsistencies';
$string['local_sanitychecker_impl_legacyfilelink_notification_nonvalidlinks'] =
    'The following legacy file links are non valid : ';
$string['local_sanitychecker_impl_legacyfilelink_notification_findin'] = 'Find in table.column : ';
$string['local_sanitychecker_impl_legacyfilelink_notification_links'] =
    'ID : Links found / Course ID : ';

