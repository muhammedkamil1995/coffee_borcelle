<!-- Inside the sidebar -->
<div class="box box-solid">
    <div class="box-header with-border">
        <h4 class="box-title"><i class="fa fa-dashboard"></i> <b>Dashboard</b></h4>
    </div>
    <div class="box-body">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <?php
            $menuItems = [
                ['icon' => 'fa fa-dashboard', 'text' => 'Home', 'link' => 'dashboard.php'],
                [
                    'icon' => 'fa fa-coffee',
                    'text' => 'Chocolate Coffee',
                    'submenu' => [
                        ['text' => 'House Blend', 'link' => '#'],
                        ['text' => 'Organic French Roast', 'link' => '#'],
                        ['text' => 'Organic Decaf', 'link' => '#'],
                        ['text' => 'Machiatto (Small)', 'link' => '#'],
                        ['text' => 'Latte', 'link' => '#'],
                        ['text' => 'Mocha', 'link' => '#'],
                        ['text' => 'Americano', 'link' => '#'],
                    ],
                ],
                ['icon' => 'fa fa-birthday-cake', 'text' => 'Bakery', 'link' => '#'],
                ['icon' => 'fa fa-tea', 'text' => 'Tea', 'link' => '#'],

                // Add more menu items as needed

                ['header' => 'USER SETTINGS'],
                ['icon' => 'fa fa-user', 'text' => 'Profile', 'link' => '#'],
                ['icon' => 'fa fa-sign-out', 'text' => 'Logout', 'link' => '#'],
            ];

            foreach ($menuItems as $item) {
                if (isset($item['header'])) {
                    echo "<li class='header'>{$item['header']}</li>";
                } else {
                    echo "<li class='" . (isset($item['submenu']) ? 'treeview' : '') . "'>";
                    echo "<a href='{$item['link']}'>";
                    echo "<i class='{$item['icon']}'></i> <span>{$item['text']}</span>";

                    if (isset($item['submenu'])) {
                        echo "<span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i></span>";
                    }

                    echo "</a>";

                    if (isset($item['submenu'])) {
                        echo "<ul class='treeview-menu'>";
                        foreach ($item['submenu'] as $subitem) {
                            echo "<li><a href='{$subitem['link']}'>{$subitem['text']}</a></li>";
                        }
                        echo "</ul>";
                    }

                    echo "</li>";
                }
            }
            ?>

        </ul>
    </div>
</div>