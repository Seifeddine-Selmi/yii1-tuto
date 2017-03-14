
<ul>
    <li><?php echo CHtml::link('Create New Post',array('post/create')); ?></li>
    <li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
    <li><?php echo CHtml::link('Approve Comments',array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
    <li><?php echo CHtml::link('Manage Users',array('user/admin')); ?></li>
    <li><?php echo CHtml::link('Manage Gii',array('/gii'), array('target'=>'_blank')); ?></li>
    <li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>