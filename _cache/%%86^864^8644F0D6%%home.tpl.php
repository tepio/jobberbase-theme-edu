<?php /* Smarty version 2.6.26, created on 2011-04-14 14:58:12
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'home.tpl', 21, false),)), $this); ?>
<div id="left-content">
	
	
		<div class="domtab">
			<ul id="nav" class="domtabs clearfix">
				<li class="selected"><a href="#spotlight_jobs" title="" id="alljobs"><span></span><?php echo $this->_tpl_vars['translations']['homepage']['spotlight_jobs']; ?>
</a></li>
				<li class="selected"><a href="#latest_jobs" title="" id="alljobs"><span></span><?php echo $this->_tpl_vars['translations']['homepage']['recent_jobs']; ?>
</a></li>
				<?php if ($this->_tpl_vars['most_applied_to_jobs']): ?>
					<li class="selected"><a href="#popular_jobs" title="" id="alljobs"><span></span><?php echo $this->_tpl_vars['translations']['homepage']['popular_jobs']; ?>
</a></li>
				<?php endif; ?>
			</ul>
			<?php if ($this->_tpl_vars['spotlight_jobs']): ?>
				<div id="spotlight_jobs"  class="latest-jobs">
					<ul class="joblisting">
						<?php $_from = $this->_tpl_vars['spotlight_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
							<li>
								<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
">
									<span class="jobtype spotlight-image">
										<!--<img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/icon-<?php echo $this->_tpl_vars['job']['type_var_name']; ?>
.png" alt="<?php echo $this->_tpl_vars['job']['type_name']; ?>
" />-->
									</span>
									<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['job']['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b") : smarty_modifier_date_format($_tmp, "%d %b")); ?>
</span>
									<span class="jobtitle"><?php echo $this->_tpl_vars['job']['title']; ?>
</span><br />
									<span class="company_name">
										<?php echo $this->_tpl_vars['job']['company']; ?>
, 
										<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?><?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?><?php echo $this->_tpl_vars['translations']['homepage']['in']; ?>
<?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?>
									</span>
								</a>
							</li>
						<?php endforeach; endif; unset($_from); ?>	
					</ul>
				</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['latest_jobs']): ?>
				<div id="latest_jobs"  class="latest-jobs">
					<ul class="joblisting">
						<?php $_from = $this->_tpl_vars['latest_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
				</div>
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['most_applied_to_jobs']): ?>
				<div id="popular_jobs"  class="latest-jobs">
					<ul class="joblisting">
						<?php $_from = $this->_tpl_vars['most_applied_to_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
									<span class="date"><?php echo $this->_tpl_vars['job']['apps']; ?>
 <?php echo $this->_tpl_vars['translations']['homepage']['applicants']; ?>
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
				</div>
			<?php endif; ?>
			
		</div>
	
	

	

	<?php if (! $this->_tpl_vars['latest_jobs'] && ! $this->_tpl_vars['most_applied_to_jobs']): ?>
		<br />
		<p>
			<?php echo $this->_tpl_vars['translations']['homepage']['no_jobs']; ?>
.<br />
			<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" title="<?php echo $this->_tpl_vars['translations']['footer']['new_job_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['new_job']; ?>
</a>?
		</p>
	<?php endif; ?>
	<div id="job-listings"></div>
</div><!--#left-content-->
<div id="sidebar">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div><!-- #sidebar -->