<?php /* Smarty version 2.6.26, created on 2011-04-14 14:58:12
         compiled from header.tpl */ ?>
<?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'page-unavailable' || $this->_tpl_vars['CURRENT_PAGE'] == 'job-unavailable'): ?>
	<?php header("HTTP/1.0 404 Not Found"); ?>
<?php endif; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title><?php if ($this->_tpl_vars['seo_title']): ?><?php echo $this->_tpl_vars['seo_title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['html_title']; ?>
<?php endif; ?></title>
    <meta name="description" content="<?php if ($this->_tpl_vars['seo_desc']): ?><?php echo $this->_tpl_vars['seo_desc']; ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_description']; ?>
<?php endif; ?>" />
    <meta name="keywords" content="<?php if ($this->_tpl_vars['seo_keys']): ?><?php echo $this->_tpl_vars['seo_keys']; ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_keywords']; ?>
<?php endif; ?>" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
favicon.ico" type="image/x-icon" />
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] == '' || $this->_tpl_vars['CURRENT_PAGE'] != 'jobs'): ?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/all/" />
	<?php else: ?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/<?php echo $this->_tpl_vars['current_category']; ?>
/" />
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/css/ui.tabs.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/css/print.css" media="print" type="text/css" />
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.js" type="text/javascript"></script>
	
	<!--[if !IE]><script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.history.js" type="text/javascript"></script><![endif]-->
 	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.form.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/cmxforms.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.metadata.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/functions.js" type="text/javascript"></script>

	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/js/jquery.tabs.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		Jobber.I18n = <?php echo $this->_tpl_vars['translationsJson']; ?>
;
	</script>
	
</head>

<body>
	<div id="container">
		<?php if ($_SESSION['status'] != ''): ?>
			<div id="status">
				<?php echo $_SESSION['status']; ?>

			</div><!-- #status -->
		<?php endif; ?>
		<div id="header" class="clearfix">
			<ul id="navmain">
            	<li class="first">Categories
					<ul>
						<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
							<li id="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
" <?php if ($this->_tpl_vars['current_category'] == $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/" title="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
<span>(<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['categ_count']; ?>
)</span></a></li>
						<?php endfor; endif; ?>
					</ul>
                </li>
                <li>Getting Started
					<ul>
						<?php if ($this->_tpl_vars['navigation']['primary'] != ''): ?>
							<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['primary']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
								<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
									<li><a href="<?php if ($this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
									<?php $this->assign('i', 1); ?>
								<?php endif; ?>
							<?php endfor; endif; ?>
						<?php endif; ?>
						<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/all/" title="<?php echo $this->_tpl_vars['translations']['header']['rss_title']; ?>
">RSS Feeds</a></li>
					</ul>
			
                </li>
            </ul>
			<h1 id="logo"><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
" title="<?php echo $this->_tpl_vars['translations']['header']['title']; ?>
"><?php echo $this->_tpl_vars['translations']['header']['name']; ?>
</a></h1>
		
		
		
			<?php /*<ul id="top">
				{if $navigation.primary != ''}
					{section name=tmp loop=$navigation.primary}
						{if $smarty.const.ENABLE_NEW_JOBS || (!$smarty.const.ENABLE_NEW_JOBS && $navigation.primary[tmp].url != 'post')}
							{if $i==1}<li>&bull;</li>{/if}
							<li><a href="{if $navigation.primary[tmp].outside != 1}{$BASE_URL}{/if}{$navigation.primary[tmp].url}/" title="{$navigation.primary[tmp].title}" >{$navigation.primary[tmp].name}</a></li>
							{assign var=i value=1}
						{/if}
					{/section}
				{/if}
			</ul>
			<div id="the_feed">
				<a href="{$BASE_URL}rss/all/" title="{$translations.header.rss_title}"><img src="{$BASE_URL}_templates/{$THEME}/img/bt-rss.png" alt="{$translations.header.rss_alt}" /></a>
			</div>*/ ?>
		</div><!-- #header -->
		
		<?php /*<div id="box">
			<div id="search">
				<form id="search_form" method="post" action="{$BASE_URL}search/">
					<fieldset>
						<div>
							<input type="text" name="keywords" id="keywords" maxlength="30" value="{if $keywords}{$keywords}{else}{$translations.search.default}{/if}" />
							<span id="indicator" style="display: none;"><img src="{$BASE_URL}_templates/{$THEME}/img/ajax-loader.gif" alt="" /></span>
						</div>
						<div><label class="suggestionTop">{$translations.search.example}</label></div>
					</fieldset>
				</form>
			</div><!-- #search -->
			{if $smarty.const.ENABLE_NEW_JOBS}
			<div class="addJob">
				<a href="{$BASE_URL}post/" title="{$translations.search.submit_title}" class="add">{$translations.search.submit}</a>
			</div><!-- .addJob -->
			{/if}
		</div><!-- #box -->
		
    <div id="categs-nav">
    	<ul>
			{section name=tmp loop=$categories}
				<li id="{$categories[tmp].var_name}" {if $current_category == $categories[tmp].var_name}class="selected"{/if}><a href="{$BASE_URL}{$URL_JOBS}/{$categories[tmp].var_name}/" title="{$categories[tmp].name}"><span>{$categories[tmp].name}</span><span class="cnr">&nbsp;</span></a></li>
			{/section}
    	</ul>
	</div><!-- #categs-nav -->
	<div class="clear"></div>*/ ?>
	<div id="mainbody" class="clearfix">	
	