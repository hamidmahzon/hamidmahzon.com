<?php
$align	= 'left';
$ralign	= 'right';

if(session()->get('lang') == 'pr')
{
	$align	= 'right';
	$ralign	= 'left';
}

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>
<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination w3-white">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="w3-<?=$align?> page-item">
				<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('app.first') ?>" class="w3-teal page-link">
					<span aria-hidden="true"><?= lang('app.first') ?></span>
				</a>
			</li>
			<li class="w3-<?=$align?> page-item">
				<a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('app.previous') ?>" class="w3-teal page-link">
					<span aria-hidden="true"><?= lang('app.previous') ?></span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="<?= $link['active'] ? 'active' : '' ?> w3-<?=$align?> page-item">
				<a href="<?= $link['uri'] ?>" class="page-link">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="w3-<?=$align?> page-item">
				<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('app.next') ?>" class="w3-teal page-link">
					<span aria-hidden="true"><?= lang('app.next') ?></span>
				</a>
			</li>
			<li class="w3-<?=$align?> page-item">
				<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('app.last') ?>" class="w3-teal page-link">
					<span aria-hidden="true"><?= lang('app.last') ?></span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
