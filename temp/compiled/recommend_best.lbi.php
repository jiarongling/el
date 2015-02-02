<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="xm-box">
  <h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
  <div id="show_best_area" class="clearfix"> 
    <?php endif; ?> 
    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_66637700_1422692436');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_66637700_1422692436']):
        $this->_foreach['foo']['iteration']++;
?>
    <div class="pic" <?php if (($this->_foreach['foo']['iteration'] - 1) % 5 == 0): ?> style='margin-left:0px;' <?php endif; ?> > <a href="<?php echo $this->_var['goods_0_66637700_1422692436']['url']; ?>"><img src="<?php echo $this->_var['goods_0_66637700_1422692436']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_66637700_1422692436']['name']); ?>" class="img" /></a>
      <p class="name"><a href="<?php echo $this->_var['goods_0_66637700_1422692436']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_66637700_1422692436']['name']); ?>"><?php echo $this->_var['goods_0_66637700_1422692436']['short_style_name']; ?></a></p>
      <p class="price">市场价：<font class="market"><?php echo $this->_var['goods_0_66637700_1422692436']['market_price']; ?></font>
      本店价：<font class="f1"> 
      <?php if ($this->_var['goods_0_66637700_1422692436']['promote_price'] != ""): ?> 
      <?php echo $this->_var['goods_0_66637700_1422692436']['promote_price']; ?> 
      <?php else: ?> 
      <?php echo $this->_var['goods_0_66637700_1422692436']['shop_price']; ?> 
      <?php endif; ?> 
      </font></p> </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    <?php if ($this->_var['cat_rec_sign'] != 1): ?> 
  </div>
</div>
<div class="blank"></div>
<?php endif; ?> 
<?php endif; ?> 
