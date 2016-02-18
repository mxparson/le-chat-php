<?php
/*
* LE CHAT-PHP - a PHP Chat based on LE CHAT - English translation
*
* Copyright (C) 2015-2016 Daniel Winzen <d@winzen4.de>
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

//Language: English
$I=array(
	'nodb' => 'No connection to database!',
	'nodbsetup' => 'No connection to database, please create a database and edit the script to use the correct database with given username and password!',
	'changelang' => 'Change language:',
	'expire' => 'Invalid/expired session',
	'kicked' => 'Kicked!',
	'invalnick' => 'Invalid nickname (%d characters maximum, no special characters allowed)',
	'invalpass' => 'Invalid password (At least %d characters)',
	'noconfirm' => 'Password confirmation does not match!',
	'incorregex' => 'Incorrect regular expression!',
	'bottom' => 'Bottom',
	'top' => 'Top',
	'choose' => '(choose)',
	'setup' => 'Chat Setup',
	'init' => 'Initial Setup',
	'sulogin' => 'Superadmin Login',
	'sunick' => 'Superadmin Nickname:',
	'supass' => 'Superadmin Password:',
	'suconfirm' => 'Confirm Password:',
	'susuccess' => 'Successfully registered!',
	'initbtn' => 'Initalise Chat',
	'initdbexist' => 'Database tables already exist! To continue, you have to delete these tables manually first.',
	'initsuexist' => 'A Superadmin already exists!',
	'initgosetup' => 'Go to the Setup-Page',
	'captcha' => 'Captcha',
	'enabled' => 'Enabled',
	'onlyguests' => 'Only for guests',
	'disabled' => 'Disabled',
	'simple' => 'Simple',
	'moderate' => 'Moderate',
	'extreme' => 'Extreme',
	'nick' => 'Nickname:',
	'pass' => 'Password:',
	'globalloginpass' => 'Global Password:',
	'login' => 'Login',
	'dbupdate' => 'Database successfully updated!',
	'sysmessages' => 'System messages',
	'msgenter' => 'Entrance',
	'msgexit' => 'Leaving',
	'msgmemreg' => 'Member registered',
	'msgsureg' => 'Applicant registered',
	'msgkick' => 'Kicked',
	'msgmultikick' => 'Multiple kicked',
	'msgallkick' => 'All kicked',
	'msgclean' => 'Room cleaned',
	'dateformat' => '<a target="_blank" href="http://php.net/manual/en/function.date.php#refsect1-function.date-parameters">Date formating</a>',
	'admfunc' => 'Administrative functions',
	'allguests' => 'All guests',
	'cleanmsgs' => 'Clean messages',
	'room' => 'Whole room',
	'selection' => 'Selection',
	'cleannick' => 'Following nickname:',
	'clean' => 'Clean',
	'kickchat' => '<b>Kick Chatter</b> (%d minutes)',
	'kickreason' => 'Kickmessage:',
	'kickpurge' => 'Purge messages',
	'kick' => 'Kick',
	'logoutinact' => 'Logout inactive Chatter',
	'logout' => 'Logout',
	'sessions' => 'View active sessions',
	'view' => 'View',
	'filter' => 'Filter',
	'guestacc' => 'Change Guestaccess',
	'guestallow' => 'Allow',
	'guestwait' => 'Allow with waitingroom',
	'adminallow' => 'Require moderator approval',
	'guestdisallow' => 'Only members',
	'addsuguest' => 'Add applicant',
	'register' => 'Register',
	'admmembers' => 'Members',
	'memdel' => 'Delete from database',
	'memdeny' => 'Deny access (!)',
	'memsuguest' => 'Set to applicant (G)',
	'memreg' => 'Set to regular member',
	'memmod' => 'Set to moderator (M)',
	'memsumod' => 'Set to supermod (SM)',
	'memadm' => 'Set to admin (A)',
	'change' => 'Change',
	'regguest' => 'Register Guest',
	'regmem' => 'Register new Member',
	'sessact' => 'Active Sessions',
	'sessnick' => 'Nickname',
	'sesstimeout' => 'Timeout in',
	'sessua' => 'User-Agent',
	'fid' => 'Filter ID:',
	'match' => 'Match',
	'replace' => 'Replace',
	'allowpm' => 'Allow in PM',
	'regex' => 'Regex',
	'apply' => 'Apply',
	'newfilter' => 'New filter:',
	'add' => 'Add',
	'noframes' => 'This chat uses <b>frames</b>. Please enable frames in your browser or use a suitable one!',
	'delselmes' => 'Delete selected messages',
	'staffnotes' => 'Staff notes',
	'adminnotes' => 'Admin notes',
	'notessaved' => 'Notes saved!',
	'lastedited' => 'Last edited by %1$s at %2$s',
	'savenotes' => 'Save Notes',
	'waitingroom' => 'Waiting room',
	'waittext' => 'Welcome %1$s, your login has been delayed, you can access the chat in %2$d seconds.',
	'admwaittext' => 'Welcome %1$s, your login has been delayed, you can access the chat as soon, as a moderator lets you in.',
	'waitreload' => 'If this page doesn\'t refresh every %d seconds, use the button below to reload it manually!',
	'reload' => 'Reload',
	'rules' => 'Rules',
	'talkto' => 'Send to',
	'toall' => 'All chatters',
	'tomem' => 'Members only',
	'tostaff' => 'Staff only',
	'toadmin' => 'Admin only',
	'alsopurge' => 'Also purge messages',
	'dellast' => 'Delete last message',
	'delall' => 'Delete all messages',
	'switchsingle' => 'Switch to single-line',
	'switchmulti' => 'Switch to multi-line',
	'help' => 'Help',
	'helpguest' => 'All functions should be pretty much self-explaining, just use the buttons. In your profile you can adjust the refresh rate, font colour and your preferred input box size.<br><u>Note:</u> This is a chat, so if you don\'t keep talking, you will be automatically logged out after a while.',
	'helpembed' => 'If you want to embed an image in your post, simply put [img] in front of your image URL. Example: [img]http://example.com/images/file.jpg will embed the image in your post.',
	'helpmem' => 'Members: You\'ll have some more options in your profile. You can adjust your font face and you can change your password anytime.',
	'helpmod' => 'Moderators: Notice the Admin-button at the bottom. It\'ll bring up a page where you can clean the room, kick chatters, view all active sessions and disable guest access completely if needed.',
	'helpadm' => 'Admins: You\'ll be furthermore able to register guests, edit members and register new nicks without them beeing in the room.',
	'profile' => 'Your Profile',
	'ignore' => 'Ignore',
	'unignore' => 'Don\'t ignore anymore',
	'refreshrate' => 'Refresh rate (5-150 seconds)',
	'fontcolour' => 'Font colour',
	'viewexample' => 'View examples',
	'bgcolour' => 'Background colour',
	'fontface' => 'Fontface',
	'roomdefault' => 'Room Default',
	'bold' => 'Bold',
	'italic' => 'Italic',
	'fontexample' => 'Example for your chosen font',
	'timestamps' => 'Show Timestamps',
	'embed' => 'Embed images (needs Cookies)',
	'incognito' => 'Incognito mode',
	'pbsize' => 'Post box size',
	'nbsize' => 'Notes box size',
	'width' => 'Width:',
	'height' => 'Height:',
	'changepass' => 'Change Password',
	'oldpass' => 'Old password:',
	'newpass' => 'New password:',
	'confirmpass' => 'Confirm new password:',
	'savechanges' => 'Save changes',
	'reloadpb' => 'Reload Post Box',
	'reloadmsgs' => 'Reload Messages',
	'chgprofile' => 'Profile',
	'adminbtn' => 'Admin',
	'admnotes' => 'Admin Notes',
	'notes' => 'Notes',
	'clone' => 'Clone',
	'randh' => 'Rules & Help',
	'exit' => 'Exit Chat',
	'bye' => 'Bye %s, visit again soon!',
	'colourtable' => 'Colourtable',
	'backtoprofile' => 'Back to your Profile',
	'copy' => 'Copy:',
	'choosecol' => 'Guests, choose a colour:',
	'randomcol' => 'Random Colour',
	'enter' => 'Enter Chat',
	'error' => 'Error:',
	'members' => 'Members',
	'guests' => 'Guests',
	'approveguests' => '%d new guests to approve',
	'allowchecked' => 'Allow checked',
	'allowall' => 'Allow all',
	'denychecked' => 'Deny checked',
	'denyall' => 'Deny all',
	'denymessage' => 'Send message to denied:',
	'butallowdeny' => 'Submit',
	'waitempty' => 'No more entry requests to approve.',
	'wrongcaptcha' => 'Wrong Captcha',
	'captchaexpire' => 'Captcha already used or timed out.',
	'noguests' => 'Sorry, currently members only!',
	'curchat' => 'Currently %d chatter(s) in room:',
	'cantreg' => 'Can\'t register %s',
	'alreadyreged' => '%s is already registered.',
	'successreg' => '%s successfully registered.',
	'cantchgstat' => 'Can\'t change status of %s',
	'succdel' => '%s successfully deleted from database.',
	'succchg' => 'Status of %s successfully changed.',
	'wrongpass' => 'Wrong Password!',
	'wrongglobalpass' => 'Wrong global Password!',
	'succprofile' => 'Your profile has successfully been saved.',
	'backtologin' => 'Back to the login page.',
	'backtochat' => 'Back to the chat.',
	'Beige' => 'Beige',
	'Black' => 'Black',
	'Blue' => 'Blue',
	'BlueViolet' => 'Blue violet',
	'Brown' => 'Brown',
	'Cyan' => 'Cyan',
	'DarkBlue' => 'Dark blue',
	'DarkGreen' => 'Dark green',
	'DarkRed' => 'Dark red',
	'DarkViolet' => 'Dark violet',
	'DeepSkyBlue' => 'Sky blue',
	'Gold' => 'Gold',
	'Grey' => 'Grey',
	'Green' => 'Green',
	'HotPink' => 'Hot pink',
	'Indigo' => 'Indigo',
	'LightBlue' => 'Light blue',
	'LightGreen' => 'Light green',
	'LimeGreen' => 'Lime green',
	'Magenta' => 'Magenta',
	'Olive' => 'Olive',
	'Orange' => 'Orange',
	'OrangeRed' => 'Orange red',
	'Purple' => 'Purple',
	'Red' => 'Red',
	'RoyalBlue' => 'Royal blue',
	'SeaGreen' => 'Sea green',
	'Sienna' => 'Sienna',
	'Silver' => 'Silver',
	'Tan' => 'Tan',
	'Teal' => 'Teal',
	'Violet' => 'Violet',
	'White' => 'White',
	'Yellow' => 'Yellow',
	'YellowGreen' => 'Yellow green',
	'redirectto' => 'Redirecting to:',
	'nonhttp' => 'Non-http link requested:',
	'httpredir' => 'If it\'s not working, try this one:',
	'actions' => 'Actions',
	'sesip' => 'IP-Address',
	'css' => 'CSS Style',
	'memberexpire' => 'Member timeout (minutes)',
	'guestexpire' => 'Guest timeout (minutes)',
	'kickpenalty' => 'Kick penalty (minutes)',
	'entrywait' => 'Waiting room time (seconds)',
	'captchatime' => 'Captcha timeout (seconds)',
	'messageexpire' => 'Message timeout (minutes)',
	'messagelimit' => 'Message limit (public)',
	'maxmessage' => 'Maximal message length',
	'confirm' => 'Are you sure?',
	'yes' => 'Yes',
	'no' => 'No',
	'colbg' => 'Background colour',
	'coltxt' => 'Text colour',
	'maxname' => 'Maximal nickname length',
	'minpass' => 'Minimal password length',
	'defaultrefresh' => 'Default message reload time (seconds)',
	'suguests' => 'Enable applicants',
	'rulestxt' => 'Rules (html)',
	'imgembed' => 'Embed images',
	'trackip' => 'Show session-IP',
	'captchachars' => 'Characters used in Captcha',
	'memkick' => 'Members can kick, if no moderator is present',
	'forceredirect' => 'Force redirection',
	'redirect' => 'Custom redirection script',
	'backuprestore' => 'Backup and restore',
	'backup' => 'Backup',
	'restore' => 'Restore',
	'settings' => 'Settings',
	'linkfilter' => 'Linkfilter',
	'enablejs' => 'Allow JavaScript for better message loading',
	'chatname' => 'Chat name',
	'destroy' => 'Destroy chat',
	'destroyed' => 'Successfully destroyed chat',
	'topic' => 'Topic',
	'passreset' => 'Reset password',
	'cantresetpass' => 'Can\'t reset password',
	'succpassreset' => 'Successfully reset password',
	'entermsg' => '%s entered the chat.',
	'exitmsg' => '%s left the chat.',
	'memregmsg' => '%s is now a registered member.',
	'suregmsg' => '%s is now a registered applicant.',
	'kickmsg' => '%s has been kicked.',
	'multikickmsg' => '%s have been kicked.',
	'allkickmsg' => 'All chatters have been kicked.',
	'cleanmsg' => '%s has been cleaned.',
	'sendallmsg' => '%s - ',
	'sendmemmsg' => '[M] %s - ',
	'sendmodmsg' => '[Staff] %s - ',
	'sendadmmsg' => '[Admin] %s - ',
	'sendprvmsg' => '[%1$s to %2$s] - ',
	'msgsendall' => 'Message to all',
	'msgsendmem' => 'Message to members only',
	'msgsendmod' => 'Message to staff only',
	'msgsendadm' => 'Message to admins only',
	'msgsendprv' => 'Private message',
	'numnotes' => 'Number of notes revisions to keep',
	'revisions' => 'Revisions:',
	'older' => 'Older',
	'newer' => 'Newer',
	'accessdenied' => 'Access denied',
	'loggedinas' => 'You are logged in as %s and don\'t have access to this section.',
	'changenickname' => 'Change nickname',
	'newnickname' => 'New nickname:',
	'nicknametaken' => 'Nickname is already taken',
	'nopass' => 'Invalid password (At least %d characters), not changing nickname'
);
?>
