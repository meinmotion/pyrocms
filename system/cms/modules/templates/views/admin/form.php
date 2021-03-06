<?php if($this->method == 'edit' and ! empty($email_template)): ?>
	<section class="title">
    	<h4><?php echo sprintf(lang('templates.edit_title'), $email_template->name); ?></h4>
	</section>
<?php else: ?>
	<section class="title">
    	<h4><?php echo lang('templates.create_title'); ?></h4>
	</section>
<?php endif; ?>

<section class="item">
<?php echo form_open(current_url(), 'class="crud"'); ?>

<ul>
    <?php if ( ! $email_template->is_default): ?>
    <li class="<?php echo alternator('even', ''); ?>">
        <label for="name"><?php echo lang('name_label'); ?></label><br>
        <?php echo form_input('name', $email_template->name); ?>
        <span class="required-icon tooltip">*</span>
    </li>

	<hr>
	
    <li  class="<?php echo alternator('even', ''); ?>">
        <label for="slug"><?php echo lang('templates.slug_label'); ?></label><br>
        <?php echo form_input('slug', $email_template->slug); ?>
        <span class="required-icon tooltip">*</span>
    </li>

	<hr>
	
    <li class="<?php echo alternator('even', ''); ?>">
        <label for="lang"><?php echo lang('templates.language_label'); ?></label><br>
        <?php echo form_dropdown('lang', $lang_options, array($email_template->lang)); ?>
    </li>
	
	<hr>
	
    <li class="<?php echo alternator('even', ''); ?>">
        <label for="description"><?php echo lang('templates.description_label'); ?></label><br>
        <?php echo form_input('description', $email_template->description); ?>
        <span class="required-icon tooltip">*</span>
    </li>

	<hr>
	
    <?php endif; ?>
    <li class="<?php echo alternator('even', ''); ?>">
        <label for="subject"><?php echo lang('templates.subject_label'); ?></label><br>
        <?php echo form_input('subject', $email_template->subject); ?>
    </li>

	<hr>
	
    <li class="<?php echo alternator('even', ''); ?>">
        <label for="body"><?php echo lang('templates.body_label'); ?></label><br>
        <?php echo form_textarea('body', $email_template->body, 'class="wysiwyg-advanced"'); ?>
    </li>
</ul>

<hr>

<div class="buttons alignleft">
	<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
</div>

<?php echo form_close(); ?>
</section>