{IMG_THL}{IMG_THC}<span class="forumlink">{L_DL_CAT}</span>{IMG_THR}<table class="forumlinenb">
<tr>
	<th class="tdnw" colspan="2">{L_DL_CAT}</th>
	<th class="tdnw">{L_DL_FILES}</th>
	<th class="tdnw">{L_DESCRIPTION}</th>
	<th class="tdnw">{L_LAST}</th>
</tr>
<!-- BEGIN subcats -->
<tr>
	<td class="{subcats.ROW_CLASS} row-center tw37px"><img src="{subcats.CAT_IMG}" alt="{subcats.CAT_NAME}" /></td>
	<td class="{subcats.ROW_CLASS}"><a href="{subcats.U_CAT_VIEW}" class="nav">{subcats.CAT_NAME}</a>&nbsp;{subcats.MINI_IMG}<span class="gensmall">{subcats.CAT_PAGES}&nbsp;</span></td>
	<td class="{subcats.ROW_CLASS} row-center"><span class="nav">{subcats.CAT_DL}&nbsp;</span></td>
	<td class="{subcats.ROW_CLASS}" {subcats.ROW_SPAN}><span class="genmed">{subcats.CAT_DESC}</span></td>
	<td class="{subcats.ROW_CLASS} row-center" {subcats.ROW_SPAN}><a href="{subcats.U_CAT_LAST_LINK}" class="gensmall">{subcats.CAT_LAST_DL}</a><br /><span class="gensmall">{subcats.CAT_LAST_TIME}</span><br />{subcats.U_CAT_LAST_USER}</td>
</tr>
<!-- BEGIN sub -->
<tr>
	<td class="{subcats.ROW_CLASS}" colspan="5">
		<table class="p2px">
		<!-- BEGIN sublevel_row -->
		<tr>
			<td class="{subcats.sub.sublevel_row.ROW_CLASS}"><a href="{subcats.sub.sublevel_row.U_SUBLEVEL}" class="genmed">{subcats.sub.sublevel_row.L_SUBLEVEL}</a>&nbsp;{subcats.sub.sublevel_row.M_SUBLEVEL}</td>
			<td align="right" class="{subcats.sub.sublevel_row.ROW_CLASS}"><span class="genmed">{subcats.sub.sublevel_row.SUBLEVEL_COUNT}&nbsp;</span></td>
		</tr>
		<!-- END sublevel_row -->
		</table>
	</td>
</tr>
<!-- END sub -->
<!-- END subcats -->
</table>{IMG_TFL}{IMG_TFC}{IMG_TFR}
<br />