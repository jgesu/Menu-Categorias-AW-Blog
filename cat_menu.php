<?php 
/*
 * AW CATS V1
 *
 * 
 * 
 */
	$collection = Mage::getModel('blog/cat') -> getCollection() -> addStoreFilter(Mage::app() -> getStore() -> getId()) -> setOrder('sort_order', 'asc');
	$home_url = Mage::helper('core/url') -> getHomeUrl();
?>
<div class="block block-blog">
	<div class="block-content">
		<?php if ($collection->count()): ?>
		<div class="menu-categories">
			<h5><?php echo Mage::helper('blog') -> __('Categories'); ?></h5>
			<ul>
			<?php  foreach ($collection as $item) : ?>
				<li><a href="<?php echo $home_url . 'blog/cat/' . $item['identifier']; ?>" ><?php echo $item['title']; ?></a></li>
			<?php
			endforeach;
			?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</div>
