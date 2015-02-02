
  <div class="mt">
      <ul class="fore1 lh">
        <li ><a href="javascript:void(0);">商城公告</a></li>
      </ul>
    </div>
    <div class="mc" >
     <div class="virtuals-iframes" >
        <ul>
        <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
        <li>
      <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],20); ?></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        </div>
    </div>

