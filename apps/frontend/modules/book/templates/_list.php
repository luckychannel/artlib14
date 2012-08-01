
	<?php foreach ($books as $i => $book): ?>
		<tr class="book">
			<td><?php echo $book->getId() ?></td>
			<td><?php echo $book->getTitle() ?></td>
		</tr>
	<?php endforeach; ?>
