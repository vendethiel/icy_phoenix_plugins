{IMG_THL}{IMG_THC}<span class="forumlink">{L_CATEGORIES}</span>{IMG_THR}<table class="forumlinenb">
<tr>
	<th class="tdnw">&nbsp;{L_CATEGORY}&nbsp;</th>
	<th class="tw50px tdnw">&nbsp;{L_ARTICLES}&nbsp;</th>
</tr>
<!-- BEGIN catrow -->
<tr>
	<!--
	<td class="row1h row-forum" height="46" ><span class="forumlink">{catrow.CATEGORY}</span><br /><span class="genmed">{catrow.CAT_DESCRIPTION}</span></td>
	<td class="row2 row-center"><span class="genmed">{catrow.CAT_ARTICLES}</span></td>
	-->
	<td class="row1h{catrow.forumrow.XS_NEW} row-left" onclick="window.location.href='{catrow.CATEGORY_XS}'" height="46">
		<span class="forumlink">{catrow.CATEGORY}</span><br />
		<span class="genmed">{catrow.CAT_DESCRIPTION}</span>
	</td>
	<td class="row2 row-center"><span class="genmed">{catrow.CAT_ARTICLES}</span></td>
</tr>
<!-- END catrow -->
<tr><td class="cat" colspan="2">&nbsp;</td></tr>
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}