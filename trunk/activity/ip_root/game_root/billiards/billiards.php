<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* aUsTiN-Inc 2003/5 (austin@phpbb-amod.com) - (http://phpbb-amod.com)
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
	exit;
}

// Start session management
$userdata = session_pagestart($user_ip);
init_userprefs($userdata);
// End session management

//===========================================================================
// Change the part that says 'game' to the Name of the game your trying to
// install. This is case sensetive so type it exactly how you typed it in
// the game editor.

$game_name = 'Billiards';

//===========================================================================

// Grab Game info from game_id
$sql = "SELECT * FROM " . GAMES_GAMES . "
				WHERE game_name = '" . $game_name . "'";
if(!$result = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Couldn't obtain Game data", "", __LINE__, __FILE__, $sql);
}
$game_info = $db->sql_fetchrow($result);

// Extra Vars
$game_id = $game_info['game_id'];
$game_width = $game_info['win_width'];
$game_height = $game_info['win_height'];
$game_path = $game_info['game_path'];
$game_flash = $game_info['game_flash'];
$game_title = ip_stripslashes($board_config['sitename']) . ' :: ' . $game_name;

if ($game_flash)
{
	$template->set_filenames(array('body' => 'flash_body.tpl'));

	// Generate page
	$template->assign_vars(array(
		'TITLE' => $game_title,
		'WIDTH' => $game_width,
		'HEIGHT' => $game_height,
		'SWFNAME' => $game_name . '.swf',
		'PATH' => $game_path
		)
	);
}
else
{
	$template->set_filenames(array('body' => $game_name . '_body.tpl'));

	$template->assign_vars(array(
		'USERNAME' => $userdata['username'],
		'PATH' => $game_path,
		'GAMELIB' => './' . $board_config['games_path'] . '/' . $board_config['gamelib_path'] . '/',
		'S_GAME_ACTION' => append_sid('onlinegames_scores.' . PHP_EXT . '?mode=check_score&game_name=' . $game_name))
	);
}

$template->pparse('body');

?>