<?php /* Smarty version 2.6.26, created on 2011-04-14 14:58:24
         compiled from jobs-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'jobs-list.tpl', 8, false),)), $this); ?>
<ul class="joblisting">
<?php $_from = $this->_tpl_vars['jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
	<li>
		<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
">
			<span class="jobtype">
				<img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/icon-<?php echo $this->_tpl_vars['job']['type_var_name']; ?>
.png" alt="<?php echo $this->_tpl_vars['job']['type_name']; ?>
" />
			</span>
			<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b") : smarty_modifier_date_format($_tmp, "%d %b")); ?>
</span>
			<span class="jobtitle"><?php echo $this->_tpl_vars['job']['title']; ?>
</span><br />
			<span class="company_name">
				<?php echo $this->_tpl_vars['job']['company']; ?>
, 
				<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?><?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?><?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?>
			</span>	
		</a>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<br/>
<?php echo $this->_tpl_vars['pages']; ?>