			<table id="books" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>№ п/п</td>
						<td>Название</td>
					</tr>
				</thead>
				<tbody>
			    <?php foreach ($Books as $Book): ?>
			    <tr class="book" rel="<?php echo $Book->getId(); ?>">
			      <td><?php echo $Book->getId() ?></td>
			      <td><?php echo $Book->getTitle() ?></td>
			    </tr>
			    <?php endforeach; ?>
				</tbody>
			</table>