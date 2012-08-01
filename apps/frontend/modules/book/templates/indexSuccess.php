			<table id="books" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>№ п/п</td>
						<td>Название</td>
					</tr>
				</thead>
				<tbody>
					<?php include_partial('book/list', array('books' => $pager->getResults())) ?>
					<?php if ($pager->getPage() != $pager->getNextPage()): ?>
						<tr>
							<td colspan="2" class="next" rel="<?php echo $pager->getNextPage() ?>"><span>Показать еще</span></td>
						</tr>
					<?php endif; ?>

				</tbody>
			</table>