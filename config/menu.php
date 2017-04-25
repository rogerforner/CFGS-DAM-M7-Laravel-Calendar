<?php

use Spatie\Menu\Laravel\Menu;

//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});

Menu::macro('sidebar', function () {
    return Menu::adminlteMenu()
        ->add(Html::raw('HEADER')->addParentClass('header'))
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Home</span>')

        ->add(Menu::adminlteSeparator('ACTIVITIES'))
        #adminlte_menu
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-calendar"></i><span>Calendar</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->add(Link::toUrl('calendarlte', '<i class="fa fa-link"></i><span>CalendarLTE</span>'))->addClass('treeview-menu')
            ->add(Link::toUrl('calendar', '<i class="fa fa-link"></i><span>Calendar</span>'))
        )

        ->add(Menu::adminlteSeparator('EXTERNAL LINKS'))
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-wikipedia-w"></i><span>Acacha</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->url('acacha.org', 'Acacha Wiki')->addClass('treeview-menu')
            ->url('acacha.org/mediawiki/Usuari:Rogerforne', 'Roger Forner Fabre')
            ->url('http://acacha.org/mediawiki/2DAM_2016-17#.WO4xQt-YFqM', '2DAM 2016-17')
        )

        ->setActiveFromRequest();
});