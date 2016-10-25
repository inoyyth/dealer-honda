<div class="inner">
    <div class="left_nav">
        <div class="search_bar"> <i class="fa fa-search"></i>
            <input name="" type="text" class="search" placeholder="Search Dashboard..." />
        </div>
        <div class="left_nav_slidebar">
            <?php echo $this->multi_menu->render(array(
                'nav_tag_open'        => '<ul>',            
                'parentl1_tag_open'   => '<li>',
                'parentl1_anchor'     => '<a href="javascript:void(0);">%s <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span></a>',
                'parent_tag_open'     => '<li>',
                'parent_anchor'       => '<a href="%s">%s</a>',
                'children_tag_open'   => '<ul>'
            )); ?>
        </div>
    </div>
</div>